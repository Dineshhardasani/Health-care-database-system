<?php
  if(isset($_POST['pay'])){
    $conn=mysqli_connect("localhost","root","","hospital");
    $sql1="UPDATE  `bill` SET `Status`='paid' WHERE `patient_email`='$_POST[pay]'";
    $result=mysqli_query($conn,$sql1);
    if($result){
      echo "<script>window.location.href='dashboard.php';</script>";
    }
  }

?>
