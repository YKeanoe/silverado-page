<?php session_start();?>
<?php 
	$_SESSION['voucher'] = "";

	if(isset($_GET["delete"]) && $_GET["delete"] != "")
	{
		$num = $_GET["delete"];
		unset($_SESSION["cart"][$num]);

	}
	
	if(isset($_GET["empty"]) && $_GET["empty"] != "")
	{
		for($g=0;$g<50;$g++)
		{
			echo $_SESSION["cart"][$g];
			unset($_SESSION["cart"][$g]);
		}
	}
	
	if(!empty($_POST))
	{
		if(!empty($_POST["voucher"]))
		{
			$_SESSION['voucher'] = $_POST["voucher"];
		}
		else
		$_SESSION['cart'][] = $_POST;
	}



?>

<!DOCTYPE html>

<html>
<head>
  <link href="style.css" rel="stylesheet" type="text/css">

  <script>

  
  var xmlhttp = new XMLHttpRequest();
  var url = "https://<?php echo $_SERVER['SERVER_NAME']; ?>/~e54061/wp/movie-service.php";
  var cart = '<?php echo json_encode($_SESSION["cart"]);?>';
  xmlhttp.onreadystatechange=function() {
  if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
	myFunction(xmlhttp.responseText);
  }
  }
    xmlhttp.open("POST", url, true);
    xmlhttp.send();
	
	
