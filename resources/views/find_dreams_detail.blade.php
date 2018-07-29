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
    <title>{{$dream->title}} Dreams -Dreamers-</title>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
    <link rel="stylesheet" href="{{ asset('css/find_dreams.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  </head>
  <body>
    @include('layouts.navbar')

    <!-- dream -->
    <div class="container pt-3">
      <div class="pb-1" style="border-bottom: solid #707070;">
        <div class="d-flex">
          <div class="d-flex justify-content-between">
            <div class="p-2">
              <h3>{{$dream->title}}</h3>
            </div>
            <div class="d-flex pb-0">
              <div class="good-button" id="good_button_{{$dream->id}}" data-value="{{$dream->id}}">
                <img class="img-fluid" src="{{ asset('img/fire.png') }}">
              </div>
              <div class="pt-3">
                <p id="dream_id_{{$dream->id}}">{{$dream->good}}</p>
              </div>
            </div>
          </div>
          <div class="ml-auto">
            <a href="/find-dreams/profile?id={{$dream->user->id}}"><img src="{{$dream->user->icon_url}}" alt="Avatar" class="avatar mr-3"></a>
          </div>
        </div>
        @if($dream->achievement == true)
          <div>
            <p class="mb-0">#ACHIEVED</p>
          </div>
          @endif
      </div>
      <div class="dream-detail pb-3">
        <h2>Detail</h2>
        <p>
          {{$dream->detail}}
        </p>
      </div>
      <div>
        <h4>For Dream</h4>     
        <div>
        @foreach($tweets_for_dream as $tweet)
          <div class="media border border-info rounded bg-white mb-1 p-1">
            <div class="media-body">
              {{$tweet['created_at']}}<br>
              {{$tweet['text']}}
            </div>
            @if(isset($tweet['media_url']))
            <div>
              <img class="img-fluid" src="{{$tweet['media_url']}}" alt="Generic placeholder image">
            </div>
            @endif
          </div>
        @endforeach
        </div>
        <div class="ml-auto">
          <p class="font-italic text-right" style="font-size:small">from twitter</p>
        </div>
      </div>
    </div>
    @include('layouts.footer')
  </body>
  <script src="{{ asset('js/app.js') }}"></script>
  <script src="{{ asset('js/count_good.js') }}"></script>
</html>
