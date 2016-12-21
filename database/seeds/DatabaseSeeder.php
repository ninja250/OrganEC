<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('Organ')->truncate();
    $now = Carbon::now();

    $brain = [
        "name" => "BRAIN",
        "kana" => "",
        "img" => "images/brain.jpg",
        "description" => "",
        "size" => "",
        "contents" => "頭蓋骨(ずがいこつ)の中にある灰白色の物質。意識・神経活動の中枢。脳髄。",
        "price" => 10000,
        "created_at" => $now,
        "updated_at" => $now
    ];
    $lung = [
        "name" => "LUNG",
        "kana" => "",
        "img" => "images/lung.jpg",
        "description" => "",
        "size" => "",
        "contents" => "脊椎動物の器官の1つである。肺臓とも呼ばれる。 空気中から得た酸素を体内に取り込んだり、老廃物である二酸化炭素を空気中に排出する役割 （呼吸）を持つ",
        "price" => 7000,
        "created_at" => $now,
        "updated_at" => $now
    ];
    $heart = [
        "name" => "HEART",
        "kana" => "",
        "img" => "images/heart.jpg",
        "description" => "",
        "size" => "",
        "contents" => "心臓は特に脊椎動物のもつ筋肉質の臓器であり、 律動的な収縮によって血液の循環を行うポンプの役目を担っている",
        "price" => 20000,
        "created_at" => $now,
        "updated_at" => $now
    ];
    $stomach = [
        "name" => "STOMACH",
        "kana" => "",
        "img" => "images/stomach.jpg",
        "description" => "",
        "size" => "",
        "contents" => "胃は消化管を成す管状の器官であり、 入口と出口が狭く、 途中がふくらんで袋状の構造になっている。全体の形状は死体と生体で大きく異なり、 生体では多くの場合、鈎形である",
        "price" => 6000,
        "created_at" => $now,
        "updated_at" => $now
    ];
    $liver = [
        "name" => "LIVER",
        "kana" => "",
        "img" => "images/liver.jpg",
        "description" => "",
        "size" => "",
        "contents" => "肝臓は、腹部の右上に位置して、ほぼ右肋骨の下に収まっており 、頭側（上方）には横隔膜が存在する。ある種の動物では体内で最大の臓器である。 非常に機能が多いことで知られ、代謝、排出、胎児の造血、解毒、体液の恒常性の維持などの役割を担っている。 また、十二指腸に胆汁を分泌して消化にも一定の役割を持っている",
        "price" => 5100,
        "created_at" => $now,
        "updated_at" => $now
    ];
    $kidney = [
        "name" => "KIDNEY",
        "kana" => "",
        "img" => "images/kidney.jpg",
        "description" => "",
        "size" => "",
        "contents" => "腎臓は発生的には中胚葉の腎節に起源を持つ。 脊椎の側面の位置に体を前後に貫く構造であり、大きく前方から前腎・中腎・後腎に分けられる。",
        "price" => 5300,
        "created_at" => $now,
        "updated_at" => $now
    ];
    $big_intestine = [
        "name" => "BIG INTESTINE",
        "kana" => "",
        "img" => "images/big_intestine.jpg",
        "description" => "",
        "size" => "",
        "contents" => "ヒトの大腸は直径約5-8cm[1]全長約1.6mあり、 小腸よりも太い。 盲腸・結腸・直腸の3つに大別できる。",
        "price" => 5600,
        "created_at" => $now,
        "updated_at" => $now
    ];
    $small_intestine = [
        "name" => "SMALL INTESTINE",
        "kana" => "",
        "img" => "images/small_intestine.jpg",
        "description" => "",
        "size" => "",
        "contents" => "ヒトの小腸は胃に続き大腸へと繋がる消化管である。長さ約6mだが生体内では筋肉の収縮によって3m前後まで縮んでいる。太さは3~4cm。 腹腔の中で曲がりくねっている。",
        "price" => 5000,
        "created_at" => $now,
        "updated_at" => $now
    ];
    DB::table('Organ')->insert([$brain]);
    DB::table('Organ')->insert([$lung]);
    DB::table('Organ')->insert([$heart]);
    DB::table('Organ')->insert([$stomach]);
    DB::table('Organ')->insert([$liver]);
    DB::table('Organ')->insert([$kidney]);
    DB::table('Organ')->insert([$big_intestine]);
    DB::table('Organ')->insert([$small_intestine]);

    }
}
