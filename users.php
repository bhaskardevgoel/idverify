<html>
<head>
<title>Users</title>
<link rel="stylesheet" href="../css/admin_main.css" />
<link rel="icon" href="../image/icon.png" />
</head>
<body class="back_2">
<div class="admin_div_3">
<?php
include('admin_div.php');
?>
<div class="admin_div_4"><br><br>
	<center><p class="font"><font color="black">Signed Up Accounts</font></p></center><br><br><br>
	<center><br><br>
	<div class="scroll" style="width:97%; height:70%;">
	<table class="table" style="width:97%; height:70%;">
	<tr height="10%">
	<td>Name</td>
	<td>Mobile Number</td>
	<td>Gender</td>
	<td>DOB</td>
	<td>ID-Card</td>
	<td>Delete User</td>
	</tr>
	<?php
	include('database.php');
			$qry="select * from sign_up";
			$res=mysql_query($qry);
			while($row=mysql_fetch_array($res))
			{
			?>
	<tr>
	<td><?php echo $row['first_name'] ?></td>
	<td><?php echo $row['mobile_number'] ?></td>
	<td><?php echo $row['gender'] ?></td>
	<td><?php echo $row['dob'] ?></td>
	<th><img src="../<?php echo $row['image'] ?>" height="130" width="150"></th>
	<th><a href="deleteuser.php?del=<?php echo $row['id']?>"><img src="../image/del1.jpg"></img></a></th>
	</tr>
	<?php
			}
			?>
		</table>
		</div>
		</center>
</div>
</div>
</body>
</html>