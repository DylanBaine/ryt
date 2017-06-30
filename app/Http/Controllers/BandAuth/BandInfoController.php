<?php

namespace App\Http\Controllers\BandAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
Use Image;
Use Auth;


class BandInfoController extends Controller
{
    public function uploadProfileImage(Request $request, $slug)
    {
    	

    	if($request->hasFile('profile_image'))
    	{
    		$image = $request->file('profile_image');

    		$imageURL = time() . '.' . $image->getClientOriginalExtension();

    		Image::make($image)->save(public_path('storage/bands/avatar/'. $imageURL));
		
    		$user = \App\Band::where('slug', $slug )->first();

    		$user->profile_image = $imageURL;

    		$user->save();

    		return redirect('band/home'); 
		}else{

            return redirect('band/home');
            
        }

    	
    }

    public function uploadHeaderImage(Request $request, $slug)
    {
        

        if($request->hasFile('banner_image'))
        {
            $image = $request->file('banner_image');

            $imageURL = time() . '.' . $image->getClientOriginalExtension();

            Image::make($image)->save(public_path('storage/bands/banner/'. $imageURL));
        
            $user = \App\Band::where('slug', $slug )->first();

            $user->banner_image = $imageURL;

            $user->save();

            return redirect('band/home'); 
        }
        
    }

    public function updateInfo(Request $request, $slug)
    {
        $user = \App\Band::where('slug', $slug)->first();

        $user->email = request('email');
        $user->phone = request('phone');
        $user->genre = request('genre');
        $user->first_name = request('first_name');
        $user->last_name = request('last_name');
        $user->location = request('location');
        $user->facebook = request('facebook');
        $user->twitter = request('twitter');
        $user->soundcloud = request('soundcloud');
        $user->email_hidden = request('email_hidden');

        $user->save();

        return redirect('band/home');
    }

    public function updateBio(Request $request, $slug)
    {
        $user = \App\Band::where('slug', $slug)->first();

        $user->bio = request('bio');

        $user->save();

        return redirect('band/home');
    }

    public function updateSoundcloud(Request $request, $slug)
    {
        $user = \App\Band::where('slug', $slug)->first();

        $user->soundcloud = request('soundcloud');

        $user->save();

        return redirect('band/home');
    }        



}
