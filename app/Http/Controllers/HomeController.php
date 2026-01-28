<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display the home page.
     */
    public function index()
    {
        $testimonials = Testimonial::active()
            ->featured()
            ->ordered()
            ->take(3)
            ->get();

        return view('home', compact('testimonials'));
    }
}
