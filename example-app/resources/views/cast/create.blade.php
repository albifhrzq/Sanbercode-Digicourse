@extends('layouts.master')

@section('title')
    Add Cast
@endsection

@section('content')
    <h1>Add Cast</h1>
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
    <form action="{{ route('cast.store') }}" method="POST" class="mt-4">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
        </div>
        <div class="form-group">
            <label for="age">Age:</label>
            <input type="text" class="form-control" id="age" name="age" value="{{ old('age') }}">
        </div>
        <div class="form-group">
            <label for="bio">Bio:</label>
            <textarea class="form-control" id="bio" name="bio" rows="3">{{{old('bio')}}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection