<?php

	include 'header.php';

	//Her bliver header.php, som er vores menu, inkluderet på siden

?>

<?php

// Her bliver der tjekket, om der er en fejl på siden, og efterfølgende fortalt brugeren at de enten skal udfylde alle felter eller at brugernavnet allerede eksisterer.

	$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

	if(strpos($url, 'error=empty') !==false) {

		echo "Udfyld alle felter <br><br><br>";

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

//		echo $_POST['pid'];

		echo "<form class ='register' action='includes/edit-profil.inc.php' method='POST'>

			<input type='hidden' name='uid' value='".$_POST['uid']."'>

			Fornavn: <input type='text' name='Fornavn' value=".$_POST['Fornavn']."><br>

			Efternavn: <input type='text' name='Efternavn' value=".$_POST['Efternavn']."><br>

			Firma: <input type='text' name='Firma' value=".$_POST['Firma']."><br>

			Adresse: <input type='text' name='Adresse' value=".$_POST['Adresse']."><br>

			Postnummer: <input type='number' name='Postnr' value=".$_POST['Postnr']."><br>			

			Email: <input type='text' name='Email' value=".$_POST['Email']."><br>

			Telefon: <input type='number' name='Tlf' value=".$_POST['Tlf']."><br>

			<button type='submit'>Gem Profil</button>

		</form>";

	}

?>

</body>

</html>