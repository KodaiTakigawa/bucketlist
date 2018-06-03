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
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">BucketList</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="menu">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Dream">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>

    <!-- dream -->
    <div class="d-flex justify-content-center">
      <form class="form-inline">
        <input class="form-control form-control-lg mr-sm-2" type="search" placeholder="Search" aria-label="Search" size="60%">
        <button class="btn btn-outline-success button-control-lg my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>

    <!-- result of search -->
    <div class="container">
      <div class="row">
        <div class="card mx-auto">
          <div class="card-body">
            <img src="img/profile1.jpg" alt="Avatar" class="avatar-card float-left">
            <p >I want to be eaten.</p>
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
