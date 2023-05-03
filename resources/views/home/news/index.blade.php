@extends('layouts.master')
@section('title')
Мэдээ мэдээлэл
@endsection
@section('content')
<section class="page-title">
    <div class="auto-container">
    <div class="title-outer">
        <h1>МЭДЭЭ МЭДЭЭЛЭЛ</h1>
        <ul class="page-breadcrumb">
        <li><a href="/">Нүүр</a></li>
        <li>МЭДЭЭ</li>
        </ul>
    </div>
    </div>
</section>
<div class="sidebar-page-container">
    <div class="auto-container">
    <div class="row">
        <div class="content-side col-lg-8 col-md-12 col-sm-12">
            <div class="message-box info">
                <p>Одоогоор мэдээ байхгүй байна.</p>
            <button class="close-btn"><span class="close_icon"></span></button>
        </div>
        </div>
        <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
        <aside class="sidebar blog-sidebar">
            <div class="filter-block">
            <h4>ЗЭЭЛИЙН ҮЙЛЧИЛГЭЭ</h4><br>
            <ul class="links-list">
                <li><a href="/loan/consumer">ХЭРЭГЛЭЭНИЙ ЗЭЭЛ</a></li>
                <li><a href="/loan/business">БИЗНЕСИЙН ЗЭЭЛ</a></li>
                <li><a href="/loan/car">АВТОМАШИНЫ ЗЭЭЛ</a></li>
                <li><a href="/loan/instant">ШУУРХАЙ ЗЭЭЛ</a></li>
                <li><a href="/loan/salary">ЦАЛИНГИЙН ЗЭЭЛ</a></li>
            </ul>
            </div>
            <div style="margin-top: 16px"></div>
            <div class="filter-block">
            <h4>ХӨРӨНГӨ ОРУУЛАЛТ</h4><br>
            <ul class="links-list">
                <li><a href="/investment/trust">ИТГЭЛЦЭЛ</a></li>
            </ul>
            </div>
        </aside>
        </div>
    </div>
    </div>
</div>
@endsection