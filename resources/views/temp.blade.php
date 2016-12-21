<!DOCTYPE html>

<html>
    <head>
      <meta charset="utf-8">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" media="screen" >
      <link rel="stylesheet" href="/css/master.css" media="screen" title="no title">
        <title>臓器販売オンラインショップ - @yield('title')</title>
    </head>
    <body>
        @section('sidebar')
            <a href="/home">TOPページ</a>
        @show

        <div class="container">
          <header>
            <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/home">臓器販売オンラインショップ</a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="/home">Home</a></li>
        <li><a href="/cart">カートページ</a></li>
        <li class="text-right">
          <form class="search-form" action="/home" method="post">
            {{csrf_field()}}
            <input type="text" placeholder="アイテム検索" class="f-query" name="name" id="q">
            <button type="submit" name="button">検索</button>
          </form>
        </li>
        <li>
          
        <!-- <li><a href="">Contact</a></li> -->
        <!-- <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li class="dropdown-header">Nav header</li>
            <li><a href="#">Separated link</a></li>
            <li><a href="#">One more separated link</a></li>
          </ul> -->
        </li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>
          </header>
            @yield('content')
            <footer class="footer">
  <div class="container">
    <p class="text-muted">※これらの商品は産地はもちろん品質にもこだわり抜いた一品になっております。</p>
  </div>
</footer>
        </div>
    </body>
</html>
