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

      $shows = $venue->show->take(1);

    	return view('venue.profile', compact('venue', 'reviews', 'rating', 'shows'));
    }

    public function home(){
    	
    	$user = Auth::user();

    	return view('venue.home', compact('user'));
    }

    public function shows($slug){

      $venue = \App\Venue::where('slug', $slug)->first();

      return view('venue.shows', compact('venue'));

    }

    public function showPage($slug, $show_slug){

      $venue = \App\Venue::where('slug', $slug)->first();

      $show = \App\VenueShow::where('show_slug', $show_slug)->first();

      return view('venue.show-page', compact('venue', 'show'));

    }


}
