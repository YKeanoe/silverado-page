<?php session_start();?>
<?php
$_SESSION["name"] = "";
$_SESSION["email"] = "";
$_SESSION["phone"] = "";
$_SESSION["cart"] = "";
?>

<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1">
  <meta charset="UTF-8">
  <title> Silverado Cinema </title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
//session_unset();
?>

<div id="masthead">
    <div class ="logo"><img src="SilveradoLogo.png" alt='silverado logo'/></div>

	<div class = "nav">
       <a class="navPseudo" href="index.php">Home</a> | <a class="navPseudo" href="movies.php">Movies</a> | <a class="navPseudo" href="a2">Upcoming</a> | <a class="navPseudo" href="contact.php">Contact</a> 
    </div>
</div>