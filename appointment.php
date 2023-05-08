<?php include "inc/header.php"; ?>
<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
 
<?php
ini_set("display_errors","1");
error_reporting(E_ALL);
    /*session_start();
    if(isset($_SESSION['user'])){
        echo $_SESSION['user']['username'];
    }
    else{
        header('Location: user/login.php');
    }*/
    $username="";
    $treatment="";
    $appointment_date="";
    $appointment_time="";
    $treatmentErr="";
    $appointment_dateErr="";
    $appointment_timeErr="";
    if(isset($_REQUEST['appointment'])){
        $username=$_REQUEST['username']; //adding form data to variable
        $treatment=$_REQUEST['treatment'];
        $appointment_date=$_REQUEST['appointment_date'];
        $appointment_time=$_REQUEST['appointment_time'];
         
        //condition for form data
        if(empty($treatment)){
          $treatmentErr="Please choose treatment";
          echo $treatmentErr;
        }
        else if(empty($appointment_date)){
          $appointment_dateErr="Please enter appointment date";
          echo $appointment_date;
        }
        else if(empty($appointment_time)){
          $appointment_timeErr="Please enter appointment time";
          echo $appointment_timeErr;
        }
        else{
          //inserting form data to db
          $sql="INSERT INTO appointment (username,treatment,appointment_date,appointment_time) 
                VALUES (:username, :treatment, :appointment_date, :appointment_time)";
          $stmt=$pdo->prepare($sql);
          $stmt->execute([
              ':username'=>$username,
              ':treatment'=> $treatment,
              ':appointment_date'=>$appointment_date,
              ':appointment_time'=>$appointment_time
          ]);
          ?>   
        <script>
            Swal.fire({
                 
                icon: 'success',
                title: 'Your appointment is successful. Thank you for choosing us.',
                showConfirmButton: false,
                timer: 1500
                })
        </script>
<?php
        }
    }
?>
 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> 
<div class="h-100 text-light bg-primary text-lg-center p-4">
    <h4>Home/Appointment</h4>
</div>
<div class="row appointment">
    <div class="col-12 text-lg-center ms-3 my-3">
        <h3>Appointment Form</h3>
    </div>
</div>
<form action="appointment.php" method="post"> 
    <div class="my-3 row justify-content-center ms-2">
        <label for="name" class="col-sm-2 col-lg-1 col-md-2 col-form-label">Name</label>
        <div class="col-sm-8 col-lg-3 col-md-4">
            <input type="text" class="form-control" id="username" name="username" value="<?php //echo $_SESSION['user']['username']; 
            echo "Phyu";?>" readonly>
        </div>
    </div>
    <div class="my-3 row justify-content-center ms-2">
        <label for=" " class="col-sm-2 col-lg-1 col-md-2 col-form-label">Treatment</label>
        <div class="col-sm-8 col-lg-3 col-md-4">
            <select class="form-select" aria-label="Treatment" name="treatment">
                <option selected>Choose Treatment</option>
                <?php
                    $sql = 'SELECT * FROM Treatment';
                    $stmt=$pdo->prepare($sql);
                    $stmt->execute([]);
                    $treatment =  $stmt->fetchAll();
                ?>
                <?php foreach ($treatment as $data):?>
                <option value="<?php echo $data->id; ?>"><?php echo $data->title ?></option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>

    <div class="my-3 row justify-content-center ms-2">
        <label for=" " class="col-sm-2 col-lg-1 col-md-2 col-form-label">Appointment Date</label>
        <div class="col-sm-8 col-lg-3 col-md-4">
            <input type="date" class="form-control" id="appointment_date" name="appointment_date" value="">
        </div>
    </div>

    <div class="my-3 row justify-content-center ms-2">
        <label for="name" class="col-sm-2 col-lg-1 col-md-2 col-form-label">Appointment Time</label>
        <div class="col-sm-8 col-lg-3 col-md-4">
            <select class="form-select" aria-label="Default select example" name="appointment_time">
                <option selected>Choose Appointment Time</option>
                <option value="9-12">9:00 AM to 12:00 PM</option>
                <option value="3-7">3:00 PM to 7:00 PM</option>
            </select>   
        </div>
    </div>

    <div class="mb-3 row justify-content-center ms-2">
        <div class="col-sm-2 col-lg-1 col-md-2 "> </div>
        <div class="col-sm-8 col-lg-4 col-md-4">
            <button type="submit" class="btn btn-dark text-center ms-lg-5" name="appointment">Appointment</button>           
        </div> 
    </div>
</form>
<?php include "inc/footer.php"; ?>
 