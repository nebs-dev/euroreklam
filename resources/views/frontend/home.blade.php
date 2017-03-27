@extends('frontend.layouts.main')

@section('content')

<div id="home-slider" class="home-slider owl-carousel owl-theme">
	<div class="faf">
		<img src="/css/frontend/images/slide1.jpg" alt="euroreklam" />
	</div>
	<div class="home-slider-item item">
		<img src="/css/frontend/images/slide2.jpg" alt="euroreklam" />
	</div>
	<div class="home-slider-item item">
		<img src="/css/frontend/images/slide3.jpg" alt="euroreklam" />
	</div>
	<div class="home-slider-item item">
		<img src="/css/frontend/images/slide3.jpg" alt="euroreklam" />
	</div>
</div>
@section('js')
<script type="text/javascript">
	jQuery(document).ready(function(){
		jQuery('#home-slider').owlCarousel({
		    margin:0,
		    nav:true,
		    items: 1,
		    singleItem: true
		});
	});
</script>
@endsection


<homepage-items :items="{{ $items }}"></homepage-items>

@stop
