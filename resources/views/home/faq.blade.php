@extends('layouts.master')
@section('title')
Түгээмэл асуулт хариулт
@endsection
@section('content')
<section class="faqs-section">
      <div class="auto-container">
        <div class="sec-title text-center">
          <h2>ТҮГЭЭМЭЛ АСУУЛТУУД</h2>
          <ul class="page-breadcrumb">
            <li><a href="index.html">Нүүр</a></li>
            <li>АСУУЛТ ХАРИУЛТ</li>
          </ul>
        </div>
        <h3>Зээл</h3>
        <ul class="accordion-box">
          <li class="accordion block active-block">
            <div class="acc-btn active">Зээлтэй хүн давхар зээл авах боложтой юу? <span class="icon flaticon-add"></span></div>
            <div class="acc-content current">
              <div class="content">
                <p>Давхар зээл авах боломжтой. Гэхдээ таны орлогын эх үүсвэр давхар зээлийн эргэн төлөлт хийх боломжтой байх хэрэгтэй.</p>
              </div>
            </div>
          </li>
          <li class="accordion block">
            <div class="acc-btn">Машинаа унаад зээл авч болох уу? <span class="icon flaticon-add"></span></div>
            <div class="acc-content">
              <div class="content">
                <p>Барьцаалагдсан тээврийн хэрэгсэл нь ББСБ-ийн нэр дээр шилжиж, жолоочийн хариуцлага болон хөрөнгийн даатгал хийгдсэн тохиолдолд машинаа унаад зээл авч болно.</p>
              </div>
            </div>
          </li>
          <li class="accordion block">
            <div class="acc-btn">Зээл чөлөөлөх үү? <span class="icon flaticon-add"></span></div>
            <div class="acc-content">
              <div class="content">
                <p>МБ-ний журмаар зээлийг зээлээр хаахыг зөвшөөрдөггүй тул зээл чөлөөлөхгүй.</p>
              </div>
            </div>
          </li>
          <li class="accordion block">
            <div class="acc-btn">Зээлийн барьцаанд юу тавьж болох вэ? <span class="icon flaticon-add"></span></div>
            <div class="acc-content">
              <div class="content">
                <p>Орон сууц, хашаа байшин, гаалийн бичигтэй болон улсын дугаартай тээврийн хэрэгсэл, автомашины зогсоол, үйлдвэр үйлчилгээний обьект барьцаална.</p>
              </div>
            </div>
          </li>
        </ul>
        <h3>Барьцаа хөрөнгийн үнэлгээ</h3>
        <ul class="accordion-box">
          <li class="accordion block active-block">
            <div class="acc-btn active">Барьцаа хөрөнгийн үнэлгээ <span class="icon flaticon-add"></span></div>
            <div class="acc-content current">
              <div class="content">
                <p>Тээврийн хэрэгсэл, орон сууц, хашаа байшин, газрын зах зээлийн үнэлгээний 50 хүртэлх хувьд зээлийн хэмжээг тооцож олгоно.</p>
              </div>
            </div>
          </li>
          <li class="accordion block">
            <div class="acc-btn">Эд хөрөнгийн даатгалд заавал хамрагдах уу? <span class="icon flaticon-add"></span></div>
            <div class="acc-content">
              <div class="content">
                <p>Шуурхай зээлийн тээврийн хэрэгслийг унаж явах нөхцөлтэй зээл олгох тохиолдол жолоочийн хариуцлага болон тээврийн хэрэгслийн даатгал заавал хийлгэнэ.</p>
              </div>
            </div>
          </li>
          <li class="accordion block">
            <div class="acc-btn">Өдөрт нь зээл олгох уу /Зээлийн судалгааны хугацаа/ <span class="icon flaticon-add"></span></div>
            <div class="acc-content">
              <div class="content">
                <p>Таны зүгээс шаардлагатай материал, бичиг баримтыг бүрдүүлсэн тохиолдолд зээл өдөртөө шийдэгдэх боломжтой ба барьцааны төрлөөс хамаарна. Автомашин барьцаалж буй бол өдөртөө зээл гарах бөгөөд үл хөдлөх хөрөнгө барьцаалж буй тохиолдолд үл хөдлөх хөрөнгийн газар яаралтайгаар бүртгүүлэхэд 1 хонож бүртгэгдэн гардаг юм. Шуурхай зээлийн хувьд бичиг баримт бүрдсэн, ямар нэгэн зөрчилгүй тохиолдолд өдөрт нь зээл олгох боломжтой.  Банкнаас ялгарах гол давуу тал бол зээл авах хүндрэлийг арилгах, хялбар болгоход  юм. Бүрдүүлэх баримт бичиг, шийдвэрлэх хугацаа зэрэг нь гол хүндрэл бөгөөд үүнийг бид хялбар шийдэж чадна.</p>
              </div>
            </div>
          </li>
          <li class="accordion block">
            <div class="acc-btn">Зээлээ урьдчилж хаах боломжтой юу? <span class="icon flaticon-add"></span></div>
            <div class="acc-content">
              <div class="content">
                <p>Зээл урьдчилан хаах боломжтой. Зээлийг ашигласан хоногоор тооцож хүүгээ төлнө. Гэхдээ зээлийг олгосон өдрөөс хойш хамгийн багадаа 10 хоногийн хүүг тооцож авдаг.</p>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </section>
@endsection