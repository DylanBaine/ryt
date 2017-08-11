<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VenueShow extends Model
{
    public function venue()
    {
    	return $this->belongsTo(Venue::class);
    }
}
