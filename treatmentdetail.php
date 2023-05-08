<?php
if(isset($_REQUEST['id'])){
    $id=$_REQUEST['id'];
}
?>
<?php include 'inc/header.php';?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<div class="h-100 text-light bg-primary text-center p-4">
    <h4>Home/TreatmentDetail</h4>
</div>
<div class=" container treatmentdetail p-5">
    <div class="row">
        <?php
        $id=$_REQUEST['id'];
        $sql="SELECT * FROM Treatment WHERE id=?";
        $stmt=$pdo->prepare($sql);
        $stmt->execute([$id]);
        $treatmentdetail =  $stmt->fetchAll();
        ?>
        <?php foreach ($treatmentdetail as $data): ?>
            <div class="row">
                <h1 class="col-12 text-primary"><?php echo $data->title;?></h1>
            </div>
            <div class="treatmentdetail_box m-2 p-3 row">
                    <img class="img-fluid col-lg-3 col-md-4 col-sm-12 m-0 p-0" src="img/logo-removebg-preview.png" alt=""/>
                    <p class="col-lg-8 col-md-8 col-sm-10 p-sm-3"><?php echo $data->description;?></p>
                <!-- <h4> <span class="text-primary">Price - </span><?php //echo $data->price;?></h4>-->
            </div>
           
        <?php endforeach; ?>
    </div>  
</div>
<?php include 'inc/footer.php';?>