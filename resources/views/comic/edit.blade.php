@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="my-3">
            <a class="btn btn-primary" href="{{ route('comic.index') }}">Vai ai comics</a>
        </div>

        <h2>Aggiorna la comic: {{ $single->title }}</h2>

        <form action="{{ route('comic.update', $single->id) }}" method="POST">
            @method('PUT')
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $single->title }}">
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Tipologia</label>
                <select id="type" name="type" class="form-select">
                    <option></option>
                    <option @selected($single->type === 'comic book') value="comic book">comic book</option>
                    <option @selected($single->type === 'graphic novel') value="graphic novel">graphic novel</option>
                    
                </select>
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label">Immagine</label>
                <input type="text" class="form-control" id="thumb" name="thumb" value="{{ $single->thumb }}">
            </div>
             <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control" id="series" name="series" value="{{ $single->series }}">
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" id="price" name="price"
                    value="{{ $single->price }}">
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">Data</label>
                <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{ $single->sale_date }}">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" name="description" id="description" rows="3">{{ $single->description }}</textarea>
            </div>

            <button class="btn btn-primary" type="submit">Invia</button>
        </form>
    </div>
@endsection