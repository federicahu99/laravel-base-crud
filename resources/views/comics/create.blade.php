@extends('layouts.main')

@section('title')
<div class="title">
    <div class="bg-black">
        <div class="container">
            <h2>Aggiungi un fumetto:</h2>
        </div>
    </div>
</div>
@endsection
@section('content')
<div class="bg-black" id="form">
    <div class="container">
        <form action=" {{ route('comics.index') }} " method="POST">
            @csrf
            <div class="form-component">
                <div class="form-container">
                    <div class="label-form">
                        <label for="title">Title</label>
                    </div>
                    <input type="text" id="title" name="title" placeholder="The name of the comic\graphic novel...">
                </div>
            </div>

            <div class="form-component">
                <div class="form-container">
                    <div class="label-form">
                        <label for="thumb">Thumb</label>
                    </div>
                    <input type="text" id="thumb" name="thumb" placeholder="Insert the image's URL...">
                </div>
            </div>

            <div class="form-component">
                <div class="form-container">
                    <div class="label-form">
                        <label for="price">Price</label>
                    </div>
                    <input type="text" id="price" name="price" placeholder="Insert the cost of the comic\graphic novel..">
                </div>
            </div>

            <div class="form-component">
                <div class="form-container">
                    <div class="label-form">
                        <label for="description">Description</label>
                    </div>
                    <textarea id="description" name="description" placeholder="Write something.."></textarea>
                </div>
            </div>

            <div class="form-component">
                <div class="form-container">
                    <div class="label-form">
                        <label for="sale_date">Sale date</label>
                    </div>
                    <input type="text" id="sale_date" name="sale_date" placeholder="Insert the date of debut...">
                </div>
            </div>

            <div class="form-component">
                <div class="form-container">
                    <div class="label-form">
                        <label for="series">Series</label>
                    </div>
                    <input type="text" id="series" name="series" placeholder="Insert the name of the serie...">
                </div>
            </div>

            <div class="form-component">
                <div class="form-container">
                    <div class="label-form">
                        <label for="country">Type</label>
                    </div>
                    <select id="type" name="type" class="m-1">
                        <option>comic book</option>
                        <option>graphic novel</option>
                    </select>
                </div>
            </div>

            <input type="submit" value="Submit" id="submit">
        </form>
    </div>
</div>

@endsection