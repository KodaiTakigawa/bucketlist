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
    <title>{{$dream->title}} -Dreamers-</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  </head>
  <body>
    @include('layouts.navbar')

    <!-- dream -->
    <div class="container pt-3">
      <div class="pb-3" style="border-bottom: solid #707070;">
        <div class="d-flex justify-content-between">
          <div class="p-2">
            <h1>{{$dream->title}}</h1>
          </div>
          <div class="p-2">
            <a class="btn btn-outline-secondary" href="/mypage/mydream/edit?dream_id={{$dream->id}}">Edit</a>
          </div>
        </div>
      </div>
<!-- dream detail -->
      <div class="dream-detail">
        <h2>Detail</h2>
        <p>
          {{$dream->detail}}
        </p>
      </div>
      <div class="bg-white">
        <div class="d-flex">
          <h2>一週間の軌跡</h2>
          <div class="ml-auto pt-2 pr-2">
            <a href="https://twitter.com/intent/tweet" class="twitter-hashtag-button" data-show-count="false" data-hashtags="Dreamers, {{$dream->title}}">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
          </div>
        </div>
        <div>
        @foreach($tweets_for_dream as $tweet)
          <p>{{$tweet['text']}}</p>
          @if(isset($tweet['media_url']))
            <img src="{{$tweet['media_url']}}" alt="img" class="img-fluid mt=0">
          @endif
        @endforeach
        </div>
      </div>
    </div>
  </body>
  <script src="{{ asset('js/app.js') }}"></script>
</html>
