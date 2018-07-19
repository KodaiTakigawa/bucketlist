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
    <title>{{Auth::user()->name}} -Dreamers-</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  </head>
  <body>
<!-- navbar -->
    @include('layouts.navbar')

<!-- profile -->
    <div class="container">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
      <div class="row">
        <div class="col">
          <div class="d-flex pt-4">
            <div>
              <img src="{{Auth::user()->icon_url}}" alt="Avatar" class="avatar">
            </div>
            <div class="no_edit pl-3" style="display: block;">
              <h4 id="name">{{Auth::user()->name}}</h4>
              @if(isset(Auth::user()->description))
              <p id="description">{{Auth::user()->description}}</p>
              @endif
              <a href="/mypage/achivedlist"><p>叶えた夢の数：{{$achievementNum}}</p></a>
            </div>
            <div class="ml-auto no_edit">
              <a class="btn btn-outline-secondary" id="edit">Edit Profile</a>
            </div>
            <!-- for edit profile -->
            <form action="/update_profile" method="post" style="display: none;" id="edit_form">
              {{ csrf_field() }}
              <div class="d-flex pb-0">
                <div class="mr-auto p-2">
                  <div class="form-group">
                    <label>Name</label>
                      <input class="form-control" name="name" value="{{Auth::user()->name}}" id="name_update">
                  </div>
                </div>
                <div class="p-2 ml-auto">
                  <button class="btn btn-outline-secondary" type="submit" id="update">Save</button>
                </div>
              </div>
              <div class="form-group">
                <label>Bio</label>
                @if(isset(Auth::user()->description))
                <textarea class="form-control" name="description" rows="3" cols="80" id="description_update">{{Auth::user()->description}}</textarea>
                @else
                <textarea class="form-control" name="description" rows="3" cols="80" id="description_update"></textarea>
                @endif
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    
<!-- dream list  -->
    <div class="container d-flex justify-content-between align-items-center list-name">
      <div>
      </div>
      <div>
        <h2 class="mb-0">LIST</h2>
      </div>
      <div>
        <a href="/mypage/add-mydream" value="{{Auth::user()->id}}" id="add">
          <i class="fas fa-plus"></i>
        </a>
      </div>
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
                <div class="d-flex justify-content-end pr-3">
                  <div class="good-button">
                    <img src="img/fire.png">
                  </div>
                  <div>
                    <p>{{$mydream->good}}</p>
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
