<?php

namespace App\Http\Controllers;

ini_set('max_execution_time', 180);

use Illuminate\Http\Request;
use Excel;
use DB;

class UploadDatabaseController extends Controller
{

	public function downloadExcel($type)
	{
		$data = \App\Venue::get()->toArray();
		return Excel::create('itsolutionstuff_example', function($excel) use ($data) {
			$excel->sheet('mySheet', function($sheet) use ($data)
	        {
				$sheet->fromArray($data);
	        });
		})->download($type);
	}
	public function upload(Request $request)
	{
		if($request->hasFile('db_file')){
			$path = $request->file('db_file')->getRealPath();
			$data = Excel::load($path, function($reader) {

			})->get();
			if(!empty($data) && $data->count()){
				foreach ($data as $key => $value) {
					$insert[] = [
						'name' => $value->venue_title,
						'slug' => str_slug($value->venue_title) . "-" . random_int(0, 999),
						'email' => str_slug($value->venue_title) . '@gmail.com',
						'password' => bcrypt($value->venue_title),
						'venue_title' => $value->venue_title, 
						'lat' => $value->lat, 
						'long' => $value->long, 
						'phone_number' => $value->phone_number, 
						'website' => 'http://' . $value->website, 
						'age' => $value->age, 
						'capacity' => $value->capacity, 
						'booking_number' => $value->booking_number, 
						'booking_email' => $value->booking_email, 
						'category_slug' => $value->category_slug, 
						'category' => $value->category, 
						'country_slug' => $value->country_slug, 
						'country' => $value->country,
						'address' => $value->address,

						];
				}
				if(!empty($insert)){
					DB::table('venues')->insert($insert);
				}
			}
		}
		return redirect('/venues');
	}
}
