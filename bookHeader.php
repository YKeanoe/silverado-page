<?php session_start();?>


<!DOCTYPE html>

<html>

<head>
  <meta charset="UTF-8">
  <link href="style.css" rel="stylesheet" type="text/css">
  <title> Silverado Cinema </title>
  <script type="text/javascript" src="javascript.js">
  </script>
<script>
  var xmlhttp = new XMLHttpRequest();
  var url = "https://<?php echo $_SERVER['SERVER_NAME']; ?>/~e54061/wp/movie-service.php";


  xmlhttp.onreadystatechange=function() {
  if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
	myFunction(xmlhttp.responseText);
  }
  }
    xmlhttp.open("POST", url, true);
    xmlhttp.send();
	
	function myFunction(response) {
		var movieObj = JSON.parse(response);
		var htmlString = "";
		var poster;
		var movSel;
		var mov = '<?php echo $_GET["movPick"]; ?>';
		poster = document.getElementsByClassName("bookRight");
		poster[0].innerHTML = "<img id='movieBooked' src='"+movieObj[mov].poster+"' alt='movie test'/>";
		
		if(mov=="AC")
		{
			movSel = document.getElementById("film");
			movSel.innerHTML = "<option value='AC'>Guardian of the Galaxy</option>";
		}
		if(mov=="CH")
		{
			movSel = document.getElementById("film");
			movSel.innerHTML = "<option value='CH'>Planes: Fire and Rescue</option>";
		}
		if(mov=="AF")
		{
			movSel = document.getElementById("film");
			movSel.innerHTML = "<option value='AF'>Mardaani</option>";
		}
		if(mov=="RC")
		{
			movSel = document.getElementById("film");
			movSel.innerHTML = "<option value='RC'>Once a Princess</option>";
		}
	}
  </script>
</head>
<body onLoad="check(); checkMovie();">

<div id="masthead">
    <div class ="logo"><img src='SilveradoLogo.png' alt='silverado logo' /></div>

		<div class = "nav">
       <a class="navPseudo" href="index.php">Home</a> | <a class="navPseudo" href="movies.php">Movies</a> | <a class="navPseudo" href="a2">Upcoming</a> | <a class="navPseudo" href="contact.php">Contact</a> 
</div>
</div>
