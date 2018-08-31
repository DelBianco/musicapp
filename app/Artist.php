<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    /**
     * Get the musics of a Artists
     */
    public function albums()
    {
        return $this->hasMany('App\Album', 'artist_id');
    }
}
