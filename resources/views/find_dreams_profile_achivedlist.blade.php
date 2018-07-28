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
              <a href="/find-dreams/profile/achivedlist?id={{$user->id}}"><p>叶えた夢の数：{{$achievement_num}}</p></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- dream list -->
    <div class="container">
      <h2 class="list-name">ACHIVED LIST</h2>
    </div>
    <div class="container">
      @foreach($achieved_dreams as $achieved_dream)
      <div class="row">
        <div class="card mx-auto">
          <div class="card-body">
            <div class="d-flex pb-0">
              <div class="mr-auto">
                <a href="/find-dreams/detail?id={{$achieved_dream->id}}" class="text-dark"><p>{{$achieved_dream->title}}</p></a>
              </div>
              <div class="d-flex justify-content-end flex-sm-column p-0">
                <div class="d-flex justify-content-end">
                  <div class="good-button" id="good_button_{{$achieved_dream->id}}" data-value="{{$achieved_dream->id}}">
                    <img src="{{ asset('img/fire.png') }}" id='good'>
                  </div>
                  <div>
                    <p id="dream_id_{{$achieved_dream->id}}">{{ $achieved_dream->good }}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <p class="text-right mb-0" style="font-size: .5rem;">{{$achieved_dream->updated_at}}に達成しました。</p>
        </div>
      </div>
      @endforeach
      <div class="d-flex justify-content-center">
        <div>
        {{ $achieved_dreams->appends(['sort' => $sort, 'id' => $user->id])->links() }}
        </div>
      </div>
    </div>
    @include('layouts.footer')
  </body>
  <script src="{{ asset('js/app.js') }}"></script>
  <script src="{{ asset('js/count_good.js') }}"></script>
</html>
