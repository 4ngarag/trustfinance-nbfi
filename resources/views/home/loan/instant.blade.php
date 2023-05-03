@extends('layouts.master')
@section('title')
Шуурхай зээл
@endsection
@section('styles')
<link rel="stylesheet" href="{{ asset('src/assets/app/css/styles907a.css') }}">
@endsection
@section('content')
<section class="page-title">
    <div class="auto-container">
        <div class="title-outer">
            <h1>Шуурхай зээл</h1>
            <ul class="page-breadcrumb">
                <li><a href="/">Нүүр</a></li>
                <li>ШУУРХАЙ ЗЭЭЛ</li>
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
                    <div class="company-block-three">
                        <div class="inner-box">
                            <div class="column col-lg-12 col-md-12 col-sm-12">
                                <h4 class="title">ЗЭЭЛИЙН НӨХЦӨЛ</h4>
                                <div class="table-outer">
                                    <table class="table table-striped table-bordered">
                                        <tbody>
                                            <tr>
                                                <td>Зээлийн хэмжээ</td>
                                                <td>50,000,000 төгрөг хүртэл</td>
                                            </tr>
                                            <tr>
                                                <td>Хугацаа</td>
                                                <td>18 сар хүртэл</td>
                                            </tr>
                                            <tr>
                                                <td>Зээлийн хүү /сарын/</td>
                                                <td>3.5% - 4.0%</td>
                                            </tr>
                                            <tr>
                                                <td>Үйлчилгээний шимтгэл</td>
                                                <td>0.5%</td>
                                            </tr>
                                            <tr>
                                                <td>Барьцаа</td>
                                                <td>Хөдлөх болон үл хөдлөх хөрөнгө</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div> 
                        </div>
                    </div>
                    <div class="company-block-three">
                        <div class="inner-box">
                            <div class="column col-lg-8">
                                <h5>БҮРДҮҮЛЭХ МАТЕРИАЛ</h5><br>
                                <ul class="list-style-four">
                                    <li>Иргэний үнэмлэх</li>
                                    <li>Барьцаалах хөрөнгийн гэрчилгээ</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="company-block-three">
                        <div class="inner-box">
                            <div class="column col-lg-12">
                                <h5>ЗЭЭЛИЙН ТООЦООЛЛУУР</h5><br>
                                <div id="calculator">
                                    <div class="container text-center">Уншиж байна</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @include('partials.loan-form')
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('scripts')
<script src="{{ asset('src/js/calc-loan.js') }}"></script>
@endsection