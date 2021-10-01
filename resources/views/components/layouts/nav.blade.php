<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
      <a class="navbar-brand rounded-3 " href="#"><img class=" img-fluid " alt="logo" src="{{url('assets/Pic/update.jpeg')}}">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto text-uppercase">
          <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('index')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('about')}}">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('track')}}">track</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('pricing')}}">pricing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('contact')}}">contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link bg-color log text-light ps-3 pe-3" href="{{route('sign')}}">sign up / login</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>
