<?php include 'inc/header.php';?>
<?php
    if(isset($_REQUEST['name'])){
        $name=$_REQUEST['name'];
    }
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> 
<div class="h-100 text-light bg-primary text-lg-center p-4">
    <h4>Home/<?php echo $name;?></h4>
</div>
<?php 
    $name=$_REQUEST['name'];
    $sql="SELECT * FROM doctor WHERE name=?";
    $stmt=$pdo->prepare($sql);
    $stmt->execute([$name]);
    $doctordetail =  $stmt->fetchAll();
?>
<div class="container">
    <div class="row doctordetail p-3">
        <?php foreach($doctordetail as $data):?>
            <div class="col">
                <img src="img/doctor.jpeg" class="rounded" alt="">
                <h3 class="text-primary"><?php echo $data->name; ?></h3>
                <h6><?php echo $data->phone; ?></h6>
                <h6><?php echo $data->email; ?></h6> 
                <h3 class="text-primary">Short Biography</h3>
                <p><?php echo $data->biography; ?></p>  
                <table class="table" m-md-3 m-sm-3>
                    <tbody>
                        <tr>
                            <td>Education</td>
                            <td><?php echo $data->education;?></td>
                        </tr>
                        <tr>
                            <td>Certification</td>
                            <td><?php echo $data->certification;?></td>
                        </tr>
                        <tr>
                            <td>Field of expertise</td>
                            <td><?php echo $data->field_of_expertise;?></td>
                        </tr>
                        <tr>
                            <td>Years of practise</td>
                            <td><?php echo $data->years_of_practise;?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        <?php endforeach;?>
    </div>

</div>
 
</div>
<?php include 'inc/footer.php'; ?>
 