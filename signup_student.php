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
		<form action="signup_input_student.php" method="POST" name="signup" onsubmit="return val_chk_signup();" enctype="multipart/form-data">
		<div>
		<div class="card bg-light">
		<article class="card-body mx-auto" style="max-width: 400px;">
			<h4 class="card-title mt-3 text-center">Create Student Account</h4>
			<form>
				<div class="form-group input-group">
					<div class="input-group-prepend">
		    			<span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 			</div>
        			<input name="name" class="form-control" placeholder="Full name" type="text" required>
    			</div> <!-- NAME// -->

				<div class="form-group input-group">
					<div class="input-group-prepend">
		    			<span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 			</div>
        			<input name="fathername" class="form-control" placeholder="Father's Name" type="text" required>
    			</div> <!--Father's NAME// -->

    			<div class="form-group input-group">
    				<div class="input-group-prepend">
		    			<span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 			</div>
        			<input name="idnumber" class="form-control" placeholder="Registration Number" type="text" required>
    			</div> <!-- idnumber// -->
    			
    			<div class="form-group input-group">
    				<div class="input-group-prepend">
		    			<span class="input-group-text"> <i class="fa fa-phone"></i> </span>
					</div>
					<input name="phone" class="form-control" placeholder="Phone number" type="text" required>
    			</div> <!-- Phone// -->
    			
    			<div class="form-group input-group">
    				<div class="input-group-prepend">
		    			<span class="input-group-text"> <i class="fa fa-gratipay"></i> </span>
					</div>
        			<input class="form-control" placeholder="Blood Group" type="text" name="bloodgroup" required>
    			</div> <!--Blood Group// -->
    			
    			<div class="form-group input-group">
    				<div class="input-group-prepend">
		    			<span class="input-group-text"> <i class="fa fa-address-book"></i> </span>
					</div>
        			<input class="form-control" placeholder="Address" type="text" name="address" required>
    			</div> <!-- Address// -->
    			
    			<div class="form-group input-group">
    				<div class="input-group-prepend">
		    			<span class="input-group-text"> <i class="fa fa-address-book"></i> </span>
					</div>
        			<input type="file"  name="image">
    			</div> <!-- Image// -->

    			<div class="form-group input-group">
    				<div class="input-group-prepend">
		    			<span class="input-group-text"> <i class="fa fa-calendar-o"></i> </span>
					</div>
					<select class="form-control" name="month" required>
					<option>Month</option>
					<option>Jan</option>
					<option>Feb</option>
					<option>March</option>
					<option>April</option>
					<option>May</option>
					<option>June</option>
					<option>July</option>
					<option>August</option>
					<option>Sept</option>
					<option>Oct</option>
					<option>Nov</option>
					<option>Dec</option>
					</select>
					<input type="text" class="form-control" placeholder="Day" name="day" maxlength="2" required>
					<input class="form-control" type="text" name="year" placeholder="Year" maxlength="4" required>	
				</div> <!-- DOB// -->

    			<div class="form-group">
        			<button type="submit" class="btn btn-success btn-block"> Create Account  </button>
    			</div> <!-- create// -->                                
    		</form>
    	</article>
		</div>
	</div>
	</body>
</html>