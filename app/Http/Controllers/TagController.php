<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;

class TagController extends Controller
{
    //
    public function get($pid)
    {
        return [
            'tags' => Tag::where('picture_id', $pid)->get(),
        ];
    }

    public function upload()
    {
        return true;
    }

    public function update($tid)
    {
        return true;
    }

    public function delete($tid)
    {
        Tag::destroy($tid);
        return true;
    }
}
