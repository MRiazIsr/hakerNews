<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public static function get () {
        $posts = Post::get();

        if ($posts || empty($posts)) {
            $data = 'POSTS ARE EMPTY';
            return $data;
        } else {
            $data = array (
                'id' => $posts->id,
                'content' => $posts->content
            );
            return json_encode($data);
        }
    }

    public static function create (Request $request) {
        //
    }

    public static function edit (Request $request) {
        //
    }

    public static function delete (Request $request) {
        //
    }

    private static function doCalculation ($someData){
        //
    }

}
