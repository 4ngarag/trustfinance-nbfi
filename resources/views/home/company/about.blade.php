@extends('layouts.master')
@section('title')
Компанийн танилцуулга
@endsection
@section('content')
<section class="page-title">
      <div class="auto-container">
        <div class="title-outer">
          <h1>БИДНИЙ ТУХАЙ</h1>
          <ul class="page-breadcrumb">
            <li><a href="/">Нүүр</a></li>
            <li>КОМПАНИЙН ТАНИЛЦУУЛГА</li>
          </ul>
        </div>
      </div>
    </section>
    <section class="about-section-three blog-single">
      <div class="auto-container">
        <div class="images-box">
          <div class="row">
            <figure class="main-image"><img src="{{ asset('src/images/resource/about.jpg') }}" draggable="false" (dragstart)="false;" class="unselectable rounded"></figure>
          </div>
        </div>
        <div class="text-box">
          <h4 style="text-align: center;"><b>ТАНИЛЦУУЛГА</b></h4>
          <p>"Трастфинанс ББСБ” ХХК 2017 онд СЗХ-с зөвшөөрлөө авч үйл ажиллагаагаа явуулж эхэлсэн. Одоогоор бид Улаанбаатар хотод ББСБ-ын чиглэлээр 10 гаруй ажиллах хүч болон 2 салбартайгаар зээлийн үйлчилгээ үзүүлж байна. Бид цаашид Финтек чиглэлээр үйл ажиллагаагаа өргөтгөхөөр судалж байна.</p>

          <p>Бид та бүхэнд Хурдан шуурхай, Цаг хугацаа хэмнэсэн, Нөхөрсөг үйлчилгээг санал болгож байна.</p>
        </div>
        <div class="fun-fact-section">
          <div class="row">
            <div class="counter-column col-lg-4 col-md-4 col-sm-12 wow fadeInUp">
              <div class="count-box"><span class="count-text" data-speed="200" data-stop="10">0</span></div>
              <h4 class="counter-title">ажилтан</h4>
            </div>
            <div class="counter-column col-lg-4 col-md-4 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
              <div class="count-box"><span class="count-text" data-speed="1000" data-stop="2">0</span></div>
              <h4 class="counter-title">салбар</h4>
            </div>
            <div class="counter-column col-lg-4 col-md-4 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
              <div class="count-box"><span class="count-text" data-speed="3000" data-stop="1523">0</span></div>
              <h4 class="counter-title">харилцагч</h4>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="work-section style-two">
      <div class="auto-container">
        <div class="row">
          <div class="work-block col-lg-4 col-md-6 col-sm-12">
            <div class="inner-box">
              <h5>АЛСЫН ХАРАА</h5>
              <p>Банкны хүрч чадахгүй байгаа харилцагч нарт шилдэг бүтээгдэхүүн үйлчилгээ үзүүлэх.</p>
            </div>
          </div>
          <div class="work-block col-lg-4 col-md-6 col-sm-12">
            <div class="inner-box">
              <h5>ЭРХЭМ ЗОРИЛГО</h5>
              <p>Монгол Улсын Санхүүгийн зах зээлийн хөгжил дэвшилд хувь нэмрээ оруулах нь манай байгууллагын туйлын зорилго юм.</p>
            </div>
          </div>
          <div class="work-block col-lg-4 col-md-6 col-sm-12">
            <div class="inner-box" style="padding-left: 20px; padding-right: 20px;">
              <h5>ҮНЭТ ЗҮЙЛС</h5>
              <p>Санаачилгатай, чадварлаг, бүтээлч баг хамт олон<br>
                Санхүүгийн сахилга баттай харилцагч нар<br>
                Шилдэг бүтээгдэхүүн</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="candidate-detail-outer">
      <div class="auto-container">
        <div class="sec-title text-center">
          <h2>2022 ОНЫ ҮЙЛ АЖИЛЛАГАА</h2>
        </div>
        <div class="row">
          <div class="content-column col-lg-6 col-md-12 col-sm-12 order-2">
            <div class="resume-outer theme-blue">
              <div class="resume-block">
                <div class="inner">
                  <span class="name">1</span>
                  <div class="title-box">
                    <div class="info-box">
                      <h3>ТРАСТ ФИНАНС ББСБ</h3>
                    </div>
                    <div class="edit-box">
                      <span class="year">2022</span>
                    </div>
                  </div>
                  <div class="text">Бүтэц зохион байгуулалтын өөрчлөлт хийв</div>
                </div>
              </div>
              <div class="resume-block">
                <div class="inner">
                  <span class="name">2</span>
                  <div class="title-box">
                    <div class="info-box">
                      <h3>ШИНЭ САЛБАР НЭЭГДЭВ</h3>
                    </div>
                  </div>
                  <div class="text">Баянгол салбар нээгдсэнээр харилцагчид илүү ойртон үйл ажиллагаа тэлэв</div>
                </div>
              </div>
              <div class="resume-block">
                <div class="inner">
                  <span class="name">3</span>
                  <div class="title-box">
                    <div class="info-box">
                      <h3>ХЭРЭГЛЭЭНИЙ ЗЭЭЛИЙН БҮТЭЭГДЭХҮҮН НЭВТРҮҮЛЭВ</h3>
                    </div>
                  </div>
                  <div class="text">Сайн электроникс, М электроникс, Бэст электроникс зэрэг байгууллагуудтай хамтран ажиллаж эхлэв</div>
                </div>
              </div>
              <div class="resume-block">
                <div class="inner">
                  <span class="name">4</span>
                  <div class="title-box">
                    <div class="info-box">
                      <h3>ТРАСТ БОНД</h3>
                    </div>
                  </div>
                  <div class="text">Хөрөнгийн зах зээл дээр хаалттай бонд амжилттай гарган үйл ажиллагаагаа тэлэв</div>
                </div>
              </div>
              <div class="resume-block">
                <div class="inner">
                  <span class="name">5</span>
                  <div class="title-box">
                    <div class="info-box">
                      <h3>ДААТГАЛЫН ҮЙЛ АЖИЛЛАГААГ ТЭЛЭВ</h3>
                    </div>
                  </div>
                  <div class="text">Мандал даатгал, Бодь даатгал зэрэг томоохон компаниудтай хамтран ажиллаж эхэллээ</div>
                </div>
              </div>
            </div>
          </div>
          <div class="content-column col-lg-6 col-md-12 col-sm-12 order-2">
            <div class="resume-outer theme-yellow">
              <div class="resume-block">
                <div class="inner">
                  <span class="name">6</span>
                  <div class="title-box">
                    <div class="info-box">
                      <h3>УРТ ХУГАЦААНЫ ЗЭЭЛИЙН БҮТЭЭГДЭХҮҮН НЭВТРҮҮЛЭВ</h3>
                    </div>
                  </div>
                  <div class="text">Орон сууц, хашаа байшин, газар зэрэг үл хөдлөх хөрөнгө худалдан авах урт хугацаат бүтээгдэхүүнтэй болов</div>
                </div>
              </div>
              <div class="resume-block">
                <div class="inner">
                  <span class="name">7</span>
                  <div class="title-box">
                    <div class="info-box">
                      <h3>ПРОГРАМЫН ХӨГЖҮҮЛЭЛТ ХИЙГДЭВ</h3>
                    </div>
                  </div>
                  <div class="text">СОТ интерфейс, мэдэгдлийн менежмент, корпорейт гэйтвэй зэрэг орчин үеийн дэвшилтэт үйлчилгээг нэвтрүүллээ</div>
                </div>
              </div>
              <div class="resume-block">
                <div class="inner">
                  <span class="name">8</span>
                  <div class="title-box">
                    <div class="info-box">
                      <h3>МӨНГӨНИЙ ЗАХЫН ОРОЛЦОГЧ БОЛОВ</h3>
                    </div>
                  </div>
                  <div class="text">МОНИ маркет фандтай хамтын ажиллагааны мастер гэрээ байгуулж мөнгөний захын оролцогч болов</div>
                </div>
              </div>
              <div class="resume-block">
                <div class="inner">
                  <span class="name">9</span>
                  <div class="title-box">
                    <div class="info-box">
                      <h3>ЭРСДЭЛИЙН МЕНЕЖМЕНТ</h3>
                    </div>
                  </div>
                  <div class="text">Нийгэм эдийн засгийн нөхцөл байдалд уялдуулан дотоод журамд өөрчлөлт оруулан үүсэж болзошгүй эрсдэлээс урьдчилан сэргийлэх арга хэмжээг авав</div>
                </div>
              </div>
              <div class="resume-block">
                <div class="inner">
                  <span class="name">10</span>
                  <div class="title-box">
                    <div class="info-box">
                      <h3>ТРАСТ ФИНАНС ББСБ</h3>
                    </div>
                    <div class="edit-box">
                      <span class="year">2023</span>
                    </div>
                  </div>
                  <div class="text">КОМПАНИЙН ЗАСАГЛАЛЫН САЙЖРУУЛАХААР АЖИЛЛАЖ БАЙНА</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <section class="clients-section">
      <div class="sec-title text-center">
        <h2>ХАМТРАГЧ БАЙГУУЛЛАГУУД</h2>
      </div>
      <div class="sponsors-outer">
        <ul class="sponsors-carousel owl-carousel owl-theme">
          <li class="slide-item">
            <figure class="image-box"><img src="{{ asset('src/images/clients/2-1.png') }}"></figure>
          </li>
          <li class="slide-item">
            <figure class="image-box"><img src="{{ asset('src/images/clients/2-2.png') }}"></figure>
          </li>
          <li class="slide-item">
            <figure class="image-box"><img src="{{ asset('src/images/clients/3-1.png') }}"></figure>
          </li>
          <li class="slide-item">
            <figure class="image-box"><img src="{{ asset('src/images/clients/3-2.png') }}"></figure>
          </li>
          <li class="slide-item">
            <figure class="image-box"><img src="{{ asset('src/images/clients/3-3.png') }}"></figure>
          </li>
          <li class="slide-item">
            <figure class="image-box"><img src="{{ asset('src/images/clients/1-1.png') }}"></figure>
          </li>
          <li class="slide-item">
            <figure class="image-box"><img src="{{ asset('src/images/clients/1-2.png') }}"></figure>
          </li>
          <li class="slide-item">
            <figure class="image-box"><img src="{{ asset('src/images/clients/1-3.png') }}"></figure>
          </li>
          <li class="slide-item">
            <figure class="image-box"><img src="{{ asset('src/images/clients/1-4.png') }}"></figure>
          </li>
          <li class="slide-item">
            <figure class="image-box"><img src="{{ asset('src/images/clients/1-5.png') }}"></figure>
          </li>
        </ul>
      </div>
    </section>
@endsection