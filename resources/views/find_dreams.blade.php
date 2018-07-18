<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Find Dreams</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
    <link rel="stylesheet" href="{{ asset('css/find_dreams.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  </head>
  <body>
    @include('layouts.navbar')

    <!-- dream -->
    <div class="d-flex justify-content-center">
      <form class="form-inline" action="/find-dreams" method="get">
        {{ csrf_field() }}
        <div>
          <input class="form-control" type="search" name="search" placeholder="Dream" aria-label="Search">
        </div>
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>

    <!-- result of search -->
    <div class="container">
      @foreach($dreams as $dream)
      <div class="row">
        <div class="card mx-auto">
          <div class="card-body p-0">
            <div class="d-flex align-items-center pb-0">
              <div>
                @if(isset($dream->user->id) && isset($dream->user->icon_url))
                <a href="/find-dreams/profile?id={{$dream->user->id}}"><img src="{{$dream->user->icon_url}}" alt="Avatar" class="avatar-card float-left"></a>
                @endif
              </div>
              <div>
                <a href="/find-dreams/detail?id={{$dream->id}}" class="text-dark"><p class="mb-0 p-2">{{$dream->title}}</p></a>
              </div>
              <div class="d-flex ml-auto pb-0 pr-3">
                <div class="good-button mb-0" id="good_button_{{$dream->id}}" data-value="{{$dream->id}}">
                  <img src="{{ asset('img/fire.png') }}" style="width">
                </div>
                <div class="pt-3">
                  <p id="dream_id_{{$dream->id}}">{{$dream->good}}</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </body>
  <script src="{{ asset('js/app.js') }}"></script>
  <script src="{{ asset('js/count_good.js') }}"></script>;
</html>
