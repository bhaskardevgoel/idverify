<?php
$name=$_REQUEST['name'];
$fathername=$_REQUEST['fathername'];
$phone=$_REQUEST['phone'];
$month=$_REQUEST['month'];
$day=$_REQUEST['day'];
$year=$_REQUEST['year'];
$dob=$day."/".$month."/".$year;
$address=$_REQUEST['address'];
$bloodgroup=$_REQUEST['bloodgroup'];
$image=$_FILES['image']['name'];
$temp_image=$_FILES['image']['tmp_name'];
$path="id/".$image;
move_uploaded_file($temp_image,$path);
include('database.php');
$qry="insert into id_info(name,fathername,phone,dob,address,bloodgroup,idcard) values('$name','$fathername','$phone','$dob','$address','$bloodgroup','$path')";
$res=mysql_query($qry);
if($res>0)
{
header('location:signup_success.php');
}
else
{
	echo"<script>alert('Unable to create account');
window.location.href='signup_student.php';
</script>";
}
?>