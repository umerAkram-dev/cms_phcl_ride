<?php

namespace App\Http\Controllers;

use App\Content;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    public function index()
    {
        $contents = Content::where('page', 'donation')->get();
        $data = [];
        foreach ($contents as $value) {
            $data[$value->type] = $value->content;
        }
        return view('donation', compact('data'));
    }
}
