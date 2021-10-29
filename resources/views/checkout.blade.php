@extends('layouts.main')

@section('title', 'Checkout')

@section('content')
        <div id="content" class="float_r">
        	<h2>Checkout</h2>
            <form action="/checkout" method="POST">
                @csrf
                    <h5><strong>SHIPPING ADDRESS</strong></h5>
            <div class="content_half float_l checkout">
                Address:
                <input type="text"  style="width:300px;"  />
                City:
                <input type="text"  style="width:300px;"  />
                Postal Code:
                <input type="text"  style="width:300px;"  />
            </div>
            
            <div class="content_half float_r checkout">
            	Email:
				<input type="text"  style="width:300px;" value="{{auth()->guest() ? '' : auth()->user()->email}}" />
                Phone:<br />
				<span style="font-size:10px">Please, specify your reachable phone number. YOU MAY BE GIVEN A CALL TO VERIFY AND COMPLETE THE ORDER.</span>
                <input type="text"  style="width:300px;"  />
            </div>
            
            <div class="cleaner h50"></div>
            <h5><strong>PAYMENT INFORMATION</strong></h5>
            <div class="content_half checkout">
				Card Holder:                				
                <input type="text"  style="width:300px;"  value="{{auth()->guest() ? '' : auth()->user()->name}}"/>

                Card Number:                				
                <input type="text"  style="width:300px;"  placeholder="XXXX-XXXX-XXXX-XXXX"/>
                CVV Number:
                <input type="text"  style="width:300px;"  placeholder="XXX"/>
                Expiry:
                <input type="text"  style="width:300px;"  placeholder="MM/YY"/>
            </div>

            <div class="cleaner h50"></div>
            <div>
                <h5><strong>DELIVERY</strong> </h5>
                <input type="radio" name="free-delivery" id="" checked> <label for="" style="font-size: 1.0rem">Free Delivery</label>
            </div>

            <div class="cleaner h50"></div>
            <h3>Shopping Cart</h3>
            <h4>TOTAL: <strong>
                @if (empty(session('cart')))
                    R0
                @else
                    R{{session('cart')->totalPrice}}
                @endif</strong></h4>
            
            <div class="cleaner h10"></div>
            
            <input type="submit" value="PLACE ORDER" id="submit" name="submit" class="submit_btn float_l"/>
        </form>
        </div>
        <div class="cleaner"></div>
@endsection