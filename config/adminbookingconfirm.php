<?php
include "../config/database.php";
//checking db error
ini_set("display_errors","1");
error_reporting(E_ALL);
  //btn_confirm state
  if(isset($_REQUEST['bookingid'])){
     
    $id=$_REQUEST['bookingid'];
    $sql="UPDATE appointment SET status='booking' WHERE id=?";
    $stmt=$pdo->prepare($sql);
    $stmt->execute([$id]);
   }
   

  //btn_confirm state
  if(isset($_REQUEST['patientid'])){
     
    $id=$_REQUEST['patientid'];
    $sql="UPDATE appointment SET status='patient' WHERE id=?";
    $stmt=$pdo->prepare($sql);
    $stmt->execute([$id]);
   }
  header('Location: ../admin_dashboard/index.php');
?>