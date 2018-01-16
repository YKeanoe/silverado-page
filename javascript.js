var saTotalPrice = 0;
var spTotalPrice = 0;
var scTotalPrice = 0;
var faTotalPrice = 0;
var fcTotalPrice = 0;
var b1TotalPrice = 0;
var b2TotalPrice = 0;
var b3TotalPrice = 0;
var time;
var film;
var day;
var saPrice, spPrice, scPrice, faPrice, fcPrice, b1Price,b2Price,b3Price;
var moviePicked = 0;
var moviePoster;
var ff7Poster, homePoster;


function extend(input)
{
  var num;
  var movieDesc = document.getElementsByClassName("movieDescription");
  var movieRead;
  if (input == "1")
  {
    movieRead = movieDesc[0].children;
	movieRead[7].class = "hiddenRead2";
	movieRead[6].class = "hide";
    console.log(movieRead[7])
    movieRead[7].style.display="inline";
	
  }
  if (input == "2")
  {
    movieRead = movieDesc[1].children;
	movieRead[7].class = "hiddenRead2";
	movieRead[6].class = "hide";
    console.log(movieRead[6])
    console.log(movieRead[7])
    movieRead[7].style.display="inline";
  }
  if (input == "3")
  {
    movieRead = movieDesc[2].children;
	movieRead[7].class = "hiddenRead2";
	movieRead[6].class = "hide";
    console.log(movieRead[7])
    movieRead[7].style.display="inline";
  }
  if (input == "4")
  {
    movieRead = movieDesc[3].children;
	movieRead[7].class = "hiddenRead2";
	movieRead[6].class = "hide";
    console.log(movieRead[7])
    movieRead[7].style.display="inline";
  }
  
}

function checkMovie()
{
	
  console.log("moviePicked = " + moviePicked);
  var optionMovie = document.getElementById("film")

  if(moviePicked == "1")
  {
    film = "AC";
    optionMovie.selectedIndex = "0";
  }
  if(moviePicked == "2")
  {
    film = "CH";
    optionMovie.selectedIndex = "1";
  }
  if(moviePicked == "3")
  {
    film = "AF";
    optionMovie.selectedIndex = "2";
  }
  if(moviePicked == "4")
  {
    film = "RC";
    optionMovie.selectedIndex = "3";
  }
  check();
}

function check()
{
  time = document.getElementById("time").value;
  film = document.getElementById("film").value;
  day = document.getElementById("day").value;
  checkAvaliable();
  console.log(film);
  console.log(day);
  console.log(time);

  moviePoster = document.getElementById('movieBooked')
 /* if(film == "AC")
    moviePoster.src = "f7fPotrait.jpg";
  if(film == "CH")
    moviePoster.src = "homePotrait.jpg";
  if(film == "AF")
    moviePoster.src = "calvaryPotrait.jpg";
  if(film == "RC")
    moviePoster.src = "CinderellaPotrait.jpg";
*/
  
  var inputs = document.getElementsByTagName("input");
  for(i = 0; i<inputs.length ; i++)
  {
    if(inputs[i].type == 'number')
	{
	  checkPrice(inputs[i]);
	}
  }
}


