<?php

namespace App\Http\Controllers\VenueAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class PagesController extends Controller
{
    public function index()
    {
        $search = \Request::get('search');
        if($search != NULL){
         $venues = \App\Venue::search($search)->paginate(24);
       }elseif ($search == NULL) {
           $venues = \App\Venue::orderBy('id', 'desc')->paginate(24);
       }

      return view('venue.index', compact('venues', 'search'));
    }

    public function profile($slug){

    	$venue = \App\Venue::where('slug', $slug)->first();

      $reviews = $venue->reviews->take(3);

      $rating = $venue->reviews->avg('stars'); 

    	return view('venue.profile', compact('venue', 'reviews', 'rating'));
    }

    public function home(){
    	
    	$user = Auth::user();

    	return view('venue.home', compact('user'));
    }
}
