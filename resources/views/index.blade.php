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
    <div class="d-flex flex-column">
      <form class="form-inline form-search mx-auto" action="/find-dreams" method="get">
        {{ csrf_field() }}
        <div>
          <input class="form-control input-search" type="search" name="search" placeholder="Dream" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </div>
      </form>
      <div class="mx-auto">
        <a class="btn btn-info social-login-btn" href="/login/twitter" role="button">Login with Twitter</a>
      </div>
      <div class="mx-auto">
        <h1>Dreamersとは・・・</h1>
        <p>夢や目標を持った人達が集まる場所です。<br></p>
        <p>夢や目標を登録して、仲間を見つけよう！</p>
      </div>
    </div>
  </body>
  <script src="{{ asset('js/app.js') }}"></script>
</html>
