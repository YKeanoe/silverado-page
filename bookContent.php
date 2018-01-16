<div id="moviesSchedule">
  <div class="infoHeadBorder">
    <h2>Movies</h2>

  </div>
  <div class="bookForm">
    
    <div class="bookLeft">
      <form action='cart.php' method="post">
      Movies
      <br>
      <select name="film" id="film" onChange="check()">
      <option value="AC">Fast & Furious 7</option>
      <option value="CH">Home</option>
      <option value="AF">Cavalry</option>
      <option value="RC">Cinderella</option>
      </select>
      <br>
      <br>
      Day
      <br>
      <select name="day" id="day" onChange="check()">
      <option value="monday">Monday</option>
      <option value="tuesday">Tuesday</option>
      <option value="wednesday">Wednesday</option>
      <option value="thursday">Thursday</option>
      <option value="friday">Friday</option>
      <option value="saturday">Saturday</option>
      <option value="sunday">Sunday</option>
      </select>
      <br>    
      <br>  
      Time
      <br>
      <select name="time" id="time" onChange="check()">
      <option value="12pm">12:00</option>
      <option value="1pm">13:00</option>
      <option value="3pm">15:00</option>
      <option value="6pm">18:00</option>
      <option value="9pm">21:00</option>
      </select>  
      <br><br>
      <table id="ticketTable">
          <tr>
            <th class="ticketTH">Ticket Type</th>
            <th class="ticketTH">Quantity</th>
            <th class="ticketTH">Subtotal Price</th>
          </tr>
          <tr>
            <td class="ticketTD">Standard Adult</td>
            <td class="ticketTD"><input style="width: 45%" type="number" name="SA" min="0" max="40" value=0 onchange="checkPrice(this)"></td>
			<td id="SAPrice">$00.00</td> 
          </tr>
          <tr>
            <td class="ticketTD">Standard Concession</td>
            <td class="ticketTD"><input style="width: 45%" type="number" name="SP" min="0" max="40" value=0 onchange="checkPrice(this)"></td>
			<td id="SPPrice">$00.00</td>
          </tr>
          <tr>
            <td class="ticketTD">Standard Child</td>
            <td class="ticketTD"><input style="width: 45%" type="number" name="SC" min="0" max="40" value=0 onchange="checkPrice(this)"></td>
			<td id="SCPrice">$00.00</td>
          </tr>
          <tr>
            <td class="ticketTD">First Class Adult</td>
            <td class="ticketTD"><input style="width: 45%" type="number" name="FA" min="0" max="12" value=0 onchange="checkPrice(this)"></td>
			<td id="FAPrice">$00.00</td>
          </tr>
          <tr>
            <td class="ticketTD">First Class Child</td>
            <td class="ticketTD"><input style="width: 45%" type="number" name="FC" min="0" max="12" value=0 onchange="checkPrice(this)"></td>
			<td id="FCPrice">$00.00</td>
          </tr>
          <tr>
            <td class="ticketTD">Beanbag - 1 Person</td>
            <td class="ticketTD"><input style="width: 45%" type="number" name="B1" min="0" max="13" value=0 onchange="checkPrice(this)"></td>
			<td id="B1Price">$00.00</td>
          </tr>
          <tr>
            <td class="ticketTD">Beanbag - 2 Person</td>
            <td class="ticketTD"><input style="width: 45%" type="number" name="B2" min="0" max="13" value=0 onchange="checkPrice(this)"></td>
			<td id="B2Price">$00.00</td>
          </tr>
          <tr>
            <td class="ticketTD">Beanbag - 3 Person</td>
            <td class="ticketTD"><input style="width: 45%" type="number" name="B3" min="0" max="13" value=0 onchange="checkPrice(this)"></td>
			<td id="B3Price">$00.00</td>
          </tr>
          <tr>
            <td colspan="2" class="ticketTD">Total Price</td>
            <td><input id="TotalPrice" name="price" value="$00.00" readonly></td>
          </tr>

        </table>
        <br>
		<input class="hidPrice" name="SAPrice" value="$00.00" readonly>
		<input class="hidPrice" name="SCPrice" value="$00.00" readonly>
		<input class="hidPrice" name="SPPrice" value="$00.00" readonly>
		<input class="hidPrice" name="FAPrice" value="$00.00" readonly>
		<input class="hidPrice" name="FCPrice" value="$00.00" readonly>
		<input class="hidPrice" name="B1Price" value="$00.00" readonly>
		<input class="hidPrice" name="B2Price" value="$00.00" readonly>
		<input class="hidPrice" name="B3Price" value="$00.00" readonly>
		<input class="hidPrice" name="SATotalPrice" value="$00.00" readonly>
		<input class="hidPrice" name="SPTotalPrice" value="$00.00" readonly>	
		<input class="hidPrice" name="SCTotalPrice" value="$00.00" readonly>
		<input class="hidPrice" name="FATotalPrice" value="$00.00" readonly>
		<input class="hidPrice" name="FCTotalPrice" value="$00.00" readonly>
		<input class="hidPrice" name="B1TotalPrice" value="$00.00" readonly>
		<input class="hidPrice" name="B2TotalPrice" value="$00.00" readonly>
		<input class="hidPrice" name="B3TotalPrice" value="$00.00" readonly>
		<input class="hidPrice" name="TotalPriceINT" value="$00.00" readonly>

        <input id="bookSubmit" type="submit" value="Submit">
    </form>
    </div>
    <div class="bookRight">
      <img id="movieBooked" src='movieTest.jpg' alt='movie test'/>
    </div>


  </div>
  
</div>
