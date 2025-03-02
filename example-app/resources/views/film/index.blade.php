@extends('layouts.master')

@section('title')
    Films
@endsection

@section('content')
    <h1>Films</h1>
    <div class="row">
        @forelse ($films as $film)
        <div class="col-md-4">
            <div class="card mb-4">
                <img src="{{ asset($film->poster) }}" class="card-img-top" alt="{{ $film->title }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $film->title }}</h5>
                    <p class="card-text">{{Str::limit($film->summary, 50) }}</p>
                    <p class="card-text"><small class="text-muted">Release Year: {{ $film->release_year }}</small></p>
                    <p class="card-text"><small class="text-muted">Genre: {{ $film->genre->name }}</small></p>
                    <a href="/film/{{$film->id}}" class="btn btn-info">Detail</a>
                    @auth
                    <a href="/film/{{$film->id}}/edit" class="btn btn-warning">Edit</a>
                    <form action="/film/{{$film->id}}" method="post" style="display:inline;" onsubmit="return confirm('Are you sure delete data?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    @endauth
                    
                </div>
            </div>
        </div>
        @empty
        <div class="col-12">
            <div class="alert alert-warning" role="alert">
                No data
            </div>
        </div>
        @endforelse
    </div>
    @auth
    <a href="{{route('film.create')}}" class="btn btn-primary">Create</a>
    @endauth
@endsection