<?php

namespace App\Http\Controllers;

use App\Album;
use App\Artist;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $albums = Album::paginate(6);
        return view('album.index',['albums' => $albums]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $artists = Artist::all();
        return view('album.create',compact('artists'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $album = new Album();
        $album->year = $request->year;
        $album->cover_foto =  (string) Image::make($request->cover_foto)->encode('data-url');
        // Adicionando o relacionamento Album Artist
        $album->artist_id = $request->artist;
        $album->save();
        return redirect()->route('album.index')->with('message', 'Album created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function show(Album $album)
    {
        return view('album.show',compact('album'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function edit(Album $album)
    {
        $artists = Artist::all();
        return view('album.create',compact('album','artists'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Album $album)
    {

        $album->year = $request->year;
        $album->cover_foto =  (string) Image::make($request->cover_foto)->encode('data-url');
        // Adicionando o relacionamento Album Artist
        $album->artist_id = $request->artist;
        $album->save();
        return redirect()->route('album.index')->with('message', 'Album updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function destroy(Album $album)
    {
        $album->delete();
        return redirect()->route('album.index')->with('alert-success','Album has been deleted!');
    }
}
