@extends('layouts.main')

@section('content')
    <ul>
        @foreach ($comics as $comic)
            <li>
                Titolo: {{ $comic->title }}
            </li>
            <li>
                Descrizione: {{ $comic->description }}
            </li>
            <li>
                <img src="{{ $comic->thumb }}" alt="">
            </li>
            <li>
                Prezzo: {{ $comic->price }}
            </li>
            <li>
                Serie: {{ $comic->series }}
            </li>
            <li>
                Data di rilascio: {{ $comic->sale_date }}
            </li>
            <li>
                Tipo: {{ $comic->type }}
            </li>
        @endforeach
    </ul>
@endsection
