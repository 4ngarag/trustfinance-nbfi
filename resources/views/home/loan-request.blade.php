@extends('layouts.master')
@section('title')
Зээлийн хүсэлт илгээх
@endsection
@section('content')
<section class="page-title">
  <div class="auto-container">
    <div class="title-outer">
      <h1>Зээлийн хүсэлт илгээх</h1>
      <ul class="page-breadcrumb">
        <li><a href="/">Нүүр</a></li>
        <li>ЗЭЭЛИЙН ХҮСЭЛТ</li>
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
          <div class="contact-form default-form">
            @if(Session::has('success'))
              <div class="message-box success">
                  <p>{{ Session::get('success') }}</p>
                  <button class="close-btn"><span class="close_icon"></span></button>
              </div>
            @endif
            <form method="post" action="/loan-request">
              @csrf
              <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                  <label>Овог</label>
                  <input type="text" name="lastname" placeholder="Овог*" autocomplete="off" required>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                  <label>Нэр</label>
                  <input type="text" name="firstname" placeholder="Нэр*" autocomplete="off" required>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                  <label>Регистрийн дугаар</label>
                  <input type="text" name="registration_number" placeholder="Регистрийн дугаар*" autocomplete="off" required>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                  <label>Утасны дугаар</label>
                  <input type="text" name="mobile" placeholder="Утасны дугаар" autocomplete="off" required>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                  <div class="form-group">
                  <label>Зээлийн бүтээгдэхүүн </label>
                  <select name="loan_product" class="chosen-select" required>
                    <option>Зээлийн бүтээгдэхүүн сонгоно уу</option>
                    <option value="Хэрэглээний зээл">ХЭРЭГЛЭЭНИЙ ЗЭЭЛ</option>
                    <option value="Бизнесийн зээл">БИЗНЕСИЙН ЗЭЭЛ</option>
                    <option value="Автомашины зээл">АВТОМАШИНЫ ЗЭЭЛ</option>
                    <option value="Шуурхай зээл">ШУУРХАЙ ЗЭЭЛ</option>
                    <option value="Цалингийн зээл">ЦАЛИНГИЙН ЗЭЭЛ</option>
                  </select>
                </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                  <label>Зээлийн хэмжээ</label>
                  <input type="number" name="loan_amount" placeholder="Зээлийн хэмжээ*" autocomplete="off" required>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                  <label>Зээлийн зориулалт</label>
                  <textarea name="loan_purpose" placeholder="Зээлийн зориулалтаа бичнэ үү..." required></textarea>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                  <button class="theme-btn btn-style-one" type="submit">Илгээх</button>
                </div>
              </div>
            </form>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection