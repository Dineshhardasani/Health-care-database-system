<?php
      session_start();

 ?>
<html>
<head>
  <title>Doctor Sign Up</title>
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
            <form class="form-signin" method="post" enctype="multipart/form-data">
              <div class="form-label-group">
                <label for="inputEmail">Email Address</label>
                <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email Address" required autofocus>
              </div>

              <div class="form-label-group">
                <label for="inputFirstName">First Name</label>
                <input type="text" id="inputFirstName" name="firstname" class="form-control" placeholder="First Name" required>
              </div>

              <div class="form-label-group">
                <label for="inputLastName">Last Name</label>
                <input type="text" id="inputLastName" name="lastname" class="form-control" placeholder="Last Name" required autofocus>
              </div>

              <div class="form-label-group">
                <label for="inputLastName">Sex</label>
                <select class="browser-default custom-select" name="sex">
                  <option selected>Sex</option>
                  <option value="male">Male</option>
                  <option value="female">Female</option>
                  <option value="3">Other</option>
                </select>
              </div>
              <div class="form-label-group">
                <label for="inputBloodGroup">Blood Group</label>
                <select class="browser-default custom-select" name="bloodgroup">
                  <option selected>Blood Group</option>
                  <option value="A+">A+</option>
                  <option value="A-">A-</option>
                  <option value="B+">B+</option>
                  <option value="B-">B-</option>
                  <option value="O+">O+</option>
                  <option value="O-">O-</option>
                  <option value="AB+">AB+</option>
                  <option value="AB-">AB-</option>
                </select>
              </div>

              <hr>
              <div class="form-label-group">
                <label for="inputImage">Image</label>
                <input type="file" class="form-control" name="file">
              </div>

              <div class="form-label-group">
                <label for="inputQualification">Qualification</label>
                <input type="text" id="inputQualification" name="Qualification" class="form-control" placeholder="Qualification" required autofocus>
              </div>

              <div class="form-label-group">
                <label for="inputPassword">Password</label>
                <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
              </div>

              <div class="form-label-group">
                  <label for="inputConfirmPassword">Confirm password</label>
                <input type="password" id="inputConfirmPassword" name="confirmpassword" class="form-control" placeholder="Password" required>
              </div>

              <button class="btn btn-lg btn-primary btn-block text-uppercase"  name="signup" type="submit">Register</button>
              <a class="d-block text-center mt-2 small" href="login.php">Sign In</a>
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
        $qualification=mysqli_real_escape_string($conn,$_POST['Qualification']);
        $password=mysqli_real_escape_string($conn,$_POST['password']);
        $confirmpassword=mysqli_real_escape_string($conn,$_POST['confirmpassword']);
        $sql="SELECT * FROM `doctor` WHERE email_id='$email'";
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
          $_SESSION['signup']="WARNING";
          echo "<script>window.location.href='login.php';</script>";
          exit();
        }
        else{
          $hash=password_hash($password,PASSWORD_DEFAULT);


          $sql="INSERT INTO `doctor` (`email_id`,`first_name`,`last_name`,`sex`,`blood_group`,`qualification`,`password`) VALUES('$email','$firstname','$lastname','$sex','$bloodgroup','$qualification','$hash')";
          echo "Successfully";
          if(mysqli_query($conn,$sql)){
            //upload image
            $file=$_FILES['file'];
              $filename=$file['name'];
              $fileerror=$file['error'];
              $filetmp=$file['tmp_name'];
              $fileext=explode('.',$filename);
              $filecheck=strtolower(end($fileext));
              $fileextstored=array('png','jpg','jpeg');
              if(in_array($filecheck,$fileextstored)){
                $destinationfile='uploads/'.$filename;

                $name=$firstname;


                function compressImage($source, $destination, $quality) {

                    $info = getimagesize($source);

                    if ($info['mime'] == 'image/jpeg')
                    $image = imagecreatefromjpeg($source);

                    elseif ($info['mime'] == 'image/gif')
                    $image = imagecreatefromgif($source);

                    elseif ($info['mime'] == 'image/png')
                    $image = imagecreatefrompng($source);

                    imagejpeg($image, $destination, $quality);

                }
                compressImage($_FILES['file']['tmp_name'],$destinationfile,60);
                $info=getimagesize($_FILES['file']['tmp_name']);

                move_uploaded_file($filetmp,$destinationfile);
                $sql="UPDATE `doctor` SET `doctor_img` = '$destinationfile' WHERE `doctor`.`email_id` = '$email'";
                mysqli_query($conn,$sql);

                //$_SESSION['user_image']=$destinationfile;
              }

            unset($_SESSION['signup']);
            echo "<script>window.location.href='doctor.php';</script>";
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
