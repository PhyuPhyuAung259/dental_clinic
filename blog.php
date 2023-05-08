<?php include 'inc/header.php';?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<div class="h-100 text-light bg-primary text-lg-center p-4">
    <h4>Home/Blog</h4>
</div>
<div class="container blog">
    <?php 
        $sql="SELECT * FROM blog";
        $stmt=$pdo->prepare($sql);
        $stmt->execute([]);
        $blog =  $stmt->fetchAll();
    ?>
     <?php foreach ($blog as $data) :?>
        <div class="doctor_box row">
            <div class="doctor_box_image mt-5 col-lg-3 col-md-5 col-sm-12">
                <img src="img/teethwhitening.jpeg" alt="" class="rounded">
            </div>
            <div class="doctor_box_text px-5 py-3 m-3 col-lg-7 col-md-6 col-sm-12">
                <h1><?php echo $data->title;?></h1>
                <p><?php echo $data->short_description;?></p>
                <a href="blogdetail.php?id=<?php echo $data->id;?>" class="btn btn-primary" name="btn">Read more</a>
            </div>
        </div>
      <hr>
     <?php endforeach;?>
</div>
<?php include 'inc/footer.php'; ?>