@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 carta d-flex align-items-center flex-column text-center">
                <div>
                    <h3>Titolo</h3> {{ $c->title }}
                </div>
                <div>
                    <h3>Descrizione: </h3>{{ $c->description }}
                </div>
                <div>
                    <img src="{{ $c->thumb }}" alt="image">
                </div>
                <div>
                    <h3>Prezzo:</h3> {{ $c->price }}
                </div>
                <div>
                    <h3>Serie:</h3> {{ $c->series }}
                </div>
                <div>
                    <h3>Data di rilascio:</h3> {{ $c->sale_date }}
                </div>
                <div>
                    <h3>Tipo:</h3> {{ $c->type }}
                </div>
                <a class="btn btn-secondary" href="{{ route('comics.index') }}">Indietro</a>
            </div>
        </div>
    </div>
@endsection
