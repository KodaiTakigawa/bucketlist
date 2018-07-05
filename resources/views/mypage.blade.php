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
          <img src="{{Auth::user()->icon_url}}" alt="Avatar" class="avatar">
        </div>
        <div class="col-sm-7">
          <h1>{{Auth::user()->name}}</h1>
          <p>叶えた夢の数：{{$achivementNum}}</p>
        </div>
      </div>
    </div>
    <div class="container">
      <h2 class="list-name">LIST</h2>
      <a href="/mypage/add-mydream" value="{{Auth::user()->id}}"><div id="add" class="float-right">
        <p>+</p>
      </div></a>
    </div>

<!-- dreams -->
    <div class="container">
      @foreach($mydreams as $mydream)
      <div class="row">
        <div class="card mx-auto">
          <div class="card-body">
            <a href="/mypage/mydream?id={{$mydream->id}}" class="text-dark float-left"><p>{{$mydream->title}}</p></a>
            <div class="float-right">
              <div class="good-button">
                <p class="float-right">{{$mydream->good}}</p>
                <img src="img/fire.png" style="width">
              </div>
               <a href="/mypage/achivedlist?id={{Auth::user()->id}}&dreamId={{$mydream->id}}" class="btn btn-success">Achievement</a>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </body>
  <script src="js/app.js"></script>
</html>
