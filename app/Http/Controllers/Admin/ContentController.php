<?php

namespace App\Http\Controllers\Admin;

use App\Content;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ContentController extends Controller
{
    public function update(Request $request)
    {
        // dd($request->all());
        $page = $request->page;
        $page_subtype = $request->page_subtype;
        $types = $request->type;
        $imgs = $request->img;

        if ($types) {
            foreach ($types as $key => $type) {
                $content = Content::where('page', $page)->where('type', $key)->first();
                if (!$content) {
                    $content = new Content();
                    $content->page = $page;
                }
                $content->type = $key;
                $content->content = $type;
                $content->save();
            }
        }
        if ($imgs) {
            foreach ($imgs as $key => $img) {
                $destinationPath = "frontend/{$page}/{$page_subtype}";
                $myimage = "{$key}.png";
                $img->move(public_path($destinationPath), $myimage);
            }
        }
        return redirect()->back();
    }
}
