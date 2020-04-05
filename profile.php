<div class="profile">
<?php
session_start();
//echo $_SESSION['patient_email'];
?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <link rel="stylesheet" href="style/style.css">
<!-- Include the above in your HEAD tag ---------->
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
      <a class="nav-item nav-link active" href="home.php" >Home </a>
      <a class="nav-item nav-link active" href="home.php#Aboutus">About us</a>
      <a class="nav-item nav-link active" href="doctor1.php">Doctors</a>
      <a class="nav-item nav-link active" href="logout.php">logout</a>
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Hello <?php echo $_SESSION['first_name']?>
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="profile.php">My Profile</a>
  </div>
</div>

      <a class="nav-item nav-link active" href="home.php#contact">Contact us</a>
    </div>
  </div>
</nav><!--end of navbar-->
<div class="container">
<div class="container emp-profile">
    <div class="row">
        <div class="col-md-4">
            <div class="profile-img">
                <img src=" "alt=""/>
            </div>
        </div>
    <div class="col-md-6">
<div class="profile-head">

<table border="0">
<tr>

<td>NAME :-</td><td> <?php echo$_SESSION['first_name']." ".$_SESSION['last_name'] ?></td>

<tr> <td>Patient Email :-</td><td><?php echo$_SESSION['patient_email'] ?></td>
<tr><td>Sex :-</td><td><?php echo$_SESSION['sex'] ?></td>
<tr><td>Blood Group :-</td><td><?php echo$_SESSION['blood_group'] ?></td>

</tr>


</table>

    <?php

      $conn=mysqli_connect("localhost","root","","hospital");
      //echo $_SESSION['patient_email'];
      $sql="SELECT r.record_no,p.first_name as first,d.first_name as last,r.admit_date,r.discharge_date FROM records r,doctor d,patient p WHERE r.patient_email=p.patient_email AND r.doctor_email=d.email_id AND p.patient_email='$_SESSION[patient_email]' ";
      $result=mysqli_query($conn,$sql);
    ?>
      <h4><center>The Patient  Details are - </center></h4>

 </div>
</div>
<br><br><br>
<table border="2" align="center" >

<tr>
    <th><center>record_no</center> </th>
     <th> <center>patient_name </center></th>
     <th> <center>doctor_name </center>  </th>
    <th><center> date </center></th>
    <th><center> discharge_date  </center> </th> ';
<?php
/*Show the rows in the fetched result set one by one*/
while ($row = mysqli_fetch_assoc($result))
{
echo '<tr>

<td><center>'.$row['record_no'].'</center></td>
<td><center>'.$row['first'].'</center></td>
<td><center>'.$row['last'].'</center></td>
<td><center>'.$row['admit_date'].'</center></td>
<td>'.$row['discharge_date'].'</center></td>
</tr>';
}
?>
</table>
<br><br><br><br><br><br><br><br><br><br>
