<!DOCTYPE html>
<html>
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-122528519-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-122528519-1');
    </script>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Dreamers</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  </head>
  <body>
    @include('layouts.navbar')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="d-flex flex-column">
      <div class="mx-auto m-5">
        <form class="form-inline form-search" action="/find-dreams" method="get">
          {{ csrf_field() }}
          <div>
            <input class="form-control input-search" type="search" name="search" placeholder="Dream" aria-label="Search">
          </div>
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
      <div class="mx-auto mb-5">
        <a class="btn btn-info social-login-btn" href="/login/twitter" role="button">Login with Twitter</a>
      </div>
      <div class="mx-auto mb-5">
        <h1>Dreamersとは・・・</h1>
        <p>夢や目標に向かっている人達(Dreamer)が<br></p>
        <p>繋がれる場所です。<br></p>
        <p>みんなが持っている未来から繋がれます。</p>
        <p>夢や目標を登録して、仲間を見つけよう！</p>
      </div>
    </div>
  </body>
  <script src="{{ asset('js/app.js') }}"></script>
</html>
