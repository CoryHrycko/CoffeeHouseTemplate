<nav class="mainNav">
        <div class="logoNav">
        <a class="logoNavLink" href="/">{{config("app.name", "Chapmans Coffee House")}}</a></div>
        <ul class="itemsNav" aria-labelledby="">
            @foreach($services as $service)
                <li><a class="itemNav" href="/server.php/{{$service}}">{{$service}}</a></li>
            @endforeach
        </ul>
</nav>