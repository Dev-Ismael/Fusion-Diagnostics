<?php

namespace App\Http\Controllers\Admin;

use App\Models\Testimonial;
use App\Http\Controllers\Controller;
use App\Http\Requests\Testimonials\StoreTestimonialRequest;
use App\Http\Requests\Testimonials\UpdateTestimonialRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Storage;

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

        // Upload
        $request -> img -> storeAs("public/images/testimonials" , $img_name );

        // Add images names in request array
        $requestData['img']  = $img_name;

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

        // save all request in one variable
        $requestData = $request->all();

        if( $request -> hasFile("img") ){

            // Create img name
            $img_extention = $request -> img -> getClientOriginalExtension();
            $img_name = rand(1000000,10000000) . "." . $img_extention;   // name => 32632.png

            // Upload
            $request -> img -> storeAs("public/images/testimonials" , $img_name );

            // Delete Old Img
            Storage::delete('public/images/testimonials/'. $testimonial->img );

        }else{
            $img_name = $testimonial->img;
        }

        // Add images names in request array
        $requestData['img']  = $img_name;

        // Update in DB
        try {

            // update row in table
            $update = $testimonial-> update( $requestData );

            // if not update in DB
            if(!$update){
                return Redirect::route("admin.testimonial.index")
                    ->with('messege', [
                        'status' => 'error',
                        'txt'    => 'Error at update opration'
                    ]);
            }

            // If Found Success
            return Redirect::route("admin.testimonial.index")
                ->with('messege', [
                    'status' => 'success',
                    'txt'    => 'Testimonial updated successfully'
                ]);

        } catch (\Exception $e) {
            return Redirect::route("admin.testimonial.index")
                ->with('messege', [
                    'status' => 'error',
                    'txt'    => 'Error at update opration'
                ]);
        }

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

            // Delete DB Record
            $delete = $testimonial->delete();

            // Delete Img
            Storage::delete('public/images/testimonials/'. $testimonial->img );

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
            $testimonials = Testimonial::where('name', 'like', "%{$request->value}%")->paginate( 10 );

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

            $testimonials = Testimonial::whereIn('id', $request->id)->get();

            try {
                $delete = Testimonial::destroy( $request->id );

                // Delete Img
                for ( $row=0; $row < count($testimonials); $row++ ) {
                    Storage::delete('public/images/testimonials/'. $testimonials[$row]['img'] );
                }

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
