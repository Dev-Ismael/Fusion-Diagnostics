<?php

namespace App\Http\Controllers\Admin;

use App\Models\SeoManagement;
use App\Http\Requests\UpdateSeoManagementRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class SeoManagementController extends Controller
{

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SeoManagement  $seoManagement
     * @return \Illuminate\Http\Response
    */

    public function edit(SeoManagement $seoManagement)
    {
        return Inertia::render("SeoManagement/Edit", compact('seoManagement'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSeoManagementRequest  $request
     * @param  \App\Models\SeoManagement  $seoManagement
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSeoManagementRequest $request, SeoManagement $seoManagement)
    {
        $requestData = $request->all();

        // Update in DB
        try {

            // store row in table
            $update = $seoManagement-> update( $requestData );

            // if not save in DB
            if(!$update){
                return Redirect::route("admin.seo-management.edit", 1)
                ->with('messege', [
                    'status' => 'error',
                    'txt'    => 'Error at store opration'
                ]);
            }

            // If Update Successfully
            return Redirect::route("admin.seo-management.edit", 1)
                ->with('messege', [
                    'status' => 'success',
                    "txt"    => "SEO Update successfully",
                ]);

        } catch (\Exception $e) {
            return Redirect::route("admin.seo-management.edit", 1)
                ->with('messege', [
                    'status' => 'error',
                    'txt'    => 'Error at store opration'
                ]);
        }
    }

}
