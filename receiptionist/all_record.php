<?php
session_start();
if(isset($_SESSION['email'])){
 ?>
<html>
<head>
  <title>Records</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../style/style.css">
</head>
<body>
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
      <a class="nav-item nav-link active" href="login.php">Login/Signup</a>
      <a class="nav-item nav-link active" href="#contact">Contact us</a>
    </div>
  </div>
</nav><!--end of navbar-->
<center>
<table border="2";>
  <tr>
    <th>S.No</th>
    <th>Patient Id</th>
    <th>Patient Name</th>
    <th>Doctor Id</th>
    <th>Doctor Name</th>
    <th>Date</th>
    <th>Discharge Date</th>
  </tr>
  <?php
  $conn=mysqli_connect("localhost","root","","hospital");
  $query="SELECT r.patient_id,r.doctor_id,r.date,r.discharge_date,p.first_name as patient_name ,d.first_name as doctor_name from records r,patient p,doctor d where r.patient_id=p.patient_id AND r.doctor_id=d.doctor_id";
  $result=mysqli_query($conn,$query);
  $s_no=0;
  if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
      ?>
      <tr>
        <td><?php echo ++$s_no;?></td>
        <td><?php echo $row['patient_id'];?></td>
        <td><?php echo $row['patient_name'];?></td>
        <td><?php echo $row['doctor_id'];?></td>
        <td><?php echo $row['doctor_name'];?></td>
        <td><?php echo $row['date'];?></td>
        <td><?php echo $row['discharge_date'];?></td>
      </tr>
      <?php
    }
  }
   ?>
</table>
</center>
<div id="footer">
    <p>Website design by Dinesh Hardasani, Harsh Chourasiya,Rahul Barahpatre  |  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; <a href="https://www.facebook.com/profile.php?id=100007816428197" ><img src="Facebook.png"></a>&nbsp;&nbsp;&nbsp;&nbsp;<img src="download.jpg">&nbsp;&nbsp;&nbsp;<img src="twitter.png"><br>2019 </p>
</div>
        <!--end of footer-->
</body>
</html>
<?php
}
else{
  echo "<script>window.location.href='login.php';</script>";
}
 ?>
