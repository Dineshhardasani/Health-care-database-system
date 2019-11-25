<?php
session_start();
if($_SESSION['email']){
 ?>
<html lang="en">
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../style/style.css">
    <title>Maintain Records</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/dashboard/">

    <!-- Bootstrap core CSS -->
<link href="/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      </style>
  </head>
  <body>

<div class="container-fluid">
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
        <a class="nav-item nav-link active" href="profile.php">Hi admin</a>
        <a class="nav-item nav-link active" href="#contact">Contact us</a>
      </div>
    </div>
  </nav><!--end of navbar-->
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="#">
              <span data-feather="home"></span>
              Dashboard <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="admit_patient.php">
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

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            This week
          </button>
        </div>
      </div>
      <?php
      $conn=mysqli_connect("localhost","root","","hospital");
      $sql="SELECT * FROM `records`";
      $result=mysqli_query($conn,$sql);
       ?>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Patient Name</th>
            <th scope="col">Email Id</th>
            <th scope="col">Admit Date</th>
          </tr>
        </thead>
        <tbody>
          <?php
          while($row=mysqli_fetch_assoc($result)){
           ?>
           <tr>
             <th scope="row">1</th>
             <td><?php echo $row['patient_name']; ?></td>
             <td><?php echo $row['patient_email'];?></td>
             <td><?php echo $row['admit_date'];?></td>
           </tr>
           <?php
         }
          ?>
        </tbody>
      </table>

      <h2>Pending Bills</h2>
        <?php
          $conn=mysqli_connect("localhost","root","","hospital");
          $sql1="SELECT sum(b.amount) AS amount,b.patient_email,r.patient_name FROM `bill` AS b,`records` AS r where b.`Status`='unpaid' GROUP BY b.`patient_email`";
          $result1=mysqli_query($conn,$sql1);
        ?>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Patient Name</th>
              <th scope="col">Email Id</th>
              <th scope="col">Amount</th>
            </tr>
          </thead>
          <tbody>
            <?php
            while($row=mysqli_fetch_assoc($result1)){
             ?>
             <tr>
               <th scope="row">1</th>
               <td><?php echo $row['patient_name']; ?></td>
               <td><?php echo $row['patient_email'];?></td>
               <td><?php echo $row['amount'];?></td>
             </tr>
             <?php
           }
            ?>
          </tbody>
        </table>
      <div class="table-responsive">

      </div>
    </main>
  </div>
</div>
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
} ?>
