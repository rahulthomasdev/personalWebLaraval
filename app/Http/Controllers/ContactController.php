<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        if ($request) {
            $validatedData = $request->validate([
                "name" => "string|min:3|max:15|required",
                "email" => "email|required",
                "message" => "string|required"
            ]);
            $cont = new Contact();
            $cont->name = $validatedData['name'];
            $cont->email = $validatedData['email'];
            $cont->message = $validatedData['message'];
            $cont->save();
            return redirect()->back()->with('success', 'Message sent successfully');
        }
    }
}
