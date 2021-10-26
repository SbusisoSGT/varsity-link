<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Station Shop Template</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="{{asset('css/templatemo_style.css')}}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="{{asset('css/ddsmoothmenu.css')}}" />

<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/ddsmoothmenu.js')}}">

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

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
        	<h1><a href="#">Station Shop</a></h1>
        </div>
        
        <div id="header_right">
	        <a href="#">My Account</a> | <a href="#">My Wishlist</a> | <a href="#">My Cart</a> | <a href="#">Checkout</a> | <a href="#">Log In</a>
		</div>
        
        <div class="cleaner"></div>
    </div> <!-- END of templatemo_header -->
    
    <div id="templatemo_menu">
    	<div id="top_nav" class="ddsmoothmenu">
            <ul>
                <li><a href="/" class="selected">Home</a></li>
                <li><a href="/products">Products</a>
                    <ul>
                        <li><a href="#submenu1">Sub menu 1</a></li>
                        <li><a href="#submenu2">Sub menu 2</a></li>
                        <li><a href="#submenu3">Sub menu 3</a></li>
                  </ul>
                </li>
                <li><a href="/about">About</a></li>
                <li><a href="/faq">FAQs</a></li>
                <li><a href="/checkout">Checkout</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
            <br style="clear: left" />
        </div> <!-- end of ddsmoothmenu -->
        <div id="menu_second_bar">
        	<div id="top_shopping_cart">
            	Shopping Cart: <strong>3 Products</strong> ( <a href="#">Show Cart</a> )
            </div>
        	<div id="templatemo_search">
                <form action="#" method="get">
                  <input type="text" value="Search" name="keyword" id="keyword" title="keyword" onfocus="clearText(this)" onblur="clearText(this)" class="txt_field" />
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
                                <li class="first"><a href="/{{$shop->link}}">{{$shop->name}}</a></li>         
                            @else
                                @if ($id == (App\Models\Shop::all()->count() - 1))
                                    <li class="last"><a href="/{{$shop->link}}">{{$shop->name}}</a></li> 
                                @else
                                    <li><a href="/{{$shop->link}}">{{$shop->name}}</a></li>
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
                            <a href="/{{$product->shop->link}}/{{$product->link}}"><img src="{{asset('images/products/'.$product->image)}}" alt="{{$product->name}}" /></a>
                            <h4><a href="/{{$product->shop->link}}/{{$product->link}}">{{$product->name}}</a></h4>
                            <p class="price">R {{$product->price}}</p>
                            <div class="cleaner"></div>
                        </div>    
                    @endforeach
                </div>
            </div>
        </div>
        <main>
            @yield('content')
        </main>
        <div id="templatemo_footer">
            <p>
                <a href="/">Home</a> | <a href="/products">Products</a> | <a href="/about">About</a> | <a href="/faq">FAQs</a> | <a href="/checkout">Checkout</a> | <a href="/contact">Contact</a>
            </p>
    
            Copyright © 2021 <a href="/">Your Company Name</a>
        </div> <!-- END of templatemo_footer -->
        
    </div> <!-- END of templatemo_wrapper -->
    
    </body>
    </html>