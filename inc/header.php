<?php include 'config/database.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
   <link rel="stylesheet" href="css/home.css">


    <title>SmileCare</title>
</head>
<body>
     <div class="header">
     <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid ">
  <div class="logo bold d-flex ">            
                    <img src="img/logo-removebg-preview.png" alt="Logo" width="100" height="100"  >
                    <h3 class="center mt-4 py-2">Smile<span>Care</span></h3>
                 </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
      <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="treatment.php">Treament</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="doctors.php">Doctors</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="blog.php">Blog</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="about.php" >About</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a href="appointment.php" class="btn btn-primary">Appointment</a>
                    </li>
                    <?php
                        session_start();
                        if(isset($_SESSION['user'])){
                            echo '<li class="user-nav ms-3 mt-2 me-2">
                            <a class="user-link" href="user/logout.php">LogOut</a>
                            </li>';
                            echo '<li class="user-nav ms-3 mt-2 me-2">
                            <a class="user-link" href="user/profile.php">'.$_SESSION['user'][0]['username'].'</a>
                            </li>';
                        }else{
                            echo '<li class="user-nav ms-3 mt-2">
                            <a class="user-link" href="user/login.php">Login</a>
                            </li>';
                            echo '<li class="user-nav ms-3 mt-2 me-2">
                            <a class="user-link" href="user/register.php">Register</a>
                            </li>';
                        }
                    ?>
                    
                     
      </ul>
      
    </div>
  </div>
</nav>
        
     </div>