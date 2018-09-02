<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Album extends Model
{

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
    public function musicas(){
        return $this->belongsToMany('App\Music', 'album_musica','musica_id','musica_id');
    }

    /**
     * Retorna a duração do album.
     */
    public function getDuration() {
        return $this->musicas->sum(function($musica) {
            return $musica->duration;
        });
    }

}
