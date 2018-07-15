<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>MyPage -Dreamers-</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
  </head>
  <body>
<!-- navbar -->
    @include('layouts.navbar')

<!-- profile -->
    <div class="container pb-0">
      <div class="row">
        <div class="col-5">
          <img src="{{Auth::user()->icon_url}}" alt="Avatar" class="avatar">
        </div>
        <div class="col-7">
          <div class="d-flex flex-column-reverse flex-sm-row pb-0 no_edit" style="display: block;">
            <div class="mr-auto p-2">
              <h1>{{Auth::user()->name}}</h1>
            </div>
            <div class="p-2 ml-auto">
              <a class="btn btn-outline-secondary" id="edit">Edit Profile</a>
            </div>
          </div>
          <div class="d-flex pb-0 no_edit" style="display: block;">
            @if(isset(Auth::user()->description))
            <p>{{Auth::user()->description}}</p>
            @endif
          </div>
          <form method="post" action="/mypage/edit" style="display: none;" id="edit_form">
            {{ csrf_field() }}
            <div class="d-flex pb-0">
              <div class="mr-auto p-2">
                <div class="form-group">
                  <label>Name</label>
                    <input class="form-control" name="name" value="{{Auth::user()->name}}">
                </div>
              </div>
              <div class="p-2 ml-auto">
                <button class="btn btn-outline-secondary" type="submit" id="update">Save</button>
              </div>
            </div>
            <div class="form-group">
              <label>Bio</label>
              @if(isset(Auth::user()->description))
              <textarea class="form-control" name="description" rows="3" cols="80">{{Auth::user()->description}}</textarea>
              @else
              <textarea class="form-control" name="description" rows="3" cols="80"></textarea>
              @endif
            </div>
          </form>
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
                <div>
                  <button data-value="{{$mydream->id}}" class="btn btn-success achieve" id="achieve">達成</button>
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
  <script src="{{ asset('js/achieve_dream.js') }}"></script>
  <script src="{{ asset('js/update_profile.js') }}"></script>
</html>
