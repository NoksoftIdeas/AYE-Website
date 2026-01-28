<?php

namespace App\Http\Controllers;

use App\Models\Volunteer;
use Illuminate\Http\Request;
use App\Http\Requests\VolunteerRequest;

class GetInvolvedController extends Controller
{
    /**
     * Display the get involved page.
     */
    public function index()
    {
        return view('get-involved');
    }

    /**
     * Store a new volunteer application.
     */
    public function volunteer(VolunteerRequest $request)
    {
        Volunteer::create($request->validated());

        return redirect()->back()->with('success', 'Thank you for your interest! We will contact you soon.');
    }
}
