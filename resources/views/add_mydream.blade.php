<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>mydream</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
    <link rel="stylesheet" href="{{ asset('css/addmypage.css') }}">
  </head>
  <body>
    @include('layouts.navbar')

    <!-- dream -->
    <div class="container">
      <form action="/mypage/add-mydream" method="post">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="addYourDream"><h1>Add your dream</h1></label>
          <input class="form-control form-control-lg" id="addYourDream" type="text" placeholder="Title" name="title">
        </div>
        <div class="form-group">
          <label for="dreamDetail"><h2>Detail</h2></label>
          <textarea class="form-control" id="dreamDetail" rows="10" name="detail"></textarea>
        </div>
        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
        <button type="submit" class="btn btn-outline-secondary float-right mb-3">Add</button>
      </form>
    </div>

  </body>
</html>
