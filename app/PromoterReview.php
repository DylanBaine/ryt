<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PromoterReview extends Model
{
    public function promoter()
    {
    	return $this->belongsTo(Promoter::class);
    }
}
