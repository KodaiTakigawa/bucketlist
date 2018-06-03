<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>mydream</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mydream.css') }}">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">BucketList</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="menu">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Dream">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>

    <!-- dream -->
    <div class="container">
      <div class="row dream-title pb-3">
        <div class="col-8">
          <h1>1.I want to visit all over the world.</h1>
        </div>
        <div class="col-4">
          <a class="btn btn-primary float-right mr-3" href="#">edit</a>
        </div>
      </div>
      <div class="dream-detail">
        <h2>Detail</h2>
        <p>
          東回りで行く！
          タイで予防注射を打って1か月ぐらいかな～
          それから東南アジア回って、中東、ヨーロッパ、アフリカ、アメリカの順がよさそう！
          タイでは、ソンクラーン行きたい。
          ボリビアのウユニ塩湖も行きたいなー
        </p>
      </div>
    </div>


  </body>
</html>
