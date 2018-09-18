<?php
    if (!isset($_SESSION)) {
        session_start();
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Green Light Hospital
    </title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    
    
  </head>
  <body>
      <div class="container-fluid text-white bg-dark" swallpapertyle="padding-top: 10px;">
        <nav class="navbar  navbar-inverse navbar-fixed-top ">
         
            <ul class="nav nav-pills ">
              <li class="nav-item">
                
              </li>
              <li class="nav-item" >
                <a class="nav-link" href="index.php" class=>Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="aboutus.php">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="services.php">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contactus.php">Contact Us</a>
              </li>
              <!-- <li class="nav-item" >
                <a class="nav-link" href="login.php">Login</a>
              </li>
              <li class="nav-item " >
                <a class="nav-link" href="registration.php">Register</a>
              </li> -->
              <?php
                if (isset($_SESSION['username'])) {
                    echo '<li class="nav-item " style="float:right; margin-left:800px;" > <a class="nav-link"  href="logout.php">Logout</a>
                  </li>';
                }
              ?>
            </ul>
        </nav>
        </div>
