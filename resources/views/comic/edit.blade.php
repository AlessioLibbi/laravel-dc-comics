@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="my-3">
            <a class="btn btn-primary" href="{{ route('comic.index') }}">Vai ai comics</a>
        </div>

        <h2>Aggiorna la comic: {{ $single->title }}</h2>
        

        <form action="{{ route('comic.update', $single->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text"  id="title" name="title" class="form-control @error('title')
                is-invalid @enderror"  value="{{ old('title', $single->title) }}">
                @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="type" class="form-label @error('type') is-invalid @enderror">Tipologia</label>
                <select id="type" name="type" class="form-select">
                    
                    <option @selected(old('type', $single->type === 'comic book')) value="comic book">comic book</option>
                    <option @selected(old('type', $single->type === 'grapich novel')) value="graphic novel">graphic novel</option>
                    @error('type')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </select>
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label">Immagine</label>
                <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb"  value="{{ old('thumb', $single->thumb) }}">
                @error('thumb')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                @enderror
            </div>
             <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series" value="{{ old('series', $single->series) }}">>
                 @error('series')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price"
                     value="{{ old('price', $single->price) }}">
                    @error('price')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror  
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">Data</label>
                <input type="text" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" name="sale_date" value="{{ old('sale_date', $single->sale_date) }}">
                @error('sale_date')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
            </div>

            <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" cols="30" rows="10" class="@error('description') is-invalid @enderror form-control">{{ old('description', $single->description) }}</textarea>
                    @error('description')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

            <button class="btn btn-primary" type="submit">Invia</button>
        </form>
    </div>
@endsection