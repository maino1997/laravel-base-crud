@extends('layouts.main')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('comics.store') }}" method="POST">
        @csrf
        <input type="text" name="title" id="title" placeholder="title">
        <input type="text" name="description" id="description" placeholder="description">
        <input type="text" name="thumb" id="thumb" placeholder="immagine">
        <input type="text" name="price" id="price" placeholder="price">
        <input type="text" name="series" id="series" placeholder="series">
        <input type="text" name="sale_date" id="sale_date" placeholder="sale_date">
        <input type="text" name="type" id="type" placeholder="type">
        <button type="submit">Invia</button>
    </form>
@endsection
