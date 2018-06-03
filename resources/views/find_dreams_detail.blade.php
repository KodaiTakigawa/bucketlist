<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>mydream</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mydream.css') }}">
    <link rel="stylesheet" href="{{ asset('css/find_dreams.css') }}">
  </head>
  <body>
    @include('layouts.navbar')

    <!-- dream -->
    <div class="container">
      <div class="row dream-title  pb-3">
        <div class="col-7">
          <h1>I want to be eaten</h1>
        </div>
        <div class="col-5">
          <img src="{{ asset('img/profile1.jpg') }}" alt="Avatar" class="avatar mr-3">
        </div>
      </div>
      <div class="dream-detail">
        <h2>Detail</h2>
        <p>
          たべられたい
        </p>
      </div>
    </div>


  </body>
</html>
