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
			<h1 id = "abouttitle"> About The Workplace of Today</h1>
			
			<article>
				The Workplace of Today Team would like to inform and give valuable information to readers and citizens around the world concerning about the working area in a certain country or organization/s on your platform of choice.
				With the development of this so called "Static Website", it has the feature of being user-friendly to most reader and users of our website.
			</article>
			
			<br>

			<h3> Web Development Team </h3>
			<table id = "we_info">
				<tr>
					<td id = "img"><img id = "pic" src = "/img/laurenceangelo.jpeg"></td>
					<td id = "member">
						<li id = "name"> Laurence Angelo T. Batu </li><hr/>
						<li id = "others"> Main Developer; Assistant Web Designer; Debugger; Document Compiler </li>
						<br>
						<li id = "others"> <b> School: </b> Pamantasan ng Lungsod ng Pasig </li>
						<li id = "others"> <b> Email: </b> batu_laurenceangelo@plpasig.edu.ph </li>
					</td>
				</tr>

				<tr>
					<td id = "img"><img id = "pic" src = "/img/cristamae.jpeg"></td>
					<td id = "member">
						<li id = "name"> Crista Mae E. Chiangco </li><hr/>
						<li id = "others"> Main Web Designer; Assistant Developer </li>
						<br>
						<li id = "others"> <b> School: </b> Pamantasan ng Lungsod ng Pasig </li>
						<li id = "others"> <b> Email: </b> chiangco_cristamae@plpasig.edu.ph </li>
					</td>
				</tr>

				<tr>
					<td id = "img"><img id = "pic" src = "/img/edwardjohn.jpeg"></td>
					<td id = "member">
						<li id = "name"> Edward John M. Aguilar </li><hr/>
						<li id = "others"> Assistant Developer; Assistant Web Designer </li>
						<br>
						<li id = "others"> <b> School: </b> Pamantasan ng Lungsod ng Pasig </li>
						<li id = "others"> <b> Email: </b> aguilar_edwardjohn@plpasig.edu.ph </li>
					</td>
				</tr>

				<tr>
					<td id = "img"><img id = "pic" src = "/img/charamae.jpeg"></td>
					<td id = "member">
						<li id = "name"> Chara Mae P. Inodeo </li><hr/>
						<li id = "others"> Assistant Web Designer; News and Information Content (Documentation) </li>
						<br>
						<li id = "others"> <b> School: </b> Pamantasan ng Lungsod ng Pasig </li>
						<li id = "others"> <b> Email: </b> inodeo_charamae@plpasig.edu.ph </li>
					</td>
				</tr>
				
				<tr>
					<td id = "img"><img id = "pic" src="/img/mariakyla.jpeg"></td>
					<td id = "member">
						<li id = "name"> Maria Kyla C. Casi </li><hr/>
						<li id = "others"> Assistant Web Designer; News and Information Content (Documentation) </li>
						<br>
						<li id = "others"> <b> School: </b> Pamantasan ng Lungsod ng Pasig </li>
						<li id = "others"> <b> Email: </b> casi_mariakyla@plpasig.edu.ph </li>
					</td>
				</tr>
			</table>
			
			<h3> Connect With Us </h3>
			<ul id = "cws">
				<li> E-Mail	:		<a id = "socmed"> theworkplaceoftoday@gmail.com </a></li>
				<li> Contact # :	0957 - 3673 - 075 </li>
				<li> Telephone :	202-555-0185 </li>
				<li> Facebook :		<a id = "socmed"> https://www.facebook.com/groups/the-workplace-of-today </a></li>
				<li> Youtube :		<a id = "socmed"> https://www.youtube.com/channel/the-workplace-of-today </a></li>
			</ul>
 		</div>

         @include('/layouts/bacci_header')
         @include('/layouts/bacci_footer')
	</body>
</html>