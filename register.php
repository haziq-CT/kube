<?php
session_start();
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">

            <?php include('message.php'); ?>

            <div class="card">
              <div class="card-header">
                <h4>Register</h4>
              </div>
              <div class="card-body">

                <form acion="registercode.php" method="POST">
                  <div class="form-group mb-3">
                      <label>Username</label>
                      <input required type="text" name="username" placeholder = "Enter Username" class="form-control">
                  </div>
                  <div class="form-group mb-3">
                      <label>Email</label>
                      <input required type="email" name="email" placeholder = "Enter Email" class="form-control">
                  </div>
                  <div class="form-group mb-3">
                      <label>Password</label>
                      <input required type="password" name="password" placeholder = "Enter Password" class="form-control">
                  </div>
                  <div class="form-group mb-3">
                      <label>Comfirm Password</label>
                      <input required type="password" name="cPassword" placeholder = "Re-Enter Password" class="form-control">
                  </div>
                  <div class="form-group mb-3">
                       <button  type="submit" name="register_btn" class="btn btn-primary">Register Now</button>
                  </div>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

              


<?php
include('includes/scripts.php');
include('includes/footer.php');
?>