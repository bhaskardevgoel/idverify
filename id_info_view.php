<!DOCTYPE html>
<html>
	<head>
		<title>IDverify</title>
		<!-- local CSS -->
			<link rel="stylesheet" type="text/css" href="css/style.css">
			<!-- Latest compiled and minified CSS Bootstarp -->
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

			<!-- jQuery library -->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

			<!-- Popper JS -->
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

			<!-- Latest compiled JavaScript -->
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<!-- FontAwesome -->
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
			<link rel="icon" href="images/logo.png" />
	</head>
	<body>
		<center><div class="container">
		<table class="table table-bordered table-dark">
			<?php
			session_start();
			include('database.php');
			$idnum=$_REQUEST['regnum'];
			$qury="select * from id_info where idnumber=$idnum";
			$result=mysql_query($qury);
			while($row=mysql_fetch_array($result))
			{
			?>
			<tr>
				<th colspan="4">
					<center><h3>Sant Longowal Institute of Engineering and Technology</h3></center>
				</th>
			</tr>
			<tr>
				<th rowspan="6">
					<img src="<?php echo $row['idcard']; ?>"class="card-img-top" alt="ID card Image" style=" width: 10rem;">
				</th>
				<th>
					Name:
				</th>
				<th>
					<?php echo $row['name']; ?>
				</th>
			</tr>
			<tr>
				<th>
					Father's Name:
				</th>
				<th>
					<?php echo $row['father']; ?>
				</th>
			</tr>
			<tr>
				<th>
					Regn. No.:
				</th>
				<th>
					<?php echo $row['idnumber']; ?>
				</th>
			</tr>
			<tr>
				<th>
					Date of Birth:
				</th>
				<th>
					<?php echo $row['dob']; ?>
				</th>
			</tr>
			<tr>
				<th>
					Blood Group:
				</th>
				<th>
					<?php echo $row['bloodgroup']; ?>
				</th>
			</tr>
			<tr>
				<th>
					Address:
				</th>
				<th>
					<?php echo $row['address']; ?> 
				</th>
			</tr>
			<tr>
				<th>
				
				</th>
				<th>
					Phone No.
				</th>
				<th>
					<?php echo $row['contact']; ?>
				</th>
			</tr>
		</table>
		<ul>
		<li class="list-group-item">Special Permission: <b><?php echo $row['permission']; ?></b></li>
		</ul>
				</div>
				<?php
			}
			?>
	</body>
</html>