function checkAvaliable()
{
    var optionDay = document.getElementById("day")
    var optionTime = document.getElementById("time")

  for(i = 0 ; i < optionDay.getElementsByTagName("option").length; i++)
  {
    optionDay.getElementsByTagName("option")[i].style.display = "block";
  }
  for(i = 0 ; i < optionTime.getElementsByTagName("option").length; i++)
  {
    optionTime.getElementsByTagName("option")[i].style.display = "block";
  }
  if(film == "AC")
  {
	if(optionDay.selectedIndex == "0" || optionDay.selectedIndex == "1")
	{
	  optionDay.selectedIndex = "2";
	  optionDay.getElementsByTagName("option")[0].style.display = "none";
      optionDay.getElementsByTagName("option")[1].style.display = "none";
	}
	else
	{
      optionDay.getElementsByTagName("option")[0].style.display = "none";
      optionDay.getElementsByTagName("option")[1].style.display = "none";
	}
	
	if(optionTime.selectedIndex < 2)
	{
	  optionTime.selectedIndex = "4";
    }
	
    optionTime.getElementsByTagName("option")[0].style.display = "none";
    optionTime.getElementsByTagName("option")[1].style.display = "none";
    optionTime.getElementsByTagName("option")[2].style.display = "none";
    optionTime.getElementsByTagName("option")[3].style.display = "none";
  }
  
  if(film == "CH")
  {
	if(optionDay.selectedIndex < 2)
	{
	  optionTime.selectedIndex = "1";
      optionTime.getElementsByTagName("option")[0].style.display = "none";
      optionTime.getElementsByTagName("option")[2].style.display = "none";
      optionTime.getElementsByTagName("option")[3].style.display = "none";
      optionTime.getElementsByTagName("option")[4].style.display = "none";
    }
	if(optionDay.selectedIndex > 1 && optionDay.selectedIndex < 5)
	{
	  optionTime.selectedIndex = "3";
      optionTime.getElementsByTagName("option")[0].style.display = "none";
      optionTime.getElementsByTagName("option")[1].style.display = "none";
      optionTime.getElementsByTagName("option")[2].style.display = "none";
      optionTime.getElementsByTagName("option")[4].style.display = "none";
    }
	if(optionDay.selectedIndex > 4)
	{
	  optionTime.selectedIndex = "0";
      optionTime.getElementsByTagName("option")[3].style.display = "none";
      optionTime.getElementsByTagName("option")[1].style.display = "none";
      optionTime.getElementsByTagName("option")[2].style.display = "none";
      optionTime.getElementsByTagName("option")[4].style.display = "none";
    }
  }
  if(film == "AF")
  {
	if(optionDay.selectedIndex >= 2 && optionDay.selectedIndex <= 4 )
	{
	  optionDay.selectedIndex = "0";
	  optionDay.getElementsByTagName("option")[2].style.display = "none";
      optionDay.getElementsByTagName("option")[3].style.display = "none";
  	  optionDay.getElementsByTagName("option")[4].style.display = "none";
	}
	else
	{
	  optionDay.getElementsByTagName("option")[2].style.display = "none";
      optionDay.getElementsByTagName("option")[3].style.display = "none";
  	  optionDay.getElementsByTagName("option")[4].style.display = "none";
	}
	if(optionDay.selectedIndex < 2)
	{
	  optionTime.selectedIndex = "3";
      optionTime.getElementsByTagName("option")[0].style.display = "none";
      optionTime.getElementsByTagName("option")[1].style.display = "none";
      optionTime.getElementsByTagName("option")[2].style.display = "none";
      optionTime.getElementsByTagName("option")[4].style.display = "none";
    }
	if(optionDay.selectedIndex > 4)
	{
	  optionTime.selectedIndex = "2";
      optionTime.getElementsByTagName("option")[0].style.display = "none";
      optionTime.getElementsByTagName("option")[1].style.display = "none";
      optionTime.getElementsByTagName("option")[3].style.display = "none";
      optionTime.getElementsByTagName("option")[4].style.display = "none";
    }
  }
  if(film == "RC")
  {
	if(optionDay.selectedIndex < 2)
	{
	  optionTime.selectedIndex = "4";
      optionTime.getElementsByTagName("option")[0].style.display = "none";
      optionTime.getElementsByTagName("option")[1].style.display = "none";
      optionTime.getElementsByTagName("option")[2].style.display = "none";
      optionTime.getElementsByTagName("option")[3].style.display = "none";
    }
	if(optionDay.selectedIndex > 4)
	{
	  optionTime.selectedIndex = "3";
      optionTime.getElementsByTagName("option")[0].style.display = "none";
      optionTime.getElementsByTagName("option")[1].style.display = "none";
      optionTime.getElementsByTagName("option")[2].style.display = "none";
      optionTime.getElementsByTagName("option")[4].style.display = "none";
    }
  }


}

