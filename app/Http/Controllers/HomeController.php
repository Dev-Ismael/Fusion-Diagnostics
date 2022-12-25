<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $testimonials = Testimonial::get();
        $services     = Service::get();
        return view('home', compact('testimonials','services') );
    }
}
