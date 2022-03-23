@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row">
            @foreach ($comics as $comic)
                <div class="col-5 col-sm-5 col-md-5 col-lg-5 col-xl-4">
                    <ul class="carta">
                        <li>
                            <h2>
                                Titolo: {{ $comic->title }}
                            </h2>
                        </li>
                        <li class="d-flex justify-content-center">
                            <a href="{{ route('comics.show', $comic->id) }}">
                                <img src="{{ $comic->thumb }}" alt="image">
                            </a>
                        </li>
                        <li>
                            <p>
                                Descrizione: {{ $comic->description }}
                            </p>
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
                        <li class="d-flex justify-content-center">
                            <a class="btn btn-primary m-2" href="{{ route('comics.edit', $comic->id) }}">Modifica</a>
                            <form action="{{ route('comics.destroy', $comic->id) }}" method="POST" class="delete m-2"
                                data-title="{{ $comic->title }}">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger">Elimina</button>
                            </form>
                        </li>
                    </ul>
                </div>
            @endforeach
        </div>
    </div>
@endsection

@section('additional_script')
    <script>
        const formList = document.querySelectorAll('.delete');

        formList.forEach(form => {
            form.addEventListener('submit', (e) => {
                e.preventDefault();
                const title = form.getAttribute('data-title');
                const confermation = confirm(`Sei sicuro di voler eleminare ${title}?`);
                if (confermation) {
                    e.target.submit();
                }
            });
        });
    </script>
@endsection
