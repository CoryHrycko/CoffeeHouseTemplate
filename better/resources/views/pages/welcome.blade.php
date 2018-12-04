@extends('layouts.app')

@section('content')
<div class="wrapper">
    <header class="header home">
        <video  autoPlay="autoplay" muted="true" loop id="myVideo">
            <source src="http://www.coryhrycko.com/public/asset/images/Cup.mp4" type="video/mp4" preload="metadata"/>
            <source src="myVideo.webm" type="video/webm"/>
        </video>
    </header>
        <img class="aboutHeaderLogo hidden" src="https://chapmanscoffee.com/wp-content/uploads/2017/04/LOGO-1.png">
        <article class="main home">
            <div class="imgInline hidden">
                <img class="imgHome " src="https://i1.wp.com/chapmanscoffee.com/wp-content/uploads/2018/04/21729025_2001866946699937_282524032198732496_o.jpg?zoom=2&w=1080&ssl=1">
            </div>
            <div class="writtingHome hiddenR">
            <h3 class="hiddenR">Chapman's Coffee</h3>
                <p class="hiddenR">Thank you for visiting Chapman’s Coffee House, online! Our coffee is now available for purchase here on our website, and can be shipped to yourself, or as a gift to a friend! We also have our food and drink menu available that we offer in-store at our  New Concord, Ohio location.        </article>
        </p>
        </div>
<aside class="aside aside-1">Aside 1</aside>
        <aside class="aside aside-2">Aside 2</aside>
    <footer class="footer">Footer</footer>
</div>
        @endsection