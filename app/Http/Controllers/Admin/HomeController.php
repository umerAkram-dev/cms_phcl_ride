<?php

namespace App\Http\Controllers\Admin;

use App\Content;
use App\Http\Controllers\Controller;
use App\Query;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class HomeController extends Controller
{
    // public function index()
    // {

    //     $contents = Content::where('page', 'home')->get();
    //     $data = [];
    //     foreach ($contents as $value) {
    //         $data[$value->type] = $value->content;
    //     }
    //     return view('admin.home.index', compact('data'));
    // }
    // public function about_us()
    // {
    //     $data = [];
    //     $contents = Content::where('page', 'about_us')->get();
    //     foreach ($contents as $value) {
    //         $data[$value->type] = $value->content;
    //     }
    //     // dd($data);
    //     return view('admin.home.about_us', compact('data'));
    // }
    // public function donation()
    // {
    //     $data = [];
    //     $contents = Content::where('page', 'donation')->get();
    //     foreach ($contents as $value) {
    //         $data[$value->type] = $value->content;
    //     }
    //     // dd($data);
    //     return view('admin.home.donation', compact('data'));
    // }
    // public function programhighlights($type)
    // {
    //     $data = [];
    //     $program_highlights = ['cooking_classes', 'lifestyle_changes', 'treatments'];
    //     if (in_array($type, $program_highlights)) {
    //         $contents = Content::where('page', 'programhighlights_' . $type)->get();
    //         foreach ($contents as $value) {
    //             $data[$value->type] = $value->content;
    //         }
    //         $background_img = "frontend/programhighlights_'.$type.'/header/header_background_img.png";
    //         return view('admin.home.program_highlights', compact('data', 'type', 'background_img'));
    //     }
    // }
    // public function contact()
    // {
    //     $data = [];
    //     $contents = Content::where('page', 'contact')->get();
    //     foreach ($contents as $value) {
    //         $data[$value->type] = $value->content;
    //     }
    //     return view('admin.home.contact', compact('data'));
    // }
    public function ride_page()
    {
        $data = [];
        $contents = Content::where('page', 'ride')->get();
        foreach ($contents as $value) {
            $data[$value->type] = $value->content;
        }
        return view('admin.home.ride_page', compact('data'));
    }
    public function settings()
    {
        $data = [];
        $contents = Content::where('page', 'ride')->get();
        foreach ($contents as $value) {
            $data[$value->type] = $value->content;
        }
        return view('admin.home.settings_page', compact('data'));
    }
    public function footer()
    {
        $data = [];
        $contents = Content::where('page', 'footer')->get();
        foreach ($contents as $value) {
            $data[$value->type] = $value->content;
        }
        return view('admin.home.footer', compact('data'));
    }
    public function header()
    {
        $data = [];
        $contents = Content::where('page', 'header')->get();
        foreach ($contents as $value) {
            $data[$value->type] = $value->content;
        }
        return view('admin.home.header', compact('data'));
    }
    public function delete_img($col, $img)
    {
        $folderPath = public_path('frontend/home/' . $col);
        $filePath = $folderPath . '/' . $img;

        if (File::exists($filePath)) {
            File::delete($filePath);
            return redirect()->back();
        }
    }
}
