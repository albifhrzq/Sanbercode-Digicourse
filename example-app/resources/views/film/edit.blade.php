@extends('layouts.master')

@section('title')
    Edit Film
@endsection

@section('content')
    <h1>Edit Film</h1>

    <form method='POST' action='/film/{{ $film->id }}' enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class='form-group row'>
            <label for='title' class='col-sm-2 col-form-label'>* Title</label>
            <div class='col-sm-10'>
                <input type='text' name='title' id='title' value='{{ old('title', $film->title) }}' class='form-control'>
            </div>
        </div>

        <div class='form-group row'>
            <label for='summary' class='col-sm-2 col-form-label'>* Summary</label>
            <div class='col-sm-10'>
                <textarea name='summary' id='summary' class='form-control'>{{ old('summary', $film->summary) }}</textarea>
            </div>
        </div>

        <div class='form-group row'>
            <label for='release_year' class='col-sm-2 col-form-label'>* Release Year</label>
            <div class='col-sm-10'>
                <input type='text' name='release_year' id='release_year' value='{{ old('release_year', $film->release_year) }}' class='form-control'>
            </div>
        </div>

        <div class='form-group row'>
            <label for='poster' class='col-sm-2 col-form-label'>Poster</label>
            <div class='col-sm-10'>
                <input type='file' name='poster' id='poster' class='form-control'>
                @if ($film->poster)
                    <img src="{{ asset($film->poster) }}" alt="{{ $film->title }}" width="100" class="mt-2">
                @endif
            </div>
        </div>

        <div class='form-group row'>
            <label for='genre' class='col-sm-2 col-form-label'>* Genre</label>
            <div class='col-sm-10'>
                <select name='genre' id='genre' class='form-control'>
                    @foreach($genres as $genre)
                        <option value='{{ $genre->id }}' {{ $film->genre_id == $genre->id ? 'selected' : '' }}>{{ $genre->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class='form-group row'>
            <div class='col-sm-10 offset-sm-2'>
                <button type='submit' class='btn btn-primary'>Update</button>
            </div>
        </div>
    </form>
@endsection