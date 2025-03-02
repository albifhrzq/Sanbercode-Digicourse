@extends('layouts.master')

@section('title')
    Casts
@endsection

@section('content')
    <h1>{{ $cast->name }}</h1>
    <p>{{ $cast->bio }}</p>
    
    <a href="/cast" class="btn btn-secondary btn-sm">back</a>
@endsection