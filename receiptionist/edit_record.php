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
<form method="GET" >
  <table>
    <tr><td><b> Patient Name: </b><input type="text" name="name" placeholder="name" required autofocus></input></td></tr>
    <br>
    <tr><td><b> Patient Id: </b><input type="number" name="id" placeholder="id" required autofocus></input></td></tr>
    <br>
    <tr><td><b> Discharge Date: </b><input type="date" name="date" placeholder="date" required autofocus></input></td></tr>
    <br>
    <tr><td><button class="btn btn-lg btn-primary btn-block text-uppercase"  name="submit" type="submit">Enter</button></td></tr>
  </table>
</form>
  <?php

  if(isset($_GET['submit'])){
    $date=$_GET['date'];
    $conn=mysqli_connect("localhost","root","","hospital");
    $query="UPDATE `records` SET `discharge_date`='$date' where patient_id='$_GET[id]' AND discharge_date IS NULL";
    $result=mysqli_query($conn,$query);
    $s_no=0;
  }
  ?>
</center>
<div id="footer">
    <p>Website design by Dinesh Hardasani, Harsh Chourasiya,Rahul Barahpatre  |  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; <a href="https://www.facebook.com/profile.php?id=100007816428197" ><img src="Facebook.png"></a>&nbsp;&nbsp;&nbsp;&nbsp;<img src="download.jpg">&nbsp;&nbsp;&nbsp;<img src="twitter.png"><br>2019 </p>
</div>
        <!--end of footer-->
</body>
</html>
