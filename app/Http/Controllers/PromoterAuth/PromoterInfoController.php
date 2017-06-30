<?php

namespace App\Http\Controllers\PromoterAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Image;

class PromoterInfoController extends Controller
{
    public function uploadProfileImage(Request $request, $slug)
    {
    	

    	if($request->hasFile('profile_image'))
    	{
    		$image = $request->file('profile_image');

    		$imageURL = time() . '.' . $image->getClientOriginalExtension();

    		Image::make($image)->save(public_path('storage/promoters/avatar/'. $imageURL));
		
    		$user = \App\Promoter::where('slug', $slug )->first();

    		$user->profile_image = $imageURL;

    		$user->save();

    		return redirect('promoter/home'); 
		}
    	
    }

    public function uploadHeaderImage(Request $request, $slug)
    {
        

        if($request->hasFile('banner_image'))
        {
            $image = $request->file('banner_image');

            $imageURL = time() . '.' . $image->getClientOriginalExtension();

            Image::make($image)->save(public_path('storage/promoters/banner/'. $imageURL));
        
            $user = \App\Promoter::where('slug', $slug )->first();

            $user->banner_image = $imageURL;

            $user->save();

            return redirect('promoter/home'); 
        }
        
    }

    public function updateInfo(Request $request, $slug)
    {
        $user = \App\Promoter::where('slug', $slug)->first();

        $user->email = request('email');
        $user->phone = request('phone');
        $user->genre = request('genre');
        $user->first_name = request('first_name');
        $user->last_name = request('last_name');
        $user->location = request('location');
        $user->facebook = request('facebook');
        $user->twitter = request('twitter');
        $user->experience = request('experience');
        $user->email_hidden = request('email_hidden');

        $user->save();

        return redirect('promoter/home');
    }

    public function updateBio(Request $request, $slug)
    {
        $user = \App\Promoter::where('slug', $slug)->first();

        $user->bio = request('bio');

        $user->save();

        return redirect('promoter/home');
    }

    public function updateSoundcloud(Request $request, $slug)
    {
        $user = \App\Promoter::where('slug', $slug)->first();

        $user->soundcloud = request('soundcloud');

        $user->save();

        return redirect('promoter/home');
    }  
}
