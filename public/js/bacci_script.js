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

function news1(){
	document.getElementById("news-id").style.display = "block";
	document.getElementById("articles-id").style.display = "none";
	document.getElementById("n").style.background = "black";
	document.getElementById("art").style.background = "none";
	document.getElementById("articles2-id").style.display = "none";
	document.getElementById("articles3-id").style.display = "none";
}

function news2(){
	document.getElementById("news2-id").style.display = "block";
	document.getElementById("news-id").style.display = "none";
}

function news3(){
	document.getElementById("news3-id").style.display = "block";
	document.getElementById("news2-id").style.display = "none";
}

function prev1(){
	document.getElementById("news-id").style.display = "block";
	document.getElementById("news2-id").style.display = "none";
}

function prev2(){
	document.getElementById("news2-id").style.display = "block";
	document.getElementById("news3-id").style.display = "none";
}

function articles1(){
	document.getElementById("art").style.background = "black";
	document.getElementById("articles-id").style.display = "block";
	document.getElementById("news-id").style.display = "none";
	document.getElementById("news2-id").style.display = "none";
	document.getElementById("news3-id").style.display = "none";
	document.getElementById("n").style.background = "none";
}

function articles2(){
	document.getElementById("articles2-id").style.display = "block";
	document.getElementById("articles-id").style.display = "none";
}

function articles3(){
	document.getElementById("articles3-id").style.display = "block";
	document.getElementById("articles2-id").style.display = "none";
}

function prevart1(){
	document.getElementById("articles-id").style.display = "block";
	document.getElementById("articles2-id").style.display = "none";
}

function prevart2(){
	document.getElementById("articles2-id").style.display = "block";
	document.getElementById("articles3-id").style.display = "none";
}



$(document).ready(function() {
	$("form[name='formmm']").submit(function() {

		// do the extra stuff here
		$.ajax({
			type: "POST",
			url: "mail-script.php",
			data: $(this).serialize(),
			success: function() {
				$('.alert').fadeIn(100).show();

			}
		})

	})
})