<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function requestForm(Request $request)
    {

        return $request->all();
    }
    public function sendEmailForm(Request $request)
    {
        return $request->all();
    }
}
