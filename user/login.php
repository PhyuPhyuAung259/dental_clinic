<?php
 include '../config/database.php';
 ini_set("display_errors","1");
error_reporting(E_ALL);
session_start();
$username="";
$pwd="";
$usernameErr="";
$pwdErr="";
$b=true;
 if(isset($_REQUEST['login'])){
    $username=$_REQUEST['username'];
    $pwd=$_REQUEST['password'];
    $sql="SELECT * FROM user WHERE username=? && password=?";
    $stmt=$pdo->prepare($sql);
    $stmt->execute([$username,$pwd]);
    
     
    while( $user =  $stmt->fetch()){
        if ($user->username!=$_REQUEST['username']) {
          
           $usernameErr="Invalid Username";
           $b=false;
        }
        if ($user->password!=$_REQUEST['password']) {
           $pwdErr="Invalid  Password";
           $b=false;
        }
 
        if ($b==true) {
          $_SESSION['user'][0]['username']=$user->username;
          $_SESSION['user'][1]['password']=$user->password;
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
    <title>SmileCare/Login</title>
 </head>
 <body>
    <div class="mx-auto bg-primary min-vh-100 align-items-center justify-content-center">
    <div class="container  w-lg-50  align-items-center px-5">
        <div class="text-light col-lg-6 col-md-8 col-sm-9 p-5">
            <h3 class="p-2">Sign In</h3>
            <form action="login.php" method="post">
            <div class="mb-3">
                <label for="" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username">
                <p class="text-danger"><?php echo $usernameErr ?></p>
            </div>
            <div class="mb-3">
                <label for="Password" class="form-label">Password</label>
                <input type="password" class="form-control" id="Password1" name="password">
                <p class="text-danger"><?php echo $pwdErr ?></p>
            </div>
            <p class="text-light">Don't have an account? <a href="register.php" class="text-light"> Sing Up Here</a></p>
            <button type="submit" class="btn btn-light" name="login">Login</button>
            </form>
        </div>
     </div>
    </div>
     
    
 </body>
 </html>
  