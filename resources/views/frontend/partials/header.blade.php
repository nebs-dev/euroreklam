<a href="#"><img src="images/logo_euroreklam.png" ></a>

<div class="menu-wrapper">
	<ul class="menu">
		<li class="menu-item {{ request()->route()->getName() == 'home' ? 'current' : '' }}">
			<a href="#" class="menu-item-url">Home</a>
		</li>
		<li class="menu-item {{ request()->route()->getName() == 'klime' ? 'current' : '' }}">
			<a href="#" class="menu-item-url">Klime</a>
		</li>
		<li class="menu-item {{ request()->route()->getName() == 'o_nama' ? 'current' : '' }}">
			<a href="#" class="menu-item-url">O nama</a>
		</li>
		<li class="menu-item {{ request()->route()->getName() == 'kontakt' ? 'current' : '' }}">
			<a href="#" class="menu-item-url">Kontakt</a>
		</li>
	</ul>
</div>