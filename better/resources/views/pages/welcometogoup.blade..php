@extends('layouts.appCoffee')

@section('contentCoffee')
<div class="wrapper">
    <header class="header home">
        <video  autoPlay="autoplay" muted="true" loop id="myVideo">
            <source src="http://www.coryhrycko.com/public/asset/images/Cup.mp4" type="video/mp4" preload="metadata"/>
            <source src="myVideo.webm" type="video/webm"/>
        </video>
    </header>
        <img class="aboutHeaderLogo hidden" src="http://www.coryhrycko.com/public/asset/images/logoCoffee.png">
        <article class="main home">
            <div class="imgInline hidden">
                <img class="imgHome " src="https://source.unsplash.com/collection/397770/coffee-house">
            </div>
            <div class="writtingHome hiddenR">
            <h3 class="hiddenR">Your Coffee</h3>
                <p class="hiddenR">PBR&B direct trade  swag banjo craft beer Intelligentsia forage 8-bit bitters bicycle rights authentic deep v messenger bag roof party Cosby sweater whatever shabby chic kale chips art party selfies flexitarian ethical lo-fi +1 Portland beard skateboard actually bespoke keffiyeh mixtape pork belly four loko iPhone salvia before they sold out master cleanse chambray McSweeney's typewriter pop-up pour-over food truck keytar yr twee seitan slow-carb stumptown locavore Vice letterpress blog cliche Odd Future occupy fixie retro biodiesel fingerstache narwhal cornhole farm-to-table butcher artisan mumblecore pickled chillwave plaid Tonx tote bag Austin kogi fanny pack Etsy street art High Life quinoa Blue Bottle cardigan flannel Echo Park 90's Pinterest fashion axe raw denim tattooed semiotics Williamsburg scenester mlkshk disrupt cred Tumblr lomo gastropub American Apparel hoodie gentrify selvage Helvetica banh mi Schlitz cray sriracha Marfa sustainable vegan Banksy jean shorts synth PBR small batch heirloom dreamcatcher XOXO organic hashtag post-ironic asymmetrical distillery church-key gluten-free readymade wayfarers brunch 3 wolf moon Carles aesthetic hella ennui DIY drinking vinegar leggings YOLO VHS you probably haven't heard of them squid vinyl try-hard paleo mustache viral tousled next level Wes Anderson literally put a bird on it ugh photo booth kitsch meh trust fund fap polaroid Kickstarter Brooklyn irony Shoreditch Pitchfork chia pug freegan Bushwick Thundercats crucifix tofu meggings umami Neutra normcore Godard wolf sartorial single-origin coffee Truffaut</article>
        </p>
        </div>
<aside class="aside aside-1">Aside 1</aside>
        <aside class="aside aside-2">Aside 2</aside>
    <footer class="footer">Footer</footer>
</div>
        @endsection