<?php

// Include bliver brugt til at loade database connection filen.
	include 'dbcon.php';
//Her bliver header.php, som er vores menu, inkluderet på siden
	include 'header.php';
?>



<?php



// Her bliver der tjekket, om der er en fejl på siden, og efterfølgende fortalt brugeren at de enten skal udfylde alle felter eller at brugernavnet allerede eksisterer.



	$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

	if(strpos($url, 'error=empty') !==false) {

		echo "Udfyld alle felter <br><br><br>";

	}

	elseif(strpos($url, 'error=projectname') !==false) {

		echo "Projekt navn eksisterer allerede <br><br>";

	}



// Her tjekkes der om man er logget ind i systemet



	if (isset($_SESSION['id'])) {

	} else {

		echo "Du er ikke logget ind";

	}

?>



<br><br><br>



<?php



// Her tjekkes først om man er logget ind og ellers kommer projekt oprettelses formen frem, så man kan oprette et projekt.

	if (isset($_SESSION['id'])) {

		$conn = mysqli_connect($servername, $username, $password, $table);

		$sql = "SELECT billed, name, id_billed FROM images";

		$result = mysqli_query($conn, $sql);

			while ($row = $result->fetch_assoc()) {
				
				echo "<div class='gallery-box'>
					
					<img src='upload/" . $row['billed'] . "'>

					<p>Billede id:" . " " . $row['id_billed'] . " "." Billed Navn:" . " " . $row['name'] . "</p>

					<br><br>

					</div>

					";
			}


		echo "<form class ='register' action='includes/create-order.inc.php' method='POST'>
			Billede 1: <input type='number' name='OPic1' placeholder='Billede 1'><br>
			Billede 2: <input type='number' name='OPic2' placeholder='Billede 2' value='0'><br>
			Billede 3: <input type='number' name='OPic3' placeholder='Billede 3' value='0'><br>
			Billede 4: <input type='number' name='OPic4' placeholder='Billede 4' value='0'><br>
			Billede 5: <input type='number' name='OPic5' placeholder='Billede 5' value='0'><br>
			Start Dato: <input type='date' name='OStart' placeholder='Startdato YYYY-MM-DD'><br>
			Slut Dato: <input type='date' name='OSlut' placeholder='Slutdato YYYY-MM-DD'><br>
			<button type='submit'>Opret Ordre</button>
		</form>";
	}
?>

</body>

</html>



