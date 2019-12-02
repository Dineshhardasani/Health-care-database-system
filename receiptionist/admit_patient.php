<?php
session_start();
if(isset($_SESSION['email'])){
 ?>
<html>
<head>
  <title>Admit Patient</title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <link rel="stylesheet" href="../style/style.css">
  <script>
    $( function() {
      $( "#datepicker" ).datepicker({ minDate: 0});
    } );
    </script>
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
        <a class="nav-item nav-link active" href="home.php" >Home </a>
        <a class="nav-item nav-link active" href="home.php#Aboutus">About us</a>
        <a class="nav-item nav-link active" href="#">Doctors</a>
        <a class="nav-item nav-link active" href="dashboard.php">Dashboard</a>
        <a class="nav-item nav-link active" href="logout.php">Logout</a>
        <a class="nav-item nav-link active" href="home.php#contact">Contact us</a>
      </div>
    </div>
  </nav><!--end of navbar-->
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="dashboard.php">
              <span data-feather="home"></span>
              Dashboard <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file"></span>
              Admit Patient
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Add_bill.php">
              <span data-feather="shopping-cart"></span>
              Add Bill
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pay_bill.php">
              <span data-feather="users"></span>
              Pay Bill
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="discharge_patient.php">
              <span data-feather="bar-chart-2"></span>
              Discharge Patient
            </a>
          </li>
        </ul>
      </div>
    </nav>
<center>
<form method="POST" >
  <table>
    <tr><td><b> Patient Name: </b><input type="text" name="patient_name" placeholder="patient name" required autofocus></input></td></tr>
    <br>
    <tr><td><b> Patient Email: </b><input type="email" name="patient_email" placeholder="patient email" required autofocus></input></td></tr>
    <br>
    <tr><td><b> Doctor Email: </b><input type="email" name="doctor_email" placeholder="doctor email" required autofocus></input></td></tr>
    <br>
    <tr><td><b> Admit Date: </b><input id="datepicker" name="date" required autofocus></input></td></tr>
    <br>
    <tr><td><button class="btn btn-lg btn-primary btn-block text-uppercase"  name="submit" type="submit">Enter</button></td></tr>
  </table>
</form>
  <?php

  if(isset($_POST['submit'])){
    $cal_date=$_POST['date'];
    $date=date('Y-m-d',strtotime($cal_date));
    $conn=mysqli_connect("localhost","root","","hospital");
    $query1="SELECT * FROM `records` WHERE patient_email='$_POST[patient_email]' AND discharge_date IS NULL";
    $result=mysqli_query($conn,$query1);
    if(mysqli_num_rows($result)==0){
      $query2="INSERT INTO `records` (`patient_name`,`patient_email`,`doctor_email`,`admit_date`) VALUES ('$_POST[patient_name]','$_POST[patient_email]','$_POST[doctor_email]','$date')";
      $result=mysqli_query($conn,$query2);
      if($result){
        echo "Admit Successfully";
      }
    }
    else{
      echo "Patient already Admit";
    }
  }
  ?>
</body>
</html>
<?php
}
else{
  echo "<script>window.location.href='login.php';</script>";
}
 ?>
