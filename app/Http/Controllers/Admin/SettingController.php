<?php

namespace App\Http\Controllers\Admin;

use App\Models\Setting;
use App\Http\Requests\UpdateSettingRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class SettingController extends Controller
{

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function edit(Setting $setting)
    {
        return Inertia::render("Settings/Edit", compact('setting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSettingRequest  $request
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSettingRequest $request, Setting $setting)
    {
        
        $requestData = $request->all();

        // Update in DB
        try {

            // updated row in table
            $update = $setting-> update( $requestData );

            // if not save in DB
            if(!$update){
                return Redirect::route("admin.settings.edit", 1)
                ->with('messege', [
                    'status' => 'error',
                    'txt'    => 'Error at Update opration'
                ]);
            }

            // If Update Successfully
            return Redirect::route("admin.settings.edit", 1)
                ->with('messege', [
                    'status' => 'success',
                    "txt"    => "Settings Updated successfully",
                ]);

        } catch (\Exception $e) {
            return Redirect::route("admin.settings.edit", 1)
                ->with('messege', [
                    'status' => 'error',
                    'txt'    => 'Error at Update opration'
                ]);
        }
        
    }

}
