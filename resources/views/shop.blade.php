@extends('layouts.main')

@section('title', 'Shop | ' . $shop->name)

@section('content')
        <div id="content" class="float_r">
        	<h1>{{$shop->name}}</h1>
            @foreach ($shop->products as $product)
                <div class="product_box">
                    <a href="/{{$shop->link}}/{{$product->link}}"><img src="{{ asset('images/products/'.$product->image) }}" alt="{{$product->name}}" /></a>
                    <h3>{{$product->name}}</h3>
                    <p class="product_price">R {{$product->price}}</p>
                    <a href="shoppingcart.html" class="add_to_card">Add to Cart</a>
                    <a href="/{{$shop->link}}/{{$product->link}}" class="detail">Detail</a>
                </div>    
            @endforeach
        </div> 
        <div class="cleaner"></div>
@endsection