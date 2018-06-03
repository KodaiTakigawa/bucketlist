<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>mydream</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
    <link rel="stylesheet" href="{{ asset('css/addmypage.css') }}">
  </head>
  <body>
    @include('layouts.navbar')

    <!-- dream -->
    <div class="container">
      <div class="form-group">
        <label for="addYourDream"><h1>Add your dreams</h1></label>
        <input class="form-control form-control-lg" id="addYourDream" type="text" placeholder="Your Dream">
      </div>
      <div class="form-group">
        <label for="dreamDetail"><h2>Detail</h2></label>
        <textarea class="form-control" id="dreamDetail" rows="10"></textarea>
      </div>
      <div class="float-right mb-3">
        <a class="btn btn-outline-secondary" href="#">add</a>
      </div>
    </div>

  </body>
</html>
