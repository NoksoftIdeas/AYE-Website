<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EducationController extends Controller
{
    /**
     * Display the sickle cell education page.
     */
    public function index()
    {
        return view('education.index');
    }

    /**
     * Display specific education topics.
     */
    public function show($topic)
    {
        $validTopics = [
            'what-is-sickle-cell',
            'causes-genetics',
            'signs-symptoms',
            'types',
            'early-diagnosis',
            'myths-facts'
        ];

        if (!in_array($topic, $validTopics)) {
            abort(404);
        }

        return view("education.{$topic}");
    }
}
