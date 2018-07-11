<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
          <img src="{{$user->icon_url}}" alt="Avatar" class="avatar">
          <div class="social-icons">
            <!-- <a href="#"><img src="{{ asset('img/f-ogo_RGB_HEX-58.png') }}" alt="facebook" class="social-icon-facebook"></a> -->
            <a class="btn pt-0" id="twitter"><img src="{{ asset('img/Twitter_Logo_Blue.png') }}" alt="twitter" class="social-icon-twitter"></a>
          </div>
        </div>
        <div class="col-7">
          <h1>{{$user->name}}</h1>
          @if(isset($user->description))
          <p>{{$user->description}}</p>
          @endif
          <a href="/find-dreams/profile/achivedlist?id={{$user->id}}"><p>叶えた夢の数：{{$achievementNum}}</p></a>
        </div>
      </div>
    </div>
    <div class="container">
      <h2 class="list-name">LIST</h2>
    </div>
    <div class="container">
      @foreach($dreams as $dream)
      <div class="row">
        <div class="card mx-auto">
          <div class="card-body">
            <a href="/find-dreams/detail?id={{$dream->id}}" class="text-dark float-left"><p>{{$dream->title}}</p></a>
            <div class="float-right">
              <div class="good-button">
                <p class="float-right">{{$dream->good}}</p>
                <img src="{{ asset('img/fire.png') }}" id='good'>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </body>
  <script src="{{ asset('js/app.js') }}"></script>
  <script type="text/javascript">
    document.getElementById('twitter').addEventListener('click', function(){
      window.open(`https://twitter.com/intent/user?user_id={{$twitter_id}}`, 'newwindow')
    })
  </script>
</html>
