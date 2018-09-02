<?php

namespace App\Http\Controllers;

use App\Album;
use App\Artist;
use App\Music;
use Illuminate\Http\Request;
use Socialite;

class SpotifyController extends Controller
{
    public function spotifyLogin()
    {
        return Socialite::with('spotify')
            ->scopes(['user-top-read'])
            ->redirect();
    }

    public function spotifyCallback(\GuzzleHttp\Client $httpClient)
    {
        if (isset($_GET['error']))
        {
            return redirect('/denied');
        }

        $response = $httpClient->post('https://accounts.spotify.com/api/token', [
            'form_params' => [
                'client_id' => env('SPOTIFY_KEY'),
                'client_secret' => env('SPOTIFY_SECRET'),
                'grant_type' => 'authorization_code',
                'code' => $_GET['code'],

                'redirect_uri' => env('SPOTIFY_REDIRECT_URI'),
            ]
        ]);

        session(['spotify_token' => json_decode($response->getBody())->access_token]);
        session(['spotify_refresh' => json_decode($response->getBody())->refresh_token]);
        return redirect('/');
    }

    public function denied()
    {
        return view('denied');
    }

    public function retrieveData(\GuzzleHttp\Client $httpClient, Request $request)
    {

        $top = $this->spotifyRequest($httpClient,"https://api.spotify.com/v1/me/top/artists?time_range=medium_term&limit=10&offset=5");
        foreach ($top->items as $item) {
            $artist = new Artist();
            $artist->name = $item->name;
            $artist->genre = $item->genres[0];
            $artist->description = 'Generos: '.implode(',',$item->genres);
            $artist->image = $item->images[0]->url;
            $artist->save();

            $albums = $this->spotifyRequest($httpClient,"https://api.spotify.com/v1/artists/".$item->id."/albums?market=ES&limit=10");
            foreach ($albums->items as $albumItem){
                $album = new Album();
                $album->year = explode('-',$albumItem->release_date)[0];
                $album->cover_foto =  $albumItem->images[0]->url;
                // Adicionando o relacionamento Album Artist
                $album->artist_id = $artist->id;

                $tracks = $this->spotifyRequest($httpClient,"https://api.spotify.com/v1/albums/".$albumItem->id."/tracks");
                foreach ($tracks->items as $track) {
                    $music = new Music();
                    $music->name = $track->name;
                    $music->composer = $artist->name;
                    $music->order_number = $track->track_number;
                    $music->duration = intval($track->duration_ms/1000);
                    $music->albums()->attach($album->id);
                    $music->save();
                }
                $album->save();
            }
        }
        return redirect('/music');
    }


    public function spotifyRequest(\GuzzleHttp\Client $httpClient, $endpoint){
        try {
            $response = $httpClient->get($endpoint, [
                'headers' => [
                    'Accept' => 'application/json',
                    'Authorization' => 'Bearer ' . session('spotify_token'),
                ],
            ]);
            return json_decode($response->getBody());
        } catch (\Exception $e) {
            $refreshToken = $httpClient->post('https://accounts.spotify.com/api/token', [
                'form_params' => [
                    'client_id' => env('SPOTIFY_KEY'),
                    'client_secret' => env('SPOTIFY_SECRET'),
                    'grant_type' => 'refresh_token',
                    'refresh_token' => session('spotify_refresh'),
                    'redirect_uri' => env('SPOTIFY_REDIRECT_URI'),
                ]
            ]);

            $refreshToken = json_decode($refreshToken->getBody());

            session(['spotify_token' => $refreshToken->access_token]);

            if (isset($refreshToken->refresh_token)) {
                session(['spotify_refresh' => $refreshToken->refresh_token]);
            }

            $response = $httpClient->get($endpoint, [
                'headers' => [
                    'Accept' => 'application/json',
                    'Authorization' => 'Bearer ' . session('spotify_token'),
                ],
            ]);

            return json_decode($response->getBody());
        }
    }
    public function viewStats()
    {
        if (session()->has('spotify_token')) {
            return view('spotify.index');
        }

        return redirect('/login/spotify');
    }
}
