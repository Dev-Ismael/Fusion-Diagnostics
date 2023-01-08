<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Messege;

class ContactController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $settings = Setting::where("id",1)->first();
        return view('contact', compact('settings') );
    }


    public function send(ContactRequest $request)
    {

        // save all request in one variable
        $requestData = $request->all();

        try {
            // store row in table
            $messege = Messege::create( $requestData );

            // if not save in DB
            if(!$messege){
                return abort(500, 'Whatever you were looking for, look somewhere else');
            }

            return view('submission', [
                'messege' => 'Thanks, Your submission sent successfully!',
                'link' => 'home'
            ]);
        } catch (\Exception $e) {
            return abort(500, 'Whatever you were looking for, look somewhere else');
        }
    }

}
