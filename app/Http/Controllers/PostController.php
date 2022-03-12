<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public static function get () {

        $posts = Post::get();

        if ( !$posts || $posts->count() == 0 ) {
            $data = 'POSTS ARE EMPTY';


        } else {

            $data = $posts->map(function ($post) {
                return collect($post->toArray())
                    ->only(['id', 'content'])
                    ->all();
            });
        }

        return json_encode($data);
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

    private static function doCalc ($someData){
        //
    }

}
