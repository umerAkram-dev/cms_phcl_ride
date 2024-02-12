<?php

namespace App\Http\Controllers;

use App\Content;

class ProgramHighlightsController extends Controller
{
    public function index($type)
    {

        $data = [];



        $program_highlights = ['cooking_classes', 'lifestyle_changes', 'treatments'];
        if (in_array($type, $program_highlights)) {
            $contents = Content::where('page', 'programhighlights_' . $type)->get();
            foreach ($contents as $value) {
                $data[$value->type] = $value->content;
            }
            $background_img = asset("frontend/programhighlights_$type/header/header_background_img.png");
            return view('programhighlights', compact('data', 'type', 'background_img'));
        }
    }
}
