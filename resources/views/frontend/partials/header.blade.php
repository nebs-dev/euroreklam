<div class="header-wrapper">
	<div class="logo-wrapper">
		<a href="#"><img src="images/logo_euroreklam.png" ></a>
	</div>
	<div class="more-info">
		<div class="more-info-menu-trigger toggle-menu"><span class="fa fa-bars"></span></div>
		<div class="more-info-box">
			<div class="fa fa-phone"></div>
			<div class="more-info-box-wrapper">
				<div class="more-info-box-title">Nazovite odmah!</div>
				<div class="more-info-box-details"><a href="tel:123456789">123456789</a></div>
			</div>
		</div>
	</div>
	<div class="menu-wrapper">
		<div class="menu-close icon-close toggle-menu">x</div>
		<ul class="menu">
			<li class="menu-item {{ request()->route()->getName() == 'home' ? 'current' : '' }}">
				<a href="/" class="menu-item-url">Home</a>
			</li>
			<li class="menu-item {{ request()->route()->getName() == 'klime' ? 'current' : '' }}">
				<a href="/klime" class="menu-item-url">Klime</a>
			</li>
			<li class="menu-item {{ request()->route()->getName() == 'o_nama' ? 'current' : '' }}">
				<a href="/o_nama" class="menu-item-url">O nama</a>
			</li>
			<li class="menu-item {{ request()->route()->getName() == 'kontakt' ? 'current' : '' }}">
				<a href="/kontakt" class="menu-item-url">Kontakt</a>
			</li>
		</ul>
	</div>
</div>

@section('js')
<script type="text/javascript">
	jQuery(document).ready(function(){
		jQuery('.toggle-menu').click(function(){
			jQuery('.menu-wrapper').stop().toggleClass('active');
		});
	});
</script>
@endsection