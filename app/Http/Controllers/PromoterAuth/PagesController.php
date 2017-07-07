<?php

namespace App\Http\Controllers\PromoterAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class PagesController extends Controller
{
    public function index()
    {


        $search = \Request::get('search');

        if($search != NULL){
            $promoters = \App\Promoter::search($search)->paginate(12);
        }elseif ($search == NULL) {
            $promoters = \App\Promoter::orderBy('id', 'desc')->paginate(12);
        }

        return view('promoter.index', compact('promoters', 'search'));
    }

    public function home($slug)
    {
    	$promoter = \App\Promoter::where('slug', $slug)->first();

        $user = Auth::user();       

    	return view('promoter.home', compact('user', 'promoter'));
    }

    public function profile($slug)
    {

    	$promoter = \App\Promoter::where('slug', $slug)->first();

        $user = Auth::user();

        $reviews = $promoter->reviews->take(3);

        $rating = $promoter->reviews->avg('stars'); 

    	return view('promoter.profile', compact('promoter', 'user', 'reviews', 'rating'));
    }
}
