<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
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
          <a class="nav-item nav-link active" href="home.php" >Home </a>
          <a class="nav-item nav-link active" href="home.php#Aboutus">About us</a>
            <a class="nav-item nav-link active" href="#">Doctors</a>
            <a class="nav-item nav-link active" href="logout.php">Logout</a>
          </div>
          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Hello <?php echo $_SESSION['first_name']?>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="profile.php">My Profile</a>
              <a class="dropdown-item" href="logout">logout</a>

            </div>
          </div>
          <a class="nav-item nav-link active" href="index.html#contact">Contact us</a>
        </div>
      </div>
    </nav><!--end of navbar-->
  <div class="container">
    <?php
      $conn = mysqli_connect("localhost","root","","hospital") or die("Cann't connect to database");
      $id=$_GET['category'];
      $query = "SELECT * FROM `doctor` WHERE `category`='$id'";
      $sql = mysqli_query($conn,$query);
      ?>
      <div class="row">
        <?php
        unset($_GET['email']);
      while($row = mysqli_fetch_array($sql))
      {
        ?>
        <div class="col-sm-3">
    <form method="get" action="doctor_profile.php">
      <div class="card">
        <img src=<?php echo $row['doctor_img'];?> height="200" width="250">
          <div class="card-body">
          </div>
          <button type="submit"  name="email" value=<?php echo $row['email_id']; ?>><?php echo  $row['first_name'];?></button>
      </div>
    </form>
    </div>
        <?php
      }
    ?>
    </div>
</div>

  </body>
</html>
<?php

 ?>
