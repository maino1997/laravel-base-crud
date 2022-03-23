@extends('layouts.main')

@section('content')
    <form action="{{ route('comics.update', $comic->id) }}" method="POST">
        @method('PUT')
        @csrf
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            <input type="text" name="title" id="title" placeholder="title" value="{{ $comic->title }}">
            <input type="text" name="description" id="description" placeholder="description"
                value="{{ $comic->description }}">
            <input type="text" name="thumb" id="thumb" placeholder="immagine" value="{{ $comic->thumb }}">
            <input type="text" name="price" id="price" placeholder="price" value="{{ $comic->price }}">
            <input type="text" name="series" id="series" placeholder="series" value="{{ $comic->series }}">
            <input type="text" name="sale_date" id="sale_date" placeholder="sale_date" value="{{ $comic->sale_date }}">
            <input type="text" name="type" id="type" placeholder="type" value="{{ $comic->type }}">
            <button type="submit">Invia</button>
        </form>
    </form>
@endsection
