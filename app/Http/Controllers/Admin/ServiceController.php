<?php

namespace App\Http\Controllers\Admin;

use App\Models\Service;
use App\Http\Controllers\Controller;
use App\Http\Requests\Service\StoreServiceRequest;
use App\Http\Requests\Service\UpdateServiceRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::orderBy('id','desc')->paginate(10);
        return Inertia::render("Services/Index", compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render("Services/Create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreServiceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreServiceRequest $request)
    {

        // save all request in one variable
        $requestData = $request->all();

        // Create img name
        $img_extention = $request -> img -> getClientOriginalExtension();
        $img_name = rand(1000000,10000000) . "." . $img_extention;   // name => 32632.png

        // Create icon name
        $icon_extention = $request -> icon -> getClientOriginalExtension();
        $icon_name = rand(1000000,10000000) . "." . $icon_extention;   // name => 3623628.png

        // Upload
        $request -> img -> storeAs("public/images/services" , $img_name );
        $request -> icon -> storeAs("public/images/services" , $icon_name );

        // Add images names in request array
        $requestData['img']  = $img_name;
        $requestData['icon'] = $icon_name;


        // add slug in $requestData Array
        $requestData += [ 'slug' => Str::slug( $request->title , '-') ];

        // Store in DB
        try {

            // store row in table
            $service = Service::create( $requestData );

            // if not save in DB
            if(!$service){
                return Redirect::route("admin.service.index")
                    ->with('messege', [
                        'status' => 'error',
                        'txt'    => 'Error at store opration'
                    ]);
            }

            // If Save Successfully
            return Redirect::route("admin.service.index")
                ->with('messege', [
                    'status' => 'success',
                    "txt"    => "Service store successfully",
                ]);

        } catch (\Exception $e) {
            return Redirect::route("admin.service.index")
                ->with('messege', [
                    'status' => 'error',
                    'txt'    => 'Error at store opration'
                ]);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        return Inertia::render("Services/Show", compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        return Inertia::render("Services/Edit", compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateServiceRequest  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateServiceRequest $request, Service $service)
    {

        // save all request in one variable
        $requestData = $request->all();

        // IF Icon Exist
        if( $request -> hasFile("icon") ){
            // Create img name
            $icon_extention = $request -> icon -> getClientOriginalExtension();
            $icon_name = rand(1000000,10000000) . "." . $icon_extention;   // name => 32632.png

            // Upload Icon
            $request -> icon -> storeAs("public/images/services" , $icon_name );

            // Delete Old Icon
            Storage::delete('public/images/services/'. $service->icon );
        }else{
            $icon_name = $service->icon;
        }

        // IF Img Exist
        if( $request -> hasFile("img") ){
            // Create img name
            $img_extention = $request -> img -> getClientOriginalExtension();
            $img_name = rand(1000000,10000000) . "." . $img_extention;   // name => 32632.png

            // Upload Img
            $request -> img -> storeAs("public/images/services" , $img_name );

            // Delete Old Img
            Storage::delete('public/images/services/'. $service->img );
        }else{
            $img_name = $service->img;
        }

        // Add images names in request array
        $requestData['img']  = $img_name;
        $requestData['icon'] = $icon_name;


        // add slug in $requestData Array
        $requestData += [ 'slug' => Str::slug( $request->title , '-') ];


        // Store in DB
        try {

            // store row in table
            $update = $service-> update( $requestData );

            // if not save in DB
            if(!$update){
                return Redirect::route("admin.service.index")
                    ->with('messege', [
                        'status' => 'error',
                        'txt'    => 'Error at update opration'
                    ]);
            }

            // If Found Success
            return Redirect::route("admin.service.index")
                ->with('messege', [
                    'status' => 'success',
                    'txt'    => 'Service updated successfully'
                ]);

        } catch (\Exception $e) {
            return Redirect::route("admin.service.index")
                ->with('messege', [
                    'status' => 'error',
                    'txt'    => 'Error at update opration'
            ]);
        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {

        try {

            // Delete Img
            Storage::delete('public/images/services/'. $service->img );

            // Delete Icon
            Storage::delete('public/images/services/'. $service->icon );

            $delete = $service->delete();

            // If Delete Error
            if( !$delete ){
                return Redirect::route("admin.service.index")
                    ->with('messege', [
                        'status' => 'error',
                        'txt'    => 'Error at delete opration'
                    ]);
            }

            // If Delete Succesffuly
            return Redirect::route("admin.service.index")
                ->with('messege', [
                    'status' => 'success',
                    "txt"    => "Service deleted successfully",
                ]);

        } catch (\Exception $e) {

            // If server error
            return Redirect::route("admin.service.index")
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
            $services = Service::where('title', 'like', "%{$request->value}%")->paginate( 10 );

            // If Not Delete Record
            if( !$services ){

                // If server error
                return Redirect::route("admin.service.index")
                    ->with('messege', [
                        'status' => 'error',
                        'txt'    => 'Error at search opration'
                    ]);
            }

            // Return search results in Index Page
            return Inertia::render("Services/Index", compact('services'));

        } catch (\Exception $e) {

            // If server error
            return Redirect::route("admin.service.index")
                ->with('messege', [
                    'status' => 'error',
                    'txt'    => 'Error at search opration'
                ]);

        }

    }





    public function multiAction(Request $request)
    {

        // If Action is Delete
        if( $request->action == "delete" ){

            $services = Service::whereIn('id', $request->id)->get();

            try {

                // Delete Img
                for ( $row=0; $row < count($services); $row++ ) {
                    //Delete Img
                    Storage::delete('public/images/services/'. $services[$row]['img'] );
                    //Delete Icon
                    Storage::delete('public/images/services/'. $services[$row]['icon'] );
                }

                // Delete DB Records
                $delete = Service::destroy( $request->id );


                if( !$delete ){
                    return Redirect::route("admin.service.index")
                        ->with('messege', [
                            'status' => 'error',
                            'txt'    => 'Error at delete opration'
                        ]);
                }

                // If Delete Succesffuly
                return Redirect::route("admin.service.index")
                    ->with('messege', [
                        'status' => 'success',
                        "txt"    => "Service deleted successfully",
                    ]);

            } catch (\Exception $e) {

                // If server error
                return Redirect::route("admin.service.index")
                    ->with('messege', [
                        'status' => 'error',
                        'txt'    => 'Error at delete opration'
                    ]);

            }
        }

    }



}
