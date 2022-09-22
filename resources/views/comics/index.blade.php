@extends('layouts.main')

@section('content')

@include('includes.confirmation')

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
                <a href=" {{ route('comics.show' , [ $comic->id ]) }} ">
                    <img src="{{ $comic['thumb'] }}" alt=" {{ $comic['series']}} ">
                </a>
                <h4>{{ $comic['series']}}</h4>
            </div>
            @endforeach
        </div>
    </div>
    <div class="container">
        <a href=" {{ route('comics.create') }} " class="btn">Aggiungi fumetto </a>
    </div>
</div>

@endsection

