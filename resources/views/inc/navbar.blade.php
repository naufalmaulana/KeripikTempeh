<!-- Navigation-->
<nav class="navbar navbar-expand-md navbar-light fixed-top bg-blue1 py-1 px-2">
    <div class="container-xxl">
      <!-- navbar brand / title -->
      <a class="navbar-brand col-md-2" href="{{ route('index') }}">
        <img src="/assets/chips-dummy-logo.svg" class="nav-logo" width="70" height="70" alt="car.go logo">
      </a>
      <!-- toggle button for mobile nav -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav" aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- navbar links -->
      <div class="collapse navbar-collapse justify-content-end align-center" id="main-nav">
        <ul class="navbar-nav">
          <li class="nav-item ">
            <a class="nav-link fw-bold text-light" href="{{ route('index') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-bold text-light" href="{{ route('aboutus') }}">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-bold text-light" href="{{ route('products') }}">Products</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link fw-bold text-light" href="{{ route('contactus') }}">Contact Us</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link fw-bold text-light" href="{{ route('wheretobuy') }}">Where To Buy</a>
          </li>
          {{-- <li class="nav-item ">
            <a class="nav-link fw-bold text-light" href="#">Crowd Fund</a>
          </li> --}}
          {{-- <li class="nav-item d-md-none">
            <a class="nav-link" href="" data-bs-toggle="modal" data-bs-target="#modalLoginForm">SIGN IN</a>
          </li>        
          <li class="nav-item ms-2 d-none d-md-inline">
            <div>
              <a class="btn bg-green txt-white" href="" data-bs-toggle="modal" data-bs-target="#modalLoginForm">SIGN IN</a>
            </div>
          </li> --}}
        </ul>
      </div>
    </div>
  </nav>