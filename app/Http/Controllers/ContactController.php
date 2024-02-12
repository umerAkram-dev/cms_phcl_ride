<?php

namespace App\Http\Controllers;

use App\Content;
use App\Query;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contents = Content::where('page', 'contact')->get();
        $data = [];
        foreach ($contents as $value) {
            $data[$value->type] = $value->content;
        }
        return view('contact', compact('data'));
    }
    public function save_contact(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'subject' => 'required',
            'contact_us_textarea' => 'required',
        ]);
        $query = new Query();
        $query->username = $request->username;
        $query->email = $request->email;
        $query->phone = $request->phone;
        $query->subject = $request->subject;
        $query->contact_us_textarea = $request->contact_us_textarea;
        $query->save();
        return redirect()->back();
    }
}
