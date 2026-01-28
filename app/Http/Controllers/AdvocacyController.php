<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdvocacyController extends Controller
{
    /**
     * Display the advocacy and awareness page.
     */
    public function index()
    {
        return view('advocacy');
    }
}
