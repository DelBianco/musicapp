<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    /**
     * Get the post that owns the comment.
     */
    public function artist()
    {
        return $this->belongsTo('App\Artist');
    }
}
