<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>mydream</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
  </head>
  <body>
    @include('layouts.navbar')

    <!-- dream -->
    <div class="container">
      <div class="pb-3" style="border-bottom: solid #707070;">
        <div class="d-flex justify-content-between">
          <div class="p-2">
            <h1>{{$dream->title}}</h1>
          </div>
          <div class="p-2">
            <a class="btn btn-outline-secondary" href="/mypage/mydream/edit?dream_id={{$dream->id}}">Edit</a>
          </div>
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
  <script src="js/app.js"></script>
</html>
