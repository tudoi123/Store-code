<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = Contact::orderBy('created_at', 'DESC')->get();

        return view('contact.adminindex', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     * This method may not be necessary for viewing contacts.
     */

    /**
     * Store a newly created resource in storage.
     * This method may not be necessary for viewing contacts.
     */

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $contact = Contact::findOrFail($id);

        return view('contact_admin.show', compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     * This method may not be necessary for viewing contacts.
     */

    /**
     * Update the specified resource in storage.
     * This method may not be necessary for viewing contacts.
     */

    /**
     * Remove the specified resource from storage.
     * This method may not be necessary for viewing contacts.
     */
}
