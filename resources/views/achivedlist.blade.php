<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>BucketList-MyPage</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
  </head>
  <body>
<!-- navbar -->
    @include('layouts.navbar')

<!-- profile -->
    <div class="container">
      <div class="row">
        <div class="col-sm-5 pull-right">
          <img src="{{Auth::user()->icon_url}}" alt="Avatar" class="avatar">
        </div>
        <div class="col-sm-7">
          <h1>{{Auth::user()->name}}</h1>
          <p>叶えた夢の数：{{$achievementNum}}</p>
        </div>
      </div>
    </div>

<!-- achievedDreams -->
    <div class="container">
      <div class="container">
        <h2 class="list-name">ACHIEVD LIST</h2>
      </div>
    </div>
    <div class="container">
      @foreach($achievedDreams as $achievedDream)
      <div class="row">
        <div class="card mx-auto">
          <div class="card-body pb-0">
            <a href="/mypage/mydream?dream_id={{$achievedDream->id}}" class="text-dark float-left"><p>{{$achievedDream->title}}</p></a>
            <div class="float-right">
              <div class="good-button">
                <p class="float-right">{{$achievedDream->good}}</p>
                <img src="{{ asset('img/fire.png') }}" style="width">
              </div>
            </div>
          </div>
          <p class="text-right mb-0" style="font-size: .5rem;">{{$achievedDream->updated_at}}に達成しました。</p>
        </div>
      </div>
      @endforeach
    </div>
  </body>
  <script src="js/app.js"></script>
</html>
