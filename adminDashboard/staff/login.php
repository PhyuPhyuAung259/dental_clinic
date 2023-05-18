<?php
 include '../../config/database.php';
 ini_set("display_errors","1");
error_reporting(E_ALL);
session_start();
$name="";
$pwd="";
$nameErr="";
$pwdErr="";
$b=true;
 if(isset($_REQUEST['login'])){
    $name=$_REQUEST['name'];
    $pwd=$_REQUEST['password'];
    $sql="SELECT * FROM staff WHERE name=? && password=?";
    $stmt=$pdo->prepare($sql);
    $stmt->execute([$name,$pwd]);
    
     
    while( $staff =  $stmt->fetch()){
        if ($staff->name!=$_REQUEST['name']) {
          
           $nameErr="Invalid Username";
           $b=false;
        }
        if ($staff->password!=$_REQUEST['password']) {
           $pwdErr="Invalid  Password";
           $b=false;
        }
 
        if ($b==true) {
          $_SESSION['staff'][0]['name']=$staff->name;
          $_SESSION['staff'][1]['password']=$staff->password;
         header("Location: ../index.php");
               }
               
        }
}
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>SmileCare/StaffLogin</title>
 </head>
 <body>
    <div class="mx-auto bg-primary min-vh-100 align-items-center justify-content-center">
    <div class="container  w-lg-50  align-items-center px-5">
        <div class="text-light col-lg-6 col-md-8 col-sm-9 p-5">
            <h3 class="p-2">Sign In</h3>
            <form action="login.php" method="post">
            <div class="mb-3">
                <label for="" class="form-label">Username</label>
                <input type="text" class="form-control" id="name" name="name">
                <p class="text-danger"><?php echo $nameErr ?></p>
            </div>
            <div class="mb-3">
                <label for="Password" class="form-label">Password</label>
                <input type="password" class="form-control" id="Password" name="password">
                <p class="text-danger"><?php echo $pwdErr ?></p>
            </div>
           
            <button type="submit" class="btn btn-light" name="login">Login</button>
            </form>
        </div>
     </div>
    </div>
     
    
 </body>
 </html>
  