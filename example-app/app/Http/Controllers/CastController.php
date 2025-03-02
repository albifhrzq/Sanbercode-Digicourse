<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CastController extends Controller
{
    public function index()
    {
        $casts = DB::table('casts')->get();
        return view('cast.index', ['casts' => $casts]);
    }

    public function create()
    {
        return view('cast.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'age' => 'required|integer|min:1',
            'bio' => 'required',
        ]);

        $ids = DB::table('casts')->pluck('id')->toArray();
        $newId = 1;
        while (in_array($newId, $ids)) {
            $newId++;
        }

        DB::table('casts')->insert([
            'id' => $newId,
            'name' => $request['name'],
            'age' => $request['age'],
            'bio' => $request['bio'],
        ]);

        return redirect()->route('cast.index');
    }

    public function show($id)
    {
        $cast = DB::table('casts')->where('id', $id)->first();
        return view('cast.show', ['cast' => $cast]);
    }

    public function edit($id)
    {
        $cast = DB::table('casts')->where('id', $id)->first();
        return view('cast.edit', ['cast' => $cast]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'age' => 'required|integer|min:1',
            'bio' => 'required',
        ]);
        DB::table('casts')->where('id', $id)->update([
            'name' => $request['name'],
            'age' => $request['age'],
            'bio' => $request['bio'],
        ]);
        return redirect()->route('cast.index');
    }

    public function destroy($id)
    {
        DB::table('casts')->where('id', $id)->delete();
        return redirect()->route('cast.index');
    }
}
