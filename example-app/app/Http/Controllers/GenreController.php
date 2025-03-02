<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Genre;
use App\Models\Film;

class GenreController extends Controller
{
    public function index()
    {
        $genres = Genre::all();
        return view('genre.index', ['genres' => $genres]);
    }
    
    public function create()
    {
        $genres = DB::table('genres')->get();
        return view('genre.create');
    }
    
    public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
    ]);

    $ids = DB::table('genres')->pluck('id')->toArray();
    $newId = 1;
    while (in_array($newId, $ids)) {
        $newId++;
    }

    DB::table('genres')->insert([
        'id' => $newId,
        'name' => $request['name'],
    ]);

    return redirect()->route('genre.index');
}


    public function show($id)
    {
        $genre = Genre::findOrFail($id);
        $films = Film::where('genre_id', $id)->get();
        return view('genre.show', ['genre' => $genre, 'films' => $films]);
    }

    public function edit($id)
    {
        $genre = DB::table('genres')->where('id', $id)->first();
        return view('genre.edit', ['genre' => $genre]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
        ]);
        DB::table('genres')->where('id', $id)->update([
            'name' => $request['name'],
        ]);
        return redirect()->route('genre.index');
    }
    
    public function destroy($id)
    {
        DB::table('genres')->where('id', $id)->delete();
        return redirect()->route('genre.index');
    }
}
