<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\Testimonial;
use App\Models\Service;
use App\Models\Test;
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
        $locations_count = Location::count();
        $tests_count     = Test::count();
        $testimonials    = Testimonial::get();
        $services        = Service::get();
        return view('home', compact('testimonials', 'services', 'locations_count', 'tests_count'));
    }
}
