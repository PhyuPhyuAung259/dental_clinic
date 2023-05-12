<?php
    include '../config/database.php';
    //checking db
    ini_set("display_errors","1");
    error_reporting(E_ALL);
    //variable declare
    $username='';
    $phone='';
    $address='';
    $image='';
    $email='';
    $password='';
    $usernameErr='';
    $phoneErr='';
    $addressErr='';
    $emailErr='';
    $passwordErr='';

    if(isset($_REQUEST['register'])){ //condition for btn 
      $username=$_REQUEST['username']; //adding form data to variable
      $phone=$_REQUEST['phone'];
      $address=$_REQUEST['address'];
      
      $email=$_REQUEST['email'];
      $password=$_REQUEST['password'];
      //condition for form data
      if(empty($username)){
        $usernameErr="Please enter username";
      }
      else if(empty($phone)){
        $phoneErr="Please enter your phone number";
      }
      else if(empty($address)){
        $addressErr="Please enter your address";
      }
      else if(empty($email)){
        $emialErr="Please enter your email address";
      }
      else if(empty($password)){
        $passwordErr="Please enter password";
      }
      else{
        //inserting form data to db
        $image = $_FILES['image']['name'];
        $temp = $_FILES['image']['tmp_name'];  
        $upload_dir = "../uploads/";
        move_uploaded_file($temp, $upload_dir.$image);      
        $sql="INSERT INTO user (username,phone,address,image,email,password) 
              VALUES (:username, :phone, :address,:image, :email, :password)";
        $stmt=$pdo->prepare($sql);
        $stmt->execute([
            ':username'=>$username,
            ':phone'=> $phone,
            ':address'=>$address,
            ':image'=>$image,
            ':email'=>$email,
            ':password'=>$password
        ]);
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
    <title>Registration</title>
</head>
<body>
     
    <div class="container-fluid bg-primary min-vh-100 text-light p-5">
    <form action="register.php" method="post" class="" enctype="multipart/form-data"> 
        <div class="row">
            <div class="col">
                <h1 class="text-center py-2">Registration Form</h1>
            </div>
        </div>
        <div class="mb-3 row justify-content-center">
            <label for="name" class="col-sm-2 col-lg-1 col-md-2 col-form-label">Name</label>
            <div class="col-sm-10 col-lg-4 col-md-4">
            <input type="text" class="form-control" id="username" name="username" value="<?php echo $username; ?>">
            <p class="text-danger"><?php  
                if(!empty($usernameErr)){
                    echo $usernameErr;
                }
            ?></p>
            </div>
        </div>
        <div class="mb-3 row justify-content-center">
            <label for="phone" class="col-sm-2 col-lg-1 col-md-2 col-form-label">Phone</label>
            <div class="col-sm-10 col-lg-4 col-md-4">
            <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $phone; ?>">
            <p class="text-danger"><?php  
                if(!empty($phoneErr)){
                    echo $phoneErr;
                }
            ?></p>
            </div>
        </div>
        <div class="mb-3 row justify-content-center">
            <label for="address" class="col-sm-2 col-lg-1 col-md-2  col-form-label">Address</label>
            <div class="col-sm-10 col-lg-4 col-md-4">
            <input type="text" class="form-control" id="address" name="address" value="<?php echo $address; ?>">
            <p class="text-danger"><?php  
                if(!empty($addressErr)){
                    echo $addressErr;
                }
            ?></p>
            </div>
        </div>
        <div class="mb-3 row justify-content-center">
            <label for="image" class="col-sm-2 col-lg-1 col-md-2  col-form-label">Image</label>
            <div class="col-sm-10 col-lg-4 col-md-4">
            <input type="file" class="form-control" id="image" name="image" value="<?php echo $image; ?>">
            </div>
        </div>
        <div class="mb-3 row justify-content-center">
            <label for="email" class="col-sm-2 col-lg-1 col-md-2  col-form-label">Email</label>
            <div class="col-sm-10 col-lg-4 col-md-4">
            <input type="email" class="form-control" id="email" name="email" value="<?php echo $email; ?>">
            <p class="text-danger"><?php  
                if(!empty($emailErr)){
                    echo $emailErr;
                }
            ?></p>
            </div>
        </div>
        <div class="mb-3 row justify-content-center">
            <label for="password" class="col-sm-2 col-lg-1 col-md-2 col-form-label">Password</label>
            <div class="col-sm-10 col-lg-4 col-md-4">
            <input type="password" class="form-control" id="password" name="password" value="<?php echo $password; ?>">
            <p class="text-danger"><?php  
                if(!empty($passwordErr)){
                    echo $passwordErr;
                }
            ?></p>
            </div> 
        </div>
        <div class="mb-3 row justify-content-center">
            <div class="col-sm-2 col-lg-1 col-md-2 "> </div>
            <div class="col-sm-10 col-lg-4 col-md-4">
            <button type="submit" class="btn btn-dark text-center" name="register">Register</button>           
            </div> 
        </div>
        </form>
    <div class=".align-content-end text-center bg-primary pt-5">copyright@2023 | SmileCare</div> 
    </div>
  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>