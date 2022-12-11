<?php

namespace App\Http\Controllers\Admin;

use App\Models\Location;
use App\Http\Controllers\Controller;
use App\Http\Requests\Location\StoreLocationRequest;
use App\Http\Requests\Location\UpdateLocationRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Inertia\Inertia;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locations = Location::orderBy('id','desc')->paginate(10);
        return Inertia::render("Locations/Index", compact('locations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render("Locations/Create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLocationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLocationRequest $request)
    {

        // save all request in one variable
        $requestData = $request->all();

        // Store in DB
        try {

            // store row in table
            $location = Location::create( $requestData );

            // if not save in DB
            if(!$location){
                return Redirect::route("admin.location.index")
                    ->with('messege', [
                        'status' => 'error',
                        'txt'    => 'Error at store opration'
                    ]);
            }

            // If Save Successfully
            return Redirect::route("admin.location.index")
                ->with('messege', [
                    'status' => 'success',
                    "txt"    => "Location store successfully",
                ]);

        } catch (\Exception $e) {
            return Redirect::route("admin.location.index")
                ->with('messege', [
                    'status' => 'error',
                    'txt'    => 'Error at store opration'
                ]);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function show(Location $location)
    {
        return Inertia::render("Locations/Show", compact('location'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function edit(Location $location)
    {
        return Inertia::render("Locations/Edit", compact('location'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLocationRequest  $request
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLocationRequest $request, Location $location)
    {

        // save all request in one variable
        $requestData = $request->all();

        // Store in DB
        try {

            // store row in table
            $update = $location-> update( $requestData );

            // if not save in DB
            if(!$update){
                return Redirect::route("admin.location.index")
                    ->with('messege', [
                        'status' => 'error',
                        'txt'    => 'Error at update opration'
                    ]);
            }

            // If Save Successfully
            return Redirect::route("admin.location.index")
                ->with('messege', [
                    'status' => 'success',
                    "txt"    => "Location updated successfully",
                ]);

        } catch (\Exception $e) {
            return Redirect::route("admin.location.index")
            ->with('messege', [
                'status' => 'error',
                'txt'    => 'Error at update opration'
            ]);
        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function destroy(Location $location)
    {

        // Delete Record from DB
        try {

            $delete = $location->delete();

            // If Delete Error
            if( !$delete ){
                return Redirect::route("admin.location.index")
                ->with('messege', [
                    'status' => 'error',
                    'txt'    => 'Error at delete opration'
                ]);
            }

            // If Delete Succesffuly
            return Redirect::route("admin.location.index")
                ->with('messege', [
                    'status' => 'success',
                    "txt"    => "Location deleted successfully",
                ]);

        } catch (\Exception $e) {

            // If server error
            return Redirect::route("admin.location.index")
            ->with('messege', [
                'status' => 'error',
                'txt'    => 'Error at delete opration'
            ]);

        }

    }



    public function search(Request $request)
    {


        try {

            // Find Matchs records
            $locations = Location::where('title', 'like', "%{$request->value}%")->paginate( 10 );

            // If Not Delete Record
            if( !$locations ){

                // If server error
                return Redirect::route("admin.location.index")
                    ->with('messege', [
                        'status' => 'error',
                        'txt'    => 'Error at search opration'
                    ]);
            }

            // Return search results in Index Page
            return Inertia::render("Locations/Index", compact('locations'));

        } catch (\Exception $e) {

            // If server error
            return Redirect::route("admin.location.index")
                ->with('messege', [
                    'status' => 'error',
                    'txt'    => 'Error at search opration'
                ]);

        }

    }




}
