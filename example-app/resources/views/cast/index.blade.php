@extends('layouts.master')

@section('title')
    Casts
@endsection

@section('content')
    <h1>Casts</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @forelse ($casts as $cast)
            <tr>
                <td>{{ $cast->id }}</td>
                <td>{{ $cast->name }}</td>
                <td>
                    <form action="/cast/{{$cast->id}}" method="post" onsubmit="return confirm('Are you sure delete data?')">
                        @csrf
                        @method('DELETE')
                        <a href="/cast/{{$cast->id}}" class="btn btn-sm btn-info">Show</a>
                        <a href="/cast/{{$cast->id}}/edit" class="btn btn-sm btn-warning">Edit</a>
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <th colspan="3">no data</th>
            </tr>
        @endforelse
        </tbody>
      </table>
    </table>
    <a href="{{ route('cast.create') }}" class="btn btn-primary">Add Cast</a>
@endsection