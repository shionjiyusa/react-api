<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Score;

class ScoreController extends Controller
{
    //
    public function get($pid)
    {
        return [
            'scores' => Score::where('picture_id', $pid)->get(),
        ];
    }

    public function upload()
    {
        return true;
    }

    public function update($sid)
    {
        return true;
    }

    public function delete($sid)
    {
        Score::destroy($sid);
        return true;
    }
}
