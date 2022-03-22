@extends('layouts.main')

@section('content')
    <div>
        Titolo: {{ $c->title }}
    </div>
    <div>
        Descrizione: {{ $c->description }}
    </div>
    <div>
        <img src="{{ $c->thumb }}" alt="image">
    </div>
    <div>
        Prezzo: {{ $c->price }}
    </div>
    <div>
        Serie: {{ $c->series }}
    </div>
    <div>
        Data di rilascio: {{ $c->sale_date }}
    </div>
    <div>
        Tipo: {{ $c->type }}
    </div>
@endsection
