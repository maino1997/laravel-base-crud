@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row">

            @foreach ($comics as $comic)
                <div class="col-3">
                    <ul class="card">

                        <li>
                            <h2>
                                Titolo: {{ $comic->title }}
                            </h2>
                        </li>
                        <li>
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
                        <a href="{{ route('comics.edit', $comic->id) }}">Modifica</a>
                        <form action="{{ route('comics.destroy', $comic->id) }}" method="POST" class="delete"
                            data-title="{{ $comic->title }}">
                            @method('DELETE')
                            @csrf
                            <button>Elimina</button>
                        </form>
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
