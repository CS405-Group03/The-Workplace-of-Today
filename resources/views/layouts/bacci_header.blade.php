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
        @yield('meta')

		<link rel = "stylesheet" href = "{{ asset('bacci_css/bacci_header.css') }}">
        <link rel = "stylesheet" href = "{{ asset('bacci_css/bacci_genDesign.css') }}">
    </head>

    <body>
        <div class="header_content">
            <div class="navbar">
               
                <div class="dropdown">
                    <img class="dropbtn" src = "/icons/ico_menu.png">
                    <div class="dropdown-content">
                        <li class="link"><a class="menu" href="/">Home</a></li>
                        <li class="link"><a class="menu" href="/articles">Articles</a></li>
                        <li class="link"><a class="menu" href="/news">News</a></li>
                        <li class="link"><a class="menu" href="/blog">Blog</a></li>
                        <li class="link"><a class="menu" href="/aboutus">About Us</a></li>
                    </div>
                </div>
                      
                <h1 class="webtitle"><a href = "/" class="webtitle_a"> The Workplace of Today </a></h1>
             
            </div>
        </div>
    </body>

</html>
