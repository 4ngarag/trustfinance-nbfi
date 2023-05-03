@extends('layouts.master')
@section('title')
Тооцооллуур
@endsection
@section('content')
<section class="page-title">
  <div class="auto-container">
    <div class="title-outer">
      <h1>Тооцооллуур</h1>
      <ul class="page-breadcrumb">
        <li><a href="/">Нүүр</a></li>
        <li>ТООЦООЛЛУУР</li>
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
            <div id="calculator">
              <div class="container text-center">Уншиж байна</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
@section('scripts')
<script src="{{ asset('src/js/calc.js') }}"></script>
@endsection