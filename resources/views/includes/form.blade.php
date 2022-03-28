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
    @if ($comic->exists)
        <form action="{{ route('comics.update', $comic->id) }}" method="POST">
            @method('PUT')
        @else
            <form action="{{ route('comics.store') }}" method="POST">
    @endif
    @csrf
    <div class="row justify-content-center">
        <div class="col-4">
            <input type="text" name="title" id="title" placeholder="title" value="{{ old('title', $comic->title) }}"
                class="@error('title') is-invalid @enderror">
            @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="col-4">
            <input type="text" name="description" id="description" placeholder="description"
                value="{{ old('description', $comic->description) }}"
                class="@error('description') is-invalid @enderror">
            @error('description')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="col-4">
            <input type="text" name="thumb" placeholder="immagine" value="{{ old('thumb', $comic->thumb) }}"
                class="@error('thumb') is-invalid @enderror" id="image-input">
            @error('thumb')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="col-4">
            <input type="text" name="price" id="price" placeholder="price" value="{{ old('price', $comic->price) }}"
                class="@error('price') is-invalid @enderror">
            @error('price')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="col-4">
            <input type="text" name="series" id="series" placeholder="series"
                value="{{ old('series', $comic->series) }}" class="@error('series') is-invalid @enderror">
            @error('series')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="col-4">
            <input type="text" name="sale_date" id="sale_date" placeholder="sale_date"
                value="{{ old('sale_date', $comic->sale_date) }}" class="@error('sale_date') is-invalid @enderror">
            @error('sale_date')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="col-4">
            <input type="text" name="type" id="type" placeholder="type" value="{{ old('type', $comic->type) }}"
                class="@error('type') is-invalid @enderror">
            @error('type')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="col-2">
            <img src="{{ $comic->thumb ?? 'http://www.asdalcione.it/wp-content/uploads/2016/08/jk-placeholder-image-1.jpg' }}"
                alt="placeholder" class="img-fluid" width="200" id="image-src">
        </div>
        <div class="col-12 d-flex justify-content-center">
            <button class="invia btn btn-danger m-3" type="submit">Invia</button>
            <a class="invia btn btn-secondary m-3" href="{{ route('comics.index') }}">Indietro</a>
        </div>
    </div>
    </form>
</div>

<script>
    const
        def = 'http://www.asdalcione.it/wp-content/uploads/2016/08/jk-placeholder-image-1.jpg';
    const prevInput = document.getElementById('image-input');
    const prevImg = document.getElementById('image-src');

    prevInput.addEventListener('change', function() {
        const url = this.value;
        if (url) prevImg.setAttribute('src', url);
        else prevImg.setAttribute('src',
            def);
    })
</script>
