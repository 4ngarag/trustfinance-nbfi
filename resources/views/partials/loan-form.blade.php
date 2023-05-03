<div class="company-block-three">
    <div class="inner-box">
        <div class="column col-lg-12 col-md-12 col-sm-12">
            <h5>ЗЭЭЛИЙН ХҮСЭЛТ ИЛГЭЭХ</h5><br>
            @if(Session::has('success'))
                <div class="message-box success">
                    <p>{{ Session::get('success') }}</p>
                    <button class="close-btn"><span class="close_icon"></span></button>
                </div>
            @endif
            <form class="default-form" method="post" action="/loan-request">
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
                    @if(Request::is('loan/business'))         
                        <input type="hidden" name="loan_product" value="Бизнесийн зээл">        
                    @elseif(Request::is('loan/car'))
                        <input type="hidden" name="loan_product" value="Автомашины зээл">
                    @elseif(Request::is('loan/consumer'))
                        <input type="hidden" name="loan_product" value="Хэрэглээний зээл">
                    @elseif(Request::is('loan/instant'))
                        <input type="hidden" name="loan_product" value="Шуурхай зээл">
                    @elseif(Request::is('loan/salary'))
                        <input type="hidden" name="loan_product" value="Цалингийн зээл">         
                    @endif
                    <input type="text" name="loan_amount" placeholder="Зээлийн хэмжээ" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <div class="form-group chosen-search">
                        <label>Тайлбар</label>
                        <textarea name="loan_purpose" placeholder="Жишээ нь: Ямар бүтээгдэхүүн хэдэн төгрөгний зээл авах талаар дэлгэрэнгүй бичнэ үү." required></textarea>
                    </div>
                </div>
                <button type="submit" class="theme-btn btn-style-one large">Илгээх</button>
            </form>
        </div>
    </div>
</div>