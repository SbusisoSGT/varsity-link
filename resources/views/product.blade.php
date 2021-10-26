@extends('layouts.main')

@section('title', 'Shop | ' . $product->shop->name . ' | ' . $product->name)

@section('content')
        <div id="content" class="float_r">
        	
            <h1>{{$product->name}}</h1>
            <div class="content_half float_l">
        	<a  rel="lightbox[portfolio]" href="images/product/10_l.jpg"><img src="{{ asset('images/products/'.$product->image) }}" alt="Image 01" /></a>
            </div>
            <div class="content_half float_r">
				<table>
                    <tr>
                        <td height="30" width="160">Price:</td>
                        <td>R {{$product->price}}</td>
                    </tr>
                    <tr>
                        <td height="30">Availability:</td>
                        <td>In Stock</td>
                    </tr>
                    <tr>
                        <td height="30">Model:</td>
                        <td>Product {{$product->id}}</td>
                    </tr>
                    <tr>
                        <td height="30">Manufacturer:</td>
                        <td>{{$product->shop->name}}</td>
                    </tr>
                    <tr><td height="30">Quantity</td><td><input type="text" value="1" style="width: 20px; text-align: right" /></td></tr>
                </table>
                <div class="cleaner h20"></div>
                <a href="shoppingcart.html" class="add_to_card">Add to Cart</a>
			</div>
            <div class="cleaner h30"></div>
            
            <h5>Product Description</h5>
            <p>{{$product->description}}</p>	
            
            <div class="cleaner h50"></div>
            
            <h4>Related Products</h4>
            
            @foreach ($product->relatedProducts() as $prod)
                <div class="product_box">
                    <a href="/shop/{{$product->shop->link}}/{{$prod->link}}"><img src="{{ asset('images/products/'.$prod->image)}}" alt="{{$prod->name}}" /></a>
                    <h3>{{$prod->name}}</h3>
                    <p class="product_price">R {{$prod->price}}</p>
                    <a href="shoppingcart.html" class="add_to_card">Add to Cart</a>
                    <a href="/shop/{{$prod->shop->link}}/{{$prod->link}}" class="detail">Detail</a>
                </div>
            @endforeach     
        </div>   
@endsection