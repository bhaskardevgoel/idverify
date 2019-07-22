<?php
		include('database.php');
	$idnum=$_REQUEST['idnum'];
	$qry="select * from id_info where idnumber=$idnum";
	$res=mysql_query($qry);
	while($row=mysql_fetch_array($res))
	{
	?>
	<div class="card" style="width: 18rem;">
			<img src="id/" class="card-img-top" alt="ID card Image">
			<div class="card-body">
	    		<h5 class="card-title">ID Card Details</h5>
		  	</div>
		  	<ul class="list-group list-group-flush">
		    	<li class="list-group-item">Name: <?php echo $row['name']; ?></li>
		    	<li class="list-group-item">Reg. Number: <?php echo $row['idnumber']; ?></li>
		    	<li class="list-group-item">Father's Name: <?php echo $row['father']; ?></li>
		    	<li class="list-group-item">Date Of Birth: <?php echo $row['dob']; ?></li>
		    	<li class="list-group-item">Blood Group: <?php echo $row['bloodgroup']; ?></li>
		    	<li class="list-group-item">Address: <?php echo $row['address']; ?></li>
		    	<li class="list-group-item">Contact: <?php echo $row['contact']; ?></li>
		  	</ul>
		  	<div class="card-body">
		    	<select class="form-control" name="occupied" required>
					<option>Unoccupied</option>
					<option>Occupied</option>
				</select><br>
				<div class="form-group">
        			<button type="submit" class="btn btn-success btn-block"> Proceed  </button>
    			</div> <!-- create// --> 
		  	</div>
		</div>
		<?php
		}
		?>