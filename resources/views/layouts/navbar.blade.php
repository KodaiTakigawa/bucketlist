<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/">Dreamers</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="menu">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item mr-auto">
        <a class="nav-link" href="/">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item mr-auto">
        <a class="nav-link" href="/mypage">Mypage<span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <form class="form-inline my-2" action="/find-dreams" method="get">
      {{ csrf_field() }}
      <div>
        <input class="form-control mr-sm-2" type="search" name="search" placeholder="Dream" aria-label="Search">
      </div>
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
