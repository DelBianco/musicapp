<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    /**
     * Get the post that owns the comment.
     */
    public function artist()
    {
        return $this->belongsTo('App\Artist');
    }

    public function musics(){
        return $this->belongsToMany('App\Music', 'album_musica');
    }

}
