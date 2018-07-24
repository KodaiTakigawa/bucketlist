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
    <title>{{$user->name}} -Dreamers-</title>
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
              <a href="/find-dreams/profile/achivedlist?id={{$user->id}}"><p>叶えた夢の数：{{$achievement_num}}</p></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- dream list -->
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
      <div class="d-flex justify-content-center">
        <div>
        {{ $dreams->appends(['sort' => $sort, 'id' => $user->id])->links() }}
        </div>
      </div>
    </div>
    <div class="d-flex justify-content-center">
      <a class="twitter-timeline" width="320px" height="400px" data-theme="light" href="https://twitter.com/{{$twitter_screen_name}}?ref_src=twsrc%5Etfw">Tweets by {{$twitter_screen_name}}</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    </div>
  </body>
  <script src="{{ asset('js/app.js') }}"></script>
  <script type="text/javascript">
    document.getElementById('twitter').addEventListener('click', function(){
      window.open(`https://twitter.com/intent/user?user_id={{$twitter_id}}`, 'newwindow')
    })
  </script>
</html>
