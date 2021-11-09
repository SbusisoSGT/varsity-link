<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Varsity Link | @yield('title')</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="{{asset('css/templatemo_style.css')}}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="{{asset('css/ddsmoothmenu.css')}}" />

<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/ddsmoothmenu.js')}}">

</script>

<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "top_nav", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>

<link rel="stylesheet" type="text/css" media="all" href="{{asset('css/jquery.dualSlider.0.2.css')}}" />

<script src="{{asset('js/jquery-1.3.2.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/jquery.easing.1.3.js')}}" type="text/javascript"></script>
<script src="{{asset('js/jquery.timers-1.2.js')}}" type="text/javascript"></script>
<script src="{{asset('js/jquery.dualSlider.0.3.min.js')}}" type="text/javascript"></script>

<script type="text/javascript">
    
    $(document).ready(function() {
        
        $(".carousel").dualSlider({
            auto:true,
            autoDelay: 6000,
            easingCarousel: "swing",
            easingDetails: "easeOutBack",
            durationCarousel: 1000,
            durationDetails: 600
        });
        
    });
    
</script>

</head>

<body>

<div id="templatemo_wrapper">
	<div id="templatemo_header">
    
    	<div id="site_title">
        	<h1><a href="/"><span style="color: #ededed">Varsity</span> Link</a></h1>
        </div>
        
        <div id="header_right">
	        <a href="/cart">My Cart</a> | <a href="/checkout">Checkout</a> | 
            @auth
                <a class="dropdown-item" href="/logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Logout
                </a>

                <form id="logout-form" action="/logout" method="POST" class="d-none">
                    @csrf
                </form>
            @else
                <a href="/login">Log In</a>
            @endauth
		</div>
        
        <div class="cleaner"></div>
    </div> <!-- END of templatemo_header -->
    
    <div id="templatemo_menu">
    	<div id="top_nav" class="ddsmoothmenu" style="    display: flex; justify-content: space-between;align-items: center;">
            <ul>
                <li><a href="/" class="selected">Home</a></li>
                <li><a>Shop</a>
                    <ul>
                        @foreach (App\Models\Shop::all() as $shop)
                            <li><a href="/shop/{{$shop->link}}">{{$shop->name}}</a></li>
                        @endforeach
                  </ul>
                </li>
                <li><a href="/about">About</a></li>
                <li><a href="/faq">FAQs</a></li>
                <li><a href="/checkout">Checkout</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
            <div class="signed-in" style="margin-left: 18%">
                @auth
                    Signed in as <span style="color: #08aee3;">{{auth()->user()->name}}</span>    
                @else
                    Don't have an account? <a href="/register">Sign up</a>
                @endauth
            </div>
            <br style="clear: left" />
        </div> <!-- end of ddsmoothmenu -->
        <div id="menu_second_bar">
        	<div id="top_shopping_cart">
            	Shopping Cart: <strong>
                    @if (empty(session('cart')))
                        0
                    @else
                        {{session('cart')->totalQuantity}}
                        @if (session('cart')->totalQuantity == 1)
                            Product
                        @else
                            Products
                        @endif
                    @endif 
                    
            </strong> 
            ( <a href="/cart">Show Cart</a> )
            </div>
        	<div id="templatemo_search">
                <form action="/search" method="POST">
                    @csrf
                  <input type="text" value="Search" name="query" id="keyword" title="keyword" onfocus="clearText(this)" onblur="clearText(this)" class="txt_field" />
                  <input type="submit" name="Search" value=" Search " alt="Search" id="searchbutton" title="Search" class="sub_btn"  />
                </form>
            </div>
            <div class="cleaner"></div>
    	</div>
    </div> <!-- END of templatemo_menu -->
    
    @yield('slider-carousel')

    <div id="templatemo_main">
   		<div id="sidebar" class="float_l">
        	<div class="sidebar_box"><span class="bottom"></span>
            	<h3>Shops</h3>   
                <div class="content"> 
                	<ul class="sidebar_list">
                        @foreach (App\Models\Shop::all() as $id => $shop)
                            @if ($id == 0)
                                <li class="first"><a href="/shop/{{$shop->link}}">{{$shop->name}}</a></li>         
                            @else
                                @if ($id == (App\Models\Shop::all()->count() - 1))
                                    <li class="last"><a href="/shop/{{$shop->link}}">{{$shop->name}}</a></li> 
                                @else
                                    <li><a href="/shop/{{$shop->link}}">{{$shop->name}}</a></li>
                                @endif
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="sidebar_box"><span class="bottom"></span>
            	<h3>Best Sellers </h3>   
                <div class="content"> 
                    @foreach (App\Models\Product::find([1,6,14, 20]) as $product)
                        <div class="bs_box">
                            <a href="/shop/{{$product->shop->link}}/{{$product->link}}"><img src="{{asset('images/products/'.$product->image)}}" alt="{{$product->name}}" /></a>
                            <h4><a href="/shop/{{$product->shop->link}}/{{$product->link}}">{{$product->name}}</a></h4>
                            <div class="star-container product-review-stars" onclick="displayReviewStars(event, {{$product->rating}})">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1024" height="1024" preserveAspectRatio="xMidYMid meet" viewBox="0 0 1024 1024" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);"><path d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5c-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1l-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2c17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9l183.7-179.1c5-4.9 8.3-11.3 9.3-18.3c2.7-17.5-9.5-33.7-27-36.3z" fill="#cacaca"/><rect x="0" y="0" width="1024" height="1024" fill="rgba(0, 0, 0, 0)" /></svg>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1024" height="1024" preserveAspectRatio="xMidYMid meet" viewBox="0 0 1024 1024" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);"><path d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5c-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1l-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2c17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9l183.7-179.1c5-4.9 8.3-11.3 9.3-18.3c2.7-17.5-9.5-33.7-27-36.3z" fill="#cacaca"/><rect x="0" y="0" width="1024" height="1024" fill="rgba(0, 0, 0, 0)" /></svg>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1024" height="1024" preserveAspectRatio="xMidYMid meet" viewBox="0 0 1024 1024" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);"><path d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5c-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1l-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2c17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9l183.7-179.1c5-4.9 8.3-11.3 9.3-18.3c2.7-17.5-9.5-33.7-27-36.3z" fill="#cacaca"/><rect x="0" y="0" width="1024" height="1024" fill="rgba(0, 0, 0, 0)" /></svg>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1024" height="1024" preserveAspectRatio="xMidYMid meet" viewBox="0 0 1024 1024" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);"><path d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5c-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1l-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2c17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9l183.7-179.1c5-4.9 8.3-11.3 9.3-18.3c2.7-17.5-9.5-33.7-27-36.3z" fill="#cacaca"/><rect x="0" y="0" width="1024" height="1024" fill="rgba(0, 0, 0, 0)" /></svg>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1024" height="1024" preserveAspectRatio="xMidYMid meet" viewBox="0 0 1024 1024" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);"><path d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5c-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1l-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2c17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9l183.7-179.1c5-4.9 8.3-11.3 9.3-18.3c2.7-17.5-9.5-33.7-27-36.3z" fill="#cacaca"/><rect x="0" y="0" width="1024" height="1024" fill="rgba(0, 0, 0, 0)" /></svg>
                            </div>
                            <p class="price">R{{$product->price}}</p>
                            <div class="cleaner"></div>
                        </div>    
                    @endforeach
                </div>
            </div>
        </div>
        <main>
            @yield('content')
        </main>
        <section class="whatsapp-chat-container">
            <a href="https://api.whatsapp.com/send/?phone=27824510976" target="_blank"><div class="whatsapp-chat">
                <img src="{{ asset('icons/whatsapp-icon.svg') }}" class="whatsapp-icon" alt="">
            </div></a>
        </section>
        <div id="templatemo_footer">
            <p>
                <a href="/">Home</a> | <a href="/products">Products</a> | <a href="/about">About</a> | <a href="/faq">FAQs</a> | <a href="/checkout">Checkout</a> | <a href="/contact">Contact</a>
            </p>
    
            Copyright © {{date('Y')}} <a href="/">Varsity Link</a>
        </div> <!-- END of templatemo_footer -->
        
    </div> <!-- END of templatemo_wrapper -->
    <script src="{{ asset('js/products.js') }}"></script>
    </body>
    </html>