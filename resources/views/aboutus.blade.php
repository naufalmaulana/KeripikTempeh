@extends('layouts.master')

@section('navbar')
    @include ('inc.navbar')
@endsection

@section('navbar-holder')
    @include ('inc.navbar-holder')
@endsection

@section('content')
<section id="hero-about">
    <div class="container-fluid vh-md-100 bg-prod-about">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-12 text-center">
                <h1 class="fw-bold fs-giant txt-blue2">
                    <b class="fw-bolder">
                        GET TO <span class="txt-purple">KNOW US</span>
                    </b>
                </h1>
            </div>
        </div>
    </div>
</section>
<section id="history" class="bg-blue2">
    <div class="container-lg py-5">
      <div class="row g-4 justify-content-evenly align-items-center">
        <div class="col-md-5 text-center text-md-start">
          <h1>
            <div class="display-2 fw-bold text-white">How It All Started</div>
            {{-- <div class="display-5 text-muted">Your Coding Skills</div> --}}
          </h1>
          <p class="lead my-4 text-white">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit, vero voluptatum? Autem quidem deleniti pariatur nisi quae, porro sint vero culpa? Molestias dolorum totam necessitatibus tenetur, repellat sapiente, hic molestiae qui odio alias, sequi veritatis aliquam. Debitis cum nesciunt vitae.</p>
          {{-- <a href="#pricing" class="btn btn-secondary btn-lg">Buy Now</a> --}}
        </div>
        <div class="col-md-5 text-center">
          <img src="/assets/chips-dummy-img6.jpg" class="img-fluid rounded" alt="family">
        </div>
      </div>
    </div>
</section>
<section id="history" class="bg-green">
    <div class="container-lg py-5">
      <div class="row g-4 justify-content-evenly align-items-center">
        <div class="col-md-5 text-center d-none d-md-block">
          <img src="/assets/chips-dummy-bg4.jpg" class="img-fluid rounded" alt="family">
        </div>
        <div class="col-md-5 text-center text-md-start">
          <h1>
            <div class="display-2 fw-bold txt-yellow1">Irresistible Taste</div>
            {{-- <div class="display-5 text-muted">Your Coding Skills</div> --}}
          </h1>
          <p class="lead my-4 text-white">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit, vero voluptatum? Autem quidem deleniti pariatur nisi quae, porro sint vero culpa? Molestias dolorum totam necessitatibus tenetur, repellat sapiente, hic molestiae qui odio alias, sequi veritatis aliquam. Debitis cum nesciunt vitae.</p>
          {{-- <a href="#pricing" class="btn btn-secondary btn-lg">Buy Now</a> --}}
        </div>
        <div class="col-md-5 text-center d-md-none d-sm-block">
          <img src="/assets/chips-dummy-bg4.jpg" class="img-fluid rounded" alt="family">
        </div>
      </div>
    </div>
</section>
<section id="history" class="bg-purple">
    <div class="container-lg py-5">
      <div class="row g-4 justify-content-center align-items-center">
        <div class="col-md-5 text-center text-md-start">
          <h1>
            <div class="display-2 fw-bold txt-pink">Iconic Packaging</div>
            {{-- <div class="display-5 text-muted">Your Coding Skills</div> --}}
          </h1>
          <p class="lead my-4 text-white">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit, vero voluptatum? Autem quidem deleniti pariatur nisi quae, porro sint vero culpa? Molestias dolorum totam necessitatibus tenetur, repellat sapiente, hic molestiae qui odio alias, sequi veritatis aliquam. Debitis cum nesciunt vitae.</p>
          {{-- <a href="#pricing" class="btn btn-secondary btn-lg">Buy Now</a> --}}
        </div>
        <div class="col-md-5 text-center">
          <img src="/assets/chips-dummy-img7.jpg" class="img-fluid rounded" alt="family">
        </div>
      </div>
    </div>
</section>

@endsection

@section('footer')
    @include ('inc.footer')
@endsection

@section('js')

@endsection