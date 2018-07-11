<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>MyPage -Dreamers-</title>
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
          <div class="d-inline-flex pb-0">
            <div class="mr-auto p-2">
              <h1>{{Auth::user()->name}}</h1>
            </div>
            <div class="p-2">
              <a class="btn btn-outline-secondary" href="/mypage/edit">Edit Profile</a>
            </div>
          </div>
          <div class="d-flex pb-0">
            <div class="w-50 p-2">
              @if(isset(Auth::user()->description))
              <p>{{Auth::user()->description}}</p>
              @endif
            </div>
          </div>
          <a href="/mypage/achivedlist"><p>叶えた夢の数：{{$achievementNum}}</p></a>
        </div>
      </div>
    </div>
<!-- dream list  -->
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
            <div class="d-flex flex-column flex-sm-row pb-0">
              <div class="mr-auto">
                <a href="/mypage/mydream?dream_id={{$mydream->id}}" class="text-dark" id="dream_id_{{$mydream->id}}"><p>{{$mydream->title}}</p></a>
              </div>
              <div class="d-flex justify-content-end flex-sm-column p-0">
                <div class="d-flex justify-content-end p-0">
                  <div class="good-button">
                    <img src="img/fire.png" style="width">
                  </div>
                  <div class="">
                    <p class="">{{$mydream->good}}</p>
                  </div>
                </div>
                <div class="">
                  <button data-value="{{$mydream->id}}" class="btn btn-success" id="achieve">Achievement</button>
                </div>
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
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

  document.getElementById('achieve').addEventListener('click', function() {
    var dream_id = this.getAttribute("data-value");
    var dream_title = document.getElementById(`dream_id_${dream_id}`).textContent;
    var data = {
      'dream_id': dream_id,
    };
    $.ajax({
      type: 'POST',
      url: '/mypage/achivedlist',
      data: data,
    });
    window.location.href = "/mypage/achivedlist";
    window.open(`https://twitter.com/intent/tweet?text=【${dream_title}】を達成しました。\n&hashtags=Dreamers`, 'newwindow', 'width=400,height=300');
  })

  </script>
</html>
