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
<head>
<body>
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
        <a class="nav-item nav-link active" href="#">Records</a>
        <a class="nav-item nav-link active" href="profile.php">Hi admin</a>
        <a class="nav-item nav-link active" href="home.php#contact">Contact us</a>
      </div>
    </div>
  </nav><!--end of navbar-->
  <center>
  <h1>Records</h1>
  <table border="2";>
    <tr>
      <th>1. <a href="admit_patient.php">Admit Patient</a><th>
    </tr>
    <tr>
      <th>2. <a href="discharge_patient.php">Discharge Patient</a><th>
    </tr>
    <tr>
      <th>3. <a href="Add_bill.php">Add bill</a></th>
    </tr>
    <tr>
      <th>4. <a href="all_record.php">All Records</a></th>
    </tr>
    <tr>
      <th>5. <a href="pay_bill.php">Pay bill</a></th>
    </tr>
  </table>
</center>
</body>
</html>
<?php
}
else{
  echo "<script>window.location.href='login.php';</script>";
}
 ?>
