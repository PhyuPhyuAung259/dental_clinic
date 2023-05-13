<?php include 'inc/header.php';?>
<?php 
     
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> 
<div class="h-100 text-light bg-primary text-lg-center p-4">
    <h4>Home/Contact Us</h4>
</div>
<div class="row">
    <div class="col-12 text-lg-center m-3">
         <h3>Contact Informantion</h3>
    </div>
</div>
<div class="row ">
    <div class="col-lg-6 col-md-6 col-sm-10" id="googleMap"></div>
    <div class="col-lg-5 col-md-6 col-sm-10">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-5 logo bold d-flex" style="width: 300px; height: 500px;">           
                <img src="img/logo-removebg-preview.png" alt="Logo" width="100" height="100"  >
                <h3 class="center mt-4 py-2">Smile<span>Care</span></h3>
            </div>
             
        </div>
         
    </div>
</div>
<script>
    function myMap() {
    var mapProp= {
    center:new google.maps.LatLng(51.508742,-0.120850),
    zoom:5,
    };
    var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>

<div class="row  bg-light ms-3">
    <div class="row">
        <div class="col-12 text-center p-2 py-4">
            <h6 class="text-primary">Ask us anything</h6>
            <h3 class="py-3">We're here to help</h3>
            <p class="text-muted">Have a question? Just send our admin team a message and we'll get back to you as quickly as possible.</p>
        </div>
    </div>
    <form id='myForm'> 
    <div class="mb-3 row justify-content-center">
        <div class="col-sm-10 col-lg-3 col-md-4 mb-2">
            <input type="text" class="form-control p-2" id="username" name="from_name" placeholder="Your Name">
        </div>
        <div class="col-sm-10 col-lg-3 col-md-4 mb-2">
            <input type="email" class="form-control" id="email" name="email" placeholder="Your Email">
        </div>
    </div>
    <div class="mb-3 row justify-content-center">
        <div class="col-lg-6 col-md-8 col-sm-10 m-2">
            <textarea name="message" id="message" cols="50" rows="10" class="form-control" placeholder="Your Message"> </textarea>
        </div>
    </div>
    <div class="mb-3 row justify-content-center">
        <div class="col-lg-6 col-md-8 col-sm-10 m-2">
            <button type="submit" class="btn btn-primary form-control" name="send">Send Message</button>       
        </div>
    </div>
    </form>
</div>

<script>
    $('#myForm').on('submit', function(event) {
    event.preventDefault(); // prevent reload
    
    var formData = new FormData(this);
    formData.append('service_id', 'service_rbwh8rh');
    formData.append('template_id', 'template_qmal2bx');
    formData.append('user_id', 'JBS4NQzdIJ0E3PGC1');
 
    $.ajax('https://api.emailjs.com/api/v1.0/email/send-form', {
        type: 'POST',
        data: formData,
        contentType: false, // auto-detection
        processData: false // no need to parse formData to string
    }).done(function() {
        alert('Your mail is sent!');
    }).fail(function(error) {
        alert('Oops... ' + JSON.stringify(error));
    });
});
// code fragment
</script>

 
<?php include 'inc/footer.php';?>
 
