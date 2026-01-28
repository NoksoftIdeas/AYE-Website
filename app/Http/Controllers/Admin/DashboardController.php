<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactSubmission;
use App\Models\Volunteer;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'total_contacts' => ContactSubmission::count(),
            'total_volunteers' => Volunteer::count(),
            'recent_contacts' => ContactSubmission::where('created_at', '>=', now()->subDays(7))->count(),
            'recent_volunteers' => Volunteer::where('created_at', '>=', now()->subDays(7))->count(),
        ];

        $recentContacts = ContactSubmission::latest()->take(5)->get();
        $recentVolunteers = Volunteer::latest()->take(5)->get();

        return view('admin.dashboard', compact('stats', 'recentContacts', 'recentVolunteers'));
    }

    public function contacts()
    {
        $contacts = ContactSubmission::latest()->paginate(20);
        return view('admin.contacts', compact('contacts'));
    }

    public function volunteers()
    {
        $volunteers = Volunteer::latest()->paginate(20);
        return view('admin.volunteers', compact('volunteers'));
    }

    public function deleteContact($id)
    {
        ContactSubmission::findOrFail($id)->delete();
        return redirect()->route('admin.contacts')->with('success', 'Contact submission deleted successfully.');
    }

    public function deleteVolunteer($id)
    {
        Volunteer::findOrFail($id)->delete();
        return redirect()->route('admin.volunteers')->with('success', 'Volunteer application deleted successfully.');
    }
}
