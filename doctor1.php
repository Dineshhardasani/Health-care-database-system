<?php
      session_start();
      if(isset($_SESSION['patient_email'])){
 ?>
 <html lang="en" dir="ltr">
   <head>
     <title>Signup</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="style/style.css">
   </head>
   <body>
   <style>
        .row{
          display:flex;
        }
        .card{
          width: 100%;
          height: 100%;
        }
        .card image{
          height: 100%;
          width: 100%;
        }
   </style>
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

     <section class = "doctor-area">


     <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6">

            <form  action="doctors_list.php" method="get">
              <div class="card">
                 <a href="#">
                <img class="card-img" src="Radiologist.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Radiologists are medical doctors that specialize in diagnosing and treating injuries and diseases using medical imaging (radiology).</h5>
                  <button type="submit" name="category" value="radiologist">Radiologist</button>
                </div>
                </div>
              </form>
          </div>
        <div class="col-lg-4 col-md-6">
          <form  action="doctors_list.php" method="get">
            <div class="card">
               <a href="#">
              <img class="card-img" src="nephrologist.jpg" height="220" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title"> Nephrology is the adult and pediatric study of the kidneys and its diseases. The nephrologist deals with the diagnosis and management of kidney disease.</h5>
                <button type="submit" name="category" value="nephrologist">Nephrologist</button>
              </div>
              </div>
            </form>
          </div>

          <div class="col-lg-4 col-md-6">
            <form  action="doctors_list.php" method="get">
              <div class="card">
                 <a href="#">
                <img class="card-img" src="Oncologist.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">An oncologist is a doctor who treats cancer and provides medical care for a person diagnosed with cancer. </h5>
                  <button type="submit" name="category" value="oncologist">Oncologist</button>
                </div>
                </div>
              </form>
            </div>
</div>

<div class="row">
  <div class="col-lg-4 col-md-6">

    <form  action="doctors_list.php" method="get">
      <div class="card">
         <a href="#">
        <img class="card-img" src="Ophthalmologist.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">An ophthalmologist is a medical or osteopathic doctor who specializes in eye and vision care.</h5>
          <button type="submit" name="category" value="ophthalmologist">Ophthalmologist</button>
        </div>
        </div>
      </form>
  </div>
<div class="col-lg-4 col-md-6">
  <form  action="doctors_list.php" method="get">
    <div class="card">
       <a href="#">
      <img class="card-img" src="Orthopedist.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title"> An orthopedic surgeon, a physician who corrects congenital or functional abnormalities of the bones with surgery, casting, and bracing.</h5>
        <button type="submit" name="category" value="orthopedist">Orthopedist</button>
      </div>
      </div>
    </form>
  </div>

  <div class="col-lg-4 col-md-6">
    <form  action="doctors_list.php" method="get">
      <div class="card">
         <a href="#">
        <div class="">
          <img class="card-img" src="Surgeon.jpg" height="220" alt="Card image cap">
        </div>
        <div class="card-body">
          <h5 class="card-title"> a surgeon is a physician who performs surgical operations. There are also surgeons in podiatry, dentistry, orthodontics and the veterinary fields.</h5>
          <button type="submit" name="category" value="surgeon">Surgeon</button>
        </div>
        </div>
      </form>
    </div>
</div>
     </div>
</section>
   </body>
   </html>
   <?php
 }
 else{
   echo "<script>window.location.href='login.php';</script>";
 }
    ?>
