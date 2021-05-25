<!--
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
-->

<!DOCTYPE html>

<html lang = "{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
    	<title> Workplace of Today </title>
        
        <meta charset = "utf-8">
        <meta name = "viewport" content = "width=device-width, initial-scale=1">

        <link rel = "stylesheet" href = "{{ asset('bacci_css/bacci_blog.css') }}">
        <link rel = "stylesheet" href = "{{ asset('bacci_css/bacci_genDesign.css') }}">
    </head>
    
	<body>
        @include('layouts/bacci_web_bg')
    
        <div id = "blogpage">
            <div class = "main_blog_content">

                <div id = "blog_content">    
                    <img id = "blog_profpic_left" src = "/img/cristamae.jpeg">
                    <article id = "blog_art_left">
                        2021, January 19th Mon
                        <br><br>
                        If opportunity doesn't knock, build a door.
                        <br>
                        -- Crista 
                    </article>
                </div>
                
                <div id = "blog_content">    
                    <img id = "blog_profpic_right" src = "/img/edwardjohn.jpeg">
                    <article id = "blog_art_right">
                        2021, April 19th Mon
                        <br><br>
                        Nothings more fun that doing what you people say you can't do. You have to balance your passion, not your time.
                        <br>
                        -- Edward  
                    </article>
                </div>

                <div id = "blog_content">    
                    <img id = "blog_profpic_left" src = "/img/laurenceangelo.jpeg">
                    <article id = "blog_art_left">
                        2021, February 29th Mon
                        <br><br>
                        Coming together is a beginning. Keeping together is process. Working together is success...
                        <br>
                        -- Laurence
                    </article>
                </div>

                <div id = "blog_content">    
                    <img id = "blog_profpic_right" src = "/img/mariakyla.jpeg">
                    <article id = "blog_art_right">
                        2020, May 09th Mon
                        <br><br>
                        You get what you work for, not what you wish for!
                        <br>
                        -- Kyla
                    </article>
                </div>

                <div id = "blog_content">    
                    <img id = "blog_profpic_left" src = "/img/charamae.jpeg">
                    <article id = "blog_art_left">
                        2019, April 19th Mon
                        <br><br>
                       ... today is another chance to get better.
                        <br>
                        -- Chara
                    </article>
                </div>

            </div>
        
            <div class = "blog_title">
                <h1 id = "blog"> Blog </h1>
            </div>
        </div>      
        
        @include('/layouts/bacci_header')
        @include('/layouts/bacci_footer')
	</body>
</html>