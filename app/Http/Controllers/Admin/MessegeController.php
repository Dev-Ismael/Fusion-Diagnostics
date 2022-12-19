<?php

namespace App\Http\Controllers\Admin;

use App\Models\Messege;
use App\Http\Controllers\Controller;
use App\Http\Requests\Messeges\StoreMessegeRequest;
use App\Http\Requests\Messeges\UpdateMessegeRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Str;

class MessegeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messeges = Messege::orderBy('id','desc')->paginate(10);
        return Inertia::render("Messeges/Index", compact('messeges'));
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Messege  $messege
     * @return \Illuminate\Http\Response
     */
    public function show(Messege $messege)
    {
        return Inertia::render("Messeges/Show", compact("messege"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Messege  $messege
     * @return \Illuminate\Http\Response
     */

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Messege  $messege
     * @return \Illuminate\Http\Response
     */
    public function destroy(Messege $messege)
    {

        // Delete Record from DB
        try {

            $delete = $messege->delete();

            // If Delete Error
            if( !$delete ){
                return Redirect::route("admin.messege.index")
                    ->with('messege', [
                        'status' => 'error',
                        'txt'    => 'Error at delete opration'
                    ]);
            }

            // If Delete Succesffuly
            return Redirect::route("admin.messege.index")
                ->with('messege', [
                    'status' => 'success',
                    "txt"    => "Messege deleted successfully",
                ]);

        } catch (\Exception $e) {

            // If server error
            return Redirect::route("admin.messege.index")
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
            $messeges = Messege::where('title', 'like', "%{$request->value}%")->paginate( 10 );

            // If Not Delete Record
            if( !$messeges ){

                // If server error
                return Redirect::route("admin.messege.index")
                    ->with('messege', [
                        'status' => 'error',
                        'txt'    => 'Error at search opration'
                    ]);
            }

            // Return search results in Index Page
            return Inertia::render("Messeges/Index", compact('messeges'));

        } catch (\Exception $e) {

            // If server error
            return Redirect::route("admin.messege.index")
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
                $delete = Messege::destroy( $request->id );

                if( !$delete ){
                    return Redirect::route("admin.messege.index")
                        ->with('messege', [
                            'status' => 'error',
                            'txt'    => 'Error at delete opration'
                        ]);
                }

                // If Delete Succesffuly
                return Redirect::route("admin.messege.index")
                    ->with('messege', [
                        'status' => 'success',
                        "txt"    => "Messege deleted successfully",
                    ]);

            } catch (\Exception $e) {

                // If server error
                return Redirect::route("admin.messege.index")
                    ->with('messege', [
                        'status' => 'error',
                        'txt'    => 'Error at delete opration'
                    ]);

            }
        }

    }



}
