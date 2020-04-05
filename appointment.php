<div class=<div class="profile">
<?php
session_start();
error_reporting(0);
if(isset($_SESSION['patient_email'])){
$email=$_GET['dr_id'];
?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 <link rel="stylesheet" href="style/style.css">
<!--    Include the above in your HEAD tag ---------->
<script>
  $( function() {
    $( "#datepicker" ).datepicker({ minDate: 0});
  } );
  </script>
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
    <a class="dropdown-item" href="logout">logout</a>

  </div>
</div>

      <a class="nav-item nav-link active" href="#contact">Contact us</a>
    </div>
  </div>
</nav><!--end of navbar-->

 <div class="container">

            <div class="row">
                <div class="col-md-6">
                    <div class="well-block">
                        <div class="well-title">
                            <h2>Questions? Book an Appointment</h2>
                        </div>
                        <form method="GET">
                            <!-- Form start -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="name">Name</label>
                                        <input id="name" name="name" type="text" placeholder="Name" class="form-control input-md" required autofocus>
                                    </div>
                                </div>
                                <!-- Text input-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="date">Preferred Date</label>

                                        <input id="datepicker" name="date" required autofocus>
                                    </div>
                                </div>
                                <!-- Button -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <button id="singlebutton" name="button" value="<?php echo $email;?>" class="btn btn-default">Make An Appointment</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- form end -->
                    </div>
                </div>

            </div>
        </div>
        <?php
        if(isset($_GET['button'])){
          $cal_date=$_GET['date'];
          $date=date('Y-m-d',strtotime($cal_date));
          echo $_GET['button'];
          $conn=mysqli_connect("localhost","root","","hospital");
          $sql="SELECT * FROM `attends` WHERE `date`='$date' AND `doctor_email`='$_GET[button]'";
          $result=mysqli_query($conn,$sql);
          if(mysqli_num_rows($result)>20){
            echo "Sorry! Appointment limit is exceeds";
          }
          else{
            $sql1="INSERT INTO `attends` (`patient_email`,`doctor_email`,`date`) VALUES('$_SESSION[patient_email]','$_GET[button]','$date')";
            $result1=mysqli_query($conn,$sql1);
            $sql="SELECT * FROM `attends` WHERE `date`='$date' AND `doctor_email`='$_GET[button]'";
            $result=mysqli_query($conn,$sql);
            echo "You Successfully book your Appointment and Your Appointment No. is ".mysqli_num_rows($result);
            $sql2="INSERT INTO `records` (`patient_email`,`doctor_email`,`admit_date`) VALUES('$_SESSION[patient_email]','$_GET[button]','$date')";
            $resul0=mysqli_query($conn,$sql2);
          }
        }
      }
      else{
          echo "<script>window.location.href='login.php';</script>";
      }
         ?>
