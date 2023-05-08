<?php include 'inc/header.php';?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> 
<div class="h-100 text-light bg-primary text-lg-center p-4">
    <h4>Home/Doctors</h4>
</div>
<div class="doctors d-flex">
    <?php 
        $sql="SELECT * FROM doctor";
        $stmt=$pdo->prepare($sql);
        $stmt->execute([]);
        $doctor =  $stmt->fetchAll();
    ?>
    <div class="container">
         <div class="row"> 
            <?php foreach ($doctor as $data) :?>
            <div class="col-lg-6 col-md-12 col-sm-12 doctor_box d-flex">
                <div class="doctor_box_image py-4 col-lg-3 col-md-6 col-sm-6">
                    <img src="img/doctor.jpeg" alt="" class="border-radius"  >
                </div>
                <div class="doctor_box_text ms-lg-5 px-lg-5 col-lg-3 col-md-6 col-sm-6">
                    <table class="table">
                    <tbody>
                        <tr>
                            
                            <td class="text-primary"><h4><?php echo $data->name; ?></h4> </td>
                        </tr>
                        <tr>
                            
                            <td><?php echo $data->phone; ?></td>
                        </tr>
                        <tr>
                            
                            <td>Field of expertise: <?php echo $data->field_of_expertise; ?></td>
                        </tr>
                        <tr>
                            <td>Years_of_practise: <?php echo $data->years_of_practise; ?></td>
                        </tr>
                        <tr>
                            <td>                
                                <a href="doctordetail.php?name=<?php echo $data->name;?>" class="text-primary" name="btn">Learn more</a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <?php endforeach;?>
         </div>
    </div>
   
</div>
<?php include 'inc/footer.php'; ?>