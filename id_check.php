<?php
session_start();
include('database.php');
$idnum=$_POST['idnumber'];
$qry="Select * from id_info where idnumber='$idnum'";
$result=mysql_query($qry);
if($row=mysql_fetch_array($result))
{
  $regnum=$row['idnumber'];
  $occupied=$row['occupied'];
  $occupied_by=$row['occupied_by'];
  if($occupied=='Unoccupied')
  {
    header("location:id_info.php?regnum=$regnum");
  }
  else if($occupied=='Occupied')
  {
    $username=$_SESSION['username'];
    $qry_member="select * from signup where username='$username'";
    $result_member=mysql_query($qry_member);
    if($row_member=mysql_fetch_array($result_member))
    {
      if($occupied_by==$row_member['id'])
      {
        $id_member=$row['id'];
        echo "<script>alert('ID card is already Locked');
        window.location.href='id_info.php?regnum=$regnum';</script>";
      }
      else
      {
        echo "<script>alert('ID card is already Locked');
        window.location.href='enterid.php';</script>";
      }
    }
  }
}
else
{
echo "<script>alert('Please Enter a valid ID');
window.location.href='enterid.php';</script>";
}
?>
