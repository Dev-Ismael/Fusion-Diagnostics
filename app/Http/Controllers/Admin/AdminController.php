<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Messege;
use App\Models\Newsletter;
use App\Models\Service;
use App\Models\Subscriber;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UpdateAdminInfoRequest;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        return view('layouts.admin');

    }

    public function statistics()
    {
        $services    = Service::count();
        $messeges    = Messege::count();
        $subscribers = Subscriber::count();
        $newsletter  = Newsletter::count();


        return response()->json([
            "services"    => $services ,
            "messeges"    => $messeges ,
            "subscribers" => $subscribers ,
            "newsletter"  => $newsletter ,
        ]);

    }

    public function getAuthInfo()
    {

        $admin = User::get()->first();
        return response()->json([
            "admin" => $admin,
        ]);

    }

    public function updateAdminInfo( Request $request)
    {


        $admin = User::get()->first();

        // save all request in one variable
        $requestData = $request->all();

        // Hash Password
        if( !isset( $requestData['password'] ) || $requestData['password'] == '' ){
                $requestData['password'] = $admin->password;
        }else{
            $requestData['password'] = Hash::make($request->password);
        }

        // Update in DB
        try {
            // store row in table
            $update = $admin-> update( $requestData );

            // if not save in DB
            if(!$update){
                return response()->json([
                    'status' => 'error',
                    'msg'    => 'Error at update opration'
                ]);
            }

            // If update Success
            return response()->json([
                'status' => 'success',
                "msg"    => "Info update successfully",
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'msg'    => 'server error'
            ]);
        }



    }





}
