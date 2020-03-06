<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Picture;
use App\Tag;

class PictureController extends Controller
{
    //
    public function getPicture()
    {
        return Picture::all();
    }

    public function getThumb(Request $request)
    {
        return [
            'picture' => Picture::all(),
            'tags' => Tag::where('picture_id', 2),
        ];
    }

    public function upload()
    {
        return true;
    }

    public function update()
    {
        return true;
    }

    public function delete()
    {
        return true;
    }
}
