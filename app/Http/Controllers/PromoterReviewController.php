<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PromoterReviewController extends Controller
{
    public function saveReview(Request $request)
    {

        $this->validate($request, [
            'promoter_id' => 'required',
            'reviewer' => 'required',
            'reviewer_relationship' => 'required',
            'stars' => 'required',
            'review' => 'required'
        ]);

    	$review = new \App\PromoterReview;

    	$review->promoter_id = request('promoter_id');
    	$review->reviewer = request('reviewer');
    	$review->reviewer_relationship = request('reviewer_relationship');
    	$review->stars = request('star');
    	$review->review = request('review');

    	$review->save();

    	return redirect()->back();
    }
}
