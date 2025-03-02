@extends('layouts.master')

@section('title')
    Edit Cast
@endsection

@section('content')
    <h1>Edit Cast</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @csrf
    <form action="{{ route('cast.update', $cast->id) }}" method="POST" class="mt-4">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $cast->name }}">
        </div>
        <div class="form-group">
            <label for="age">Age:</label>
            <input type="text" class="form-control" id="age" name="age" value="{{ $cast->age }}">
        </div>
        <div class="form-group">
            <label for="bio">Bio:</label>
            <textarea class="form-control" id="bio" name="bio" rows="3">{{{$cast->bio}}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection