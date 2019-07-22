<?php
session_start();
include('database.php');
$username=$_POST['username'];
$password=$_POST['password'];
$qry="Select * from signup where username='$username' and password1='$password'";
$result=mysql_query($qry);
$admin_qry="Select * from admin where username='$username' and password='$password'";
$admin_result=mysql_query($admin_qry);
if($row=mysql_fetch_array($result))
{
$_SESSION['username']=$username;
$_SESSION['password1']=$password1;
header('location:enterid.php');
}
else if($row=mysql_fetch_array($admin_result))
{
$_SESSION['username']=$username;
$_SESSION['password1']=$password1;
header('location:admin.php');
}
else
{
header('location:signin_fail.php');
}
?>