@extends('layouts.master')

@section('title')
    Genres
@endsection

@section('content')
    <h1>Genres</h1>

   <table class='table'>
         <thead>
              <tr>
                <td scope='col'>id</td>
                <td scope='col'>name</td>
                <td scope='col'>action</td>
              </tr>
         </thead>
         <tbody>
              @forelse ($genres as $genre)
              <tr>
                <td>{{ $genre->id }}</td>
                <td>{{ $genre->name }}</td>
                <td>
                     <form action="/genre/{{$genre->id}}" method="post" onsubmit="return confirm('Are you sure delete data?')">
                          @csrf
                          @method('DELETE')
                          <a href="{{ route('genre.show', $genre->id) }}" class="btn btn-info">Show</a>
                          <a href="/genre/{{$genre->id}}/edit" class="btn btn-warning">Edit</a>
                          <button type="submit" class="btn btn-danger">Delete</button>
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
   <a href="{{route('genre.create')}}" class="btn btn-primary">Create</a>
@endsection