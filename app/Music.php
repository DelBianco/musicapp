<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Music extends Model
{
    use Searchable;

    public function albums(){
        return $this->belongsToMany('App\Album', 'album_musica');
    }

}
