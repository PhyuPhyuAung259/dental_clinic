<?php
    session_start();
    if(isset($_SESSION['appointment'])){
        echo $_SESSION['appointment'][0]['appointment'];
    }
?>
<?php include 'inc/header.php';?>


<div class="home-banner">
    <div>
    <h3 class="home-banner_header">
        Make Your <br> <span class="bold">Smile Shine </span>
    </h3>
    <div class="home-banner_body">
    <p>
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab dignissimos nulla ullam maiores est quae ut culpa dolorum quam sequi ipsum voluptatem earum incidunt nihil, eum sit expedita laudantium fugiat.
    </p>
    </div>
    
    <input class="btn btn-primary" type="submit" value="Read More">
    </div>
</div>
<div>
</div>
<?php include 'inc/footer.php';?>