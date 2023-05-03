@extends('layouts.master')
@section('title')
Компанийн засаглал
@endsection
@section('content')
<section class="page-title">
  <div class="auto-container">
    <div class="title-outer">
      <h1>Компанийн засаглал</h1>
      <ul class="page-breadcrumb">
        <li><a href="/">Нүүр</a></li>
        <li>КОМПАНИЙН ЗАСАГЛАЛ</li>
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
          <figure class="image"><img src="{{ asset('src/images/resource/shareholders.png') }}" draggable="false" (dragstart)="false;" class="unselectable"></figure>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection