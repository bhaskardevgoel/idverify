<!DOCTYPE html>
<html>
	<head>
		<title>ID Verify</title>
			<!-- local CSS -->
			<link rel="stylesheet" type="text/css" href="css/style.css"> 
			<!-- Latest compiled and minified CSS Bootstarp -->
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

			<!-- local JS -->
			<script type="text/javascript"  src="js/JS.js"></script>
			<!-- jQuery library -->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

			<!-- Popper JS -->
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

			<!-- Latest compiled JavaScript -->
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<!-- FontAwesome -->
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
		<form action="signup_input.php" method="POST" name="signup" onsubmit="return val_chk_signup();" enctype="multipart/form-data">
		<div>
		<div class="card bg-light">
		<article class="card-body mx-auto" style="max-width: 400px;">
			<h4 class="card-title mt-3 text-center">Create Account</h4>
			<form>
				<div class="form-group input-group">
					<div class="input-group-prepend">
		    			<span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 			</div>
        			<input name="name" class="form-control" placeholder="Full name" type="text" required>
    			</div> <!-- NAME// -->

    			<div class="form-group input-group">
    				<div class="input-group-prepend">
		    			<span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 			</div>
        			<input name="username class="form-control" placeholder="Username" type="text" required>
    			</div> <!-- username// -->
    			
    			<div class="form-group input-group">
    				<div class="input-group-prepend">
		    			<span class="input-group-text"> <i class="fa fa-phone"></i> </span>
					</div>
					<input name="phone" class="form-control" placeholder="Phone number" type="text" required>
    			</div> <!-- Phone// -->
    			
    			<div class="form-group input-group">
    				<div class="input-group-prepend">
		    			<span class="input-group-text"> <i class="fa fa-lock"></i> </span>
					</div>
        			<input class="form-control" placeholder="Create Password"id="pass" type="password" name="password1" required>
    			</div> <!--password// -->
    			
    			<div class="form-group input-group">
    				<div class="input-group-prepend">
		    			<span class="input-group-text"> <i class="fa fa-lock"></i> </span>
					</div>
        			<input class="form-control" placeholder="Confirm Password"id="confirm_pass" onmouseout="con()" type="password"name="password2" required>
    			</div> <!-- confrim password// -->

    			<div class="form-group">
        			<button type="submit" class="btn btn-success btn-block"> Create Account  </button>
    			</div> <!-- create// -->                                
    		</form>
    	</article>
		</div>
	</div>
	</body>
</html>