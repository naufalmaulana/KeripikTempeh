@extends('layouts.master')

@section('navbar')
    @include ('inc.navbar')
@endsection

@section('navbar-holder')
    @include ('inc.navbar-holder')
@endsection

@section('content')
<section id="hero-locations">
    <div class="container-fluid vh-md-100 bg-prod-locations">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-12 text-center">
                <h1 class="fw-bold fs-giant txt-blue2">
                    <b class="fw-bolder">
                        WHERE <span class="txt-purple">TO BUY</span>
                    </b>
                </h1>
            </div>
        </div>
    </div>
</section>
<section id="topics" class="bg-green">
    <div class="container-md py-5">
      <div class="text-center">
        <h1 class="text-white fw-bold ">Reach Us In These Locations</h1>
        {{-- <p class="lead text-muted">A quick glance at the topics you'll learn</p> --}}
      </div>
      <div class="row g-5 justify-content-around align-items-center">
        {{-- <div class="col-6 col-lg-4">
          <img src="/assets/kindle.png" class="img-fluid" alt="ebook">
        </div> --}}
        <div class="col-lg-12">
          
          <!-- accordion -->
          <div class="accordion" id="chapters">
            {{-- <div class="accordion-item">
              <h2 class="accordion-header" id="heading-1">
                <button class="accordion-button bg-blue2 text-white" type="button" data-bs-toggle="collapse" data-bs-target="#chapter-1" aria-expanded="true" aria-controls="chapter-1">
                  Chapter 1 - Your First Web Page
                </button>
              </h2>
              <div id="chapter-1" class="accordion-collapse collapse show" aria-labelledby="heading-1" data-bs-parent="#chapters">
                <div class="accordion-body">
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis assumenda delectus sapiente quidem consequatur odit adipisci necessitatibus nemo aliquid minus modi tempore quibusdam quas vitae, animi ipsam nulla sunt alias.</p>
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis assumenda delectus sapiente quidem consequatur odit adipisci necessitatibus nemo aliquid minus modi tempore quibusdam quas vitae, animi ipsam nulla sunt alias.</p>
                </div>
              </div>
            </div> --}}
            {{-- <a class="accordion-button collapsed bg-blue2 text-white mb-5"  data-bs-toggle="collapse" data-bs-target="#chapter-2" aria-expanded="false" aria-controls="chapter-2">
              Location 1
            </a> --}}
            <div class="accordion-item">
              <h2 class="accordion-header" id="heading-2">
                <button class="accordion-button collapsed bg-blue2 text-white" type="button" data-bs-toggle="collapse" data-bs-target="#chapter-2" aria-expanded="false" aria-controls="chapter-2">
                  Location 1
                </button>
              </h2>
              <div id="chapter-2" class="accordion-collapse collapse " aria-labelledby="heading-2" data-bs-parent="#chapters">
                <div class="accordion-body">
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis assumenda delectus sapiente quidem consequatur odit adipisci necessitatibus nemo aliquid minus modi tempore quibusdam quas vitae, animi ipsam nulla sunt alias.</p>
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis assumenda delectus sapiente quidem consequatur odit adipisci necessitatibus nemo aliquid minus modi tempore quibusdam quas vitae, animi ipsam nulla sunt alias.</p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="heading-3">
                <button class="accordion-button collapsed bg-blue2 text-white" type="button" data-bs-toggle="collapse" data-bs-target="#chapter-3" aria-expanded="false" aria-controls="chapter-1">
                  Location 2
                </button>
              </h2>
              <div id="chapter-3" class="accordion-collapse collapse" aria-labelledby="heading-3" data-bs-parent="#chapters">
                <div class="accordion-body">
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis assumenda delectus sapiente quidem consequatur odit adipisci necessitatibus nemo aliquid minus modi tempore quibusdam quas vitae, animi ipsam nulla sunt alias.</p>
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis assumenda delectus sapiente quidem consequatur odit adipisci necessitatibus nemo aliquid minus modi tempore quibusdam quas vitae, animi ipsam nulla sunt alias.</p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="heading-4">
                <button class="accordion-button collapsed bg-blue2 text-white" type="button" data-bs-toggle="collapse" data-bs-target="#chapter-4" aria-expanded="false" aria-controls="chapter-4">
                  Location 3
                </button>
              </h2>
              <div id="chapter-4" class="accordion-collapse collapse" aria-labelledby="heading-4" data-bs-parent="#chapters">
                <div class="accordion-body">
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis assumenda delectus sapiente quidem consequatur odit adipisci necessitatibus nemo aliquid minus modi tempore quibusdam quas vitae, animi ipsam nulla sunt alias.</p>
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis assumenda delectus sapiente quidem consequatur odit adipisci necessitatibus nemo aliquid minus modi tempore quibusdam quas vitae, animi ipsam nulla sunt alias.</p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="heading-5">
                <button class="accordion-button collapsed bg-blue2 text-white" type="button" data-bs-toggle="collapse" data-bs-target="#chapter-5" aria-expanded="false" aria-controls="chapter-5">
                  Location 4
                </button>
              </h2>
              <div id="chapter-5" class="accordion-collapse collapse" aria-labelledby="heading-5" data-bs-parent="#chapters">
                <div class="accordion-body">
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis assumenda delectus sapiente quidem consequatur odit adipisci necessitatibus nemo aliquid minus modi tempore quibusdam quas vitae, animi ipsam nulla sunt alias.</p>
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis assumenda delectus sapiente quidem consequatur odit adipisci necessitatibus nemo aliquid minus modi tempore quibusdam quas vitae, animi ipsam nulla sunt alias.</p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="heading-6">
                <button class="accordion-button collapsed bg-blue2 text-white" type="button" data-bs-toggle="collapse" data-bs-target="#chapter-6" aria-expanded="false" aria-controls="chapter-6">
                  Location 5
                </button>
              </h2>
              <div id="chapter-6" class="accordion-collapse collapse" aria-labelledby="heading-6" data-bs-parent="#chapters">
                <div class="accordion-body">
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis assumenda delectus sapiente quidem consequatur odit adipisci necessitatibus nemo aliquid minus modi tempore quibusdam quas vitae, animi ipsam nulla sunt alias.</p>
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis assumenda delectus sapiente quidem consequatur odit adipisci necessitatibus nemo aliquid minus modi tempore quibusdam quas vitae, animi ipsam nulla sunt alias.</p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="heading-7">
                <button class="accordion-button collapsed bg-blue2 text-white" type="button" data-bs-toggle="collapse" data-bs-target="#chapter-7" aria-expanded="false" aria-controls="chapter-7">
                  Location 6
                </button>
              </h2>
              <div id="chapter-7" class="accordion-collapse collapse" aria-labelledby="heading-7" data-bs-parent="#chapters">
                <div class="accordion-body">
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis assumenda delectus sapiente quidem consequatur odit adipisci necessitatibus nemo aliquid minus modi tempore quibusdam quas vitae, animi ipsam nulla sunt alias.</p>
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis assumenda delectus sapiente quidem consequatur odit adipisci necessitatibus nemo aliquid minus modi tempore quibusdam quas vitae, animi ipsam nulla sunt alias.</p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="heading-8">
                <button class="accordion-button collapsed bg-blue2 text-white" type="button" data-bs-toggle="collapse" data-bs-target="#chapter-8" aria-expanded="false" aria-controls="chapter-8">
                  Location 7
                </button>
              </h2>
              <div id="chapter-8" class="accordion-collapse collapse" aria-labelledby="heading-8" data-bs-parent="#chapters">
                <div class="accordion-body">
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis assumenda delectus sapiente quidem consequatur odit adipisci necessitatibus nemo aliquid minus modi tempore quibusdam quas vitae, animi ipsam nulla sunt alias.</p>
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis assumenda delectus sapiente quidem consequatur odit adipisci necessitatibus nemo aliquid minus modi tempore quibusdam quas vitae, animi ipsam nulla sunt alias.</p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="heading-9">
                <button class="accordion-button collapsed bg-blue2 text-white" type="button" data-bs-toggle="collapse" data-bs-target="#chapter-9" aria-expanded="false" aria-controls="chapter-9">
                  Location 8
                </button>
              </h2>
              <div id="chapter-9" class="accordion-collapse collapse" aria-labelledby="heading-9" data-bs-parent="#chapters">
                <div class="accordion-body">
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis assumenda delectus sapiente quidem consequatur odit adipisci necessitatibus nemo aliquid minus modi tempore quibusdam quas vitae, animi ipsam nulla sunt alias.</p>
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis assumenda delectus sapiente quidem consequatur odit adipisci necessitatibus nemo aliquid minus modi tempore quibusdam quas vitae, animi ipsam nulla sunt alias.</p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="heading-10">
                <button class="accordion-button collapsed bg-blue2 text-white" type="button" data-bs-toggle="collapse" data-bs-target="#chapter-10" aria-expanded="false" aria-controls="chapter-10">
                  Location 9
                </button>
              </h2>
              <div id="chapter-6" class="accordion-collapse collapse" aria-labelledby="heading-10" data-bs-parent="#chapters">
                <div class="accordion-body">
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis assumenda delectus sapiente quidem consequatur odit adipisci necessitatibus nemo aliquid minus modi tempore quibusdam quas vitae, animi ipsam nulla sunt alias.</p>
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis assumenda delectus sapiente quidem consequatur odit adipisci necessitatibus nemo aliquid minus modi tempore quibusdam quas vitae, animi ipsam nulla sunt alias.</p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="heading-11">
                <button class="accordion-button collapsed bg-blue2 text-white" type="button" data-bs-toggle="collapse" data-bs-target="#chapter-11" aria-expanded="false" aria-controls="chapter-11">
                  Location 10
                </button>
              </h2>
              <div id="chapter-11" class="accordion-collapse collapse" aria-labelledby="heading-11" data-bs-parent="#chapters">
                <div class="accordion-body">
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis assumenda delectus sapiente quidem consequatur odit adipisci necessitatibus nemo aliquid minus modi tempore quibusdam quas vitae, animi ipsam nulla sunt alias.</p>
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis assumenda delectus sapiente quidem consequatur odit adipisci necessitatibus nemo aliquid minus modi tempore quibusdam quas vitae, animi ipsam nulla sunt alias.</p>
                </div>
              </div>
            </div>
          </div>

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
