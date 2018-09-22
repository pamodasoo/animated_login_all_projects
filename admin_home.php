<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>

<?php 
  include("header.php");
  include("library.php");

  // noAccessForNurse();
  // noAccessForDoctor();
  // noAccessForReceptionist();
  // noAccessForNormal();


  // noAccessIfNotLoggedIn();

?>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/mdb.min.css" rel="stylesheet">

<div class="container">
  <br><br><br>
    <div class="card">
    <div class="card-header small">
    <div class="card-title">Add,Delete or Update Staff Details</div>
    </div>
    <div class="card-body">
    <div class="row">
    <div class="col-sm-3">
    <a href="doctor.php" class="btn btn-primary col-sm-8">Doctor</a>
    </div>
    <div class="col-sm-3">
    <a href="nurse.php" class="btn btn-primary col-sm-8">Nurse</a>
    </div>
    <div class="col-sm-3">
    <a href="receptionist.php" class="btn btn-primary col-sm-10">Receptionist</a> 
  </div>
  <div class="col-sm-3">
    <a href="viewuser.php" class="btn btn-primary col-sm-8">All Users</a>
    </div>
    </div>
    </div>
  </div>
  
</div>

<?php // include("footer.php"); ?>


