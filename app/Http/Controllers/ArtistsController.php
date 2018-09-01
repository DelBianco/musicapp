<?php

namespace App\Http\Controllers;

use App\Artist;
use App\Http\Requests\ArtistRequest;

class ArtistsController extends Controller
{
    public function index()
    {
        $artists = Artist::orderBy('created_at', 'desc')->paginate(10);
        return view('artist.index',['artist' => $artists]);
    }

    public function create()
    {
        return view('artist.create');
    }

    public function store(ArtistRequest $request)
    {
        $artist = new Artist();
        // TODO: setar os atributos aqui!
        $artist->save();
        return redirect()->route('artist.index')->with('message', 'Artist created successfully!');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $artist = Artist::findOrFail($id);
        return view('artist.edit',compact('artist'));
    }

    public function update(ArtistRequest $request, $id)
    {
        $artist = Artist::findOrFail($id);
        // TODO: Setar os atributos aqui!
        $artist->save();
        return redirect()->route('artist.index')->with('message', 'Artist updated successfully!');
    }

    public function destroy($id)
    {
        $artist = Artist::findOrFail($id);
        $artist->delete();
        return redirect()->route('artist.index')->with('alert-success','Artist has been deleted!');
    }
}
