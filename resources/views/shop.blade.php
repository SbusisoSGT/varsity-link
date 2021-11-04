@extends('layouts.main')

@section('title', 'Shop | ' . $shop->name)

@section('slider-carousel')
    <div id="templatemo_middle" class="carousel" style="background: #f0f0f0; padding: 1.5rem; height: 170px">
    	<h3>{{$shop->name}}</h3>
        <h4 style="font-weight: 500">Owner: {{$shop->owner}}</h4>
        <h4 style="font-weight: 500">Location: {{$shop->location}}</h4>
        <h4 style="font-weight: 500">Email: {{$shop->email}}</h4>
        <h4 style="font-weight: 500">Contact: {{$shop->contact}}</h4>
    </div>
@endsection 

@section('content')
        <div id="content" class="float_r">
        	<h2>Featured Products</h2>
            @foreach ($shop->products as $product)
                <div class="product_box">
                    <a href="/shop/{{$shop->link}}/{{$product->link}}"><img src="{{ asset('images/products/'.$product->image) }}" alt="{{$product->name}}" /></a>
                    <div class="star-container">
                        <img src="{{ asset('icons/star-filled.svg') }}" alt="">
                        <img src="{{ asset('icons/star-filled.svg') }}" alt="">
                        <img src="{{ asset('icons/star-filled.svg') }}" alt="">
                        <img src="{{ asset('icons/star-filled.svg') }}" alt="">
                        <img src="{{ asset('icons/star-unfilled.svg') }}" alt="">
                    </div>
                    <h3>{{$product->name}}</h3>
                    <p class="product_price">R{{$product->price}}</p>
                    <form method="POST" action="/cart/add">
                        @csrf
                        <input type="hidden" name="product_id" value="{{$product->id}}">
                        <input type="hidden" name="quantity" value="1">
                        <button type="submit" class="add_to_card">Add to Cart</button>
                    </form>
                    <a href="/shop/{{$shop->link}}/{{$product->link}}" class="detail">Detail</a>
                </div>    
            @endforeach
        </div> 
        <div class="cleaner"></div>
@endsection