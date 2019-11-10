 <?php
      session_start();
      if(isset($_SESSION['warning'])){
        ?>
        <div class="alert alert-warning">
            <strong>Warning!</strong> Wrong Email address  or password
        </div>
        <?php
      }
  ?>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style/style.css">
</head>
<body >
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
        <a class="nav-item nav-link active" href="index.html" >Home </a>
        <a class="nav-item nav-link active" href="index.html">About us</a>
        <a class="nav-item nav-link active" href="#">Doctors</a>
        <a class="nav-item nav-link active" href="login.php">Login/Signup</a>
        <a class="nav-item nav-link active" href="index.html">Contact us</a>
      </div>
    </div>
  </nav><!--end of navbar-->
  <div style="background-color:#2C87FE;">
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Login</h5>
            <form class="form-signin" method="post">
              <div class="form-label-group">
                <input type="email" id="inputEmail" name="Email" class="form-control" placeholder="Email address" required autofocus>
                <label for="inputEmail">Email address</label>
              </div>

              <div class="form-label-group">
                <input type="password" id="inputPassword" name="Password" class="form-control" placeholder="Password" required>
                <label for="inputPassword">Password</label>
              </div>

              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember password</label>
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" name="Login" type="submit">Login</button>
              <a class="tab-pane fade show active" name="btnAddMore" href="Signup.php">New User! Sign Up here</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
      if(isset($_POST['Login'])){
        $conn=mysqli_connect("localhost","root","","hospital");
        $patient_email=mysqli_real_escape_string($conn,$_POST['Email']);
        $patient_password=mysqli_real_escape_string($conn,$_POST['Password']);
        $sql="SELECT * FROM `patient` WHERE patient_email='$patient_email'";
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)<=0){
          header("LOCATION: Login.php?message=Login+Error");
          exit();
        }
        else{
          $row=mysqli_fetch_assoc($result);
            if(!password_verify($patient_password,$row['Password'])){
              echo "Unsccessful";
                $_SESSION['warning']="error";
              ?>
              <?php
            }

            else if(password_verify($patient_password,$row['Password'])){
              $_SESSION['patient_id']=$row['patient_id'];
              $_SESSION['first_name']=$row['first_name'];
                $_SESSION['last_name']=$row['last_name'];
              $_SESSION['patient_email']=$row['patient_email'];
              echo "<script>window.location.href='user.php';</script>";
              exit();
            }

        }
      }
     ?>
<!--footer-->
<div id="footer">
<p>Website design by Dinesh Hardasani, Harsh Chourasiya,Rahul Barahpatre  |  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; <a href="https://www.facebook.com/profile.php?id=100007816428197" ><img src="Facebook.png"></a>&nbsp;&nbsp;&nbsp;&nbsp;<img src="download.jpg">&nbsp;&nbsp;&nbsp;<img src="twitter.png"><br>2019 </p>
</div>
<!--end of footer-->
</body>
</html>
