@extends('layouts.main')

@section('title', 'Official Website')

@section('slider-carousel')
    <div id="templatemo_middle" class="carousel">
    	<div class="panel">
				
				<div class="details_wrapper">
					
					<div class="details">
					
						<div class="detail">
							<h2><a href="#">Station Shop</a></h2>
                            <p>Station Shop is free website template by templatemo for ecommerce websites or online stores. Sed aliquam arcu. Donec urna massa, cursus et mattis at, mattis quis lectus. </p>
							<a href="#" title="Read more" class="more">Read more</a>
						</div><!-- /detail -->
						
						<div class="detail">
							<h2><a href="#">Fusce hendrerit</a></h2>
                            <p>Duis dignissim tincidunt turpis eget pellentesque. Nulla consectetur accumsan facilisis. Suspendisse et est lectus, at consectetur sem.</p>
							<a href="#" title="Read more" class="more">Read more</a>
						</div><!-- /detail -->
						
						<div class="detail">
							<h2><a href="#">Aenean massa cum</a></h2>
                            <p>Sed vel interdum sapien. Aliquam consequat, diam sit amet iaculis ultrices, diam erat faucibus dolor, quis auctor metus libero vel mi.</p>
							<a href="#" title="Read more" class="more">Read more</a>
						</div><!-- /detail -->
						
					</div><!-- /details -->
					
				</div><!-- /details_wrapper -->
				
				<div class="paging">
					<div id="numbers"></div>
					<a href="javascript:void(0);" class="previous" title="Previous" >Previous</a>
					<a href="javascript:void(0);" class="next" title="Next">Next</a>
				</div><!-- /paging -->
				
				<a href="javascript:void(0);" class="play" title="Turn on autoplay">Play</a>
				<a href="javascript:void(0);" class="pause" title="Turn off autoplay">Pause</a>
				
			</div><!-- /panel -->
	
			<div class="backgrounds">
				
				<div class="item item_1">
					<img src="{{asset('images/slider/02.jpg')}}" alt="Slider 01" />
				</div><!-- /item -->
				
				<div class="item item_2">
					<img src="{{asset('images/slider/03.jpg')}}" alt="Slider 02" />
				</div><!-- /item -->
				
				<div class="item item_3">
					<img src="{{asset('images/slider/01.jpg')}}" alt="Slider 03" />
				</div><!-- /item -->
				
			</div><!-- /backgrounds -->
    </div>
@endsection   
 
@section('content')
    <div id="content" class="float_r">
        	<h1>New Products</h1>
            <div class="product_box">
            	<a href="productdetail.html"><img src="{{asset('images/product/01.jpg')}}" alt="Image 01')}}" /></a>
                <h3>Integer eleifend sed</h3>
                <p class="product_price">$ 100</p>
                <a href="shoppingcart.html" class="add_to_card">Add to Cart</a>
                <a href="productdetail.html" class="detail">Detail</a>
            </div>        	
            <div class="product_box">
            	<a href="productdetail.html"><img src="{{asset('images/product/02.jpg')}}" alt="Image 02" /></a>
                <h3>Nam cursus facilisis</h3>
                <p class="product_price">$ 200</p>
                <a href="shoppingcart.html" class="add_to_card">Add to Cart</a>
                <a href="productdetail.html" class="detail">Detail</a>
            </div>        	
            <div class="product_box no_margin_right">
            	<a href="productdetail.html"><img src="{{asset('images/product/03.jpg')}}" alt="Image 03" /></a>
                <h3>Mauris consectetur</h3>
                <p class="product_price">$ 120</p>
                <a href="shoppingcart.html" class="add_to_card">Add to Cart</a>
                <a href="productdetail.html" class="detail">Detail</a>
            </div>        	
            <div class="product_box">
            	<a href="productdetail.html"><img src="{{asset('images/product/04.jpg')}}" alt="Image 04" /></a>
                <h3>Proin volutpat</h3>
                <p class="product_price">$ 260</p>
                <a href="shoppingcart.html" class="add_to_card">Add to Cart</a>
                <a href="productdetail.html" class="detail">Detail</a>
            </div>        	
            <div class="product_box">
            	<a href="productdetail.html"><img src="{{asset('images/product/05.jpg')}}" alt="Image 05" /></a>
                <h3>Aenean tempus</h3>
                <p class="product_price">$ 80</p>
                <a href="shoppingcart.html" class="add_to_card">Add to Cart</a>
                <a href="productdetail.html" class="detail">Detail</a>
            </div>        	
            <div class="product_box no_margin_right">
            	<a href="productdetail.html"><img src="{{asset('images/product/06.jpg')}}" alt="Image 06" /></a>
                <h3>Nulla, Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow"><strong>XHTML</strong></a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow"><strong>CSS</strong></a>.</h3>
                <p class="product_price">$ 193</p>
                <a href="shoppingcart.html" class="add_to_card">Add to Cart</a>
                <a href="productdetail.html" class="detail">Detail</a>
            </div>        	
            <div class="product_box">
            	<a href="productdetail.html"><img src="{{asset('images/product/07.jpg')}}" alt="Image 07" /></a>
                <h3>Pellentesque egestas</h3>
                <p class="product_price">$ 30</p>
                <a href="shoppingcart.html" class="add_to_card">Add to Cart</a>
                <a href="productdetail.html" class="detail">Detail</a>
            </div>        	
            <div class="product_box">
            	<a href="productdetail.html"><img src="{{asset('images/product/08.jpg')}}" alt="Image 08" /></a>
                <h3>Suspendisse fermentum</h3>
                <p class="product_price">$ 220</p>
                <a href="shoppingcart.html" class="add_to_card">Add to Cart</a>
                <a href="productdetail.html" class="detail">Detail</a>
            </div>        	
            <div class="product_box no_margin_right">
            	<a href="productdetail.html"><img src="{{asset('images/product/09.jpg')}}" alt="Image 09" /></a>
                <h3>Donec laoreet velit</h3>
                <p class="product_price">$ 65</p>
                <a href="shoppingcart.html" class="add_to_card">Add to Cart</a>
                <a href="productdetail.html" class="detail">Detail</a>
            </div>  
    </div> 
@endsection