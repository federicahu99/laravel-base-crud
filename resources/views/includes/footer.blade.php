<?php 
$left_links = config('footer_left');
$left_bottom_links = config('footer_left_bottom');
$center_links = config('footer_center');
$right_links = config('footer_right');
?>


<footer>
    <div id="flex-bottom"  class="container">
        <div>
            <h2>DC COMICS</h2>
                @foreach($left_links as $left_link)
                    <li><a href=" {{ $left_link['url'] }} ">{{$left_link['name']}}</a></li>
                @endforeach
        </div>
        <div>
            <h2>SHOP</h2>
                @foreach($left_bottom_links as $left_bottom_link)
                    <li><a href=" {{ $left_bottom_link['url'] }} ">{{$left_bottom_link['name']}}</a></li>
                @endforeach
        </div>
        <div>
            <h2>DC</h2>
                @foreach($center_links as $center_link)
                    <li><a href=" {{ $center_link['url'] }} ">{{$center_link['name']}}</a></li>
                @endforeach
        </div>
        <div>
            <h2>SITES</h2>
                @foreach($right_links as $right_link)
                    <li><a href=" {{ $right_link['url'] }} ">{{$right_link['name']}}</a></li>
                @endforeach
        </div>
        <figure>
            <img src="{{ asset('img/dc-logo-bg.png') }}" alt="">
        </figure>
    </div>
</footer>