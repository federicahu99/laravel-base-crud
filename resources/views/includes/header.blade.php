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
                        <a href="#">characters</a>
                    </li>
                    <li>
                        <a href="#">comics</a>
                    </li>
                    <li>
                        <a href="#">movies</a>
                    </li>
                    <li>
                        <a href="#">tv</a>
                    </li>
                    <li>
                        <a href="#">games</a>
                    </li>
                    <li>
                        <a href="#">collectibles</a>
                    </li>
                    <li>
                        <a href="#">fan</a>
                    </li>
                    <li>
                        <a href="#">videos</a>
                    </li>
                    <li>
                        <a href="#">news</a>
                    </li>
                    <li>
                        <a href="#">shop</a>
                    </li>
                
            </ul>
            <div> 
                <input type="text" placeholder="Search.." id="header-search">
            </div>
        </div>
    </div>
</header>