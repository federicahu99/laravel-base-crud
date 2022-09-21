
@extends('layouts.main')

@section('content')
<div id="comics-home">
    <div class="container">
        @section('title')
        <div class="title">
            <div class="container">
                <h2>Comics</h2>
            </div>
        </div>
        @endsection
        <div class="cards">
            <!-- @foreach($comics as $comic) -->
                    <div class="comic-container">
                        <a href="  ">
                            <img src="" alt="">
                        </a>
                        <h4></h4>
                    </div>
            <!-- @endforeach -->
        </div>
    </div>
</div>

@endsection