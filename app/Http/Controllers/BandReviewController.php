<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BandReviewController extends Controller
{
    public function saveReview(Request $request)
    {

        $this->validate($request, [
            'band_id' => 'required',
            'reviewer' => 'required',
            'reviewer_relationship' => 'required',
            'stars' => 'required',
            'review' => 'required'
        ]);
        
    	$review = new \App\BandReview;

    	$review->band_id = request('band_id');
    	$review->reviewer = request('reviewer');
    	$review->reviewer_relationship = request('reviewer_relationship');
    	$review->stars = request('stars');
    	$review->review = request('review');

    	$review->save();

    	return redirect()->back();
    }
}
