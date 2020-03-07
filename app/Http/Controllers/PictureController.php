<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Picture;

const PICTURE_BOX_COUNT = 3;
const PAGE_SIZE = 9;
class PictureController extends Controller
{

    //

    public function getThumb($orderType = '', $page = 1)
    {
        $temp = PAGE_SIZE * ($page - 1);
        $startAt = $temp <= 0 ? 0 : $temp;
        switch ($orderType) {
            case 'timeAsc':
                $result = Picture::orderBy('create_time', 'asc')
                    ->skip($startAt)
                    ->take(PAGE_SIZE)
                    ->get();
                break;
            case 'scoreAsc':
                $result = Picture::orderBy('total_score', 'asc')
                    ->skip($startAt)
                    ->take(PAGE_SIZE)
                    ->get();
                break;
            case 'scoreDesc':
                $result = Picture::orderBy('total_score', 'desc')
                    ->skip($startAt)
                    ->take(PAGE_SIZE)
                    ->get();
                break;
                // 默认排序为时间倒序
            default:
                $result = Picture::orderBy('create_time', 'desc')
                    ->skip($startAt)
                    ->take(PAGE_SIZE)
                    ->get();
        }

        $total = Picture::count();
        return [
            'data' => [
                'thumbs' => $result,
                'total' => $total,
            ],
            'status' => true,
            'message' => '',
        ];
    }

    public function getPictureBox()
    {
        $result = Picture::inRandomOrder()->take(PICTURE_BOX_COUNT)->get();
        return ['pictureBox' => $result];
    }



    public function upload()
    {
        return true;
    }

    public function update($pid)
    {
        return true;
    }

    public function delete($pid)
    {
        Picture::destroy($pid);
        return true;
    }
}
