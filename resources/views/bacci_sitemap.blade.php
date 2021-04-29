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

        <link rel = "stylesheet" href = "{{ asset('bacci_css/bacci_sitemap.css') }}">
    </head>

	<body>
        @include('layouts/bacci_web_bg')
        
		<div class = "sitemap_content">
			<h1 id="sitemaptitle"> Sitemap </h1>
			
			<h3> Workplace Content </h3>
			<ul>
				<li><a class = "sitemap_a" href = "/articles"> Workplace Articles </a></li>
				<li><a class = "sitemap_a" href = "/news"> Workplace News </a></li>
				<li><a class = "sitemap_a" href = "/blog"> Workplace Blog </a></li>
			</ul>

			<h3> Relations </h3>
			<ul>
				<li><a class = "sitemap_a" href = "https://www.gmanetwork.ph"> GMA News </a></li>
				<li><a class = "sitemap_a" href = "https://www.w3schools.com"> W3School </a></li>
				<li><a class = "sitemap_a" href = "https://www.pinterest.c"> Pinterest </a></li>
				<li><a class = "sitemap_a" href = "https://www.geeksforgeeks.org"> GeeksforGeeks </a></li>
				<li><a class = "sitemap_a" href = "https://www.github.com"> GitHub </a></li>
				<li><a class = "sitemap_a" href = "https://www.youtube.com"> Youtube </a></li>
				<li><a class = "sitemap_a" href = "https://www.quora.com"> Quora </a></li>
				<li><a class = "sitemap_a" href = "https://scholar.google.com"> Google Scholar </a></li>
				<li><a class = "sitemap_a" href = "https://www.wikipedia.com"> Wikipedia </a></li>
				<li><a class = "sitemap_a" href = "https://www.cnnnews.com"> CNN News </a></li>
			</ul>

			<h3> Connect With Us </h3>
			<ul>
				<li><a class = "sitemap_a" href = "/aboutus"> About Us </a></li>
				<li><a class = "sitemap_a" href = "/aboutus"> How to reach us </a></li>
			</ul>
 		</div>

         @include('/layouts/bacci_header')
         @include('/layouts/bacci_footer')
	</body>
</html>