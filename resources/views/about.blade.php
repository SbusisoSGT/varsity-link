@extends('layouts.main')

@section('title', 'About Us')

@section('content')
    <div id="content" class="float_r">
        <h1>About Us</h1>
        	<h2>Who We Are</h2>
        <p>
           Varsity Link is a platform that is designed to support online shopping system. It seeks to provide all needed items by students, sold by students who
           are interested in providing needs for students. Our ecommerce site gives all the necessary infomation of all items that students sell within the university. 
           Students are given highest priviledge of browsing according to their needs and mostly about what other students like to  buy. It also serves as an advertising platform
           of the goods and services that our students mostly like to get for themselves.  
        </p>
        <div class="about-team-members-container">
            <h2>Executive Team Members </h2><br/>
            <div class="about-team-member">
                <img src="{{ asset('images/members/phiwe.jpg') }}" alt="">
                <h3>Ndzamela Siziphiwe</h3>
            </div>
            <div class="about-team-member"><img src="{{ asset('images/members/bontle.jpg') }}" alt=""><h3>Maila Bontle</h3></div>
            <div class="about-team-member"><img src="{{ asset('images/members/sine.jpg') }}" alt=""><h3>Nani Sinethemba</h3></div>
            <div class="about-team-member"><img src="{{ asset('images/members/lebo.jpg') }}" alt=""><h3>Selepe Lebogang</h3></div>
            <div class="about-team-member" style="margin-top: 7rem"><img src="{{ asset('images/members/tshiamo.jpg') }}" alt=""><h3>Tshiamo Kgaphola</h3></div>
        </div>
        <div class="cleaner h20"></div>
        
        <blockquote>Our Platform serves as a link between students and student entrepreneurs. The student entrepreneurs provide a variety of all items they are interested in selling through the platform that students who'd love. 
            Through this system, we aim to reach all students and student entrepreneurs whom are interested in using it.  
        </blockquote>
        </div> 
        <div class="cleaner"></div>
    </div>
    <style>
        .about-team-members-container{
            display: flex; 
            flex-wrap: wrap;
            flex-direction: column;
        }

        .about-team-member{
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 2rem;
        }

        .about-team-member img{
            width: 50%;
        }

        .about-team-member h3{
            font-weight: 700;
            margin-top: .7rem;
        }
    </style>
@endsection 