<?php

namespace App\Http\Controllers;

use App\Album;
use App\Artist;
use App\Music;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $search['musics'] = Music::search($request->input('query'))->paginate(5);
        $search['albums'] = Album::search($request->input('query'))->paginate(5);
        $search['artists'] = Artist::search($request->input('query'))->paginate(5);
        return view('search', compact('search'));
    }
}
