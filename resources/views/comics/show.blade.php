@extends('layouts.main')

@section('title')
<div class="title">
        <div class="container">
                <h2>{{  $comic['series'] }}</h2>
            </div>
        </div>
@endsection

@section('content')
<div id="comic-section">
    <div class="container">
        <div id="flex-comic">
            <figure>
                <img src="{{ $comic['thumb'] }}" alt="$comic['series']">
            </figure>
            <div>
                <h1> {{ $comic['title'] }} </h1>
                <p> {{ $comic['description'] }} </p>
                <h3> {{ $comic['price'] }} </h3>
                <h5> {{ $comic['sale_date'] }} </h5>
            </div>
        </div>
    </div>
    <div class="container">
        <a href=" {{ route('comics.index') }}">Torna indietro</a>
    </div>
</div>
@endsection