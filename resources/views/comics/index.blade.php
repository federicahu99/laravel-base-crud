
@extends('layouts.main')
@dump($comics)
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
             @foreach($comics as $comic) 
             <div class="comic-container">
                        <a href=" {{ route('comics.show' , [ 'id'=> $comic  ]) }} ">
                            <img src="{{ $comic['thumb'] }}" alt=" {{ $comic['series']}} ">
                        </a>
                        <h4>{{ $comic['series']}}</h4>
             @endforeach 
        </div>
    </div>
</div>

@endsection