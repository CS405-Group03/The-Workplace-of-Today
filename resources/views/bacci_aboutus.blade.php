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

        <link rel = "stylesheet" href = "{{ asset('bacci_css/bacci_aboutus.css') }}">
    </head>

	<body>
        @include('layouts/bacci_web_bg')
        
		<div class = "aboutus_content">
			<h1 id="abouttitle"> About The Workplace of Today</h1>
			
			<article>
				The Workplace of Today Team would like to inform and give valuable information to readers and citizens around the world concerning about the working area in a certain country or organization/s on your platform of choice.
				With the development of this so called "Static Website", it has the feature of being user-friendly to most reader and users of our website.
			</article>
			
			<br>

			<h3> Web Development Team: </h3>
			<ul>
				<li> Laurence Angelo T. Batu	-	Main Developer; Assistant Web Designer; Debugger; Document Compiler </li>
				<li> Crista Mae E. Chiangco		-	Main Web Designer; Assistant Developer </li>
				<li> Edward John M. Aguilar		-	Assisstant Developer; Assistant Web Designer </li>
				<li> Chara Mae P. Inodeo		-	Assistant Web Designer; News and Information content (Documentation) </li>
				<li> Maria Kyla C. Casi			-	Assistant Web Designer; News and Information content (Documentation) </li>
			</ul>
			
			<h3> Connect With Us: </h3>
			<ul>
				<li> E-Mail	:		theworkplaceoftoday@gmail.com </li>
				<li> Contact # :	0957 - 3673 - 075 </li>
				<li> Telephone :	202-555-0185 </li>
				<li> Facebook :		<a> https://www.facebook.com/groups/the-workplace-of-today </a> </li>
				<li> Youtube :		<a> https://www.youtube.com/channel/the-workplace-of-today </a> </li>
			</ul>
 		</div>

         @include('/layouts/bacci_header')
         @include('/layouts/bacci_footer')
	</body>
</html>