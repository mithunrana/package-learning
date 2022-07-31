@extends('survey::master')

@section('main-content')
    <div class="jumbotron text-center">
        <h1>Survey Add</h1>
        <p>Survey Add Form Is Here</p>
    </div>
    <form action="{{route('save-survey')}}" method="post">
        {{ csrf_field() }}
        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Name" value="{{ old('name') }}">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-2">Is Pubilshed</div>
            <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="published" id="published">
                    <label class="form-check-label" for="published">
                     Publish The Survey
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Sign in</button>
            </div>
        </div>
    </form>
@endsection()
