<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>BucketList-MyPage</title>
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
  </head>
  <body>
<!-- navbar -->
    @include('layouts.navbar')

<!-- profile -->
    <div class="container">
      <div class="row">
        <div class="col-sm-5 pull-right">
          <img src="img/profile.jpg" alt="Avatar" class="avatar">
        </div>
        <div class="col-sm-7">
          <h1>瀧川滉大</h1>
          <p>旅行が好きで、将来は旅人になりたいです。</p>
          <p>叶えた夢の数：77</p>
        </div>
      </div>
    </div>
    <div class="container">
      <h2 class="list-name">LIST</h2>
      <a href="/mypage/add-mydream"><div id="add" class="float-right">
        <p>+</p>
      </div></a>
    </div>

<!-- dreams -->
    <div class="container">
      <div class="row">
        <div class="card mx-auto">
          <div class="card-body">
            <a href="/mypage/mydream" class="text-dark float-left"><p>I want to visit all over the world.</p></a>
            <div class="float-right">
              <div class="good-button">
                <p class="float-right">777</p>
                <img src="img/fire.png" style="width">
              </div>
               <a href="/mypage/achivedlist" class="btn btn-success">Achievement</a>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="card mx-auto">
          <div class="card-body">
            <p >I want to visit all over the world.</p>
            <div class="float-right">
              <div class="good-button">
                <p class="float-right">777</p>
                <img src="img/fire.png" style="width">
              </div>
               <a href="#" class="btn btn-success">Achievement</a>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="card mx-auto">
          <div class="card-body">
            <p >I want to visit all over the world.</p>
            <div class="float-right">
              <div class="good-button">
                <p class="float-right">777</p>
                <img src="img/fire.png" style="width">
              </div>
               <a href="#" class="btn btn-success">Achievement</a>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="card mx-auto">
          <div class="card-body">
            <p >I want to visit all over the world.</p>
            <div class="float-right">
              <div class="good-button">
                <p class="float-right">777</p>
                <img src="img/fire.png" style="width">
              </div>
               <a href="#" class="btn btn-success">Achievement</a>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="card mx-auto">
          <div class="card-body">
            <p >I want to visit all over the world.</p>
            <div class="float-right">
              <div class="good-button">
                <p class="float-right">777</p>
                <img src="img/fire.png" style="width">
              </div>
               <a href="#" class="btn btn-success">Achievement</a>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="card mx-auto">
          <div class="card-body">
            <p >I want to visit all over the world.</p>
            <div class="float-right">
              <div class="good-button">
                <p class="float-right">777</p>
                <img src="img/fire.png" style="width">
              </div>
               <a href="#" class="btn btn-success">Achievement</a>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="card mx-auto">
          <div class="card-body">
            <p >I want to visit all over the world.</p>
            <div class="float-right">
              <div class="good-button">
                <p class="float-right">777</p>
                <img src="img/fire.png" style="width">
              </div>
               <a href="#" class="btn btn-success">Achievement</a>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="card mx-auto">
          <div class="card-body">
            <p >I want to visit all over the world.</p>
            <div class="float-right">
              <div class="good-button">
                <p class="float-right">777</p>
                <img src="img/fire.png" style="width">
              </div>
               <a href="#" class="btn btn-success">Achievement</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
  <script src="js/app.js"></script>
</html>
