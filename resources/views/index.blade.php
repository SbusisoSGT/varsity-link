@extends('layouts.main')

@section('title', 'Official Website')

@section('slider-carousel')
    <div id="templatemo_middle" class="carousel">
    	<div class="panel">
				
				<div class="details_wrapper">
					
					<div class="details">
					
						<div class="detail">
							<h2><a href="#">Varsity Link</a></h2>
                            <p>Varsity Link is a platform that is designed to support online shopping system. It seeks to provide all needed items by students.</p>
							<a href="/about" title="Read more" class="more">Read more</a>
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
					<img src="{{asset('images/slider/sefako-sunny.JPG')}}" alt="Sefako Makgatho Sunny" />
				</div><!-- /item -->
				
				<div class="item item_2">
					<img src="{{asset('images/slider/sefako-cloudy.JPG')}}" alt="Sefako Cloudy" />
				</div><!-- /item -->
				
				<div class="item item_3">
					<img src="{{asset('images/slider/01.jpg')}}" alt="Slider 03" />
				</div><!-- /item -->
				
			</div><!-- /backgrounds -->
    </div>
@endsection   
 
@section('content')
    <div id="content" class="float_r">
        	<h1>Shop All</h1>
            @foreach (App\Models\Product::all() as $product)
                <div class="product_box">
                    <a href="productdetail.html"><img src="{{asset('images/products/'.$product->image)}}" alt="{{$product->image}}" /></a>
                    <h3>{{$product->name}}</h3>
                    <p class="product_price">R{{$product->price}}</p>
                    <form method="POST" action="/cart/add">
                        @csrf
                        <input type="hidden" name="product_id" value="{{$product->id}}">
                        <input type="hidden" name="quantity" value="1">
                        <button type="submit" class="add_to_card">Add to Cart</button>
                    </form>
                    <a href="/shop/{{$product->shop->link}}/{{$product->link}}" class="detail">Detail</a>
                </div>      
            @endforeach  
    </div> 
@endsection