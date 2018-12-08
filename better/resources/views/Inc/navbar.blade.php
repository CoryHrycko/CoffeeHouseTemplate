
<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
    <a class="/server.php/">Coffee</a>
        @foreach($services as $service)
            <a class="itemNav" href="/server.php/{{$service}}">{{$service}}</a>
        @endforeach
  </div>
</div>
<div class="openNav" id="navbar" onclick="openNav()">

<img class="navLogo hidden" src="https://chapmanscoffee.com/wp-content/uploads/2017/04/LOGO-1.png"> <!--Nav logo -->
 <div class="openEr">Chapman's Coffee House &#9776;</div>
</div>
<div></div>