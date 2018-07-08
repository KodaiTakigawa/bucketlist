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

    <div class="container">
      <form action="/mypage/mydream?dream_id={{$mydream->id}}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="addYourDream"><h1>Edit your dream</h1></label>
          <input class="form-control form-control-lg" id="addYourDream" type="text" placeholder="Title" name="title" value="{{$mydream->title}}">
        </div>
        <div class="form-group">
          <label for="dreamDetail"><h2>Detail</h2></label>
          <textarea class="form-control" id="dreamDetail" rows="10" name="detail">{{$mydream->detail}}</textarea>
        </div>
        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
        <div class="d-flex justify-content-between">
          <button type="submit" class="btn btn btn-outline-danger float-right mb-3 mr-3" name='action' value='delete'>DELETE</button>
          <button type="submit" class="btn btn-outline-secondary float-right mb-3" name='action' value='save'>Save</button>
        </div>
      </form>
    </div>
  </body>
</html>
