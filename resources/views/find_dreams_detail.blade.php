<!DOCTYPE html>
<html>
  <head>
    <title>mydream</title>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
    <link rel="stylesheet" href="{{ asset('css/find_dreams.css') }}">
  </head>
  <body>
    @include('layouts.navbar')

    <!-- dream -->
    <div class="container pt-0">
      <div class="pb-3" style="border-bottom: solid #707070;">
        <div class="d-flex justify-content-between flex-column-reverse flex-sm-row">
          @if($dream->achievement == 't')
          <div>
            <p>#ACHIEVED</p>
          </div>
          @endif
          <div class="d-inline-flex">
            <div class=" align-self-center p-2">
              <h1>{{$dream->title}}</h1>
            </div>
            <div class="align-self-center">
              <div class="d-flex justify-content-end align-items-center pb-0">
                <div class="good-button mb-0" id="good_button_{{$dream->id}}" data-value="{{$dream->id}}">
                  <img class="img-fluid" src="{{ asset('img/fire.png') }}" style="width">
                </div>
                <div class="pt-3">
                  <p id="dream_id_{{$dream->id}}">{{$dream->good}}</p>
                </div>
              </div>
            </div>
          </div>
          <div class="p-sm-2">
            <a href="/find-dreams/profile?id={{$dream->user->id}}"><img src="{{$dream->user->icon_url}}" alt="Avatar" class="avatar mr-3"></a>
          </div>
        </div>
      </div>
      <div class="dream-detail">
        <h2>Detail</h2>
        <p>
          {{$dream->detail}}
        </p>
      </div>
    </div>
  </body>
  <script src="{{ asset('js/app.js') }}"></script>
  <script src="{{ asset('js/count_good.js') }}"></script>
</html>
