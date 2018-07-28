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
    <title>Dreamers</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
	<link rel="stylesheet" href="{{ asset('css/header.css') }}">
	<link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
	<link rel="stylesheet" href="{{ asset('css/find_dreams.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  </head>
  <body>
    @include('layouts.navbar')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="d-flex flex-column">
      <div class="mx-auto m-5">
        <form class="form-inline form-search" action="/find-dreams" method="get">
          {{ csrf_field() }}
          <div>
            <input class="form-control input-search" type="search" name="search" placeholder="Dream" aria-label="Search">
          </div>
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
      @if(Auth::user() == null)
      <div class="mx-auto mb-5">
        <a class="btn btn-info social-login-btn" href="/login/twitter" role="button">Login with Twitter</a>
      </div>
      @endif
      <div class="mx-auto">
        <h1>Dreamersとは・・・</h1>
        <p>
			夢や目標に向かっている人達(Dreamers)が<br>
        	繋がれる場所です。<br>
        	あなたが思い描いている未来から繋がれます。<br>
			夢や目標を登録して、仲間を見つけよう！<br>
		</p>
		<br>
	  
		<h4>使い方</h4>
		<h5>【夢や目標を登録】</h5>
		<p>
			ログインして夢や目標を登録<br>
			↓<br>
			#(夢タイトル), ＃Dreamersの<br>
			2つのハッシュタグをつけてツイート<br>
			↓<br>
			夢に向けての軌跡が記録<br>
		</p>
		<h5>【夢や目標を検索】</h5>
		<p>
			気になっている夢や目標を検索<br>
			↓<br>
			例えば、、、<br>
		</p>		
	  </div>
	</div>
	@foreach($random_dreams as $random_dream)
			<div class="row mr-0 ml-0">
				<div class="card mx-auto">
				<div class="card-body p-0">
					<div class="d-flex align-items-center pb-0">
					<div>
						@if(isset($random_dream->user->id) && isset($random_dream->user->icon_url))
						<a href="/find-dreams/profile?id={{$random_dream->user->id}}"><img src="{{$random_dream->user->icon_url}}" alt="Avatar" class="avatar-card float-left"></a>
						@endif
					</div>
					<div>
						<a href="/find-dreams/detail?id={{$random_dream->id}}" class="text-dark"><p class="mb-0 p-2">{{$random_dream->title}}</p></a>
					</div>
					<div class="d-flex ml-auto pb-0 pr-3">
						<div class="good-button mb-0" id="good_button_{{$random_dream->id}}" data-value="{{$random_dream->id}}">
						<img src="{{ asset('img/fire.png') }}" style="width">
						</div>
						<div class="pt-3">
						<p id="dream_id_{{$random_dream->id}}">{{$random_dream->good}}</p>
						</div>
					</div>
					</div>
				</div>
				</div>
			</div>
			@endforeach
    @include('layouts.footer')
  </body>
  <script src="{{ asset('js/app.js') }}"></script>
  <script src="{{ asset('js/count_good.js') }}"></script>
</html>
