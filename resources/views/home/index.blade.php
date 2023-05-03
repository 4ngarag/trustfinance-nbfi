@extends('layouts.master')
@section('title')
Нүүр хуудас
@endsection
@section('content')
<section class="banner-section-ten">
      <div class="banner-carousel owl-carousel owl-theme default-nav">
        <div class="slide-item bg-image" style="background-image: url({{ asset('src/images/background/slider1.jpg') }});"></div>
      </div>
      <div class="auto-container">
        <div class="cotnent-box">
          <div class="title-box wow fadeInUp" data-wow-delay="500ms">
            <h3 style="display:none;">ЗЭЭЛИЙН ҮЙЛЧИЛГЭЭ</h3>
          </div>
          <div class="top-features" style="max-width: 100%;">
            <div class="carousel-outer wow fadeInUp">
              <div class="companies-carousel owl-carousel owl-theme default-dots">
                <div class="feature-block-two col-lg-12 col-md-6 col-sm-12">
                  <a href="/loan/consumer">
                    <div class="inner-box">
                      <span class="icon flaticon-money-2"></span>
                      <h4>Хэрэглээний зээл</h4>
                      <span class="count">Та үл хөдлөх хөрөнгө болон автомашинаа барьцаалан санхүүгийн хэрэгцээгээ хангах зээлийн үйлчилгээ</span>
                    </div>
                  </a>
                </div>
                <div class="feature-block-two col-lg-12 col-md-6 col-sm-12" id="myDIV">
                  <a href="/loan/business">
                    <div class="inner-box">
                      <span class="icon flaticon-briefcase"></span>
                      <h4>Бизнесийн зээл</h4>
                      <span class="count">Таны бизнесийн үйл ажиллагааг өргөжүүлэх, хөгжүүлэхэд шаардлагатай санхүүгийн хэрэгцээг хангах зорилгоор олгож буй зээл</span>
                    </div>
                  </a>
                </div>
                <div class="feature-block-two col-lg-12 col-md-6 col-sm-12">
                  <a href="/loan/car">
                    <div class="inner-box">
                      <span class="icon flaticon-car"></span>
                      <h4>Автомашины зээл</h4>
                      <span class="count">Дугаар аваагүй болон дугаартай автомашин зэрэг хүссэн машинаа худалдан авахад зориулсан зээлийн үйлчилгээ</span>
                    </div>
                  </a>
                </div>
                <div class="feature-block-two col-lg-12 col-md-6 col-sm-12">
                  <a href="/loan/instant">
                    <div class="inner-box">
                      <span class="icon flaticon-rocket-ship"></span>
                      <h4>Шуурхай зээл</h4>
                      <span class="count">Таны богино хугацааны санхүүгийн хэрэгцээг хангахад зориулж автомашин, орон сууц барьцаалсан зээл</span>
                    </div>
                  </a>
                </div>
                <div class="feature-block-two col-lg-12 col-md-6 col-sm-12">
                  <a href="/loan/salary">
                    <div class="inner-box">
                      <span class="icon flaticon-headhunting"></span>
                      <h4>Цалингийн зээл</h4>
                      <span class="count">Хамтран ажиллах гэрээтэй байгууллагад ажилладаг ажиллагсдын богино хугацааны хэрэгцээг хангах зорилгоор олгох зээл</span>
                    </div>
                  </a>
                </div>
                <div class="feature-block-two col-lg-12 col-md-6 col-sm-12">
                  <a href="/investment/trust">
                    <div class="inner-box">
                      <span class="icon flaticon-money-1"></span>
                      <h4>Итгэлцлийн үйлчилгээ</h4>
                      <span class="count">Таны актив буюу бэлэн мөнгө, зээл, бусад активыг үнэгүйдлээс хамгаалж, ашиг олж өгөх зорилготой үйлчилгээ</span>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
@section('scripts')
<script>
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:0,
        autoplay:true,
        autoplayHoverPause:true,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
                nav:true
            },
            600:{
                items:2,
                nav:false
            },
            1000:{
                items:3,
                nav:false,
                loop:false
            }
        }
    })
</script>
@endsection