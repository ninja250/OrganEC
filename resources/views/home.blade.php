@extends('temp')

@section('title', 'TOP')

@section('sidebar')
    @@parent

@endsection

@section('content')
  @foreach($organs as $key => $organ)
  <a href="/detail?id={{$key}}" >
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
        <div class="col-xs-6">
          <button type="button"  name="cart">詳細を見る</button>
        </div>

    </div>
  </a>
  @endforeach
@endsection
