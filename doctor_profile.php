<div class="profile">
<?php
session_start();
//echo $_SESSION['patient_email'];
?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <link rel="stylesheet" href="style/style.css">
<!------ Include the above in your HEAD tag ---------->
<div class="header"><!--header-->
  <div class="container">
  <table>
  <tr>
     <td ><p>Help-line 0761-2450957,4038078</p> </td>
     <td valign="middle" align="right" class="style36" ><img alt="" src="home1.png" width="30px" />&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</td>
     <td align="right" class="style37" style="color:white;" align="right" >Hall 4, IIITDM campus, Jabalpur(M.P.)</td>
   </tr>
  </table>
</div>
</div><!--end of header-->
<nav class="navbar navbar-expand-lg navbar-light bg-light"><!--navbar-->
  <a class="navbar-brand" href="#"><p>HEALTHCARE</p></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav ml-auto">
      <a class="nav-item nav-link active" href="#" >Home </a>
      <a class="nav-item nav-link active" href="#Aboutus">About us</a>
      <a class="nav-item nav-link active" href="#">Doctors</a>
      <a class="nav-item nav-link active" href="logout.php">logout</a>

<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Hello<?php echo $_SESSION['first_name']?>
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="profile.php">My Profile</a>
    <a class="dropdown-item" href="logout">logout</a>

  </div>
</div>

      <a class="nav-item nav-link active" href="#contact">Contact us</a>
    </div>
  </div>
</nav><!--end of navbar-->
<center>
<?php

  $dr_id = $_GET['email'];
  unset($_GET['email']);
  $conn=mysqli_connect("localhost","root","","hospital");
  //echo $_SESSION['patient_email'];
  $sql="SELECT * FROM `doctor` WHERE `email_id` = '$dr_id'";
  $result=mysqli_query($conn,$sql);
  $row = mysqli_fetch_assoc($result);

?>
<img src="<?php echo $row['doctor_img'] ?>" height="200" width="250" alt="">&emsp;&emsp;
<form method="GET" action="appointment.php">
<table>
<tr><th> Name</th><td><?php echo $row['first_name']." ".$row['last_name']; ?></td></tr>
<tr><th> Qualification</th><td><?php echo $row['qualification']; ?></td></tr>
<tr><th> Email</th><td><?php echo $row['email_id'] ?></td></tr>
<tr><th> Fees</th><td><?php echo $row['fees']?></td></tr>
</table>
<button style="background-color:#2C87FE;" name="dr_id" value="<?php echo $dr_id;?>" type="submit">Book Appointment</button>
</form>
</center>
</div>
<?php
if(isset($_GET['dr_id'])){
    echo "<script>window.location.href='appointment.php';</script>";
}
 ?>
