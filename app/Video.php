<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Series;

class Video extends Model
{
    protected $appends = ['url'];

    public function series()
    {
        return $this->belongsTo(Series::class);
    }

    public function getUrlAttribute()
    {
        return route('series.episode', [$this->series, $this->episode_number]);
    }
}
