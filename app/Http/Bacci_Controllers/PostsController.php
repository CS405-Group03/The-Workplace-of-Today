<?php

namespace App\Http\Bacci_Controllers;

/* 
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\PostsController as BaseController;
*/

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;

class PostsController 
{
    public function show() 
    {
        return view('bacci_header');
    }

    public function all()
    {
        // return ddd((string)File::files(resource_path("samplePosts/"))[0]);
        // return ddd(File::files(resource_path("samplePosts/"))[0]->getContents());
        // 

        $accessFile = File::files(resource_path("samplePosts"));

        return array_map(function ($file) {
            return $file -> getContents();
        }, $accessFile);
        
        return "I am the one!";

        /* 
        $sort = array_map(function ($file) {
            return $file -> getContents();
        }, $accessFile);

        print_r($sort);
        */
    }

    public function posting($slug)
    {     
                   
        // Route::get('/posts/{post}', function ($slug) {
            // Find a post by its slug and past it to a view called "post"
            // $varPost = Post::find($slug);
       
            // $path = __DIR__ . "/../resources/samplePosts/{$slug}.html";

            $path = resource_path("samplePosts/{$slug}.html");

            if (! file_exists ($path)) {
                // throw new ModelNotFoundException();
                return redirect('/');
                // dd('file does not exist');
            }
            
            $varPost = file_get_contents($path);

            return view('my-post', [
                'my_post' => $varPost]);
        /*
        })->where('post', '[A-z_\-]+');
        */
    }
}


?>