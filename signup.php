<?php
      session_start();

 ?>
<html>
<head>
  <title>Signup</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style/style.css">
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
        <a class="nav-item nav-link active" href="index.html" >Home </a>
        <a class="nav-item nav-link active" href="index.html#Aboutus">About us</a>
        <a class="nav-item nav-link active" href="#">Doctors</a>
        <a class="nav-item nav-link active" href="login.php">Login/Signup</a>
        <a class="nav-item nav-link active" href="index.html#contact">Contact us</a>
      </div>
    </div>
  </nav><!--end of navbar-->
  <div style="background-color:#2C87FE;">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card card-signin flex-row my-5">
          <div class="card-img-left d-none d-md-flex">
             <!-- Background image for card set in CSS! -->
          </div>
          <div class="card-body">
            <h5 class="card-title text-center">Register</h5>
            <form class="form-signin" method="post">
              <div class="form-label-group">
                <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email Address" required autofocus>
                <label for="inputEmail">Email address</label>
              </div>

              <div class="form-label-group">
                <input type="text" id="inputFirstName" name="firstname" class="form-control" placeholder="First Name" required>
                <label for="inputFirstName">First Name</label>
              </div>
              <div class="form-label-group">
                <input type="text" id="inputLastName" name="lastname" class="form-control" placeholder="Last Name" required autofocus>
                <label for="inputLastName">Last Name</label>
              </div>
              <div class="form-label-group">
                <input type="text" id="inputSex" name="sex" class="form-control" placeholder="Sex" required autofocus>
                <label for="inputUserame">Sex</label>
              </div>
              <div class="form-label-group">
                <input type="text" id="inputBloodGroup" name="bloodgroup" class="form-control" placeholder="Blood Group" required autofocus>
                <label for="inputBloodGroup">Blood Group</label>
              </div>

              <hr>

              <div class="form-label-group">
                <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
                <label for="inputPassword">Password</label>
              </div>

              <div class="form-label-group">
                <input type="password" id="inputConfirmPassword" name="confirmpassword" class="form-control" placeholder="Password" required>
                <label for="inputConfirmPassword">Confirm password</label>
              </div>

              <button class="btn btn-lg btn-primary btn-block text-uppercase"  name="signup" type="submit">Register</button>
              <a class="d-block text-center mt-2 small" href="#">Sign In</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
$conn=mysqli_connect("localhost","root","","hospital");
      if(isset($_POST['signup'])){
        $email=mysqli_real_escape_string($conn,$_POST['email']);
        $firstname=mysqli_real_escape_string($conn,$_POST['firstname']);
        $lastname=mysqli_real_escape_string($conn,$_POST['lastname']);
        $sex=mysqli_real_escape_string($conn,$_POST['sex']);
        $bloodgroup=mysqli_real_escape_string($conn,$_POST['bloodgroup']);
        $password=mysqli_real_escape_string($conn,$_POST['password']);
        $confirmpassword=mysqli_real_escape_string($conn,$_POST['confirmpassword']);
        $sql="SELECT * FROM `patient` WHERE patient_email='$email'";
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
          $_SESSION['signup']="WARNING";
          echo "<script>window.location.href='login.php';</script>";
          exit();
        }
        else{
          $hash=password_hash($password,PASSWORD_DEFAULT);
          $sql="INSERT INTO `patient` (`Patient_email`,`first_name`,`last_name`,`sex`,`blood_group`,`Password`) VALUES('$email','$firstname','$lastname','$sex','$bloodgroup','$hash')";
          echo "Successfully";
          if(mysqli_query($conn,$sql)){
            unset($_SESSION['signup']);
            echo "<script>window.location.href='index.php';</script>";
            exit;
          }
          else{
            $_SESSION['signup']="WARNING";
          }
        }
      }
     ?>
</body>
</html>
