<?php

namespace App\Http\Controllers\Admin;

use App\Models\Test;
use App\Http\Controllers\Controller;
use App\Http\Requests\Test\StoreTestRequest;
use App\Http\Requests\Test\UpdateTestRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Str;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tests = Test::orderBy('id','desc')->paginate(10);
        return Inertia::render("Tests/Index", compact('tests'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render("Tests/Create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTestRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTestRequest $request)
    {

        // save all request in one variable
        $requestData = $request->all();


        // Store in DB
        try {

            // store row in table
            $test = Test::create( $requestData );

            // if not save in DB
            if(!$test){
                return Redirect::route("admin.test.index")
                    ->with('messege', [
                        'status' => 'error',
                        'txt'    => 'Error at store opration'
                    ]);
            }

            // If Save Successfully
            return Redirect::route("admin.test.index")
                ->with('messege', [
                    'status' => 'success',
                    "txt"    => "Test store successfully",
                ]);

        } catch (\Exception $e) {
            return Redirect::route("admin.test.index")
                ->with('messege', [
                    'status' => 'error',
                    'txt'    => 'Error at store opration'
                ]);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function show(Test $test)
    {
        return Inertia::render("Tests/Show", compact("test"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function edit(Test $test)
    {
        return Inertia::render("Tests/Edit",compact('test'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTestRequest  $request
     * @param  \App\Models\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTestRequest $request, Test $test)
    {

        // save all request in one variable
        $requestData = $request->all();

        // Store in DB
        try {

            // store row in table
            $update = $test-> update( $requestData );

            // if not save in DB
            if(!$update){
                return Redirect::route("admin.test.index")
                ->with('messege', [
                    'status' => 'error',
                    'txt'    => 'Error at store opration'
                ]);
            }

            // If Update Successfully
            return Redirect::route("admin.test.index")
                ->with('messege', [
                    'status' => 'success',
                    "txt"    => "Test store successfully",
                ]);

        } catch (\Exception $e) {
            return Redirect::route("admin.test.index")
                ->with('messege', [
                    'status' => 'error',
                    'txt'    => 'Error at store opration'
                ]);
        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function destroy(Test $test)
    {

        // Delete Record from DB
        try {

            $delete = $test->delete();

            // If Delete Error
            if( !$delete ){
                return Redirect::route("admin.test.index")
                    ->with('messege', [
                        'status' => 'error',
                        'txt'    => 'Error at delete opration'
                    ]);
            }

            // If Delete Succesffuly
            return Redirect::route("admin.test.index")
                ->with('messege', [
                    'status' => 'success',
                    "txt"    => "Test deleted successfully",
                ]);

        } catch (\Exception $e) {

            // If server error
            return Redirect::route("admin.test.index")
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
            $tests = Test::where('title', 'like', "%{$request->value}%")->paginate( 10 );

            // If Not Delete Record
            if( !$tests ){

                // If server error
                return Redirect::route("admin.test.index")
                    ->with('messege', [
                        'status' => 'error',
                        'txt'    => 'Error at search opration'
                    ]);
            }

            // Return search results in Index Page
            return Inertia::render("Tests/Index", compact('tests'));

        } catch (\Exception $e) {

            // If server error
            return Redirect::route("admin.test.index")
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
                $delete = Test::destroy( $request->id );

                if( !$delete ){
                    return Redirect::route("admin.test.index")
                        ->with('messege', [
                            'status' => 'error',
                            'txt'    => 'Error at delete opration'
                        ]);
                }

                // If Delete Succesffuly
                return Redirect::route("admin.test.index")
                    ->with('messege', [
                        'status' => 'success',
                        "txt"    => "Test deleted successfully",
                    ]);

            } catch (\Exception $e) {

                // If server error
                return Redirect::route("admin.test.index")
                    ->with('messege', [
                        'status' => 'error',
                        'txt'    => 'Error at delete opration'
                    ]);

            }
        }

    }



}
