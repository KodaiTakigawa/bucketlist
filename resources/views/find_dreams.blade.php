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
        <input class="form-control form-control-lg mr-sm-2" type="search" name="dreams" placeholder="Dream" aria-label="Search" size="60%">
        <button class="btn btn-outline-success button-control-lg my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>

    <!-- result of search -->
    <div class="container">
      <div class="row">
        <div class="card mx-auto">
          <div class="card-body">
            <a href="/find-dreams/profile"><img src="img/profile1.jpg" alt="Avatar" class="avatar-card float-left"></a>
            <a href="/find-dreams/detail" class="text-dark float-left"><p class="mb-0 p-2">I want to be eaten.</p></a>
            <div class="float-right">
              <div class="good-button">
                <p class="float-right">777</p>
                <img src="{{ asset('img/fire.png') }}" style="width">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="card mx-auto">
          <div class="card-body">
            <img src="img/profile2.jpg" alt="Avatar" class="avatar-card float-left">
            <p >I want to be beautiful.</p>
            <div class="float-right">
              <div class="good-button">
                <p class="float-right">777</p>
                <img src="{{ asset('img/fire.png') }}" style="width">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="card mx-auto">
          <div class="card-body">
            <img src="img/profile3.jpg" alt="Avatar" class="avatar-card float-left">
            <p >I want to go Moscow.</p>
            <div class="float-right">
              <div class="good-button">
                <p class="float-right">777</p>
                <img src="{{ asset('img/fire.png') }}" style="width">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="card mx-auto">
          <div class="card-body">
            <img src="img/profile.jpg" alt="Avatar" class="avatar-card float-left">
            <p >I want to visit all over the world.</p>
            <div class="float-right">
              <div class="good-button">
                <p class="float-right">777</p>
                <img src="{{ asset('img/fire.png') }}" style="width">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="card mx-auto">
          <div class="card-body">
            <img src="img/profile.jpg" alt="Avatar" class="avatar-card float-left">
            <p >I want to visit all over the world.</p>
            <div class="float-right">
              <div class="good-button">
                <p class="float-right">777</p>
                <img src="{{ asset('img/fire.png') }}" style="width">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="card mx-auto">
          <div class="card-body">
            <img src="img/profile.jpg" alt="Avatar" class="avatar-card float-left">
            <p >I want to visit all over the world.</p>
            <div class="float-right">
              <div class="good-button">
                <p class="float-right">777</p>
                <img src="{{ asset('img/fire.png') }}" style="width">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="card mx-auto">
          <div class="card-body">
            <img src="img/profile.jpg" alt="Avatar" class="avatar-card float-left">
            <p >I want to visit all over the world.</p>
            <div class="float-right">
              <div class="good-button">
                <p class="float-right">777</p>
                <img src="{{ asset('img/fire.png') }}" style="width">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>



  </body>
</html>
