<?php

require_once 'dbcon.php';
if(isset($_POST['submit']));
{
	
	$filename = $_FILES['file']['name'];
	$fileTmpname = $_FILES['file']['tmp_name']; 
	$fileSize = $_FILES['file']['size'];
	$fileError = $_FILES['file'] ['error'];
	$fileType = $_FILES['file']['type'];

	$fileExt = explode('.', $filename);
	$fileActualExt = strtolower(end($fileExt));

	$allowed = array('jpg', 'jpeg', 'png', 'pdf');
	
		if(in_array($fileActualExt, $allowed)) {
			if ($fileError === 0) {
				if ($fileSize < 10000000){
					
					$fileNameNew = uniqid("", true).".". $fileActualExt;
				
				$fileDestination = 'uploads/'. $fileNameNew;
				
				move_uploaded_file($fileTmpname, $fileDestination);
					
					echo"Success! Dit billed er uploadet.";
					
					
				} else {
					echo"Filen er for stor!";
				}
					
				
			} else {
				echo"Der skete en fejl!";
				
			}
			
				} else {
			echo"Upload venligst jpg, jpeg, png eller pdf!";
		}

}


if(move_uploaded_file($fileTmpname, $fileDestination)){
	$sql = "INSERT INTO images(name, kategori, billed) VALUES('$filename', '$fileType', '$fileSize')";
	mysql_query($sql);
	
	echo"Uploadet i databasen";
	
} else {
	echo"Der skete en fejl med databasen!";
}
	
	?>