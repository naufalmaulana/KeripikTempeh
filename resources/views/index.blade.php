@extends('layouts.master')

@section('navbar')
    @include ('inc.navbar')
@endsection

@section('navbar-holder')
    @include ('inc.navbar-holder')
@endsection

@section('content')

{{-- hero-section --}}
<section id="home">
    <div class="container-fluid px-0 ">
        <div id="carouselExampleCaptions" class="carousel slide hero" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner hero__container">
              <div class="carousel-item active hero__container--item">
                <img src="/assets/chips-dummy-bg.png" class="d-block" alt="...">
              </div>
              <div class="carousel-item hero__container--item">
                <img src="/assets/chips-dummy-bg.png" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item hero__container--item">
                <img src="/assets/chips-dummy-bg.png" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </div>
</section>

{{-- about us section --}}
<section id="aboutus" class="bg-green">
    <div class="container-lg py-5 aboutus">
        <div class="row justify-content-center align-items-center g-4 aboutus__container">
            <div class="col-md-4 text-center aboutus__container--content">
                <img src="/assets/chips-dummy-img.png" class="img-fluid" alt="...">
            </div>
            <div class="col-md-6 aboutus__container--content">
                <h1 class="text-white fw-bolder">
                    GET TO KNOW
                    <div class="txt-yellow1">US BETTER</div>
                </h1>
                <p class="text-white lead fw-normal">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos nam amet esse odio illo nemo deleniti iure culpa omnis alias modi doloremque voluptatum, vel dicta corporis molestiae a ipsa incidunt suscipit nobis quis! At odit recusandae deserunt facilis non dolor.
                </p>
                <button class="btn bg-yellow1 text-white fw-bold shadow rounded-pill px-4 py-2 fs-5"  onclick="window.location.href='{{route('aboutus')}}'">
                    READ MORE
                </button>
            </div>
        </div>
    </div>
</section>

{{-- product section --}}
<section id="products" class="products">
  <div class="container products__container">
    <div class="imgBx">
        <img src="assets/chips-dummy-img5.webp" alt="Nike Jordan Proto-Lyte Image">
    </div>
    <div class="details">
        <div class="content">
            <h2>Cool Chips #1<br>
                {{-- <span>Cool Collection</span> --}}
            </h2>
            <br>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis et ad exercitationem debitis doloremque non, amet praesentium quod odit facilis inventore quibusdam temporibus eaque, quaerat repudiandae! Earum maxime est atque magni deleniti, quasi magnam nesciunt animi reprehenderit iste. Natus voluptatum quas iusto debitis animi itaque quidem iste ut eveniet inventore.
            </p>
            <p class="product-colors">Available Colors:
                <span class="bg-purple active" data-text-primary="Cool Chips #1" data-color-primary="#7D5BA6" data-color-sec="#91216E" data-pic="assets/chips-dummy-img5.webp"></span>
                <span class="red" data-text-primary="Cool Chips #2" data-color-primary="#bd072d" data-color-sec="#AE000D" data-pic="assets/chips-dummy-img3.png"></span>
                {{-- <span class="orange" data-color-primary="88BD25" data-color-sec="#F18557" data-pic="assets/chips-dummy-img.png"></span> --}}
            </p>
            {{-- <h3>Rs. 12,800</h3> --}}
            <button  onclick="window.location.href='{{route('products')}}'">Read More</button>
        </div>
    </div>
</div>
</section>

@endsection

@section('footer')
    @include ('inc.footer')
@endsection

@section('js')
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script>
    // Change The Picture and Associated Element Color when Color Options Are Clicked.
    $(".product-colors span").click(function() {
        $(".product-colors span").removeClass("active");
        $(this).addClass("active");
        $(".active").css("border-color", $(this).attr("data-color-sec"))
        $(".products").css("background", $(this).attr("data-color-primary"));
        $(".content h2").css("color", $(this).attr("data-color-sec"));
        $(".content h3").css("color", $(this).attr("data-color-sec"));
        $(".container .imgBx").css("background", $(this).attr("data-color-sec"));
        $(".container .details button").css("background", $(this).attr("data-color-sec"));
        $(".imgBx img").attr('src', $(this).attr("data-pic"));
        $(".content h2").text( $(this).attr("data-text-primary"));
        $(".content h2").text( $(this).attr("data-text-primary"));
    });
</script>
@endsection


