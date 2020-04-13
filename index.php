<?php

require("header.php");

//To get info of the client visiting your page
// echo "<pre>";
// print_r($_SERVER);
// echo "</pre>";

require('header2.php');

?>



  <!-- Page Content -->
  <div class="container">

  <p><ol class="breadcrumb">
      <li class="breadcrumb-item">
        <h4>Select an NGO and make a donation</h4>
      </li>
    </ol>
  </p>

    <!-- Portfolio Section -->
    
 <div class="row">
      <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="single.html"><img class="card-img-top" src="profile/p1.jpg" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="single.html">Member One</a>
            </h4>
            <p class="card-text">A well-bred software developer who can turn any idea into business using technology</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="profile/p2.jpg" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">Member Two</a>
            </h4>
           <p class="card-text">A well-bred software developer who can turn any idea into business using technology</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="profile/p3.jpg" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">Member Three</a>
            </h4>
           <p class="card-text">A well-bred software developer who can turn any idea into business using technology</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="profile/p4.jpg" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">Member Four</a>
            </h4>
           <p class="card-text">A well-bred software developer who can turn any idea into business using technology</p>
          </div>
        </div>
      </div>
               
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="single.html"><img class="card-img-top" src="profile/p1.jpg" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="single.html">Member One</a>
            </h4>
            <p class="card-text">A well-bred software developer who can turn any idea into business using technology</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="profile/p2.jpg" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">Member Two</a>
            </h4>
           <p class="card-text">A well-bred software developer who can turn any idea into business using technology</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="profile/p3.jpg" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">Member Three</a>
            </h4>
           <p class="card-text">A well-bred software developer who can turn any idea into business using technology</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="profile/p4.jpg" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">Member Four</a>
            </h4>
           <p class="card-text">A well-bred software developer who can turn any idea into business using technology</p>
          </div>
        </div>
      </div>
               
    </div>
    <!-- /.row -->
	  <hr>
	  <p style='text-align:right'><a href='allmembers.php' class='btn btn-info'>View More</a></p>
 
  </div>
  <!-- /.container -->

 <?php

require('footer.php');

 ?>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Member's Login Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action='login.php' method = "POST">
  <div class="form-group">
    <label for="exampleInputEmail1">User ID</label>
    <input type="text" name='userid' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
     
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name='pwd' class="form-control" id="exampleInputPassword1">
  </div>
   <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
  <button type="submit" class="btn btn-info">Login</button>
</form>
      </div>
      
    </div>
  </div>
</div>
</body>

</html>
