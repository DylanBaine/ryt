<?php

namespace App\Http\Controllers\VenueAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Image;
use Auth;

class VenueInfoController extends Controller
{
    public function uploadProfileImage(Request $request, $slug)
    {
    	if($request->hasFile('profile_image'))
    	{
    		$image = $request->file('profile_image');

    		$imageURL = time() . '.' . $image->getClientOriginalExtension();

    		Image::make($image)->save(public_path('storage/venues/avatar/'. $imageURL));
		
    		$user = \App\Venue::where('slug', $slug )->first();

    		$user->profile_image = $imageURL;

    		$user->save();

    		return redirect('venue/home'); 
		}
    }

    public function uploadHeaderImage(Request $request, $slug)
    {
        if($request->hasFile('banner_image'))
        {
            $image = $request->file('banner_image');

            $imageURL = time() . '.' . $image->getClientOriginalExtension();

            Image::make($image)->save(public_path('storage/venues/banner/'. $imageURL));
        
            $user = \App\Venue::where('slug', $slug )->first();

            $user->banner_image = $imageURL;

            $user->save();

            return redirect('venue/home'); 
        }    	
    }

    public function gallery(Request $request, $slug)
    {

        $user = \App\Venue::where('slug', $slug )->first();

        if($request->hasFile('gallery_one'))
        {

            $one = $request->file('gallery_one');
            $one_url = "image-one-" .  time() . "." . $one->getClientOriginalExtension();

            Image::make($one)->save(public_path('storage/venues/gallery/' . $one_url));

            $user->gallery_one = $one_url;

        }

        if($request->hasFile('gallery_two'))
        {

            $two = $request->file('gallery_two');
            $two_url = "image-two-" .  time() . "." . $two->getClientOriginalExtension();

            Image::make($two)->save(public_path('storage/venues/gallery/' . $two_url));

            $user->gallery_two = $two_url;

        }

        if($request->hasFile('gallery_three'))
        {

            $three = $request->file('gallery_three');
            $three_url = "image-three-" .  time() . "." . $three->getClientOriginalExtension();

            Image::make($three)->save(public_path('storage/venues/gallery/' . $three_url));

            $user->gallery_three = $three_url;

        }

        if($request->hasFile('gallery_four'))
        {

            $four = $request->file('gallery_four');
            $four_url = "image-four-" .  time() . "." . $four->getClientOriginalExtension();

            Image::make($four)->save(public_path('storage/venues/gallery/' . $four_url));

            $user->gallery_four = $four_url;

        }

        if($request->hasFile('gallery_five'))
        {

            $five = $request->file('gallery_five');
            $five_url = "image-five-" .  time() . "." . $five->getClientOriginalExtension();

            Image::make($five)->save(public_path('storage/venues/gallery/' . $five_url));

            $user->gallery_five = $five_url;

        }

        if($request->hasFile('gallery_six'))
        {

            $six = $request->file('gallery_six');
            $six_url = "image-six-" . time() . "." . $six->getClientOriginalExtension();

            Image::make($six)->save(public_path('storage/venues/gallery/' . $six_url));

            $user->gallery_six = $six_url;

        }


        $user->save();

        return redirect('venue/home');

    }

    public function editInfo(Request $request, $slug)
    {
        $user = \App\Venue::where('slug', $slug)->first();

        $user->amenities = request('amenities');

        $user->address = request('address');

        $user->website = request('website');

        $user->facebook = request('facebook');

        $user->twitter = request('twitter');

        $user->instagram = request('instagram');

        $user->category = request('category');

        $user->category_slug = str_slug($user->category);

        $user->save();

        return redirect('venue/home');
    }
}
