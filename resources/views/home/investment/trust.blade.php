@extends('layouts.master')
@section('title')
Итгэлцлийн үйлчилгээ
@endsection
@section('content')
<section class="page-title">
    <div class="auto-container">
        <div class="title-outer">
            <h1>Итгэлцэл</h1>
            <ul class="page-breadcrumb">
                <li><a href="/">Нүүр</a></li>
                <li>ХӨРӨНГӨ ОРУУЛАЛТ</li>
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
                            <div class="column col-lg-12">
                                <h5>ИТГЭЛЦЭЛ ГЭЖ ЮУ ВЭ?</h5><br>
                                <p>“Итгэлцлийн үйлчилгээ" гэдэг нь итгэл хүлээлгэгчийн актив буюу бэлэн мөнгө, зээл, бусад активыг үнэгүйдлээс хамгаалж, ашиг олж өгөх зорилгоор тэдгээртэй харилцан тохиролцсон гэрээний үндсэн дээр итгэл хүлээгчээс  нэр бүхий активыг түр хугацаанд хянах,  ашиглах, захиран зарцуулах үйл ажиллагаа юм.</p><br>
                                <p>Та манай салбар нэгж дээр өөрийн биеэр ирснээр 10 минутын дотор хадгаламжтай болохоос гадна бид танд хамгийн өндөр өгөөжийг санал болгож байна.</p>              
                            </div>
                        </div>
                    </div>
                    <div class="company-block-three">
                        <div class="inner-box">
                            <div class="column col-lg-12">
                                <h5>ИТГЭЛЦЛИЙН ТООЦООЛЛУУР</h5><br>
                                <div id="calculator">
                                    <div class="container text-center">Уншиж байна</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="company-block-three">
                        <div class="inner-box">
                            <div class="column col-lg-12 col-md-12">
                                <h5>ХӨРӨНГӨ ОРУУЛАЛТЫН ТАЛААР МЭДЭЭЛЭЛ АВАХ</h5><br>
                                @if(Session::has('success'))
                                    <div class="message-box success">
                                        <p>{{ Session::get('success') }}</p>
                                        <button class="close-btn"><span class="close_icon"></span></button>
                                    </div>
                                @endif
                                <form class="default-form" method="post" action="/investment/trust">
                                    @csrf
                                    <div class="row">
                                        <div class="form-group col">
                                            <input type="text" name="lastname" placeholder="Овог" autocomplete="off" required>
                                        </div>
                                        <div class="form-group col">
                                            <input type="text" name="firstname" placeholder="Нэр" autocomplete="off" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col">
                                            <input type="text" name="registration_number" placeholder="Регистрийн дугаар" autocomplete="off" required>
                                        </div>
                                        <div class="form-group col">
                                            <input type="text" name="mobile" placeholder="Утасны дугаар" autocomplete="off" required>
                                        </div>
                                    </div>
                                    <div class="form-group col">        
                                        <input type="text" name="invest_amount" placeholder="Хөрөнгө оруулалтын хэмжээ" autocomplete="off" required>
                                    </div>
                                    <button type="submit" class="theme-btn btn-style-one large">Илгээх</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('scripts')
<script src="{{ asset('src/js/calc-savings.js') }}"></script>
@endsection