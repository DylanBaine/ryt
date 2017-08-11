<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Image;
use File;

class VenueShowController extends Controller
{
    public function addShow(Request $request)
    {

    	if($request->hasFile('image'))
    	{
    		$image = $request->file('image');

    		$imageURL = time() . '.' . $image->getClientOriginalExtension();

    		Image::make($image)->save(public_path('storage/venues/show-banners/'. $imageURL));
		
    		$show = new \App\VenueShow;

    		$show->image = $imageURL;
    		$show->venue_id = request('relation');
    		$show->title = request('title');
    		$show->show_slug = str_slug(request('title'));
    		$show->date = request('date');
    		$show->details = request('details');

    		$show->save();

    		 
		}else{

    		$show = new \App\VenueShow;

    		$show->image = 'default-show.jpg';
    		$show->venue_id = request('relation');
    		$show->title = request('title');
    		$show->show_slug = str_slug(request('title'));
    		$show->date = request('date');
    		$show->details = request('details');

    		$show->save();
            
        }

        return redirect()->back();
    }

    public function editShow(Request $request, $slug, $show_slug)
    {
        $show = \App\VenueShow::where('show_slug', $show_slug)->first();

        if($request->hasFile('image'))
        {

            $image = $request->file('image');

            $imageURL = time() . '.' . $image->getClientOriginalExtension();

            Image::make($image)->save(public_path('storage/venues/show-banners/'. $imageURL));
        

            

        }
            $show->venue_id = request('relation');
            $show->title = request('title');
            $show->show_slug = str_slug(request('title'));
            $show->date = request('date');
            $show->details = request('details');

            $show->save();

            return redirect()->back();       
    }

    public function destroy($id)
    {

        $show = \App\VenueShow::where('id', $id)->first();

        $show->delete();

        return redirect()->back();
    }
}
