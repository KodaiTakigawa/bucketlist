<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Find Dreams</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
    <link rel="stylesheet" href="{{ asset('css/find_dreams.css') }}">
  </head>
  <body>
    @include('layouts.navbar')

    <!-- dream -->
    <div class="d-flex justify-content-center">
      <form class="form-inline" action="/find-dreams" method="get">
        {{ csrf_field() }}
        <input class="form-control form-control-lg mr-sm-2" type="search" name="search" placeholder="Dream" aria-label="Search" size="60%">
        <button class="btn btn-outline-success button-control-lg my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>

    <!-- result of search -->
    <div class="container">
      @foreach($dreams as $dream)
      <div class="row">
        <div class="card mx-auto">
          <div class="card-body">
            @if(isset($dream->user->id) && isset($dream->user->icon_url))
            <a href="/find-dreams/profile?id={{$dream->user->id}}"><img src="{{$dream->user->icon_url}}" alt="Avatar" class="avatar-card float-left"></a>
            @endif
            <a href="/find-dreams/detail?id={{$dream->id}}" class="text-dark float-left"><p class="mb-0 p-2">{{$dream->title}}</p></a>
            <div class="float-right">
              <div class="good-button">
                <p class="float-right">{{$dream->good}}</p>
                <img src="{{ asset('img/fire.png') }}" style="width">
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </body>
</html>
