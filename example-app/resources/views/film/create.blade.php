@extends('layouts.master')

@section('title')
    Films
@endsection

@section('content')
    <h1>Create a Film</h1>

    <form method='POST' action='/film' enctype="multipart/form-data">
        @csrf

        <div class='form-group row'>
            <label for='title' class='col-sm-2 col-form-label'>* Title</label>
            <div class='col-sm-10'>
                <input type='text' name='title' id='title' value='{{ old('title') }}' class='form-control'>
            </div>
        </div>

        <div class='form-group row'>
            <label for='summary' class='col-sm-2 col-form-label'>* Summary</label>
            <div class='col-sm-10'>
                <textarea name='summary' id='summary' class='form-control'>{{ old('summary') }}</textarea>
            </div>
        </div>

        <div class='form-group row'>
            <label for='release_year' class='col-sm-2 col-form-label'>* Release Year</label>
            <div class='col-sm-10'>
                <input type='text' name='release_year' id='release_year' value='{{ old('release_year') }}' class='form-control'>
            </div>
        </div>

        <div class='form-group row'>
            <label for='poster' class='col-sm-2 col-form-label'>* Poster</label>
            <div class='col-sm-10'>
                <input type='file' name='poster' id='poster' class='form-control'>
            </div>
        </div>

        <div class='form-group row'>
            <label for='genre' class='col-sm-2 col-form-label'>* Genre</label>
            <div class='col-sm-10'>
                <select name='genre' id='genre' class='form-control'>
                    @foreach($genres as $genre)
                        <option value='{{ $genre->id }}'>{{ $genre->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class='form-group row'>
            <div class='col-sm-10 offset-sm-2'>
                <button type='submit' class='btn btn-primary'>Submit</button>
            </div>
        </div>
    </form>
@endsection