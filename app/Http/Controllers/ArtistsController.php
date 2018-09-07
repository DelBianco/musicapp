<?php

namespace App\Http\Controllers;

use App\Artist;
use App\Http\Requests\ArtistRequest;
use Intervention\Image\Facades\Image;

class ArtistsController extends Controller
{

    public function index()
    {
        $artists = Artist::orderBy("created_at","desc")->paginate(6);
        return view('artist.index',['artists' => $artists]);
    }

    public function create()
    {
        return view('artist.create');
    }

    public function store(ArtistRequest $request)
    {
        $artist = new Artist();
        $artist->name = $request->name;
        $artist->genre = $request->genre;
        $artist->description = $request->description;
        $artist->image = (string) Image::make($request->image)->encode('data-url');
        $artist->save();
        return redirect()->route('artist.index')->with('message', 'Artist created successfully!');
    }

    public function show(Artist $artist)
    {
        return view('artist.show',compact('artist'));
    }

    public function edit(Artist $artist)
    {
        return view('artist.create',compact('artist'));
    }

    public function update(ArtistRequest $request, Artist $artist)
    {
        $artist->name = $request->name;
        $artist->genre = $request->genre;
        $artist->description = $request->description;
        $artist->image = $request->image;
        $artist->save();
        return redirect()->route('artist.index')->with('message', 'Artist updated successfully!');
    }

    public function destroy(Artist $artist)
    {
        $artist->delete();
        return redirect()->route('artist.index')->with('alert-success','Artist has been deleted!');
    }
}
