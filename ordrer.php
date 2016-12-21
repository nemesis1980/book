<?php 
include"header.php";


?>



<table class="table table-bordered table-responsive">
			<thead>
				<tr>
					<th>Navn</th>
					<th>Kategori</th>
					<th>Start dato</th>
					<th>Slutdato</th>
					<th>Billed</th>
					<th>Pris</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>Billed</td>
					<td>07-11-2016</td>
					<td>07-12-2016</td>
					<td><img src="<?php echo $upload_dir ?>" height="40"</td>
					<td>1300 kr.</td>
					<td>
						<a class="btn btn-info" href=""><span class="glyphicon glyphicon-edit"></span>Edit</a>
						<a class="btn btn-danger" href=""><span class="glyphicon glyphicon-remove-circle"></span>Delete</a>
					</td>
				</tr>
				
			</tbody>
			
			
			
		</table>

</body>
</html>