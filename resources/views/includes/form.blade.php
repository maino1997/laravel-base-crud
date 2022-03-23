@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<div class="container">
    <form action="{{ route('comics.update', $comic->id) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="row justify-content-center">
            <div class="col-4">
                <input type="text" name="title" id="title" placeholder="title"
                    value="{{ old('title', $comic->title) }}">
            </div>
            <div class="col-4">
                <input type="text" name="description" id="description" placeholder="description"
                    value="{{ old('description', $comic->description) }}">
            </div>
            <div class="col-4">
                <input type="text" name="thumb" id="thumb" placeholder="immagine"
                    value="{{ old('thumb', $comic->thumb) }}">
            </div>
            <div class="col-4">
                <input type="text" name="price" id="price" placeholder="price"
                    value="{{ old('price', $comic->price) }}">
            </div>
            <div class="col-4">
                <input type="text" name="series" id="series" placeholder="series"
                    value="{{ old('series', $comic->series) }}">
            </div>
            <div class="col-4">
                <input type="text" name="sale_date" id="sale_date" placeholder="sale_date"
                    value="{{ old('sale_date', $comic->sale_date) }}">
            </div>
            <div class="col-4">
                <input type="text" name="type" id="type" placeholder="type" value="{{ old('type', $comic->type) }}">
            </div>
            <div class="col-12 d-flex justify-content-center">
                <button class="invia btn btn-danger" type="submit">Invia</button>
            </div>

        </div>
    </form>
</div>
