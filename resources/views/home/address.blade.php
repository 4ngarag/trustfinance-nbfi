@extends('layouts.master')
@section('title')
Салбар байршил
@endsection
@section('content')
<section class="page-title">
  <div class="auto-container">
    <div class="title-outer">
      <h1>САЛБАР БАЙРШИЛ</h1>
      <ul class="page-breadcrumb">
        <li><a href="/">Нүүр</a></li>
        <li>САЛБАР БАЙРШИЛ</li>
      </ul>
    </div>
  </div>
</section>
<section class="ls-section">
  <div class="auto-container">
    <div class="filters-backdrop"></div>
    <div class="row">
      @include('partials.sidemenu')
      <div class="content-column col-lg-8 col-md-12 col-sm-12">
        <div class="ls-outer">
          <div class="auto-container">
            <div class="default-tabs tabs-box">
              <div class="tab-buttons-wrap" style="margin-left: 14px;">
                <ul class="tab-buttons -pills-condensed -blue">
                  <li class="tab-btn active-btn" data-tab="#bayanzurkh_district">Баянзүрх дүүрэг</li>
                  <li class="tab-btn" data-tab="#bayangol_district">Баянгол дүүрэг</li>
                </ul>
              </div>
              <div class="tabs-content pt-50 wow fadeInUp">
                <div class="tab active-tab" id="bayanzurkh_district">
                  <div class="row">
                    <div class="widget-content">
                      <div class="candidate-block-three">
                        <div class="inner-box">
                          <div class="content">
                            <figure class="image" style="border-radius: 0%; width: 220px; height: 100%;"><img src="{{ asset('src/images/branchs/centralmall.jpg') }}" alt=""></figure>
                            <h4 class="name" style="position: relative; left: 125px;"><a href="#">CENTRAL MALL салбар</a></h4>
                            <ul class="candidate-info" style="position: relative; left: 125px;">
                              <li class="designation">Төв салбар</li>
                              <li><span class="icon flaticon-map-locator"></span> Хаяг: Улаанбаатар хот, Баянзүрх дүүрэг, 14-р хороо, Намянжүгийн гудамж, Баясах Хульж ХХК байр, 2 давхарт</li>
                              <li><span class="icon flaticon-time"></span> Даваа - Баасан 09:00 - 18:00<br>Бямба - Ням Амарна</li>
                            </ul>
                            <ul class="candidate-info" style="position: relative; left: 125px;">
                              <li><span class="icon flaticon-mobile"></span> +976 9975-8808, +976 9507-8808</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab" id="bayangol_district">
                  <div class="row">
                    <div class="widget-content">
                      <div class="candidate-block-three">
                        <div class="inner-box">
                          <div class="content">
                            <figure class="image" style="border-radius: 0%; width: 220px; height: 100%;"><img src="{{ asset('src/images/branchs/emartmall.jpg') }}" alt=""></figure>
                            <h4 class="name" style="margin-left: 125px;"><a href="#">SOLO MALL салбар</a></h4>
                            <ul class="candidate-info" style="margin-left: 125px;">
                              <li class="designation">Хороолол салбар</li>
                              <li><span class="icon flaticon-map-locator"></span> Хаяг: Улаанбаатар хот, Баянгол дүүрэг, 13-р хороо, 3-р хороолол Ард Аюушийн гудамж СОЛО молл худалдааны төв, 4 давхарт 425 тоот</li>
                              <li><span class="icon flaticon-time"></span> Даваа - Баасан 09:00 - 18:00<br>Бямба - Ням Амарна</li>
                            </ul>
                            <ul class="candidate-info" style="margin-left: 125px;">
                              <li><span class="icon flaticon-mobile"></span> +976 9404-8808, +976 9504-8808</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection