@extends('survey::master')

@section('main-content')
    <div class="jumbotron text-center">
        <h1>Audit List</h1>
        <p>Survey Add Form Is Here</p>
    </div>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
            @foreach($audits as $audit)
                <tr>
                    <th scope="row">{{$audit->id}}</th>
                    <td>{{$audit->name}}</td>
                    <td>{{($audit->is_published==true) ? 'Published' : 'Unpublished' }}</td>
                    <td>View/Delete</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$audits->render()}}
@endsection()