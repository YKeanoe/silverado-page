<?php session_start();?>
<?php
if(!empty($_POST)){
	$_SESSION["name"] = $_POST["name"];
	$_SESSION["phone"] = $_POST["phone"];
	$_SESSION["email"] = $_POST["email"];
}



	$url = 'data.php';
		$ch = curl_init();

		$url = 'data.php';		
	
		curl_setopt($ch, CURLOPT_URL,$url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_HEADER, 0);		

		$json = curl_exec($ch); 
	?>	

<?php session_destroy?>
<!DOCTYPE html>


<html>
<head>
  <link href="style.css" rel="stylesheet" type="text/css">
	<meta http-equiv="refresh" content="10;url=index.php" />

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
	htmlString +="<div class='infoHeadBorder'><h2>Thank You</h2></div>";
	htmlString +="<div style='margin:auto; width:40%;'><form>";
	htmlString +="<h4 style='text-align:center;'>Thank you for your purchase</h4>"

	
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


