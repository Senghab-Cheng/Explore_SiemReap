<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function createContact(Request $request){
        $incomingFields = $request->validate([
            'name'    => 'required',
            'email'   => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $incomingFields['name']    = strip_tags($incomingFields['name']);
        $incomingFields['subject'] = strip_tags($incomingFields['subject']);
        $incomingFields['message'] = strip_tags($incomingFields['message']);

        Contact::create($incomingFields);
        return redirect('/contact');
    }

    public function deleteContact(Contact $contact){
        $contact->delete();
        return redirect('/contacts');
    }
}
