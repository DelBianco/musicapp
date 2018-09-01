<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    public function albums(){
        return $this->belongsToMany('App\Album', 'album_musica','album_id');
    }
}
