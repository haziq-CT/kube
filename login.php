<?php
session_start();
include('includes/header.php'); 
include("includes/navbar.php");
?>


<div class="py-5">
    <div class="container"> 
      <div class="row">
        <div c;ass="col-md-12">
          <div class="card">
            <div class="card-body">

              <div class="form-group mb-3">
                <label>Email</label>
                <input type="email" placeholder="Enter Email Address" class="form-control">
              </div>
              <div class="form-group mb-3">
                <label>Password</label>
                <input type="password" placeholder="Enter Password" class="form-control">
              </div>
              <div class="form-group mb-3">
                <button type="submit" class="btn btn-primary">Login Now</button>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
</div>



<?php
include('includes/scripts.php'); 
?>