@if(Request::is('/'))  
<header class="main-header header-style-two">
@else
<span class="header-span"></span>
<header class="main-header header-style-two" style="background-color: #22218C;">
@endif
	<div class="auto-container">
	<div class="main-box">
		<div class="nav-outer">
		<div class="logo-box">
			<div class="logo"><a href="/"><img src="{{ asset('src/images/logo-light.png') }}" width="90%"></a></div>
		</div>
		<nav class="nav main-menu">
			<ul class="navigation" id="navbar">
			<li class="{{ (request()->is('company/*')) ? 'current' : '' }} dropdown">
				<span>БИДНИЙ ТУХАЙ</span>
				<ul>
				<li class="{{ (request()->is('company/about')) ? 'current' : '' }}"><a href="/company/about">КОМПАНИЙН ТАНИЛЦУУЛГА</a></li>
				<li class="{{ (request()->is('company/management')) ? 'current' : '' }}"><a href="/company/management">КОМПАНИЙН ЗАСАГЛАЛ</a></li>
				</ul>
			</li>
			<li class="{{ (request()->is('loan/*')) ? 'current' : '' }} dropdown">
				<span>ЗЭЭЛИЙН ҮЙЛЧИЛГЭЭ</span>
				<ul>
				<li class="{{ (request()->is('loan/consumer')) ? 'current' : '' }}"><a href="/loan/consumer">ХЭРЭГЛЭЭНИЙ ЗЭЭЛ</a></li>
				<li class="{{ (request()->is('loan/business')) ? 'current' : '' }}"><a href="/loan/business">БИЗНЕСИЙН ЗЭЭЛ</a></li>
				<li class="{{ (request()->is('loan/car')) ? 'current' : '' }}"><a href="/loan/car">АВТОМАШИНЫ ЗЭЭЛ</a></li>
				<li class="{{ (request()->is('loan/instant')) ? 'current' : '' }}"><a href="/loan/instant">ШУУРХАЙ ЗЭЭЛ</a></li>
				<li class="{{ (request()->is('loan/salary')) ? 'current' : '' }}"><a href="/loan/salary">ЦАЛИНГИЙН ЗЭЭЛ</a></li>
				</ul>
			</li>
			<li class="{{ (request()->is('investment/*')) ? 'current' : '' }} dropdown">
				<span>ХӨРӨНГӨ ОРУУЛАЛТ</span>
				<ul>
				<li class="{{ (request()->is('investment/trust')) ? 'current' : '' }}"><a href="/investment/trust">ИТГЭЛЦЭЛ</a></li>
				</ul>
			</li>
			<li class="{{ (request()->is('news/*')) ? 'current' : '' }}"><a href="/news"><span>МЭДЭЭ</span></a></li>
			<li class="{{ (request()->is('address')) ? 'current' : '' }}"><a href="/address"><span>САЛБАР БАЙРШИЛ</span></a></li>
			<li class="mm-add-listing">
				<a href="/loan-request" class="theme-btn btn-style-one">Зээлийн хүсэлт илгээх</a>
				<span>
				<span class="contact-info">
					<span class="phone-num"><span>Утас</span><a href="tel:+97699758808">+976 9975-8808</a></span>
					<span class="address">Баянзүрх дүүрэг, 14-р хороо, Намянжүгийн гудамж, <br>Баясах Хульж ХХК байр, 2 давхарт</span>
					<a href="mailto:info@trustfinance.mn" class="email">info@trustfinance.mn</a>
				</span>
				<span class="social-links">
					<a href="https://www.facebook.com/TrustFinanceNBFI/" target="_blank"><i class="fab fa-facebook-f" title="Facebook хуудас"></i></a>
					<a href="/address"><i class="fa fa-map-marker" title="Салбар байршил"></i></a>
				</span>
				</span>
			</li>
			</ul>
		</nav>
		</div>
		<div class="outer-box">
		<div class="btn-box">
			<a href="/loan-request" class="theme-btn {{ (request()->is('loan-request')) ? 'btn-style-five' : 'btn-style-six' }}">ЗЭЭЛИЙН ХҮСЭЛТ</a>
		</div>
		</div>
	</div>
	</div>
	<div class="mobile-header">
	<div class="logo"><a href="index.html"><img src="{{ asset('src/images/logo.png') }}"></a></div>
	<div class="nav-outer clearfix">
		<div class="outer-box">
		<a href="#nav-mobile" class="mobile-nav-toggler navbar-trigger"><span class="flaticon-menu-1"></span></a>
		</div>
	</div>
	</div>
	<div id="nav-mobile"></div>
</header>