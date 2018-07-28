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
    <title>{{Auth::user()->name}} Add dream -Dreamers-</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  </head>
  <body>
    @include('layouts.navbar')

    <!-- dream -->
    <div class="container pt-3">
      <form action="/mypage/add-mydream" method="post">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="addYourDream"><h1>Add your dream</h1></label>
          @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif
          <input class="form-control form-control-lg" id="addYourDream" type="text" placeholder="Title(Twiiterのハッシュタグ)" name="title">
        </div>
        <div class="form-group">
          <label for="dreamDetail"><h2>Detail</h2></label>
          <textarea class="form-control" id="dreamDetail" rows="10" name="detail"></textarea>
        </div>
        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
        <button type="submit" class="btn btn-outline-secondary float-right mb-3">Add</button>
      </form>
    </div>
    @include('layouts.footer')
  </body>
  <script src="{{ asset('js/app.js') }}"></script>
</html>
