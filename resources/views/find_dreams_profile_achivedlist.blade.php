<!DOCTYPE html>
<html>
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-122528519-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-122528519-1');
    </script>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{$user->name}} Achived List -Dreamers-</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
    <link rel="stylesheet" href="{{ asset('css/find_dreams_profile.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  </head>
  <body>
<!-- navbar -->
    @include('layouts.navbar')

<!-- profile -->
    <div class="container ">
      <div class="row">
        <div class="col">
          <div class="d-flex pt-4">
            <div>
              <img src="{{$user->icon_url}}" alt="Avatar" class="avatar">
              <div class="social-icons">
                <a class="btn pt-0" id="twitter"><img src="{{ asset('img/Twitter_Logo_Blue.png') }}" alt="twitter" class="social-icon-twitter"></a>
              </div>
            </div>
            <div class="pl-3">
              <h4>{{$user->name}}</h4>
              @if(isset($user->description))
              <p>{{$user->description}}</p>
              @endif
              <a href="/find-dreams/profile/achivedlist?id={{$user->id}}"><p>叶えた夢の数：{{$achievementNum}}</p></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- list -->
    <div class="container">
      <h2 class="list-name">ACHIVED LIST</h2>
    </div>
    <div class="container">
      @foreach($achievedDreams as $achievedDream)
      <div class="row">
        <div class="card mx-auto">
          <div class="card-body pb-0">
            <p>{{$achievedDream->title}}</p>
            <div class="float-right">
              <div class="good-button">
                <p class="float-right">777</p>
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
  <script src="{{ asset('js/app.js') }}"></script>
</html>
