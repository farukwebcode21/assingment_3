<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller

{
    // // Answer question-2

    // function posts(){
    //     $posts =DB::table('posts')->select('excerpt', 'description')->get();
    //     // dd($posts);
    //     print_r($posts);
    //     // return($posts);
    // }

    // Answer question-3
    
    // function posts(){
    //     $posts =DB::table('posts')->select('excerpt')->distinct()->get();
    //     return $posts;
        
    // }


    // Answer question-4


    // function posts(){
    //     $post =DB::table('posts')->where('id', 2)->first();
    //     if($post){
    //         echo $post->description;
    //     }else{
    //         echo "No post Found";
    //     }
    // }




    // Answer question-5

    //  function posts(){
    //     $posts = DB::table('posts')->where('id', 2)->pluck('description');
    //     dd($posts);
    // }


    // Answer question-6


    // function posts(){
    //    $posts = DB::table('posts')->where('id', '>', 5)->first();
    //     dd($posts);

    //     $posts = DB::table('posts')->find(2);
    //     return $posts;
    // }

    function posts(){
        $result = DB::table('posts')->insert([
            'title' => 'X',
            'slug' => 'X',
            'excerpt' => 'excerpt',
            'description' => 'description',
            'is_published' => true,
            'min_to_read' => 2,
        ]);
        
        // Print the result of the insert operation
        dd($result);
    }
     

}
