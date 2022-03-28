@extends('layouts.master')

@section('navbar')
    @include ('inc.navbar')
@endsection

@section('navbar-holder')
    @include ('inc.navbar-holder')
@endsection

@section('content')
<section id="hero-products">
    <div class="container-fluid vh-md-100 bg-prod-img">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-12 text-center">
                <h1 class="fw-bold fs-giant txt-blue2">
                    <b class="fw-bolder">
                        OUR <span class="txt-purple">PRODUCTS</span>
                    </b>
                </h1>
            </div>
        </div>
    </div>
</section>
<section id="products" class="bg-purple py-5">
    <div class="products-area pt-120pb-115 py-3">
        <div class="container text-white">
{{-- 
            <div class="text-center mb-5">
                <h1>Choose Your Flavor</h1>
                <p class="text-muted">We Cover Many Things</p>
            </div> --}}

            <div class="row g-4 justify-content-center align-items-center ">
                <div class="col-md-3 col-sm-5 text-center py-5">
                    <!-- Start notification image -->
                        <img class="img-fluid products-icon" src="assets/chips-dummy-img4.png" alt="notification">
                    <!-- End notification image-->
                </div>
                <div class="col-md-6 ms-md-5">
                    <!-- Start notification content -->
                    <div class="my-5 products-content">
                        <h1 class="mb-3 lh-base txt-yellow2 fw-bold fs-big">Cool Chips #1</h1>
                        <p class="mb-3">Delay rapid joy share allow age manor six. Went why far saw many knew. Exquisite excellent son gentleman acuteness her. Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam accusamus sint odio! Voluptate reiciendis recusandae consectetur voluptatibus? Dolor non modi vitae ex sint? Eveniet necessitatibus nostrum, quasi minima ipsum ad vel corporis ratione a distinctio sed perspiciatis ipsa eos quis fugit fuga laborum facilis excepturi libero! Quisquam molestiae hic cumque?</p>
                        {{-- <ul>
                            <li><i class="bi bi-check-square-fill"></i>Delay rapid joy share allow age manor six.</li>
                            <li><i class="bi bi-check-square-fill"></i>Exquisite excellent son gentleman acuteness her.</li>
                            <li><i class="bi bi-check-square-fill"></i>Went why far saw many knew.</li>
                        </ul> --}}
                        {{-- <a href="#" class="btn rounded bg-blue2 text-white fw-bold">ORDER NOW</a> --}}
                    </div>
                    <!-- End notification content -->
                </div>
            </div>

            <div class="row g-4 justify-content-center align-items-center">
                <div class="col-md-3 col-sm-5 text-center py-5 d-md-none d-sm-block">
                    <!-- Start notification image -->
                        <img class="img-fluid products-icon" src="assets/chips-dummy-img3.png" alt="notification">
                    <!-- End notification image -->
                </div>
                <div class="col-md-6 me-md-5">
                    <!-- Start notification content -->
                    <div class="my-5 products-content">
                        <h1 class="mb-3 lh-base txt-yellow2 fw-bold fs-big">Cool Chips #2</h2>
                        <p class="mb-3">Delay rapid joy share allow age manor six. Went why far saw many knew. Exquisite excellent son gentleman acuteness her. Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque aliquam fugit ullam at nulla aliquid totam dolorum incidunt aperiam. Quae, voluptate. Corrupti quidem laudantium magnam harum rerum! Itaque, corrupti excepturi nobis quo eum dolore? Porro quis earum sapiente accusamus consectetur! Tempora ea, laborum numquam inventore ut dolorum tempore dicta minus.</p>
                        {{-- <ul>
                            <li><i class="bi bi-check-square-fill"></i>Delay rapid joy share allow age manor six.</li>
                            <li><i class="bi bi-check-square-fill"></i>Exquisite excellent son gentleman acuteness her.</li>
                            <li><i class="bi bi-check-square-fill"></i>Went why far saw many knew.</li>
                        </ul> --}}
                        {{-- <a href="#" class="btn rounded bg-blue2 text-white fw-bold">COMING SOON!</a> --}}
                    </div>
                    <!-- End notification content -->
                </div>
                <div class="col-md-3 col-sm-5 text-center py-5 d-none d-md-block">
                    <!-- Start notification image -->
                        <img class="img-fluid products-icon" src="assets/chips-dummy-img3.png" alt="notification">
                    <!-- End notification image -->
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
