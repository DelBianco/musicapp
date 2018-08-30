<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Music extends Model
{

    public function musics(){
        return $this->belongsToMany('App\Album', 'album_musica');
    }
}
