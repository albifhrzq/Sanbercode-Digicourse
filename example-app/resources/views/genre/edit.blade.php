@extends('layouts.master')

@section('title')
    Genres
@endsection

@section('content')
    <h1>Edit a Genre</h1>

    <form method='POST' action='/genre/{{$genre->id}}'>
        @csrf
        @method('PUT')

        <div class='form-group'>
            <label for='name'>* Name</label>
            <input type='text' name='name' id='name' value='{{ old('name', $genre->name) }}'>
        </div>

        <button type='submit' class='btn btn-primary'>Update genre</button>
    </form>

    @if(count($errors) > 0)
        <ul class='alert alert-danger error'>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
@endsection