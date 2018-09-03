<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Artist extends Model
{
    use Searchable;
    /**
     * Get the musics of a Artists
     */
    public function albums()
    {
        return $this->hasMany('App\Album', 'artist_id');
    }

    /**
     * Retorna a duração do album.
     */
    public function getAmountOfTime() {
        $albums = $this->albums()->getResults();
        $time = 0;
        foreach ($albums as $album) {
            $time += $album->getDuration();
        }
        return $time;
    }

}
