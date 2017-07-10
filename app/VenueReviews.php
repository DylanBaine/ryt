<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VenueReviews extends Model
{
    public function venue()
    {
    	return $this->hasMany(Venue::class);
    }
}
