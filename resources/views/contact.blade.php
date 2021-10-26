@extends('layouts.main')

@section('title', 'Contact')

@section('content')
        <div id="content" class="float_r">
        	
            <h1>Contact Us</h1>
            <div class="content_half float_l">
				<h4>Send us a message...</h4>
                <p>Etiam id massa scelerisque nunc luctus ultrices tellus laoreet eget a sem. Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow"><strong>XHTML</strong></a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow"><strong>CSS</strong></a>.</p>
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
        	<h6><strong>Location One</strong></h6>
          132-145 Aliquam vitae mi tellus,<br />
            	Nulla mauris elit pretium, 23900<br />
            	Pellentesque sit amet<br /><br />
            
				<strong>Phone:</strong> 090-090-1080<br />
            	<strong>Email:</strong> <a href="mailto:info@yoursite.com">info@yoursite.com</a><br />
                
            <div class="cleaner h20"></div>
            <h6><strong>Location Two</strong></h6>
          211-303 Curabitur tincidunt euismod,<br />
            	Sed eu  tortor nunc at ipsum, 14080<br />
            	Vestibulum nec tincidunt<br /><br />
            
				<strong>Phone:</strong> 020-050-1920<br />
            	<strong>Email:</strong> <a href="mailto:info@yoursite.com">info@yoursite.com</a><br />
        </div>
        
        <div class="cleaner h40"></div>    
        </div> 
        <div class="cleaner"></div>
    </div>
@endsection