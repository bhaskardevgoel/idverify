<?php
  $idnum=$_REQUEST['regnum'];
  $occupy=$_REQUEST['occupied'];
  include('database.php');
  if($occupy=='Unoccupied'){
  $qry="UPDATE id_info SET occupied = '$occupy' WHERE idnumber = '$idnum'";
  }
  else if($occupy=='Occupied'){
  $qry="UPDATE id_info SET occupied = '$occupy' WHERE idnumber = '$idnum'";
  }
  $res=mysql_query($qry);
  if($res>0)
    {
      echo "<script>
      alert('ID Card Updated');
      window.location.href='enterid.php';
      </script>";
    }
 ?>
