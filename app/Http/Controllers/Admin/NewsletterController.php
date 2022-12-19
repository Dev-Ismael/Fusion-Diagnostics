<?php

namespace App\Http\Controllers\Admin;

use App\Models\Newsletter;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreNewsletterRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Str;

class NewsletterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newsletters = Newsletter::orderBy('id','desc')->paginate(10);
        // return $newsletters;
        return Inertia::render("Newsletters/Index", compact('newsletters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render("Newsletters/Create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreNewsletterRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNewsletterRequest $request)
    {

        // save all request in one variable
        $requestData = $request->all();

        // add slug in $requestData Array
        $requestData += [ 'slug' => Str::slug( $request->title , '-') ];

        // Store in DB
        try {

            // store row in table
            $newsletter = Newsletter::create( $requestData );

            // if not save in DB
            if(!$newsletter){
                return Redirect::route("admin.newsletter.index")
                    ->with('messege', [
                        'status' => 'error',
                        'txt'    => 'Error at store opration'
                    ]);
            }

            // If Save Successfully
            return Redirect::route("admin.newsletter.index")
                ->with('messege', [
                    'status' => 'success',
                    "txt"    => "Newsletter store successfully",
                ]);

        } catch (\Exception $e) {
            return Redirect::route("admin.newsletter.index")
                ->with('messege', [
                    'status' => 'error',
                    'txt'    => 'Error at store opration'
                ]);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Newsletter  $newsletter
     * @return \Illuminate\Http\Response
     */
    public function show(Newsletter $newsletter)
    {
        return Inertia::render("Newsletters/Show", compact('newsletter'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Newsletter  $newsletter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Newsletter $newsletter)
    {

        // Delete Record from DB
        try {

            $delete = $newsletter->delete();

            // If Delete Error
            if( !$delete ){
                return Redirect::route("admin.newsletter.index")
                    ->with('messege', [
                        'status' => 'error',
                        'txt'    => 'Error at delete opration'
                    ]);
            }

            // If Delete Succesffuly
            return Redirect::route("admin.newsletter.index")
                ->with('messege', [
                    'status' => 'success',
                    "txt"    => "Newsletter deleted successfully",
                ]);

        } catch (\Exception $e) {

            // If server error
            return Redirect::route("admin.newsletter.index")
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
            $newsletters = Newsletter::where('subject', 'like', "%{$request->value}%")->paginate( 10 );

            // If Not Delete Record
            if( !$newsletters ){

                // If server error
                return Redirect::route("admin.newsletter.index")
                    ->with('messege', [
                        'status' => 'error',
                        'txt'    => 'Error at search opration'
                    ]);
            }

            // Return search results in Index Page
            return Inertia::render("Newsletters/Index", compact('newsletters'));

        } catch (\Exception $e) {

            // If server error
            return Redirect::route("admin.newsletter.index")
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
                $delete = Newsletter::destroy( $request->id );

                if( !$delete ){
                    return Redirect::route("admin.newsletter.index")
                        ->with('messege', [
                            'status' => 'error',
                            'txt'    => 'Error at delete opration'
                        ]);
                }

                // If Delete Succesffuly
                return Redirect::route("admin.newsletter.index")
                    ->with('messege', [
                        'status' => 'success',
                        "txt"    => "Newsletter deleted successfully",
                    ]);

            } catch (\Exception $e) {

                // If server error
                return Redirect::route("admin.newsletter.index")
                    ->with('messege', [
                        'status' => 'error',
                        'txt'    => 'Error at delete opration'
                    ]);

            }
        }

    }



}
