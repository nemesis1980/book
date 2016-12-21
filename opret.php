<?php 
include("header.php");


?>



<div class="opretform shadow">	
	<div class="form-title">
		<h1>
			Opret ny profil
		</h1>
	</div>
		<form action="" method="post" enctype="multipart/form-data">
			
			
			<label for="fornavn" class="col-md-2">Fornavn:</label>
			<div class="col-md-5">
			<input type="text" name="fornavn" class="form-control">
				
			</div>	
			
			
			<div class="form-group">
			<label for="efternavn" class="col-md-2">Efternavn:</label>
			<div class="col-md-5">
			<input type="text" name="efternavn" class="form-control">
				
			</div>	
			</div>
			
			
			<label for="adresse" class="col-md-2">Adresse:</label>
			<div class="col-md-5">
			<input type="text" name="adresse" class="form-control">
				
			
			</div>
			
			
			<label for="post nr" class="col-md-2">Post Nr:</label>
			<div class="col-md-5">
			<input type="text" name="zipcode" class="form-control">
				
			</div>	
			
			
			
			<label for="firma" class="col-md-2">Firma</label>
			<div class="col-md-5">
			<input type="text" name="firma" class="form-control">
			</div>	
			
			
			
			<label for="email" class="col-md-2">Email:</label>
			<div class="col-md-5">
			<input type="text" name="email">
				
			</div>	
			
			
			
			<label for="telefon" class="col-md-2">Telefon:</label>
			<div class="col-md-5">
			<input type="text" name="telefon" class="form-control">
				
			</div>	
		
			
			
			<label class="col-md-2"></label>
			<div class="col-md-5">
				<button type="submit" name="btnSave" class="btn"><span class="glyphicon glyphicon-save"></span>Gem</button>
				
			</div>	
		
			
		</form>
		</div>	


</body>
</html>