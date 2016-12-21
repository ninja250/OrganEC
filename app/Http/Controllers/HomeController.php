<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Organ;
use App\Order;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{


    public function detail(Request $request){
      $user = Auth::user();

      $id = $request->get("id");
      $id+=1;
      $organ=DB::table('Organ')->where('id',$id)->first();
      return view('/detail',compact('organ'));
    }
    public function cart(Request $request){
      if (Auth::check()) {
      $user = Auth::user();
      $id = $request->get("id");
      $item = DB::table('Organ')->where('id', $id)->first(); //idが一致するものをvegetableテーブルから検索、取得
      $items = session()->get("items",[]); //セッションデータを取得、nullの場合は空の配列
      $items[] = $item; // 取得したデータにオブジェクトを保存
      session()->put("items", $items);
    return redirect("/cart");
  }else{

    return redirect("/login");
  }
}
    public function cart2(Request $request){
      $user = Auth::user();
    $items = session()->get("items",[]); //セッションデータを取得、nullの場合は空の配列
    return view("cart",[ "items" => $items]);
  }
  public function buy(Request $request){
    if (Auth::check()) {
    $items = session()->get("items",[]);
    $sum = 0;
    $time = Carbon::now();
    $user = Auth::user();
  foreach ($items as $key => $value) {
    $sum += $value->price;
  Order::insert([
            'id'         => $value->id,
            'user_id'   => $user->id,
            'name'        => $value->name,
            'order_day' => $time
        ]);
      }
  session()->flush(); //sessionの全データを削除
    return view('/buy',compact('sum','user'));
  }else{
    return view('/home');
  }

  }
  public function delete(Request $request){
    $user = Auth::user();

    $key = $request->get("key"); //削除した商品のindexを取得
    session()->forget("items.$key"); //sessionから選んだ商品を削除。例えば$items[0]の削除は items.0 と指定できる。
    return redirect("/cart");
  }
  public function index(Request $request){

    $organs = Organ::NAME($request->input('name'))->get();
    $user = Auth::user();

      return view('/home',compact('organs'));
  }

}
