<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    use Searchable;

    public function albums(){
        return $this->belongsToMany('App\Album', 'album_musica','album_id');
    }

}
