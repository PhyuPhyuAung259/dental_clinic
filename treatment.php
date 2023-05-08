<?php include 'inc/header.php';?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> 
<div class="h-100 text-light bg-primary text-lg-center p-4">
    <h4>Home/Treatment</h4>
</div>
<div class="treatment p-3">
    <?php
    $sql = 'SELECT * FROM Treatment';
    $stmt=$pdo->prepare($sql);
    $stmt->execute([]);
    $treatment =  $stmt->fetchAll();
    ?> 
  <div class="container">
    <div class="row ms-4">
            <?php foreach ($treatment as $data): ?>
                <div class="card col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 text-sm-center mx-md-3 mb-3 " style="width: 18rem;">
                    <img src="img/logo-removebg-preview.png" class="card-img-top w-50 h-50 " alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-primary"> <?php echo $data->title; ?> </h5>
                        <p class="card-text">  
                        <?php
                            $string = $data->description;
                            if (strlen($string) > 100)
                            $new_string = substr($string, 0, 100);
                            echo($new_string);
                            
                            
                        ?>
                        </p>
                        <!--<h6 class="card-text"> <span class="text-primary">Price - </span><?php //echo $data->price;?></h6>-->
                        
                        <a href="treatmentdetail.php?id=<?php echo $data->id;?>" class="btn btn-primary" name="btn">Read more</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
  </div>
</div>
<?php include 'inc/footer.php';?>
 