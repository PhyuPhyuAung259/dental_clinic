<?php include 'inc/header.php';?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<div class="h-100 text-light bg-primary text-lg-center p-4">
    <h4>Home/Blog Detail</h4>
</div>
<div class="blogdetail container">
    <?php 
        $id=$_REQUEST['id'];
        $sql="SELECT * FROM blog WHERE id=?";
        $stmt=$pdo->prepare($sql);
        $stmt->execute([$id]);
        $blogdetail =  $stmt->fetchAll();
    ?>
    <?php foreach($blogdetail as $data):?>
        <div class="row">
            <div class="col-12 text-lg-center" >
                <h1 class="text-primary m-2 mt-3"><?php echo $data->title;?></h1>
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <img src="img/teethwhitening.jpeg" class="rounded" alt="">
            </div>
        </div>
         <div class="row">
            <div class="col">
                <p class="m-3"><?php echo $data->short_description;?></p> 
            </div>
         </div>
         <div class="row">
            <div class="col">
            <p class="ms-3 me-5"><?php echo $data->description;?></p>
        </div>
         </div>
    <?php endforeach;?>
</div>
<?php include 'inc/footer.php'; ?>