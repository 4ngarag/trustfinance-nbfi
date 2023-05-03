@extends('layouts.master')
@section('title')
Үйл ажиллагааны тайлан
@endsection
@section('content')
<section class="page-title">
  <div class="auto-container">
    <div class="title-outer">
      <h1>ҮЙЛ АЖИЛЛАГААНЫ ТАЙЛАН</h1>
      <ul class="page-breadcrumb">
        <li><a href="/">Нүүр</a></li>
        <li><a href="/report">ТАЙЛАН</a></li>
        <li>ҮЙЛ АЖИЛЛАГААНЫ ТАЙЛАН</li>
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
                      <li class="tab-btn active-btn" data-tab="#2022">2022</li>
                      <li class="tab-btn" data-tab="#2023">2023</li>
                    </ul>
                </div>
                <div class="tabs-content wow fadeInUp">
                <div class="tab active-tab" id="2022">
                    <div class="row">
                    <embed src="{{ asset('src/files/activity-report-2022.pdf') }}" type="application/pdf" width="100%" height="600px" />
                    </div>
                </div>
                <div class="tab" id="2023">
                    <div class="row">
                      <div class="message-box info">
                        <p>2023 оны тайлан ороогүй байна.</p>
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