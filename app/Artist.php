<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    /**
     * Get the musics of a Artists
     */
    public function musics()
    {
        return $this->hasMany('App\Music', 'artist_id');
    }
}
