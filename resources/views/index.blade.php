<!DOCTYPE html>
@extends('layouts.navbar')
<html>
  <head>
    <meta charset="utf-8">
    <title>BucketList</title>
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
  </head>
  <body>
    @include('layouts.navbar')
    <div class="d-flex justify-content-center">
      <form class="form-inline" action="/find-dreams" method="get">
        {{ csrf_field() }}
        <input class="form-control form-control-lg mr-sm-2" type="search" name="dreams" placeholder="Dream" aria-label="Search" size="60%">
        <button class="btn btn-outline-success button-control-lg my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
    <div class="container">
      <div class="mx-auto" style="width: 400px;">
        <a class="btn btn-info social-login-btn" href="/mypage" role="button">Login with Twitter</a>
      </div>
      <div class="mx-auto" style="width: 400px;">
        <a class="btn btn-info social-login-btn" href="/mypage" role="button">Login with Facebook</a>
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
