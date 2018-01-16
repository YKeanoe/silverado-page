<?php session_start();?>


<!DOCTYPE html>


<html>
<head>
  <link href="style.css" rel="stylesheet" type="text/css">

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
	htmlString +="<div class='infoHeadBorder'><h2>Detail</h2></div>";
	htmlString +="<div style='margin:auto; width:40%;'><form action='confirmationPage.php' method='post'>";
	htmlString +="<h4 style='text-align:center;'>We need your personal information to confirm the purchase</h4>"
	htmlString +="<input type='text' name='name' size='50' placeholder='Enter your full name' style='text-align:center; padding:2%; border-radius:8px;' pattern='(^(?:(?:[a-zA-Z]{2,4}\.)|(?:[a-zA-Z]{2,24}))){1} (?:[a-zA-Z]{2,24} )?(?:[a-zA-Z']{2,25})(?:(?:, [A-Za-z]{2,6}\.?){0,3})?' required>";
	htmlString +="<br><br>";
	htmlString +="<input type='email' name='email' size='50' placeholder='Enter a valid email address' style='text-align:center; padding:2%; border-radius:8px;' required>";
	htmlString +="<br><br>";
	htmlString +="<input type='text' name='phone' size='50' placeholder='Enter a valid phone number' style='text-align:center; padding:2%; border-radius:8px;' required>";
	htmlString +="<br><br>";
	htmlString +="<input type='submit' value='Confirm' style='display:block; text-align:center; padding:1%; width:60%; margin:auto;' placeholder='Enter your phone number' pattern='(\+614|\(?04\)?)\s?\d{4}\s?\d{4}' required>"
	htmlString+="</div></form>";
	
	document.getElementById("moviesSchedule").innerHTML = htmlString;

	}
  </script>
</head>

<body>

<div id="masthead">
    <div class ="logo"><img src='SilveradoLogo.png' alt='silverado logo' /></div>

		<div class = "nav">
       <a class="navPseudo" href="index.php">Home</a> | <a class="navPseudo" href="movies.php">Movies</a> | <a class="navPseudo" href="a2">Upcoming</a> | <a class="navPseudo" href="contact.php">Contact</a> 
</div>
</div>
	<div id="moviesSchedule">
		
	</div>






<?php include 'footer.php';?>

<?php include_once("/home/eh1/e54061/public_html/wp/debug.php"); ?>


