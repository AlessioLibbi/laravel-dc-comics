@extends ('layouts.app')

@section('content')
    <form action="{{ route('comic.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="formGroupExampleInput">inserisci titolo</label>
            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="formGroupExampleInput" placeholder="inserisci titolo" value="{{ old('title') }}">
             @error('title')
                <div class="invalid-feedback">
                    {{ $message }} 
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">inserisci descrizione</label>
            <input type="text" name="description" class="form-control @error('description') is-invalid @enderror" id="formGroupExampleInput"
                placeholder="inserisci descrizione" value="{{ old('description') }}">
                @error('description')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">inserisci url foto</label>
            <input type="text" name="thumb" class="form-control @error('thumb') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp"
            placeholder="enter url" value="{{ old('thumb') }}">
            @error('thumb')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
                
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">prezzo</label>
            <input type="text" name="price" class="form-control @error('price') is-invalid @enderror" id="formGroupExampleInput2"
                placeholder="Another prezzo" value="{{ old('price') }} ">
            @error('price')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror    
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">Example series</label>
            <input type="text" name="series" class="form-control @error('series') is-invalid @enderror" id="formGroupExampleInput"
                placeholder="Example series" value="{{ old('series') }}">
            @error('series')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror  
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Another sales_date</label>
            <input type="text" name="sale_date" class="form-control @error('sale_date') is-invalid @enderror" id="formGroupExampleInput2"
                placeholder="Another sales_date" value="{{ old('sale_date') }}">
                @error('sale_date')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Another type</label>
            <input type="text" name="type" class="form-control @error('type') is-invalid @enderror" id="formGroupExampleInput2"
                placeholder="Another type" value="{{ old('type') }}">
            @error('type')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror    
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection