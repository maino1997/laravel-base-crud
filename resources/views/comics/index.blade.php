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
                <a href="{{ route('comics.show', $comic->id) }}">
                    <img src="{{ $comic->thumb }}" alt="image">
                </a>
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
            <a href="{{ route('comics.edit', $comic->id) }}">Modifica</a>
        @endforeach
    </ul>
@endsection
