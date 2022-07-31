@extends('survey::master')

@section('main-content')
    <div class="jumbotron text-center">
        <h1>{{$audit->name}}</h1>
        <p>{{($audit->is_published==true) ? 'Published' : 'Unpublished' }}</p>
    </div>
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="..." alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
@endsection()