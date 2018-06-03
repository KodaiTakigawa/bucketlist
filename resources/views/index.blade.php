<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>BucketList</title>
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
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

    <div class="d-flex justify-content-center">
      <form class="form-inline">
        <input class="form-control form-control-lg mr-sm-2" type="search" placeholder="Search" aria-label="Search" size="60%">
        <button class="btn btn-outline-success button-control-lg my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
    <div class="container">
      <div class="mx-auto" style="width: 400px;">
        <a class="btn btn-info social-login-btn" href="" role="button">Login with Twitter</a>
      </div>
      <div class="mx-auto" style="width: 400px;">
        <a class="btn btn-info social-login-btn" href="" role="button">Login with Facebook</a>
      </div>
    </div>
    <div class="container">
      <h1>BucektListとは・・・</h1>
      <p>死ぬまでにしたい100のことを書くリストです。<br></p>
      <p>同じ夢を持った人を探せます。</p>
      <p>あなたの夢を登録して、夢仲間を見つけよう！</p>
    </div>
  </body>
  <script src="js/app.js"></script>
</html>
