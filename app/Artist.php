<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $guarded = [];

    public function musics()
    {
    	return $this->hasMany(Music::class);
    }
}
