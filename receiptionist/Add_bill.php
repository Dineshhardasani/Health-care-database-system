<?php
session_start();
if(isset($_SESSION['email'])){
 ?>
<html>
<head>
  <title>Add Bill</title>
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
        <a class="nav-item nav-link active" href="records.php">Records</a>
        <a class="nav-item nav-link active" href="#contact">Contact us</a>
        <a class="nav-item nav-link active" href="logout.php">Logout</a>
      </div>
    </div>
  </nav><!--end of navbar-->
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="dashboard.php">
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="admit_patient.php">
              Admit Patient
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              Add Bill
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pay_bill.php">
              Pay Bill
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="discharge_patient.php">
              Discharge Patient
            </a>
          </li>
        </ul>
      </div>
    </nav>
<center>
  <div class=" mx-auto text-center form p-4">
  <form class="form-signin" method="post">
    <div class="form-label-group">
      <label for="inputEmail">Email address</label>
      <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email Address" required autofocus>
    </div>

    <div class="form-label-group">
      <label for="inputFirstName">Amount</label>
      <input type="text" id="inputFirstName" name="amount" class="form-control" placeholder="Amount" required autofocus>
    </div>

    <div class="form-label-group">
      <label for="inputLastName">Pharma Code</label>
      <input type="text" id="inputLastName" name="code" class="form-control" placeholder="Last Name" required autofocus>
    </div>

    <div class="form-label-group">
      <label for="inputLastName">Status</label>
      <select class="browser-default custom-select" name="Status">
        <option selected>Status</option>
        <option value="paid">paid</option>
        <option value="unpaid">unpaid</option>
      </select>
    </div>
    <button class="btn btn-lg btn-primary btn-block text-uppercase"  name="submit" type="submit">Add Bill</button>
  </form>
  <?php

  if(isset($_POST['submit'])){
    $code=$_POST['code'];
    $date=date('Y-m-d');
    $conn=mysqli_connect("localhost","root","","hospital");
    $sql="SELECT * FROM `medicine` WHERE `pharma_code`='$code'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){

    $query="INSERT INTO `bill` (`patient_email`,`amount`,`pharma_code`,`Date`,`Status`)
    VALUES ('$_POST[email]','$_POST[amount]','$_POST[code]','$date','$_POST[Status]')";
    $result=mysqli_query($conn,$query);
    }
    else{
      echo "This medicine is not available";
    }

  }
  ?>
</div>
</center>
<!--footer-->
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
