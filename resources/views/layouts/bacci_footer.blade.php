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

		<link rel = "stylesheet" href = "{{ asset('bacci_css/bacci_footer.css') }}">
    </head>

    <body>
        <div class = "footer_content">
                <b> || </b>
                    Copyright &#169 2021 The Workplace of Today 
                <b> || </b>
                    <a class = "terms" href = "#">Terms of Use</a> &nbsp|&nbsp <a class = "sitemap" href = "/sitemap"> Sitemap </a> &nbsp|&nbsp <a class = "privacy" href = "#"> Privacy Policy </a>
                <b> || </b> 
                    Email Us:
                    <img class = "followFB" src = "{{ asset('icons/ico_fb.png') }}"/>
                    <img class = "followINSTA" src = "{{ asset('icons/ico_insta.png') }}"/>
                    <img class = "followTWITTER" src = "{{ asset('icons/ico_twitter.png') }}"/>
                <b> || </b>
        </div>
    </body>

</html>