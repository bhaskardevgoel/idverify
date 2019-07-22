<?php
$name=$_REQUEST['name'];
$username=$_REQUEST['username'];
$phone=$_REQUEST['phone'];
$month=$_REQUEST['month'];
$day=$_REQUEST['day'];
$year=$_REQUEST['year'];
$dob=$day."/".$month."/".$year;
$password1=$_REQUEST['password1'];
$password2=$_REQUEST['password2'];
include('database.php');
if($password1==$password2){
$qry="insert into signup(name,username,phone,dob,password1,password2) values('$name','$username','$phone','$dob','$password1','$password2')";
$res=mysql_query($qry);
if($res>0)
{
header('location:signup_success.php');
}
else
{
	echo"<script>alert('Unable to create account');
window.location.href='signup.php';
</script>";
}
}
else{
echo "<script>alert('Please check you Password');
window.location.href='signup.php';
</script>";
}
?>