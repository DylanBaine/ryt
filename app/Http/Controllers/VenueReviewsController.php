<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VenueReviewsController extends Controller
{
    public function saveReview(Request $request)
    {
    	$review = new \App\VenueReviews;

    	$review->venue_id = request('venue_id');
    	$review->reviewer = request('reviewer');
    	$review->reviewer_relationship = request('reviewer_relationship');
    	$review->stars = request('star');
    	$review->review = request('review');

    	$review->save();

    	return redirect()->back();
    }
}
