<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BandReview extends Model
{
    public function band()
    {
    	return $this->belongsTo(BandReview::class);
    }
}
