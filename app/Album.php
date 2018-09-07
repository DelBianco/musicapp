<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Album extends Model
{
    use Searchable;
    /**
     * Retorna  o artista dono do album.
     */
    public function artist()
    {
        return $this->belongsTo('App\Artist');
    }

    /**
     * Retorna as musicas do album.
     */
    public function musics(){
        return $this->belongsToMany('App\Music', 'album_musica');
    }

    /**
     * Retorna a duração do album.
     */
    public function getDuration() {
        return $this->musics->sum(function($music) {
            return $music->duration;
        });
    }

    public function duration(){
        return  gmdate("H:i:s", $this->getDuration());
    }

}
