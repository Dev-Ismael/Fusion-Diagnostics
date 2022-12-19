<?php

namespace App\Http\Controllers\Admin;

use App\Models\Subscriber;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Inertia\Inertia;

class SubscriberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subscribers = Subscriber::orderBy('id','desc')->paginate(10);
        return Inertia::render("Subscribers/Index", compact('subscribers'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Subscriber  $subscriber
     * @return \Illuminate\Http\Response
     */

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subscriber  $subscriber
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subscriber $subscriber)
    {

        // Delete Record from DB
        try {

            $delete = $subscriber->delete();

            // If Delete Error
            if( !$delete ){
                return Redirect::route("admin.subscriber.index")
                    ->with('subscriber', [
                        'status' => 'error',
                        'txt'    => 'Error at delete opration'
                    ]);
            }

            // If Delete Succesffuly
            return Redirect::route("admin.subscriber.index")
                ->with('subscriber', [
                    'status' => 'success',
                    "txt"    => "Subscriber deleted successfully",
                ]);

        } catch (\Exception $e) {

            // If server error
            return Redirect::route("admin.subscriber.index")
                ->with('subscriber', [
                    'status' => 'error',
                    'txt'    => 'Error at delete opration'
                ]);

        }

    }



    public function search(Request $request)
    {

        try {

            // Find Matchs records
            $subscribers = Subscriber::where('email', 'like', "%{$request->value}%")->paginate( 10 );

            // If Not Delete Record
            if( !$subscribers ){

                // If server error
                return Redirect::route("admin.subscriber.index")
                    ->with('subscriber', [
                        'status' => 'error',
                        'txt'    => 'Error at search opration'
                    ]);
            }

            // Return search results in Index Page
            return Inertia::render("Subscribers/Index", compact('subscribers'));

        } catch (\Exception $e) {

            // If server error
            return Redirect::route("admin.subscriber.index")
                ->with('subscriber', [
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
                $delete = Subscriber::destroy( $request->id );

                if( !$delete ){
                    return Redirect::route("admin.subscriber.index")
                        ->with('subscriber', [
                            'status' => 'error',
                            'txt'    => 'Error at delete opration'
                        ]);
                }

                // If Delete Succesffuly
                return Redirect::route("admin.subscriber.index")
                    ->with('subscriber', [
                        'status' => 'success',
                        "txt"    => "Subscriber deleted successfully",
                    ]);

            } catch (\Exception $e) {

                // If server error
                return Redirect::route("admin.subscriber.index")
                    ->with('subscriber', [
                        'status' => 'error',
                        'txt'    => 'Error at delete opration'
                    ]);

            }
        }

    }



}
