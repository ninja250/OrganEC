@extends('temp')

@section('title', 'TOP')

@section('sidebar')
    @@parent

@endsection

@section('content')
<div class="col-xs-12 center-block">
<h1>購入完了しました。
ありがとうございました。
</h1>
</div>
<div class="col-xs-12 center-block">
  合計金額{{ $sum }}
</div>
@endsection
