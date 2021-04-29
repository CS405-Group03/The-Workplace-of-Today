<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;

class Post {
    
    public function all()
    {
        // return ddd((string)File::files(resource_path("samplePosts/"))[0]);
        // return ddd(File::files(resource_path("samplePosts/"))[0]->getContents());
        // 

        $accessFile = File::files(resource_path("samplePosts/"));

        return array_map(function ($file) {
            return $file -> getContents();
        }, $accessFile);
    }


/* 
    public static function find($slug) {
        
        $path = __DIR__ . "/../resources/samplePosts/{$slug}.html";

        if (! file_exists ($path)) {
            return "Error Something!";
            // return redirect('/');
            // dd('file does not exist');
        }
        
        return $varPost = file_get_contents($path);
        
    }
*/
}

?>