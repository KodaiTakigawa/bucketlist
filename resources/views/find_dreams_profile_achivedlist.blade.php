<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>BucketList-MyPage</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
    <link rel="stylesheet" href="{{ asset('css/find_dreams_profile.css') }}">
  </head>
  <body>
<!-- navbar -->
    @include('layouts.navbar')

<!-- profile -->
    <div class="container">
      <div class="row">
        <div class="col-5">
          <img src="{{ asset('img/profile1.jpg') }}" alt="Avatar" class="avatar">
          <div class="social-icons">
            <a href="#"><img src="{{ asset('img/f-ogo_RGB_HEX-58.png') }}" alt="facebook" class="social-icon-facebook"></a>
            <a href="#"><img src="{{ asset('img/Twitter_Logo_Blue.png') }}" alt="twitter" class="social-icon-twitter"></a>
          </div>
        </div>
        <div class="col-7">
          <h1>パイ包みハンバーグ</h1>
          <p>私はハンバーグです。美味しく食べられたいです。</p>
          <p>叶えた夢の数：29</p>
        </div>
      </div>
    </div>
    <div class="container">
      <h2 class="list-name">ACHIVED LIST</h2>
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
