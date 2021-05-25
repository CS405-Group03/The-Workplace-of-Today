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

<html>
	<head>
		<style>
			.bg_img_container {
				position : fixed;
				width : 100vw;
				height : 100vh;
				-moz-animation-timing-function : ease;
				-webkit-animation-timing-function : ease;
				animation: myanime 10s infinite 0s;
				background-repeat : no-repeat;
				filter : brightness(65%);
				background-position: center;
				backface-visibility: hidden;
			}

			@keyframes myanime {
				0% {
					background-image : url(icons/dyaryo1.jpg);
				}
				33% {
					background-image : url(icons/dyaryo2.jpg);
				}
				66% {
					background-image : url(icons/dyaryo3.jpg);
				}
				100% {
					background-image : url(icons/dyaryo1.jpg);
				}
			}
		</style>
	</head>

	<body>
		<div class = "bg_img_container"> </div>
	</body>
</html>
