@extends('layouts.main')

@section('title')
<div class="title">
    <div class="bg-black">
        <div class="container">
            <h2>Modifica un fumetto:</h2>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="bg-black" id="form-edit">
    <div class="container">
        <form action=" {{ route('comics.index') }} " method="POST">
            @csrf
            <div class="form-component">
                <div class="form-container">
                    <div class="label-form">
                        <label for="title">Title</label>
                    </div>
                    <input type="text" id="title" name="title" placeholder="The name of the comic\graphic novel..." value=" {{ $comic->title }} ">
                </div>
            </div>

            <div class="form-component">
                <div class="form-container">
                    <div class="label-form">
                        <label for="thumb">Thumb</label>
                    </div>
                    <input type="text" id="thumb" name="thumb" placeholder="Insert the image's URL..." value=" {{ $comic->thumb }} ">
                </div>
            </div>

            <div class="form-component">
                <div class="form-container">
                    <div class="label-form">
                        <label for="price">Price</label>
                    </div>
                    <input type="number" id="price" name="price" placeholder="Insert the cost of the comic\graphic novel.." value=" {{ $comic->price }} ">
                </div>
            </div>

            <div class="form-component">
                <div class="form-container">
                    <div class="label-form">
                        <label for="description">Description</label>
                    </div>
                    <textarea id="description" name="description" placeholder="Write something..">{{ $comic->description }} "</textarea>
                </div>
            </div>

            <div class="form-component">
                <div class="form-container">
                    <div class="label-form">
                        <label for="sale_date">Sale date</label>
                    </div>
                    <input type="text" id="sale_date" name="sale_date" placeholder="Insert the date of debut..." value=" {{ $comic->sale_date }} ">
                </div>
            </div>

            <div class="form-component">
                <div class="form-container">
                    <div class="label-form">
                        <label for="series">Series</label>
                    </div>
                    <input type="text" id="series" name="series" placeholder="Insert the name of the serie..." value=" {{ $comic->series }} ">
                </div>
            </div>

            <div class="form-component">
                <div class="form-container">
                    <div class="label-form">
                        <label for="country">Type</label>
                    </div>
                    <select id="type" name="type" class="m-1">
                        <option @if($comic->type === 'comic book')>comic book</option>
                        <option @else($comic->type === 'graphic novel')>graphic novel</option>
                        @endif
                    </select>
                </div>
            </div>

            <input type="submit" value="Submit" class="submit">
        </form>
    </div>
</div>
@endsection