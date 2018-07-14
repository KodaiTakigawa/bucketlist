<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Dreamers</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
  </head>
  <body>
    @include('layouts.navbar')
    <div class="d-flex justify-content-center">
      <form class="form-inline" action="/find-dreams" method="get">
        {{ csrf_field() }}
        <div>
          <input class="form-control" type="search" name="search" placeholder="Dream" aria-label="Search">
        </div>
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
    <div class="container">
      <div class="mx-auto">
        <a class="btn btn-info social-login-btn" href="/login/twitter" role="button">Login with Twitter</a>
      </div>
    </div>
    <div class="container">
      <h1>Dreamersとは・・・</h1>
      <p>夢や目標を持った人達が集まる場所です。<br></p>
      <p>夢や目標を登録して、仲間を見つけよう！</p>
    </div>
  </body>
  <script src="js/app.js"></script>
</html>
