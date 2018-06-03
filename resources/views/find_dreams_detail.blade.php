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
      <div class="row dream-title">
        <div class="col-10">
          <h1>I want to be eaten</h1>
          <div class="d-flex justify-content-end">
            <div class="good-button">
              <p class="float-right pt-3 pb-0">777</p>
              <img src="{{ asset('img/fire.png') }}" style="width">
            </div>
          </div>
        </div>
        <div class="col-2">
          @include('layouts.avatar')
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
