<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Video;

class Series extends Model
{
    public function videos()
    {
        return $this->hasMany(Video::class)->orderBy('episode_number', 'asc');
    }
}
