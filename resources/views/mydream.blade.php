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
    @include('layouts.navbar')

    <!-- dream -->
    <div class="container">
      <div class="row dream-title pb-3">
        <div class="col-8">
          <h1>1.I want to visit all over the world.</h1>
        </div>
      </div>
<!-- dream detail -->
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
