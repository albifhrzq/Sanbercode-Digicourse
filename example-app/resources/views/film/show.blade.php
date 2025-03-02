@extends('layouts.master')

@section('title')
    {{ $film->title }}
@endsection

@section('content')
    <h1>{{ $film->title }}</h1>
    <div class="card mb-4">
        <img src="{{ asset($film->poster) }}" class="card-img-top" alt="{{ $film->title }}">
        <div class="card-body">
            <h5 class="card-title">{{ $film->title }}</h5>
            <p class="card-text">{{ $film->summary }}</p>
            <p class="card-text"><small class="text-muted">Release Year: {{ $film->release_year }}</small></p>
            <p class="card-text"><small class="text-muted">Genre: {{ $film->genre->name }}</small></p>
            <a href="{{ route('film.edit', $film->id) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('film.destroy', $film->id) }}" method="post" style="display:inline;" onsubmit="return confirm('Are you sure delete data?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>
    <a href="{{ route('film.index') }}" class="btn btn-primary">Back to Films</a>
@endsection