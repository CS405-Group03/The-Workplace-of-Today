<?php

/*
    CS405_Group 03
    "The Workplace of Today" (Static Website)

    Members:
    Aguilar, Edward John    ->  Assistant Developer
    Batu, Laurence Angelo   ->  Project Leader
                                Main Developer

    Chiangco, Crista Mae    ->  Website and Pages Layout Handler
                                Main Designer
    Casi, Maria Kyla        ->  Content Gatherer (News, Informations and Blogs)
                                Assistant Designer
    Inodeo, Chara Mae       ->  Content Gatherer (News, Informations and Blogs)
                                Assistant Designer
*/

namespace App\Http\Bacci_Controllers;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;

class Bacci_MainController
{
    public function indexcontrol()
    {
        return view('index');
    }

    public function articlescontrol()
    {
        return view('bacci_articles');
    }

        // public function articlescontrol($slug)
        // {
        //     $path = resource_path("articlesPosts/{$slug}.html");

        //     $varPost = file_get_contents($path);

        //     return view('bacci_articles', [
        //         'article_posts' => $varPost]);
        // }

    public function newscontrol()
    {
        return view('bacci_news');
    }

    public function blogcontrol()
    {
        return view('bacci_blog');
    }

    public function aboutcontrol()
    {
        return view('bacci_aboutus');
    }

    public function sitemapcontrol()
    {
        return view('bacci_sitemap');
    }


    /*
    public function all()
    {
        $accessFile = File::files(resource_path("samplePosts"));

        return array_map(function ($file) {
            return $file -> getContents();
        }, $accessFile);
    }

    public function posting($slug)
    {
        $path = resource_path("samplePosts/{$slug}.html");

        if (! file_exists ($path)) {
            // throw new ModelNotFoundException();
            return redirect('/');
            // dd('file does not exist');
        }

        $varPost = file_get_contents($path);

        return view('my-post', [
            'my_post' => $varPost]);
    }
    */
}

?>