function checkPrice(element)
{    
  var id = element.name;
  var qty = element.value;

  if(id == "SA")
  {
    if(day == "saturday" || day == "sunday")
    {
	saPrice = 18;
	}
	else
	{
	  if((day == "wednesday" || day == "thursday" || day == "friday") && time != "1pm")
	  {
	    saPrice = 18;
	  }
	  else
	  {
	    saPrice = 12;
	  }
	}
    saTotalPrice = saPrice * qty;
	if(saTotalPrice < 10)
	  document.getElementById("SAPrice").innerHTML= "$0" + saTotalPrice + ".00";
    else
	  document.getElementById("SAPrice").innerHTML= "$" + saTotalPrice + ".00"; 
  }
  if(id == "SP")
  {
    if(day == "saturday" || day == "sunday")
    {
	spPrice = 15;
	}
	else
	{
	  if((day == "wednesday" || day == "thursday" || day == "friday") && time != "1pm")
	  {
	    spPrice = 15;
	  }
	  else
	  {
	    spPrice = 10;
	  }
	}    
	spTotalPrice = spPrice * qty;
	if(spTotalPrice < 10)
	  document.getElementById("SPPrice").innerHTML= "$0" + spTotalPrice + ".00";
    else
	  document.getElementById("SPPrice").innerHTML= "$" + spTotalPrice + ".00"; 
  }
  if(id == "SC")
  {
    if(day == "saturday" || day == "sunday")
    {
	scPrice = 12;
	}
	else
	{
	  if((day == "wednesday" || day == "thursday" || day == "friday") && time != "1pm")
	  {
	    scPrice = 12;
	  }
	  else
	  {
	    scPrice = 8;
	  }
	}  
    scPrice = 8;
    scTotalPrice = scPrice * qty;
	if(scTotalPrice < 10)
	  document.getElementById("SCPrice").innerHTML= "$0" + scTotalPrice + ".00";
    else
	  document.getElementById("SCPrice").innerHTML= "$" + scTotalPrice + ".00"; 
  }
  if(id == "FA")
  {
    if(day == "saturday" || day == "sunday")
    {
	faPrice = 30;
	}
	else
	{
	  if((day == "wednesday" || day == "thursday" || day == "friday") && time != "1pm")
	  {
	    faPrice = 30;
	  }
	  else
	  {
	    faPrice = 25;
	  }
	}  
	faTotalPrice = faPrice * qty;
	if(faTotalPrice < 10)
	  document.getElementById("FAPrice").innerHTML= "$0" + faTotalPrice + ".00";
    else
	  document.getElementById("FAPrice").innerHTML= "$" + faTotalPrice + ".00"; 
  }
  if(id == "FC")
  {
    if(day == "saturday" || day == "sunday")
    {
	fcPrice = 25;
	}
	else
	{
	  if((day == "wednesday" || day == "thursday" || day == "friday") && time != "1pm")
	  {
	    fcPrice = 25;
	  }
	  else
	  {
	    fcPrice = 20;
	  }
	}  
    fcTotalPrice = fcPrice * qty;
	if(fcTotalPrice < 10)
	  document.getElementById("FCPrice").innerHTML= "$0" + fcTotalPrice + ".00";
    else
	  document.getElementById("FCPrice").innerHTML= "$" + fcTotalPrice + ".00"; 
  }
  if(id == "B1")
  {
    if(day == "saturday" || day == "sunday")
    {
	b1Price = 30;
	}
	else
	{
	  if((day == "wednesday" || day == "thursday" || day == "friday") && time != "1pm")
	  {
	    b1Price = 30;
	  }
	  else
	  {
	    b1Price = 20;
	  }
	}  
    b1TotalPrice = b1Price * qty;
	if(b1TotalPrice < 10)
	  document.getElementById("B1Price").innerHTML= "$0" + b1TotalPrice + ".00";
    else
	  document.getElementById("B1Price").innerHTML= "$" + b1TotalPrice + ".00"; 
  }
  if(id == "B2")
  {
    if(day == "saturday" || day == "sunday")
    {
	b2Price = 30;
	}
	else
	{
	  if((day == "wednesday" || day == "thursday" || day == "friday") && time != "1pm")
	  {
	    b2Price = 30;
	  }
	  else
	  {
	    b2Price = 20;
	  }
	}  
    b2TotalPrice = b1Price * qty;
	if(b2TotalPrice < 10)
	  document.getElementById("B2Price").innerHTML= "$0" + b2TotalPrice + ".00";
    else
	  document.getElementById("B2Price").innerHTML= "$" + b2TotalPrice + ".00"; 
  }
  if(id == "B3")
  {
    if(day == "saturday" || day == "sunday")
    {
	b3Price = 30;
	}
	else
	{
	  if((day == "wednesday" || day == "thursday" || day == "friday") && time != "1pm")
	  {
	    b3Price = 30;
	  }
	  else
	  {
	    b3Price = 20;
	  }
	}  
    b3TotalPrice = b1Price * qty;
	if(b3TotalPrice < 10)
	  document.getElementById("B3Price").innerHTML= "$0" + b3TotalPrice + ".00";
    else
	  document.getElementById("B3Price").innerHTML= "$" + b3TotalPrice + ".00"; 
  }
  
  updateTotalPrice();
  updateHiddenPrice(saPrice,spPrice,scPrice,faPrice,fcPrice,b1Price,b2Price,b3Price,saTotalPrice,spTotalPrice,scTotalPrice,faTotalPrice,fcTotalPrice,b1TotalPrice,b2TotalPrice,b3TotalPrice);
}  
function updateTotalPrice()
{
  var totalPrice;
  totalPrice = saTotalPrice + spTotalPrice + scTotalPrice + faTotalPrice + fcTotalPrice + b1TotalPrice + b2TotalPrice + b3TotalPrice;
        console.log(document.getElementById("TotalPrice").value);

  if(totalPrice < 10)
  {
    document.getElementById("TotalPrice").value = "$0" + totalPrice + ".00";
  }
  else
  {
	document.getElementById("TotalPrice").value = "$" + totalPrice + ".00"; 
  }
}

