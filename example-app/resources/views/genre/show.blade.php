@extends('layouts.master')

@section('title')
    Films in {{ $genre->name }}
@endsection

@section('content')
    <h1>Films in {{ $genre->name }}</h1>
    <div class="row">
        @forelse ($films as $film)
        <div class="col-md-4">
            <div class="card mb-4">
                <img src="{{ asset($film->poster) }}" class="card-img-top" alt="{{ $film->title }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $film->title }}</h5>
                    <p class="card-text">{{ $film->summary }}</p>
                    <p class="card-text"><small class="text-muted">Release Year: {{ $film->release_year }}</small></p>
                    <a href="/film/{{$film->id}}" class="btn btn-info">Show</a>
                    <a href="/film/{{$film->id}}/edit" class="btn btn-warning">Edit</a>
                    <form action="/film/{{$film->id}}" method="post" style="display:inline;" onsubmit="return confirm('Are you sure delete data?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
        @empty
        <div class="col-12">
            <div class="alert alert-warning" role="alert">
                No films found in this genre
            </div>
        </div>
        @endforelse
    </div>
    <a href="{{ route('genre.index') }}" class="btn btn-primary">Back to Genres</a>
@endsection