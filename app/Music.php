<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
	//protected $guarded = array();
    protected $fillable = array(
        'title',
        'artist_id',
        'album',
        'year',
        'genre',
        'filepath'
        // The rest of the column names that you want it to be mass-assignable.
    );

    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }
}
