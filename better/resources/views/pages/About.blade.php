@extends('layouts.app')

@section('content')

        <div class="">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            
                    <div class="wrapper">
                        <header class="header">
                            <video  autoPlay="autoplay" muted="true" loop id="myVideo">
                                <source src="http://www.coryhrycko.com/public/asset/images/coffee.mp4" type="video/mp4"/>
                                <source src="myVideo.webm" type="video/webm"/>
                            </video>
                        </header>
                        <!-- <img class="aboutHeaderLogo hidden" src="https://chapmanscoffee.com/wp-content/uploads/2017/04/LOGO-1.png"> -->
                            <article class="main">
                                <div class="left hidden">
                                <h2 class="hidden">Our Approach</h2>
                                <p class="hidden">Our aim is to get great coffee into our customers homes who haven’t broken into the specialty coffee market. Our niche is coffee that is better than anything available at your local grocery store, but still cheaper than most specialty online coffee shops and boutique coffee roasters.</p>  
                                <p class="hidden">If you’re currently buying coffee at the grocery store, we promise our coffee will be of better quality and taste better than anything you buy at your local chain store! That coffee has most likely been sitting on the shelf for months, losing its true potential. Coffee is a product that is technically fine to drink after it’s been sitting on the shelf for months, but it will not taste the way good coffee should taste. While drinking a good cup of coffee, one should be able to taste different “notes” of the coffee which come from the coffee bean and plant. These notes vary depending on the type of plant, region it grows, the altitude it grows at, as well as how it’s processed. The longer the coffee sits after being roasted, the less prominent these notes become.</p>  
                                <p class="hidden">Our coffee is freshly roasted in small batches which gives it the higher quality and fresher taste as compared to grocery store coffee.</p>  
                                <h2 class="hidden">Our Story</h2>  
                                <p class="hidden">This is our second venture into the world of small business and first into the specialty coffee scene. Small business is our passion and we love being able to bring a community together through coffee. A coffee shop is about more than just selling coffee, it’s about creating a community meeting spot that brings people together. We’re a “third home” for our customers. A place they can come to relax, get work done, meet with friends, have a meeting or just to say hello.</p>  
                                </div><div class="parentForm">
                                <form class="sneakyClose hiddenR" method="POST" action="./public/assets/Validate.php">
                                    <h3>Contact Us</h3>
                                    <input class="sneakyClose Name item hiddenR" name="name" type="text" placeholder="Name"><br>
                                    <input class="sneakyClose item hiddenR" name="email" type="email" placeholder="Email"><br>
                                    <textarea class="sneakyCloseMessage item hiddenR" placeholder="Message" name="message"></textarea>
                                    <button class="btn-submit hiddenR " name="button" type="button" value="Submit">Submit</button>
                                </form></div>
                            </article>
                        <aside class="aside aside-1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</aside>
                        <aside class="aside aside-2">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</aside>
                        </div>
                 <!--<?php /*@foreach($services as $service)
             		<a class="" href="/{{$service}}">{{$service}}</a>
             	@endforeach*/?>-->
        </div>
        @endsection