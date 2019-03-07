<div class="top_panel_fixed_wrap"></div>
<header class="top_panel_wrap top_panel_style_1 scheme_original">
	<div class="top_panel_wrap_inner top_panel_inner_style_1 top_panel_position_above">
		<div class="top_panel_middle">
			<div class="content_wrap">
				<div class="columns_wrap columns_fluid no_margins">
					<div class="column-1_3 contact_logo">
						<div class="logo">
							<a href="/"><img src="{{ asset('images/logo_euroreklam.jpg') }}" class="logo_main" alt="" width="246" height="52"></a>
						</div>
					</div>
					<div class="contact_information column-2_3">
						<div class="columns_wrap columns_fluid no_margins">
							<div class="contact_field contact_phone column-1_3">
								<span class="contact_icon icon-phone-call"></span>
								<span class="contact_label contact_phone">Telefon</span>
								<span class="contact_email">099 733 46 17</span>
							</div>
							<div class="contact_field open_hours column-1_3">
								<span class="contact_icon icon-clock-1"></span>
								<span class="contact_label open_hours_label">Radno vrijeme</span>
								<span class="open_hours_time">00.00-24.00</span>
							</div>
							<div class="contact_field contact_address column-1_3">
								<span class="contact_icon icon-pin-1"></span>
								<span class="contact_label contact_address_1">Hrvatska</span>
								<span class="contact_address_2">31000, Osijek</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="top_panel_bottom">
			<div class="content_wrap clearfix">
				<nav class="menu_main_nav_area menu_hover_fade">
					<ul id="menu_main" class="menu_main_nav">
						<li class="menu-item {{ activeClass('/') }}"><a href="/"><span>Pocetna</span></a></li>						
						<li class="menu-item {{ activeClass('klime') }}"><a href="/klime"><span>Klime</span></a></li>						
						<li class="menu-item {{ activeClass('kontakt') }}"><a href="/kontakt"><span>Kontakt</span></a></li>
					</ul>
				</nav>
				{{-- <a href="appointments.html" class="make_appoinment_button sc_button sc_button_square sc_button_style_filled sc_button_size_small sc_button_style_color_style2">Make an Appoinment</a> --}}

			</div>
		</div>

	</div>
</header>

<div class="header_mobile">
	<div class="content_wrap">
		<div class="menu_button icon-menu"></div>
		<div class="logo">
			<a href="/"><img src="{{ asset('images/logo_euroreklam.jpg') }}" class="logo_main" alt="" width="246" height="52"></a>
		</div>
	</div>
	<div class="side_wrap">
		<div class="close">Close</div>
		<div class="panel_top">
			<nav class="menu_main_nav_area">
				<ul id="menu_mobile" class="menu_main_nav">
					<li class="menu-item {{ activeClass('/') }}"><a href="/"><span>Pocetna</span></a></li>
					<li class="menu-item {{ activeClass('klime') }}"><a href="/klime"><span>Klime</span></a></li>
					<li class="menu-item {{ activeClass('kontakt') }}"><a href="/kontakt"><span>Kontakt</span></a></li>
				</ul>
			</nav>
		</div>

		<div class="panel_middle">
			<div class="contact_field contact_phone column-1_3">
				<span class="contact_icon icon-phone-call"></span>
				<span class="contact_label contact_phone">Telefon</span>
				<span class="contact_email">099 733 46 17</span>
			</div>
			<div class="contact_field open_hours column-1_3">
				<span class="contact_icon icon-clock-1"></span>
				<span class="contact_label open_hours_label">Radno vrijeme</span>
				<span class="open_hours_time">00.00-24.00</span>
			</div>
			<div class="contact_field contact_address column-1_3">
				<span class="contact_icon icon-pin-1"></span>
				<span class="contact_label contact_address_1">Hrvatska</span>
				<span class="contact_address_2">31000, Osijek</span>
			</div>
		</div>

		<div class="panel_bottom">
		</div>
	</div>
	<div class="mask"></div>
</div>
