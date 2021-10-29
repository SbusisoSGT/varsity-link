@extends('layouts.main')

@section('title', 'Contact')

@section('content')
        <div id="content" class="float_r">
        	
            <h1>Contact Us</h1>
            <div class="content_half float_l">
				<h4>Send us a message...</h4>
                <div id="contact_form">
                   <form method="post" name="contact" action="#">
                        
                        <label for="author">Name:</label> <input type="text" id="author" name="author" class="required input_field" />
                        <div class="cleaner h10"></div>
                        <label for="email">Email:</label> <input type="text" id="email" name="email" class="validate-email required input_field" />
                        <div class="cleaner h10"></div>
                        
						<label for="subject">Subject:</label> <input type="text" name="subject" id="subject" class="input_field" />

						<div class="cleaner h10"></div>
        
                        <label for="text">Message:</label> <textarea id="text" name="text" rows="0" cols="0" class="required"></textarea>
                        <div class="cleaner h10"></div>
                        
                        <input type="submit" value="Send" id="submit" name="submit" class="submit_btn float_l" />
						<input type="reset" value="Reset" id="reset" name="reset" class="submit_btn float_r" />
                        
            	</form>
                </div>
            </div>
        <div class="content_half float_r">
        	<h4>Mailing Addresses</h4>
                123 Motlogeli street<br />
            	Sefako Makgatho Health Sciences University, 0152<br />
            	Ga-Rankua<br /><br />
            
				<strong>Phone:</strong> 012-782-9304<br />
            	<strong>Email:</strong> <a href="mailto:info@yoursite.com">info@varsitylink.co.za</a><br />
                
        </div>
        
        <div class="cleaner h40"></div>    
        </div> 
        <div class="cleaner"></div>
    </div>
@endsection