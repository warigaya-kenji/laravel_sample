<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Http\Controllers\Controller;
use App\Contact;


class ContactsContoller extends Controller
{
    public function index()
    {
        $types = Contact::$types;
        $genders = Contact::$genders;

        return view('contacts.index', compact('types', 'genders'));
    }
}
