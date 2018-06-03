<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>BucketList-MyPage</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
  </head>
  <body>
<!-- navbar -->
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

<!-- profile -->
    <div class="container">
      <div class="container">
        <h2 class="list-name">ACHIEVD LIST</h2>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="card mx-auto">
          <div class="card-body pb-0">
            <p >I want to visit all over the world.</p>
            <div class="float-right">
              <div class="good-button">
                <p class="float-right">777</p>
                <img src="{{ asset('img/fire.png') }}" style="width">
              </div>
            </div>
          </div>
          <p class="text-right mb-0" style="font-size: .5rem;">2018/06/03に達成しました。</p>
        </div>
      </div>
      <div class="row">
        <div class="card mx-auto">
          <div class="card-body pb-0">
            <p >I want to visit all over the world.</p>
            <div class="float-right">
              <div class="good-button">
                <p class="float-right">777</p>
                <img src="{{ asset('img/fire.png') }}" style="width">
              </div>
            </div>
          </div>
          <p class="text-right mb-0" style="font-size: .5rem;">2018/06/03に達成しました。</p>
        </div>
      </div>
      <div class="row">
        <div class="card mx-auto">
          <div class="card-body pb-0">
            <p >I want to visit all over the world.</p>
            <div class="float-right">
              <div class="good-button">
                <p class="float-right">777</p>
                <img src="{{ asset('img/fire.png') }}" style="width">
              </div>
            </div>
          </div>
          <p class="text-right mb-0" style="font-size: .5rem;">2018/06/03に達成しました。</p>
        </div>
      </div>
      <div class="row">
        <div class="card mx-auto">
          <div class="card-body pb-0">
            <p >I want to visit all over the world.</p>
            <div class="float-right">
              <div class="good-button">
                <p class="float-right">777</p>
                <img src="{{ asset('img/fire.png') }}" style="width">
              </div>
            </div>
          </div>
          <p class="text-right mb-0" style="font-size: .5rem;">2018/06/03に達成しました。</p>
        </div>
      </div>
      <div class="row">
        <div class="card mx-auto">
          <div class="card-body pb-0">
            <p >I want to visit all over the world.</p>
            <div class="float-right">
              <div class="good-button">
                <p class="float-right">777</p>
                <img src="{{ asset('img/fire.png') }}" style="width">
              </div>
            </div>
          </div>
          <p class="text-right mb-0" style="font-size: .5rem;">2018/06/03に達成しました。</p>
        </div>
      </div>
    </div>
  </body>
  <script src="js/app.js"></script>
</html>
