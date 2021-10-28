@extends('layouts.main')

@section('title', 'Search | ' . $query)

@section('content')
        <div id="content" class="float_r">
        	<h1 style="margin-bottom: 10px;">Search</h1>
                @if ($products->count() !== 0)
                    <h5 style="color: #767676;">Showing results for <span style="font-weight: 600">"{{$query}}"</span></h5>
                @endif

                @if ($products->count() !== 0)
                    @foreach ($products as $product)
                        <div class="product_box">
                            <a href="/shop/{{$product->shop->link}}/{{$product->link}}"><img src="{{ asset('images/products/'.$product->image) }}" alt="{{$product->name}}" /></a>
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
                @else
                    Nothing to see here :-(
                @endif
        </div> 
        <div class="cleaner"></div>
@endsection