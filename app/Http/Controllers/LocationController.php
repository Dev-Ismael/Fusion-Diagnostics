<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Traits\SEOTrait;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    use SEOTrait;

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function show($slug)
    {
        $location = Location::where('slug',$slug)->first();
        // if location Not Found
        if( !$location ){
            return redirect('/');
        }

        return view('location', compact("location"));
    }

    public function search(Request $request)
    {

        // validate search and redirect back
        $this->validate($request, [
            'search'     =>  ['required', 'string', 'max:55'],
        ]);

        $locations     = Location::where('title', 'like', "%{$request->search}%")->paginate( 10 );

        $all_locations = Location::get();

        return view('locations', compact('locations','all_locations'));

    }

    public function opening_hours()
    {
        $locations = Location::all("title", "working_hours", "slug");

        return view('opening_hours', compact("locations"));
    }

}
