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
		<form action="id_check_view.php" method="POST" name="identer">
			<div class="card"><br>
			<article class="card-body mx-auto" style="max-width: 400px;"><br><br>
				<a href="index.php"><h2 class="card-title mt-3 text-center text-info">IDverify</h2></a>
				<h4 class="card-title mt-3 text-center">Enter ID number</h4><br><br><br><br>
				<form>
					<div class="form-group input-group">
    					<div class="input-group-prepend">
			    			<span class="input-group-text"> <i class="fa fa-id-card"></i> </span>
		 				</div>
        				<input name="idnumber" class="form-control" placeholder="ID Number" type="text" required>
    				</div> <!-- ID Number// -->

    			<div class="form-group">
        			<button type="submit" class="btn btn-info btn-block"> View</button>
    			</div> <!-- enter// -->
			</div>
		</form>
	</body>
</html>
