@extends('layouts.master')
@section('title')
{{ $brand->name }}
@endsection
@section('content')
    <div class="page-title-section" style="background-image: url('{{ Storage::url($brand->slider_image) }}');">
        <div class="black-overlay-70"></div>
        <div class="container">
            <h1>{{ Str::upper($brand->name) }}</h1>
        </div>
    </div>
    <div class="section-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-9 col-xs-12">
                    <div class="blog-post pr-lg-4 pr-0">
                        {!! $brand->{'intro_'.app()->getLocale()} !!}
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="blog-post-right">
                        <h4>@lang('n_Company_Show_CompanyInfo')</h4>
                        <div class="blog-post-follow mt-20">
                            <ul>
                                <li>
                                    <i class="fas fa-user"></i>
                                    <b>@lang('n_Brand_Show_Company'):</b>
                                    <span>{{ $brand->company->{'name_'.app()->getLocale()} }}</span>
                                </li>
                                <li>
                                    <i class="fas fa-phone"></i>
                                    <b>@lang('n_Company_Show_Phone'):</b>
                                    <span>(+976) {{ $brand->company->phone }}</span>
                                </li>
                                <li>
                                    <i class="fas fa-at"></i>
                                    <b>@lang('n_Company_Show_Email'):</b>
                                    <span><a href="mailto:{{ $brand->company->email }}">{{ $brand->company->email }}</a></span>
                                </li>
                                {{-- <li>
                                    <i class="fas fa-calendar"></i>
                                    <b>@lang('n_Brand_Show_StartYear'):</b>
                                    <span>{{ $brand->start_year }}</span>
                                </li> --}}
                            </ul>
                        </div>
                        <h4>@lang('n_Company_Show_SocialMedia')</h4>
                        <div class="blog-post-follow mt-20">
                            <ul>
                                <li><a href="{{ $brand->company->facebook }}" target="_blank"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="https://www.instagram.com/bayasakh.khulij"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="https://www.youtube.com/channel/UCmAIiojWph9rDZ29HnBikvg"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection