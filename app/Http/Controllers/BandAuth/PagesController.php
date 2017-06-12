<?php

namespace App\Http\Controllers\BandAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class PagesController extends Controller
{



    public function index()
    {

        $search = \Request::get('search');

    	$bands = \App\Band::search($search)->paginate(5);

    	return view('band.index', compact('bands', 'user', 'search'));
    }

    public function profile($slug)
    {

    	$band = \App\Band::where('slug', $slug)->first();

        $user = Auth::user();

    	return view('band.profile', compact('band', 'user'));
    }

    public function home($slug)
    {
        $band = \App\Band::where('slug', $slug)->first();

        $user = Auth::user();

        return view('band.home', compact('band', 'user'));
    }
}
