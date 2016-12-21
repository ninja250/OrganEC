@extends('temp')

@section('title', 'カートページ')

@section('content')
@foreach($items as $key => $organ)
<div class="col-xs-12 center-block well main">
  <p class="">{{ $organ->name }}</p>
  <div class="">
    <img class="img col-xs-6" src="{{ $organ->img }}" alt="" />
  </div>
  <div class="col-xs-6 text">
    {{ $organ->contents }}
  </div>
    <div class="col-xs-6">
      ${{ $organ->price }}
    </div>
    <a href="/delete?key={{ $key }}">削除</a>
</div>
@endforeach
<form class="col-xs-12" action="/buy" method="post">
  {{csrf_field()}}
<button type="submit"  class="btn" >購入する</button></form>
@endsection
