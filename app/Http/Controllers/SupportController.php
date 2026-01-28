<?php

namespace App\Http\Controllers;

use App\Models\Resource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SupportController extends Controller
{
    /**
     * Display the support and resources page.
     */
    public function index()
    {
        $resources = Resource::active()
            ->orderBy('created_at', 'desc')
            ->get();

        return view('support', compact('resources'));
    }

    /**
     * Download a resource.
     */
    public function download(Resource $resource)
    {
        if (!$resource->is_active) {
            abort(404);
        }

        $resource->incrementDownloads();

        return Storage::download($resource->file_path, $resource->title . '.' . $resource->file_type);
    }
}
