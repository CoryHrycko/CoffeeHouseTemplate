<!-- <nav class="topnav" id="myTopnav">
                <a class="/server.php/">Coffee</a>
            @foreach($services as $service)
                <a class="itemNav" href="/server.php/{{$service}}">{{$service}}</a>
            @endforeach
  <div class="dropdown">
  </div> 
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</nav> -->

<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
    <a class="/server.php/">Coffee</a>
        @foreach($services as $service)
            <a class="itemNav" href="/server.php/{{$service}}">{{$service}}</a>
        @endforeach
  </div>
</div>
<span class="openNav" onclick="openNav()">Chapman's Coffee House &#9776;</span>
<div></div>