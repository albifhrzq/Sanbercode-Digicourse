<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;
use App\Models\Film;

class FilmController extends Controller
{
    public function index()
    {
        $films = Film::with('genre')->get();
        return view('film.index', ['films' => $films]);
    }

    public function create()
    {
        $genres = Genre::all();
        return view('film.create', ['genres' => $genres]);
    }

    public function store(Request $request)
    {
        $request->validate([
        'title' => 'required|string|max:255',
        'summary' => 'required|string',
        'release_year' => 'required|string',
        'poster' => 'required|image',
        'genre' => 'required|exists:genres,id',
        ]);

        $poster = $request->file('poster');
        $posterName = time() . '_' . $poster->getClientOriginalName();
        $poster->move(public_path('uploads'), $posterName);

    // Find the smallest available ID
        $usedIds = Film::pluck('id')->toArray();
        $smallestAvailableId = 1;
        while (in_array($smallestAvailableId, $usedIds)) {
            $smallestAvailableId++;
        }

    $film = new Film();
    $film->id = $smallestAvailableId; // Set the smallest available ID
    $film->title = $request->title;
    $film->summary = $request->summary;
    $film->release_year = $request->release_year;
    $film->poster = 'uploads/' . $posterName;
    $film->genre_id = $request->genre;
    $film->save();

    return redirect('/film')->with('success', 'Film created successfully!');
    }

    public function show($id)
    {
        $film = Film::findOrFail($id);
        return view('film.show', ['film' => $film]);
    }

    public function edit($id)
    {
        $film = Film::findOrFail($id);
        $genres = Genre::all();
        return view('film.edit', ['film' => $film, 'genres' => $genres]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'summary' => 'required|string',
            'release_year' => 'required|string',
            'poster' => 'nullable|image',
            'genre' => 'required|exists:genres,id',
        ]);

        $film = Film::findOrFail($id);
        $film->title = $request->title;
        $film->summary = $request->summary;
        $film->release_year = $request->release_year;
        $film->genre_id = $request->genre;

        if ($request->hasFile('poster')) {
            $poster = $request->file('poster');
            $posterName = time() . '_' . $poster->getClientOriginalName();
            $poster->move(public_path('uploads'), $posterName);
            $film->poster = 'uploads/' . $posterName;
        }

        $film->save();

        return redirect('/film')->with('success', 'Film updated successfully!');
    }

    public function destroy($id)
    {
        $film = Film::findOrFail($id);
        $film->delete();
        return redirect('/film')->with('success', 'Film deleted successfully!');
    }
}