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
    <div class="container flex">
        <a href=" {{ route('comics.index') }}" class="btn">Torna indietro</a>
        <a href=" {{ route('comics.edit' , $comic->id) }}" class="btn">Modifica</a>
        <form action=" {{ route('comics.destroy', $comic->id )}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="delete confirmation-delete">Cancella il fumetto</button>
        </form>
    </div>
</div>
@endsection

<!-- <script>
    const deleteBnts = document.querySelectorAll('.confirmation-delete');
    deleteBnts.addEventListener('submit', (event) => {
        event.preventDefault();
        const hasConfirmed= confirm('Are you sure you want to delete this comic?');
        if(HasConfirmed) deleteBnts.submit();
    })
</script> -->