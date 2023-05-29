@extends ('layouts.app')


@section('content')
<h1>Descrizione</h1>
    <div class="container d-flex flex-column" style="background-color: black; color:white">

            
                    <img src="{{$single->thumb}}" class="card-img-top" style="max-width: 500px " alt="...">
                    <div class="card-body" >
                        <h5 class="card-title">{{$single->title}}</h5>
                        <p class="card-text">{{$single->series}}</p>
                        <p class="card-text">{{$single->price}}</p>
                        <p class="card-text">{{$single->sale_date}}</p>
                        <p  class="card-text">{{$single->type}}</p>
                    </div>
                    
                    
                    <p>
                        {{$single->description}}
                    </p>
                    <a  href="{{route('comic.index')}}">Click me</a>
    </div>
@endsection