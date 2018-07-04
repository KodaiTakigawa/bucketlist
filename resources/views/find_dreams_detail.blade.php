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
          <h1>{{$dream->title}}</h1>
          <div class="d-flex justify-content-end">
            <div class="good-button">
              <p class="float-right pt-3 pb-0">{{$dream->good}}</p>
              <img src="{{ asset('img/fire.png') }}" style="width">
            </div>
          </div>
        </div>
        @if(isset($dream->user->id) && isset($dream->user->icon_url))
        <div class="col-2">
          <a href="/find-dreams/profile?id={{$dream->user->id}}"><img src="{{$dream->user->icon_url}}" alt="Avatar" class="avatar mr-3"></a>
        </div>
        @endif
      </div>
      <div class="dream-detail">
        <h2>Detail</h2>
        <p>
          {{$dream->detail}}
        </p>
      </div>
    </div>


  </body>
</html>
