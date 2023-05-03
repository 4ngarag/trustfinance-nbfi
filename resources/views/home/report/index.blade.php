@extends('layouts.master')
@section('title')
Компанийн тайлан
@endsection
@section('content')
<section class="page-title">
  <div class="auto-container">
    <div class="title-outer">
      <h1>ТАЙЛАН</h1>
      <ul class="page-breadcrumb">
        <li><a href="/">Нүүр</a></li>
        <li>ТАЙЛАН</li>
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
            <div class="row wow fadeInUp">
              <div class="category-block col-lg-6 col-md-6 col-sm-12">
                <div class="inner-box">
                  <div class="content">
                    <span class="icon flaticon-file"></span>
                    <h4><a href="/report/audit">САНХҮҮГИЙН АУДИТЫН ТАЙЛАН</a></h4>
                  </div>
                </div>
              </div>
              <div class="category-block col-lg-6 col-md-6 col-sm-12">
                <div class="inner-box">
                  <div class="content">
                    <span class="icon flaticon-promotion"></span>
                    <h4><a href="/report/activity">ҮЙЛ АЖИЛЛАГААНЫ ТАЙЛАН</a></h4>
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