<html>
<head>
  <link href="style.css" rel="stylesheet" type="text/css">

  <script>
  var xmlhttp = new XMLHttpRequest();
  var url = "http://<?php echo $_SERVER['SERVER_NAME']; ?>/~e54061/wp/movie-service.php";

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
	htmlString +="<div class='infoHeadBorder'><h2>Movies</h2></div>";
	
	for(movie in movieObj)
	{
		htmlString+="<div class='"+movie+"'>";
		htmlString+="<div class='moviePoster'><img src='"+movieObj[movie].poster+"' alt='poster' /></div>";
		htmlString+="<div class='movieDescription'>"
		htmlString+="<p>"+movieObj[movie].title+"</p>";
		htmlString+="<p><img src='"+movieObj[movie].rating+"' alt='general rate' /></p>";
		
		htmlString+="<table class ='scheduleTable'>";
		htmlString+="<tr class='scheduleTR'>";
		htmlString+="<th class='scheduleTH'>Day</th>";
		htmlString+="<th class='scheduleTH'>Schedule</th>";
		htmlString+="</tr>";


		for (k in movieObj[movie].sessions)
		{
			htmlString+="<tr class='scheduleTR'>";

			htmlString+="<td class='scheduleTD'>"
			htmlString+= k + "</td> <td class='scheduleTD'>" + movieObj[movie].sessions[k] +"</td>"
			htmlString+="</tr>";
		}
		htmlString+="</table>"
		htmlString+="<br><o class='read'>"
		console.log(movie);
		for (i in movieObj[movie].description)
        {
			htmlString+=movieObj[movie].description[i];
        }
		htmlString+="</p>"
		htmlString+="<a style='display: block' href='book.html'><div class='buyTicket'>Order Ticket</div></a>";
		htmlString+="</div>"
		htmlString+="<div><video width='100%' controls><source src='" + movieObj[movie].trailer + "' type='video/mp4'></video></div>";
		htmlString+="</div>";
	}
	document.getElementById("moviesSchedule").innerHTML = htmlString;

}
  </script>
</head>

<body>

<div id="moviesSchedule">
</div>

</body>
</html>