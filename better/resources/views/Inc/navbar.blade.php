<nav class="navbar navbar-expand-md navbar-dark navIbg1 fixed-top">
      <a class="navbar-brand" href="/">{{config("app.name", "Chapmans Coffee House")}}</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/signup">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/about">About</a>
          </li>
         <!--<?php /* <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
            	@foreach($services as $service)
             		<a class="dropdown-item" href="/{{$service}}">{{$service}}</a>
             	@endforeach
            </div>
          </li>*/?>-->
        </ul>
      </div>
    </nav>