<?php

namespace App\Http\Controllers\Admin;

use App\Models\Testimonial;
use App\Http\Controllers\Controller;
use App\Http\Requests\Testimonials\StoreTestimonialRequest;
use App\Http\Requests\Testimonials\UpdateTestimonialRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Str;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials = Testimonial::orderBy('id','desc')->paginate(10);
        return Inertia::render("Testimonials/Index", compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render("Testimonials/Create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTestimonialRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTestimonialRequest $request)
    {

        // save all request in one variable
        $requestData = $request->all();

        // Create img name
        $img_extention = $request -> img -> getClientOriginalExtension();
        $img_name = rand(1000000,10000000) . "." . $img_extention;   // name => 32632.png

        // Path
        $path = "images/testimonials" ;

        // Upload
        $request -> img -> move( $path , $img_name );

        // Add images names in request array
        $requestData['img']  = $img_name;


        // add slug in $requestData Array
        $requestData += [ 'slug' => Str::slug( $request->title , '-') ];


        // Store in DB
        try {

            // store row in table
            $testimonial = Testimonial::create( $requestData );

            // if not save in DB
            if(!$testimonial){
                return Redirect::route("admin.testimonial.index")
                    ->with('messege', [
                        'status' => 'error',
                        'txt'    => 'Error at store opration'
                    ]);
            }

            // If Save Successfully
            return Redirect::route("admin.testimonial.index")
                ->with('messege', [
                    'status' => 'success',
                    "txt"    => "Testimonial store successfully",
                ]);

        } catch (\Exception $e) {
            return Redirect::route("admin.testimonial.index")
                ->with('messege', [
                    'status' => 'error',
                    'txt'    => 'Error at store opration'
                ]);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        return Inertia::render("Testimonials/Show", compact('testimonial'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $testimonial)
    {
        return Inertia::render("Testimonials/Edit", compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTestimonialRequest  $request
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTestimonialRequest $request, Testimonial $testimonial)
    {
        return response()->json([
            "status" => "connected"
        ]);

        // if( !$testimonial ){  // If Not Found
        //     return response()->json([
        //         'status' => 'error',
        //         'msg'    => '404 not found'
        //     ]);
        // }

        // // save all request in one variable
        // $requestData = $request->all();

        // // Check If There Images Uploaded
        // $path = "images/testimonials" ;

        // if( $request -> hasFile("icon") ){
        //     //  Upload image & Create name icon
        //     $icon_extention = $request -> icon -> getClientOriginalExtension();
        //     $icon_name = rand(1000000,10000000) . "." . $icon_extention;   // name => 3628.png
        //     $request -> icon -> move( $path , $icon_name );
        // }else{
        //     $icon_name = $testimonial->icon;
        // }

        // if( $request -> hasFile("img") ){
        //     //  Upload image & Create name img
        //     $img_extention = $request -> img -> getClientOriginalExtension();
        //     $img_name = rand(1000000,10000000) . "." . $img_extention;   // name => 3628.png
        //     $request -> img -> move( $path , $img_name );
        // }else{
        //     $img_name = $testimonial->img;
        // }

        // // Add images names in request array
        // $requestData['img']  = $img_name;
        // $requestData['icon'] = $icon_name;


        // // add slug in $requestData Array
        // $requestData += [ 'slug' => Str::slug( $request->title , '-') ];


        // // return response()->json([
        // //     'requestData' => $requestData,
        // // ]);

        // // Store in DB
        // try {

        //     // store row in table
        //     $update = $testimonial-> update( $requestData );

        //     // if not save in DB
        //     if(!$update){
        //         return response()->json([
        //             'status' => 'error',
        //             'msg'    => 'Error at update opration'
        //         ]);
        //     }

        //     // If Found Success
        //     return response()->json([
        //         'status' => 'success',
        //         "msg"    => "Testimonial updated successfully",
        //     ]);

        // } catch (\Exception $e) {
        //     return response()->json([
        //         'status' => 'error',
        //         'msg'    => 'server error'
        //     ]);
        // }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $testimonial)
    {

        // Delete Record from DB
        try {

            $delete = $testimonial->delete();

            // If Delete Error
            if( !$delete ){
                return Redirect::route("admin.testimonial.index")
                    ->with('messege', [
                        'status' => 'error',
                        'txt'    => 'Error at delete opration'
                    ]);
            }

            // If Delete Succesffuly
            return Redirect::route("admin.testimonial.index")
                ->with('messege', [
                    'status' => 'success',
                    "txt"    => "Testimonial deleted successfully",
                ]);

        } catch (\Exception $e) {

            // If server error
            return Redirect::route("admin.testimonial.index")
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
            $testimonials = Testimonial::where('title', 'like', "%{$request->value}%")->paginate( 10 );

            // If Not Delete Record
            if( !$testimonials ){

                // If server error
                return Redirect::route("admin.testimonial.index")
                    ->with('messege', [
                        'status' => 'error',
                        'txt'    => 'Error at search opration'
                    ]);
            }

            // Return search results in Index Page
            return Inertia::render("Testimonials/Index", compact('testimonials'));

        } catch (\Exception $e) {

            // If server error
            return Redirect::route("admin.testimonial.index")
                ->with('messege', [
                    'status' => 'error',
                    'txt'    => 'Error at search opration'
                ]);

        }

    }





    public function multiAction(Request $request)
    {

        // return response()->json([
        //     "requestData" => $request->all(),
        // ]);

        // If Action is Delete
        if( $request->action == "delete" ){

            // $ids = explode(",", $request->id);

            try {
                $delete = Testimonial::destroy( $request->id );

                if( !$delete ){
                    return Redirect::route("admin.testimonial.index")
                        ->with('messege', [
                            'status' => 'error',
                            'txt'    => 'Error at delete opration'
                        ]);
                }

                // If Delete Succesffuly
                return Redirect::route("admin.testimonial.index")
                    ->with('messege', [
                        'status' => 'success',
                        "txt"    => "Testimonial deleted successfully",
                    ]);

            } catch (\Exception $e) {

                // If server error
                return Redirect::route("admin.testimonial.index")
                    ->with('messege', [
                        'status' => 'error',
                        'txt'    => 'Error at delete opration'
                    ]);

            }
        }

    }



}
