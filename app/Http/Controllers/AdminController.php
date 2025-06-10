<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Models\Experience;
use App\Models\Education;
use App\Models\Contact;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $portfolioCount = Portfolio::count();
        $experienceCount = Experience::count();
        $educationCount = Education::count();
        $contactCount = Contact::count();
        $unreadContactCount = Contact::where('is_read', false)->count();

        return view('admin.dashboard', compact(
            'portfolioCount',
            'experienceCount',
            'educationCount',
            'contactCount',
            'unreadContactCount'
        ));
    }

    public function contacts()
    {
        $contacts = Contact::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.contacts', compact('contacts'));
    }

    public function markAsRead(Contact $contact)
    {
        $contact->update(['is_read' => true]);
        return back()->with('success', 'Message marked as read');
    }

    public function destroyContact(Contact $contact)
    {
        $contact->delete();
        return back()->with('success', 'Message deleted successfully');
    }
}