@extends('layouts.main')

@section('title', 'Cart')

@section('content')
    <div id="content" class="float_r">
        <h1>Shopping Cart</h1>

        @if(empty(session('cart')))
            <span class="empty-cart" style="font-size: 1.2rem">
                Your Cart is empty
            </span>
        @else
            <table width="680px" cellspacing="0" cellpadding="5">
                <tr bgcolor="#ddd">
                        <th width="220" align="left">Image </th> 
                    	<th width="180" align="left">Description </th> 
                   	  	<th width="100" align="center">Quantity </th> 
                    	<th width="60" align="right">Price </th> 
                    	<th width="60" align="right">Total </th> 
                    	<th width="90"> </th>
            </tr> 
            
            @foreach(session('cart')->cartProducts() as $key => $item)
                    <tr>
                        <td><img style="width: 65%" src="{{ asset('images/products/'.$item->image) }}" alt="{{$item->name}}" /></td> 
                        <td>{{$item->name}}</td> 
                            <td align="center"><input type="text" value="{{session('cart')->items[$key]['quantity']}}" style="width: 20px; text-align: right" /> </td>
                            <td align="right">R{{session('cart')->items[$key]['total'] / session('cart')->items[$key]['quantity']}}</td> 
                            <td align="right">R{{session('cart')->items[$key]['total']}}</td>
                            <td align="center"> 
                                <form action="/cart/remove" method="POST">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{$item->id}}">
                                    <button type="submit" class="button-link">Remove</button>
                                </form>
						</tr>
            @endforeach
					</table>
        @endif
                    <div style="float:right; width: 215px; margin-top: 20px;">
                    
					<p><a href="/checkout">Proceed to checkout</a></p>
                    <p><a href="javascript:history.back()">Continue shopping</a></p>
                    	
                    </div>
            
        </div> 
@endsection