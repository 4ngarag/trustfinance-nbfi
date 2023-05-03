@extends('layouts.master')
@section('title')
@lang('nav_Brands')
@endsection
@section('styles')
<style>
.project {
  margin: 15px 0;
}
.no-gutter .project {
  margin: 0 !important;
  padding: 0 !important;
}

.has-spacer {
  margin-left: 30px;
  margin-right: 30px;
  margin-bottom: 30px;
}
.has-spacer-extra-space {
  margin-left: 30px;
  margin-right: 30px;
  margin-bottom: 30px;
}
.has-side-spacer {
  margin-left: 30px;
  margin-right: 30px;
}
.project-title {
  font-size: 1.25rem;
}
.project-skill {
  font-size: 0.9rem;
  font-weight: 400;
  letter-spacing: 0.06rem;
}
.project-info-box {
  margin: 15px 0;
  background-color: #fff;
  padding: 30px 40px;
  border-radius: 5px;
}
.project-info-box p {
  margin-bottom: 15px;
  padding-bottom: 15px;
  border-bottom: 1px solid #d5dadb;
}
.project-info-box p:last-child {
  margin-bottom: 0;
  padding-bottom: 0;
  border-bottom: none;
}
.hovereffect {
  width: 100%;
  height: 100%;
  float: left;
  overflow: hidden;
  position: relative;
  text-align: center;
  z-index: 2;
}
.hovereffect .overlay {
  width: 100%;
  height: 100%;
  position: absolute;
  overflow: hidden;
  top: 0;
  left: 0;
  opacity: 0;
  background-color: rgba(0, 0, 0, 0.25);
  -webkit-transition: all .3s ease-in-out;
  transition: all .3s ease-in-out;
  border-radius: 5px;
}
.primary-dark .hovereffect .overlay {
  background-color: rgba(215, 48, 39, 0.95);
}
.white .hovereffect .overlay {
  background-color: rgba(255, 255, 255, 0.75);
}
.dark-overlay .hovereffect .overlay {
  background-color: rgba(0, 0, 0, 0.5);
}
.hovereffect img {
  display: block;
  position: relative;
  -webkit-transition: all .3s linear;
  transition: all .3s linear;
  border: 10px solid #fff;
  border-radius: 5px;
}
.no-image-border .hovereffect img {
  border: none;
  border-radius: 5px;
}
.no-image-border.no-gutter .hovereffect img, .no-image-border.no-gutter .hovereffect .overlay {
  border: none;
  border-radius: 0;
}
.hovereffect:hover img {
  -webkit-transform: rotate(-7deg) scale(1.33);
  -ms-transform: rotate(-7deg) scale(1.33);
  transform: rotate(-7deg) scale(1.33);
}
.hovereffect-title .project-title-wrapper {
  position: absolute;
  top: 45%;
  left: 0;
  margin-top: -32px;
  width: 100%;
  padding: 10px;
  -webkit-transition: all .5s ease-in-out;
  transition: all .5s ease-in-out;
}
.project:hover .hovereffect-title .project-title-wrapper {
  top: 50%;
}
.hovereffect-title .project-title {
  color: #fff;
  background: transparent;
  margin-bottom: 5px;
}
.white .hovereffect-title .project-title {
  color: #171819;
}
.hovereffect-title p {
  color: #fff;
  background: transparent;
  font-size: 12px;
  margin: 0;
}
.white .hovereffect-title p {
  color: #686c6d;
}
.hovereffect-title .hover-icons {
  font-size: 16px;
  background: transparent;
  position: absolute;
  bottom: 10%;
  left: 0;
  right: 0;
  -webkit-transition: all .3s ease-in-out;
  transition: all .3s ease-in-out;
}
.project:hover .hovereffect-title .hover-icons {
  bottom: 15%;
}
.hovereffect-title .hover-icons a {
  color: #fff;
}
.white .hovereffect-title .hover-icons a {
  color: #171819;
}
.hovereffect-title.project-icons {
  position: absolute;
  right: 0;
  bottom: -10px;
  -webkit-transition: all .5s ease-in-out;
  transition: all .5s ease-in-out;
}
.project:hover .hovereffect-title.project-icons {
  bottom: 0;
}
.hovereffect-title.project-icons a {
  display: inline-block;
  position: relative;
  color: #fff;
  font-size: 11px;
  line-height: 40px;
  width: 45px;
  height: 38px;
  background: #8e9294;
  opacity: 0.75;
}
.hovereffect-title.project-icons a i {
  margin-right: -2px;
}
.hovereffect-title.project-icons a:first-child {
  background-color: #7c8284;
  margin-right: -4px;
}
.project-icons a:hover, .project-icons a:first-child:hover {
  background-color: #505254 !important;
  opacity: 1;
}
.hovereffect-title.project-icons .hover-icons {
  color: #fff;
  position: relative;
  top: 0;
  left: 0;
  right: 0;
  margin-top: 0;
  opacity: 1;
}
.hovereffect-title.project-icons a:hover {
  background: #931c19;
}
.primary-dark .project-icons a {
  color: #d73027;
  background-color: #fff;
}
.primary-dark .project-icons a:hover {
  background-color: #efefef;
}
.primary-dark .project-icons a:hover {
  color: #fff;
}
.primary-dark .hovereffect-title.project-icons .hover-icons {
  color: #d73027;
}
.white .hovereffect-title .hover-icons {
  color: #171819;
}
.white .hovereffect-title.project-icons .hover-icons {
  color: #171819;
}
.hovereffect-title .hover-icons a {
  opacity: 0.7;
  margin: 0 4px;
}
.hovereffect-title .hover-icons a {
  opacity: 0.7;
}
.hovereffect-title .hover-icons a:hover {
  opacity: 1;
}
.hovereffect:hover .overlay {
  opacity: 1;
  filter: alpha(opacity=100);
}
.boxed-portfolio .card {
  background-color: #fff;
  -webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.025), 0 1px 4px rgba(0, 0, 0, 0.05) !important;
  box-shadow: 0 1px 4px rgba(0, 0, 0, 0.025), 0 1px 4px rgba(0, 0, 0, 0.05) !important;
}
.boxed-portfolio .hovereffect img, .boxed-portfolio .hovereffect .overlay {
  border: none;
  border-bottom-left-radius: 0;
  border-bottom-right-radius: 0;
}
.boxed-portfolio .card-body {
  padding: 25px 30px;
  border-top: 1px solid #efefef;
}
.font-size-16, .fs-16 {
    font-size: 16px !important;
}
.font-weight-700, .fw-bold, .fw-500 {
    font-weight: 700 !important;
}
.card-title {
    margin-bottom: 0;
}
.title-link, .title-link:focus {
    color: #171819;
}
.boxed-portfolio .card {
    background-color: #fff;
    -webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.025), 0 1px 4px rgba(0, 0, 0, 0.05) !important;
    box-shadow: 0 1px 4px rgba(0, 0, 0, 0.025), 0 1px 4px rgba(0, 0, 0, 0.05) !important;
}
.mb-50 {
    margin-bottom: 0 !important;
}
.card {
    background-color: transparent;
    border: none;
    border-radius: 5px;
    margin-bottom: 30px;
}
.mt-55 {
    margin-top: 5px !important;
}
</style>
@endsection
@section('content')
    <div class="page-title-section" style="background-image: url('{{ asset('src/img/content/brands.jpg') }}');">
        <div class="black-overlay-70"></div>
        <div class="container">
            <h1>{{ Str::upper(__('nav_Brands')) }}</h1>
        </div>
    </div>
    <div id="portfolio" class="section-wrapper pb-0">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 mt-3">
                    <ul class="nav justify-content-center" role="tablist" id="customersCats">
                        <li class="nav-item">
                            <a class="nav-link port-link active" href="#all" id="all-itme" data-toggle="tab" role="tab"
                                aria-controls="all" aria-selected="true">@lang("n_brands_All")</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link port-link" href="#khulij" id="khulij-itme" data-toggle="tab" role="tab"
                                aria-controls="khulij" aria-selected="false">@lang('n_brands_Khulij')</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link port-link" href="#ashiddari" id="ashiddari-itme" data-toggle="tab" role="tab"
                                aria-controls="ashiddari" aria-selected="false">@lang('n_brands_Ashiddari')</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link port-link" href="#khulijgoo" id="khulijgoo-itme" data-toggle="tab" role="tab"
                                aria-controls="khulijgoo" aria-selected="false">@lang('n_brands_KhulijGoo')</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row tabs-boxs">
            <div class="col-sm-12">
                <div class="tab-content mt-5">
                    <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-itme">
                        <div class="row">
                            @php $brands = App\Models\Brand::All() @endphp
                            @foreach($brands as $brand)
                            <div class="col-sm-6 col-md-6 col-lg-4 port-ite"
                                    style="background-image: url('{{ Storage::url($brand->slider_image) }}');">
                                <div class="overlay-portfolio">
                                    <a href="/brands/{{ $brand->id }}">{{ $brand->name }}</a><br>
                                    <p style="color:white; text-align: center;">{{ Str::limit(strip_tags($brand->{'intro_'.app()->getLocale()}), 80) }}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="tab-pane fade show" id="khulij" role="tabpanel" aria-labelledby="khulij-itme">
                        <div class="row">
                            @php $brand_khulij = App\Models\Brand::inRandomOrder()->select('id','name','intro_en','intro_ru','intro_mn','slider_image')->where('company_id','1')->get() @endphp
                            @foreach($brand_khulij as $brand)
                            <div class="col-sm-6 col-md-6 col-lg-4 port-ite"
                                    style="background-image: url('{{ Storage::url($brand->slider_image) }}');">
                                <div class="overlay-portfolio">
                                    <a href="/brands/{{ $brand->id }}">{{ $brand->name }}</a><br>
                                    <p style="color:white; text-align: center;">{{ Str::limit(strip_tags($brand->{'intro_'.app()->getLocale()}), 80) }}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="tab-pane fade" id="ashiddari" role="tabpanel" aria-labelledby="ashiddari-itme">
                        <div class="row">
                            @php $brand_ashiddari = App\Models\Brand::inRandomOrder()->select('id','name','intro_en','intro_ru','intro_mn','slider_image')->where('company_id','2')->limit(3)->get() @endphp
                            @foreach($brand_ashiddari as $brand)
                            <div class="col-sm-6 col-md-6 col-lg-4 port-ite"
                                    style="background-image: url('{{ Storage::url($brand->slider_image) }}');">
                                <div class="overlay-portfolio">
                                    <a href="/brands/{{ $brand->id }}">{{ $brand->name }}</a><br>
                                    <p style="color:white; text-align: center;">{{ Str::limit(strip_tags($brand->{'intro_'.app()->getLocale()}), 80) }}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="tab-pane fade" id="khulijgoo" role="tabpanel" aria-labelledby="khulijgoo-itme">
                        <div class="row">
                            @php $brand_goo = App\Models\Brand::inRandomOrder()->select('id','name','intro_en','intro_ru','intro_mn','slider_image')->where('company_id','3')->limit(3)->get() @endphp
                            @foreach($brand_goo as $brand)
                            <div class="col-sm-6 col-md-6 col-lg-4 port-ite"
                                    style="background-image: url('{{ Storage::url($brand->slider_image) }}');">
                                <div class="overlay-portfolio">
                                    <a href="/brands/{{ $brand->id }}">{{ $brand->name }}</a><br>
                                    <p style="color:white; text-align: center;">{{ Str::limit(strip_tags($brand->{'intro_'.app()->getLocale()}), 80) }}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-wrapper">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-8 mb-4">
                    <h3 class="s-subtitle-top textcolor text-center">{{ Str::upper(__('nav_Brands')) }}</h3>
                </div>
            </div>
            <ul class="row portfolio list-unstyled mb-0 boxed-portfolio">
                @foreach($brands as $brand)
                <li class="col-md-6 col-lg-4 project" data-groups="[&quot;skill1&quot;]">
                    <div class="card mb-0">
                        <div class="project m-0">
                            <figure class="portfolio-item">
                                <a href="/brands/{{ $brand->id }}" class="hovereffect">
                                    <img class="img-responsive mx-auto d-block" src="{{ Storage::url($brand->logo) }}" alt="" style="height: 110px">
                                    <div class="overlay">
                                    </div>
                                </a>
                            </figure>
                        </div>
                        <div class="card-body">
                            <a href="/brands/{{ $brand->id }}" class="card-title title-link fs-16 fw-bold">{{ $brand->name }}</a>
                            <p class="card-text mt-55 mb-50 fs-14" style="font-family: 'Barlow', sans-serif !important; font-weight: 300; font-size: 1rem; color: #686c6d; letter-spacing: 0.03rem; margin-bottom: 10px;"><b>Start:</b> {{ $brand->start_year }}</p>
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection