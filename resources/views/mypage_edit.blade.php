<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>BucketList-MyPage</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
  </head>
  <body>
<!-- navbar -->
    @include('layouts.navbar')

<!-- profile -->
    <div class="container pb-0">
      <div class="row">
        <div class="col-5">
          <img src="{{Auth::user()->icon_url}}" alt="Avatar" class="avatar">
        </div>
        <div class="col-7">
          <form method="post" action="/mypage/edit">
            {{ csrf_field() }}
            <div class="d-inline-flex pb-0">
              <div class="mr-auto p-2">
                <div class="form-group">
                  <label>Name</label>
                    <input class="form-control" name="name" value="{{Auth::user()->name}}">
                </div>
              </div>
              <div class="p-2">
                <button class="btn btn-outline-secondary" type="submit">Save</button>
              </div>
            </div>
            <div class="form-group">
              <label>Bio</label>
              @if(isset(Auth::user()->description))
              <textarea class="form-control" name="description" rows="3" cols="80">{{Auth::user()->description}}</textarea>
              @else
              <textarea class="form-control" name="description" rows="3" cols="80"></textarea>
              @endif
            </div>
          </form>
          <a href="/mypage/achivedlist"><p>叶えた夢の数：{{$achievementNum}}</p></a>
        </div>
      </div>
    </div>
    <div class="container">
      <h2 class="list-name">LIST</h2>
      <a href="/mypage/add-mydream" value="{{Auth::user()->id}}"><div id="add" class="float-right">
        <p>+</p>
      </div></a>
    </div>
  </body>
  <script src="{{ asset('js/app.js') }}"></script>
</html>
