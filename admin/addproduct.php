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
        <h2>Add product</h2>
        <hr>
<form class="user" action="addprodata.php" method="POST" enctype="multipart/form-data">
    <div class="form-group row">

        <div class="col-sm-6">
            <input name="pname" style="border-radius: 100px;" type="text" class="form-control form-control-user input1" id="exampleLastName"
                placeholder="Name" required>
         </div>
    </div>
    <div class="form-group mt-3 col-sm-6">
        <input name="pimage" style="border-radius: 100px;" type="file" class="form-control form-control-user input1" id="exampleLastName"
            placeholder="Image" required>
    </div>
    <div class="form-group mt-3 col-sm-6">
        <input name="pprice" style="border-radius: 100px;" type="text" class="form-control form-control-user input1" id="exampleLastName"
            placeholder="Price" required>
    </div>

    
 
    <br>
    <!-- <a class="btn btn-primary btn-user btn-block" name="register">
        Register Account
    </a> -->
    <input type="submit" name="addproduct" class="btn btn-primary btn-user btn-block" >
    <br><br>
 
                        
</form>

    </div>

</div>

</div>
  </main><!-- End #main -->


  <?php 
include("include/footer.php");


?>