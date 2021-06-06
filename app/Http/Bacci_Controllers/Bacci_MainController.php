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

    public function registercontrol()
    {
        return view('bacci_register');
    }

    public function articlescontrol()
    {
        return view('bacci_articles');
    }

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
}

?>
