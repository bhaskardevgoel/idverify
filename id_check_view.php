<?php
session_start();
include('database.php');
$idnum=$_POST['idnumber'];
$qry="Select * from id_info where idnumber='$idnum'";
$result=mysql_query($qry);
if($row=mysql_fetch_array($result))
{
    $regnum=$row['idnumber'];
    header("location:id_info_view.php?regnum=$regnum");
}
else
{
echo "<script>alert('Please Enter a valid ID');
window.location.href='view_id.php';</script>";
}
?>
