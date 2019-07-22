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
		<form action="login_check.php" method="POST" name="login">	
			<div class="card"><br>
			<article class="card-body mx-auto" style="max-width: 400px;"><br><br>
				<h2 class="card-title mt-3 text-center text-info">Welcome to IDverify</h2>
				<h4 class="card-title mt-3 text-center">Sign In to your Account</h4><br><br><br><br>
				<form>
					<div class="form-group input-group">
    					<div class="input-group-prepend">
			    			<span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 				</div>
        				<input name="username" class="form-control" placeholder="username" type="text" required>
    				</div> <!-- EMAIL// -->

    			<div class="form-group input-group">
    				<div class="input-group-prepend">
		    			<span class="input-group-text"> <i class="fa fa-lock"></i> </span>
					</div>
        			<input class="form-control" placeholder="Password" type="password" name="password" required>
    			</div> <!--password// -->

    			<div class="form-group">
        			<button type="submit" class="btn btn-info btn-block"> Log In</button>
    			</div> <!-- Login// -->  
			</div>
			</form>
			<footer class="fixed-bottom page-footer bg-info footer">
				<div><a class="footer-copyright text-center py-3 text-danger" href="view_id.php"><h3>View Id</h3></a></div>
				<!-- Copyright -->
			  	<div class="footer-copyright text-center py-3 text-white">© 2019 Copyright:
			    	<b><i>SLIET Longowal(148106)</i></b>
			  	</div>
			</footer>
	</body>
</html>