<?php include 'nav.php'; ?>

<div class="container">

        <h1><?php echo("Settings Page"); ?></h1>

       <h2> <?php echo("User Name: ". $_SESSION['login_user']); ?></h2> 
       <!--<h2> <?php echo("User ID: ".$_SESSION['ID_user']); ?></h2> -->



       
       <input class="btn btn-primary" value="Change details" />
        

</div>


<?php include 'footer.php';?>