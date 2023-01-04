<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;


class TestController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function search(Request $request)
    {
        
        // validate search and redirect back
        $this->validate($request, [
            'search'   =>  ['required', 'string', 'max:55'],
        ]);
        $tests   = Test::where('title', 'like', "%{$request->search}%")->paginate( 10 );
        return view('tests', compact('tests'));
    }
}
