<?php



?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Joinhandsng</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  
<style type="text/css">
.nav-link{ color:white;}
.nav-link:hover{
	color:grey;
}
</style>


</head>

<body>

  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg  fixed-top" style='background-color:green'>
    <div class="container">
      <a class="navbar-brand" href="index.php"><img src="images/logo2.png" width='100'></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">HOME</a>
          </li>
		   <li class="nav-item">
            <a class="nav-link" href="about_us.php">ABOUT US</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="register_ngo.php">REGISTER YOUR NGO</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="view_records.php">VIEW RECORDS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact_us.php">CONTACT US</a>
          </li>
          <?php if(isset($_SESSION['user'])) { ?>
		   <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             Hello <?php echo $details['resident_fname'] ?>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
              <a class="dropdown-item" href="profile.html">Edit Profile</a>
              <a class="dropdown-item" href="payments.php">My Payments</a>
              <a class="dropdown-item" href="shop.html">Shop</a>
            </div>
          </li>

        <?php } ?>
          <li class="nav-item" style='background-color:yellow;margin-left:60px !important;'>
            

            <?php

            if(isset($_SESSION['user'])){
              echo "<a class='nav-link' style='color:green' href='logout.php' >Logout</a>";
            } else{
              echo "<a class='nav-link' style='color:green' href='#' data-toggle='modal' data-target='#exampleModal' >Support this Site</a>";
            }

            ?>
          </li>
           
         
        </ul>
      </div>
    </div>
  </nav>