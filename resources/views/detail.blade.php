@extends('temp')

@section('title', '商品詳細')

@section('content')
<div class="col-xs-12 center-block well main">
  <p class="">{{ $organ->name}}</p>
  <div class="">
    <img class="img col-xs-12" src="{{ $organ->img }}" alt="" />
  </div>
  <div class="col-xs-12 text">
    {{ $organ->contents }}
  </div>
    <div class="col-xs-12">
      ${{ $organ->price }}
    </div>
    <form class="" action="/cart" method="post">
      {{csrf_field()}}
      <input type="hidden" name="id" value="{{$organ->id}}">
      <button type="btn button"  class="btn" name="cart">カートに追加</button>
    </form>

@endsection
