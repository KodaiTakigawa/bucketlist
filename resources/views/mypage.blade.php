<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>MyPage -Dreamers-</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
  </head>
  <body>
<!-- navbar -->
    @include('layouts.navbar')

<!-- profile -->
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="d-flex pl-5 pt-5">
            <div>
              <img src="{{Auth::user()->icon_url}}" alt="Avatar" class="avatar">
            </div>
            <div class="no_edit pl-3" style="display: block;">
              <h1 id="name">{{Auth::user()->name}}</h1>
              @if(isset(Auth::user()->description))
              <p id="description">{{Auth::user()->description}}</p>
              @endif
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
          <div class="pl-5">
            <a href="/mypage/achivedlist"><p>叶えた夢の数：{{$achievementNum}}</p></a>
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
            <div class="d-flex flex-column flex-sm-row align-items-center pb-0">
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
  <script>
    $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(function() {
      $('#edit').click(function(){
        $('.no_edit').hide();
        $('#edit_form').show();
      });
    });

    $(function() {
      $('#upadte').click(function(){
        $('#edit_form').hide();
        $('.no_edit').show();
        console.log(1);

        // var name = doucment.getElementById('name').value;
        // console.log(name);
        // var description = document.getElementById('description').value;
        var name = document.forms.edit_form.name_update.value;
        var description = document.forms.edit_form.description_update.value;
        console.log(2);
        var data = {
          'name': name,
          'desription': description,
        };
        console.log(3);
        $.ajax({
          url: '/update_profile',
          type: 'POST',
          data: data,
        })
        $(`name`).html(name);
        $(`description`).html(description);
        console.log(data);
      });
    });
  </script>
</html>
