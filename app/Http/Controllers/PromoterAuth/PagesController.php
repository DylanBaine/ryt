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

        $promoters = \App\Promoter::search($search)->paginate(12);
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

    	return view('promoter.profile', compact('promoter', 'user'));
    }
}
