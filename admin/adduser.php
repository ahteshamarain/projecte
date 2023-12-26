<?php 
include("include/header.php");
include("include/navbar.php");
include("include/sidebar.php");



?>



  <main id="main" class="main">
    <br><br>

  
<div class="container">

<!-- Outer Row -->
<div class="row justify-content-center">

    <div class="col-xl-10 col-lg-12 col-md-9">
        <h2>Add users</h2>
        <hr>
<form class="user" action="adduserdata.php" method="POST">
    <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <input name="fname" style="border-radius: 100px;" type="text" class="form-control form-control-user input1" id="exampleFirstName"
                placeholder="First Name" name="FirstName" required>
        </div>
        <div class="col-sm-6">
            <input name="lname" style="border-radius: 100px;" type="text" class="form-control form-control-user input1" id="exampleLastName"
                placeholder="Last Name" required>
         </div>
    </div>
    <div class="form-group mt-3">
        <input name="email" style="border-radius: 100px;" type="email" class="form-control form-control-user input1" id="exampleInputEmail"
            placeholder="Email Address" name="email" required>
    </div>
    <br>
    <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <input name="pass" style="border-radius: 100px;" type="password" class="form-control form-control-user input1"
                id="exampleInputPassword" placeholder="Password" name="password" required>
        </div>
        <div class="col-sm-6">
            <input name="rpass" style="border-radius: 100px;" type="password" class="form-control form-control-user input1"
                id="exampleRepeatPassword" placeholder="Repeat Password" name="repeatPassword" required>
        </div>
    </div>
    <br>
    <!-- <a class="btn btn-primary btn-user btn-block" name="register">
        Register Account
    </a> -->
    <input type="submit" name="register" value="register" class="btn btn-primary btn-user btn-block" name="register" >
    <br><br>
 
                        
</form>

    </div>

</div>

</div>
  </main><!-- End #main -->


  <?php 
include("include/footer.php");


?>