function myFunction(response) 
{
    var cartObj = JSON.parse(cart);
    var htmlString = "";
	var voucher = '<?php echo $_SESSION["voucher"]; ?>';

	htmlString +="<div class='infoHeadBorder'><h2>Cart</h2></div>";
	
	if('<?php echo count($_SESSION["cart"]); ?>'>0)
	{		
	
		for(cart in cartObj)
		{
			htmlString +="<div class='booked'>";

			if(cartObj[cart].film == "AF")
			{
				htmlString +="<h3 class='bookedTitle'>Mardaani (AF)</h3>";
			}
			if(cartObj[cart].film == "AC")
			{
				htmlString +="<h3 class='bookedTitle'>Guardian of The Galaxy (AC)</h3>";
			}			
			if(cartObj[cart].film == "RC")
			{
				htmlString +="<h3 class='bookedTitle'>Once a Princess (RC)</h3>";
			}			
			if(cartObj[cart].film == "CH")
			{
				htmlString +="<h3 class='bookedTitle'>Planes (CH)</h3>";
			}
			htmlString +="Showing at "+cartObj[cart].day+", "+cartObj[cart].time;
			htmlString +="<table id='cartTable' style='text-align:center; width:100%'>";
			htmlString +="<tr class='scheduleTR'><th class='cartTH'>Ticket Type</th><th class='cartTH'>Cost</th><th class='cartTH'>Qty</th><th class='cartTH'>Seats</th><th class='cartTH'>Subtotal</th></tr>";
			
			if(cartObj[cart].SA > 0)
			{
				htmlString +="<tr><td>Standard Full</td><td>"+cartObj[cart].SAPrice+"</td><td>"+cartObj[cart].SA+"</td><td>NA</td><td>"+cartObj[cart].SATotalPrice+"</td></tr>";
			}
			if(cartObj[cart].SP > 0)
			{
				htmlString +="<tr><td>Standard Concession</td><td>"+cartObj[cart].SPPrice+"</td><td>"+cartObj[cart].SP+"</td><td>NA</td><td>"+cartObj[cart].SPTotalPrice+"</td></tr>";
			}			
			if(cartObj[cart].SC > 0)
			{
				htmlString +="<tr><td>Standard Child</td><td>"+cartObj[cart].SCPrice+"</td><td>"+cartObj[cart].SC+"</td><td>NA</td><td>"+cartObj[cart].SCTotalPrice+"</td></tr>";
			}			
			if(cartObj[cart].FA > 0)
			{
				htmlString +="<tr><td>First Class Adult</td><td>"+cartObj[cart].FAPrice+"</td><td>"+cartObj[cart].FA+"</td><td>NA</td><td>"+cartObj[cart].FATotalPrice+"</td></tr>";
			}			
			if(cartObj[cart].FC > 0)
			{
				htmlString +="<tr><td>First Class Child</td><td>"+cartObj[cart].FCPrice+"</td><td>"+cartObj[cart].FC+"</td><td>NA</td><td>"+cartObj[cart].FCTotalPrice+"</td></tr>";
			}			
			if(cartObj[cart].B1 > 0)
			{
				htmlString +="<tr><td>Beanbag - 1 Person</td><td>"+cartObj[cart].B1Price+"</td><td>"+cartObj[cart].B1+"</td><td>NA</td><td>"+cartObj[cart].B1TotalPrice+"</td></tr>";
			}			
			if(cartObj[cart].B2 > 0)
			{
				htmlString +="<tr><td>Beanbag - 2 Person</td><td>"+cartObj[cart].B2Price+"</td><td>"+cartObj[cart].B2+"</td><td>NA</td><td>"+cartObj[cart].B2TotalPrice+"</td></tr>";
			}
			if(cartObj[cart].B3 > 0)
			{
				htmlString +="<tr><td>Beanbag - 3 Person</td><td>"+cartObj[cart].B3Price+"</td><td>"+cartObj[cart].B3+"</td><td>NA</td><td>"+cartObj[cart].B3TotalPrice+"</td></tr>";
			}
			htmlString +="<tr><td colspan='4' style='text-align:right'>Sub Total:</td><td>"+cartObj[cart].price+"</td></tr></table>";
			htmlString +="<a href='cart.php?delete="
			htmlString +=cart;
			htmlString +="'style='text-align:right; margin-left:85%; color: white; padding: 15px; font-family: mainFont; text-decoration:underline; display:block'>Delete from cart</p></a></div>";	

		}

		
	}
	

	else
	{
		htmlString +="<div class='booked' style='text-align:center'>";
		htmlString +="The cart is empty</div>"
	}
	
	var total = 0;
	for(cart in cartObj)
	{
		var o = cartObj[cart].TotalPriceINT;

		var p = parseInt(o);
				console.log("o: " + o + ", p: "+p);
		total += p;
		
	}
	
	
	htmlString +="<form method='post' style='margin-left:1.5%; display:inline-block'><input type='text' name='voucher' placeholder='12345-67890-AB' pattern='[0-9]{5}[-][0-9]{5}[-][A-Z]{2}' required><input type='submit' value='validate'></form>"
	
	htmlString +="<a href='cart.php?empty=1' style='text-align:right; display:inline-block; margin-left:62%; color: white; padding: 5px; font-family: mainFont; text-decoration:underline;'>Empty cart</p></a></div>";	
	
	htmlString +="<p align='right' style='display:block; text-align:right; margin-right:5%'>Total: &nbsp;&nbsp;&nbsp;$"+total+".00</p>";

	var voucherP1 = voucher.substring(0,5)
	var voucherP2 = voucher.substring(6,11)
	var voucherP3 = voucher.substring(12,14)
	var voucherFirstWord = ((parseInt(voucherP1.charAt(0))*parseInt(voucherP1.charAt(1))+parseInt(voucherP1.charAt(2)))*parseInt(voucherP1.charAt(3))+parseInt(voucherP1.charAt(4)))%26;
	var voucherSecondWord = ((parseInt(voucherP2.charAt(0))*parseInt(voucherP2.charAt(1))+parseInt(voucherP2.charAt(2)))*parseInt(voucherP2.charAt(3))+parseInt(voucherP2.charAt(4)))%26;
	var v1 = String.fromCharCode(97 + voucherFirstWord);
	var v2 = String.fromCharCode(97 + voucherSecondWord);
	var disc = 0;
	if (v1.toUpperCase() == voucherP3.charAt(0) && v2.toUpperCase() ==voucherP3.charAt(1))
	{
		 
		disc = total *20 / 100;
		if(disc % 1 != 0)
			htmlString +="<p style='text-align:right; margin-right:5%'>Meal and Movie Deal Voucher Disc (20%): &nbsp;&nbsp;&nbsp;$"+disc+"0</p>";
		
		else
			htmlString +="<p style='text-align:right; margin-right:5%'>Meal and Movie Deal Voucher Disc (20%): &nbsp;&nbsp;&nbsp;$"+disc+".00</p>";
	}
	else
	{
		htmlString +="<p style='text-align:right; margin-right:5%'>Meal and Movie Deal Voucher Disc (20%): &nbsp;&nbsp;&nbsp;NA</p>";
		htmlString +="<p style='text-align:right; margin-right:10%; font-size:15px; color:#F74A5B;'>Please input the voucher code to get the discount</p>";
	}
	
	var gTotal = total - disc;
	if(gTotal % 1 != 0)
		htmlString +="<p style='text-align:right; margin-right:5%'>Grand Total: &nbsp;&nbsp;&nbsp;$"+gTotal+"0</p>"
	else
		htmlString +="<p style='text-align:right; margin-right:5%'>Grand Total: &nbsp;&nbsp;&nbsp;$"+gTotal+".00</p>"

	htmlString +="<a style='display: inline-block; width:30%; margin-left:37%' href='movies.php'><div class='cartButton'>Continue Shopping</div></a>"; 
	htmlString +="<a style='display: inline-block; width:30%; margin-left:1%' href='customerDetail.php'><div class='cartButton'>Checkout</div></a>";

	
	document.getElementById("moviesSchedule").innerHTML = htmlString;

}
	
</script>
</head>

<body>
<?php
	//session_unset();
	//$_SESSION["cart"] = $_POST["film"];
?>

	<div id="masthead">
		<div class ="logo"><img src='SilveradoLogo.png' alt='silverado logo' /></div>
			<div class = "nav">
				<a class="navPseudo" href="index.php">Home</a> | <a class="navPseudo" href="movies.php">Movies</a> | <a class="navPseudo" href="a2">Upcoming</a> | <a class="navPseudo" href="contact.php">Contact</a> 
			</div>
		</div>
	</div>
	<div id="moviesSchedule">
	  
	</div>






<?php include 'footer.php';?>

<?php include_once("/home/eh1/e54061/public_html/wp/debug.php"); ?>



