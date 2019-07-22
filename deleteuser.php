<?php
session_start();
include('database.php');
$id=$_REQUEST['del'];
$qry="delete from sign_up where id=$id";
$res=mysql_query($qry);
if($res>0)
  {
  echo "<script> alert('User Deleted');
  window.location.href='users.php';</script>";
 }
 else
 {
 echo "<script> alert('User Cant be Deleted');
 window.location.href='users.php';</script>";
 }
?>