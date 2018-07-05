<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>mydream</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mydream.css') }}">
  </head>
  <body>
    @include('layouts.navbar')

    <!-- dream -->
    <div class="container">
      <div class="row dream-title pb-3">
        <div class="col-8">
          <h1>{{$dream->title}}</h1>
        </div>
      </div>
<!-- dream detail -->
      <div class="dream-detail">
        <h2>Detail</h2>
        <p>
          {{$dream->detail}}
        </p>
      </div>
    </div>


  </body>
</html>