function updateHiddenPrice(saPrice,spPrice,scPrice,faPrice,fcPrice,b1Price,b2Price,b3Price,saTotalPrice,spTotalPrice,scTotalPrice,faTotalPrice,fcTotalPrice,b1TotalPrice,b2TotalPrice,b3TotalPrice)
{
  for(l=0; l<16; l++)
  {
	  if(saPrice < 10)
	  {
		document.getElementsByClassName("hidPrice")[0].value = "$0" + saPrice + ".00";
	  }
	  else
	  {
		document.getElementsByClassName("hidPrice")[0].value = "$" + saPrice + ".00"; 
	  }
	  if(spPrice < 10)
	  {
		document.getElementsByClassName("hidPrice")[1].value = "$0" + spPrice + ".00";
	  }
	  else
	  {
		document.getElementsByClassName("hidPrice")[1].value = "$" + spPrice + ".00"; 
	  }
	  	  if(scPrice < 10)
	  {
		document.getElementsByClassName("hidPrice")[2].value = "$0" + scPrice + ".00";
	  }
	  else
	  {
		document.getElementsByClassName("hidPrice")[2].value = "$" + scPrice + ".00"; 
	  }
	  	  if(faPrice < 10)
	  {
		document.getElementsByClassName("hidPrice")[3].value = "$0" + faPrice + ".00";
	  }
	  else
	  {
		document.getElementsByClassName("hidPrice")[3].value = "$" + faPrice + ".00"; 
	  }
	  	  if(fcPrice < 10)
	  {
		document.getElementsByClassName("hidPrice")[4].value = "$0" + fcPrice + ".00";
	  }
	  else
	  {
		document.getElementsByClassName("hidPrice")[4].value = "$" + fcPrice + ".00"; 
	  }
	  if(b1Price < 10)
	  {
		document.getElementsByClassName("hidPrice")[5].value = "$0" + b1Price + ".00";
	  }
	  else
	  {
		document.getElementsByClassName("hidPrice")[5].value = "$" + b1Price + ".00"; 
	  }
  	  if(b2Price < 10)
	  {
		document.getElementsByClassName("hidPrice")[6].value = "$0" + b2Price + ".00";
	  }
	  else
	  {
		document.getElementsByClassName("hidPrice")[6].value = "$" + b2Price + ".00"; 
	  }
	  if(b3Price < 10)
	  {
		document.getElementsByClassName("hidPrice")[7].value = "$0" + b3Price + ".00";
	  }
	  else
	  {
		document.getElementsByClassName("hidPrice")[7].value = "$" + b3Price + ".00"; 
	  }
	  	  if(saTotalPrice < 10)
	  {
		document.getElementsByClassName("hidPrice")[8].value = "$0" + saTotalPrice + ".00";
	  }
	  else
	  {
		document.getElementsByClassName("hidPrice")[8].value = "$" + saTotalPrice + ".00"; 
	  }
	  if(spTotalPrice < 10)
	  {
		document.getElementsByClassName("hidPrice")[9].value = "$0" + spTotalPrice + ".00";
	  }
	  else
	  {
		document.getElementsByClassName("hidPrice")[9].value = "$" + spTotalPrice + ".00"; 
	  }
	  	  if(scTotalPrice < 10)
	  {
		document.getElementsByClassName("hidPrice")[10].value = "$0" + scTotalPrice + ".00";
	  }
	  else
	  {
		document.getElementsByClassName("hidPrice")[10].value = "$" + scTotalPrice + ".00"; 
	  }
	  	  if(faTotalPrice < 10)
	  {
		document.getElementsByClassName("hidPrice")[11].value = "$0" + faTotalPrice + ".00";
	  }
	  else
	  {
		document.getElementsByClassName("hidPrice")[11].value = "$" + faTotalPrice + ".00"; 
	  }
	  	  if(fcTotalPrice < 10)
	  {
		document.getElementsByClassName("hidPrice")[12].value = "$0" + fcTotalPrice + ".00";
	  }
	  else
	  {
		document.getElementsByClassName("hidPrice")[12].value = "$" + fcTotalPrice + ".00"; 
	  }
	  if(b1TotalPrice < 10)
	  {
		document.getElementsByClassName("hidPrice")[13].value = "$0" + b1TotalPrice + ".00";
	  }
	  else
	  {
		document.getElementsByClassName("hidPrice")[13].value = "$" + b1TotalPrice + ".00"; 
	  }
  	  if(b2TotalPrice < 10)
	  {
		document.getElementsByClassName("hidPrice")[14].value = "$0" + b2TotalPrice + ".00";
	  }
	  else
	  {
		document.getElementsByClassName("hidPrice")[14].value = "$" + b2TotalPrice + ".00"; 
	  }
	  if(b3TotalPrice < 10)
	  {
		document.getElementsByClassName("hidPrice")[15].value = "$0" + b3TotalPrice + ".00";
	  }
	  else
	  {
		document.getElementsByClassName("hidPrice")[15].value = "$" + b3TotalPrice + ".00"; 
	  }
	var totalPrice;
	totalPrice = saTotalPrice + spTotalPrice + scTotalPrice + faTotalPrice + fcTotalPrice + b1TotalPrice + b2TotalPrice + b3TotalPrice;
	document.getElementsByClassName("hidPrice")[16].value = totalPrice; 

  }
  
}