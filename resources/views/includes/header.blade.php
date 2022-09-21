<?php
$links = config('header');
$dc_links = config('header_upper');
?>

<header>
<!-- upper header -->
    <div id="upper-header">
        <ul id="flex-upper-header" class="container">
            @foreach($dc_links as $dc_link)
                <li class="dc-link"><a href="">{{$dc_link['name']}}</a></li>
            @endforeach
        </ul>
    </div>
<!-- bottom header -->
    <div id="bottom-header">
        <div class="container flex-bottom">
            <figure>
                <a href="">
                    <img src=" {{ asset('img/dc-logo.png') }} " alt="">
                </a>
            </figure>
            <ul class="flex-bottom">
                    <li>
                        <a href="{{ url('\') }}">home</a>
                    </li>
                    <li>
                        <a href="{{ route('\comics.index') }}">comics</a>
                    </li>
                    
            </ul>
            <div> 
                <input type="text" placeholder="Search.." id="header-search">
            </div>
        </div>
    </div>
</header>