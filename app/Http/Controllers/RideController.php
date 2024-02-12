<?php

namespace App\Http\Controllers;

use App\Content;
use Illuminate\Http\Request;

class RideController extends Controller
{
    public function index(){
        $contents = Content::where('page', 'ride')->get();
        $data = [];
        foreach ($contents as $value) {
            $data[$value->type] = $value->content;
        }
        return view('ride',compact('data'));
    }
}
