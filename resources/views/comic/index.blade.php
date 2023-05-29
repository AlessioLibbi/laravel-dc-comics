@extends ('layouts.app')

@section('content')
<div class="container">

    <div class="row row-cols-4">
    
        @foreach ($comics as $single_comic)
            <div class="col d-flex mb-5">
                <div class="card " style="width: 18rem;">
                    <img src="{{$single_comic->thumb}}" class="card-img-top" style="height: 400px" alt="...">
                    <div class="card-body" >
                        <h5 class="card-title">{{$single_comic->title}}</h5>
                        <p class="card-text">{{$single_comic->series}}</p>
                        <p class="card-text">{{$single_comic->price}}</p>
                        <p class="card-text">{{$single_comic->sale_date}}</p>
                        <p  class="card-text">{{$single_comic->type}}</p>
                        <a  href="{{route('comic.show', $single_comic->id)}}">Click me</a>
                    </div>
                </div>
            </div>
            @endforeach
    </div>
    <a href="{{route('comic.create')}}">Crea il tuo Comic</a>
</div>
@endsection