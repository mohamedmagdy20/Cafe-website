<header class="top-navbar">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="{{route('home')}}">
        <img src="{{asset('uploads/settings/'.$setting[7]->value)}}" alt="" />
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbars-rs-food">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item "><a class="nav-link" href="{{route('home')}}">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="{{route('menu')}}">Menu</a></li>
          </ul>
      </div>
    </div>
  </nav>
</header>