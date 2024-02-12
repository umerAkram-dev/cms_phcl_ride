<?php

namespace App\Http\Controllers;

use App\Content;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        $contents = Content::where('page', 'home')->get();
        $data = [];
        foreach ($contents as $value) {
            $data[$value->type] = $value->content;
        }
        return view('index', compact('data'));
    }
}
