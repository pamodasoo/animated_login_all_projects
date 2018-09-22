<?php
session_start();
?>

<?php 
  
  include("library.php");
  // noAccessIfLoggedIn();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags always come first -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Green Light Hospital</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <style>
  /* Required for full background image */

  html,
  body,
  header,
  .view {
    height: 100%;
  }

  @media (max-width: 740px) {
    html,
    body,
    header,
    .view {
      height: 100vh;
    }
  }

  .top-nav-collapse {
    background-color: #78909c !important;
  }

  .navbar:not(.top-nav-collapse) {
    background: transparent !important;
  }

  @media (max-width: 991px) {
    .navbar:not(.top-nav-collapse) {
      background: #78909c !important;
    }
  }

  h1 {
    letter-spacing: 8px;
  }

  h5 {
    letter-spacing: 3px;
  }

  .hr-light {
    border-top: 3px solid #fff;
    width: 80px;
  }
  </style>
</head>

<body>
  <!-- Main navigation -->
  <header>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
      <div class="container">
        <a class="navbar-brand" href="#"><strong>Green Light Hospital</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7" aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="services.php">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact Us</a>
            </li>
            <li class="nav-item" style="margin-left:450px;">
              <a class="nav-link"  data-toggle="modal" data-target="#login" >Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link"  data-toggle="modal" data-target="#registration" >Register</a>
            </li>
          </ul>
          
          
        </div>
      </div>
    </nav>
    <!-- Navbar -->
    <!-- Full Page Intro -->
    <div class="view jarallax" data-jarallax='{"speed": 0.2}' style="background-image: url('image/walpaper.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
      <!-- Mask & flexbox options-->
      <div class="mask rgba-black-light d-flex justify-content-center align-items-center">
        <!-- Content -->
        <div class="container">
          <!--Grid row-->
          <div class="row">
            <!--Grid column-->
            <div class="col-md-12 mb-4 white-text text-center">
              <h1 class="h1-reponsive white-text text-uppercase font-weight-bold mb-0 pt-md-5 pt-5 wow fadeInDown" data-wow-delay="0.3s"><strong>Green Light Hospital</strong></h1>
              <hr class="hr-light my-4 wow fadeInDown" data-wow-delay="0.4s">
              <h5 class="text-uppercase mb-4 white-text wow fadeInDown" data-wow-delay="0.4s"><strong>Exploring Life's Little Wonders</strong></h5>
              
            </div>
            <!--Grid column-->
          </div>
          <!--Grid row-->
        </div>
        <!-- Content -->
      </div>
      <!-- Mask & flexbox options-->
    </div>
    <!-- Full Page Intro -->
  </header>
  <!-- Main navigation -->
  <!--Main Layout-->
  <main>
    <div class="container">
      <!--Grid row-->
      <div class="row py-5">
        <!--Grid column-->
        <div class="col-md-12 text-center">
          <p>Green Light  Hospitals is the most accredited hospital in the Sri Lankan healthcare sector. Since 2010, Hospitals has revolutionized the healthcare industry through infrastructure development and advancement of products and services, with a view to deliver healthcare that is on par with global medical standards.</p>
          
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </div>
  </main>
  <!--Main Layout-->
  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <!-- Tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <script>
  new WOW().init();
  </script>



<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <?php
      if (isset($_POST['email'])){
        // $type = $_POST['type'];
        $i = login($_POST['email'],$_POST['password']);
        if ($i == 1){
          $email =$_POST['email'];
          checkUser($email);
          // noAccessIfLoggedIn();
        }
      }
    ?>

  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginLabel">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="index.php" method="POST">
        <div class="form-group">
          <label for="usr">Email:</label>
          <input type="text" class="form-control" name="email" placeholder="Email" style="width: 500;" required>
        </div>
        <div class="form-group">
          <label for="pwd">Password:</label>
          <input type="password" class="form-control" name="password" placeholder="Password" style="width: 500;" required>
        </div>
        <!-- <div class="form-group">
          <label for="pwd">User Type:</label>
          <select required value=1 class ='form-control' name="type" style="width: 500;">
                <option value="admin" class="option">Admin</option>
                <option value="nurse" class="option">Nurse</option>
                <option value="doctors" class="option">Doctor</option>
                <option value="receptionist" class="option">Receptionist</option>
          </select>
        </div> -->

        <div class="form-group">
          <input type="submit" class="btn btn-success btn-sm" value="Login">
          <input type="reset" name="" class="btn btn-danger btn-sm">
        </div>
          
      </form>
      </div>
      
    </div>
  </div>
</div>





<div class="modal fade" id="registration" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <?php 
    if(isset($_POST['remail'])){
      $i = registerPatient($_POST['remail'],$_POST['rpassword'],$_POST['rfirstname'],$_POST['rlastname'],$_POST['raddress'],$_POST['rage'],$_POST['rphone'],"patients");
      if($i==1){
        echo '<script type="text/javascript"> window.location = "add_patient.php"</script>';
      }
    }else{
      echo "<div class='alert alert-info'> <strong>Info!</strong> Login or Register to be able to book your appointment.
              </div>";
    }
    unset($_POST);
  


  ?>

  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="registrationLabel">Registration</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form method="post" action="index.php">
      
        <div class="form-group">
          <label for="usr">First Name:</label>
          <input type="text" class="form-control" placeholder="Firstname" name="rfirstname" required>
        </div>
        
        <div class="form-group">
          <label for="usr">Last Name:</label>
          <input type="text" class="form-control" placeholder="Lastname" name="rlastname" required>
        </div>
            
        <div class="form-group">
          <label for="pwd">Address:</label>
          <input type="text" class="form-control" placeholder="Address"  name="raddress" required>
        </div>

        <div class="form-group">
          <label for="pwd">Age:</label>
          <input type="number" class="form-control" placeholder="Age"  name="rage" required>
        </div>

        <div class="form-group">
          <label for="pwd">Phone Number:</label>
          <input type="tel" class="form-control" placeholder="Phone Number"  name="rphone" required>
        </div>

        <div class="form-group">
          <label for="pwd">Email:</label>
          <input type="email" class="form-control" placeholder="Email"  name="remail" required>
        </div>

        <div class="form-group">
          <label for="pwd">Password:</label>
          <input type="password" class="form-control" placeholder="Password"  name="rpassword" required>
        </div>

        <div class="form-group">
          <input type="submit" class="btn btn-success btn-sm">
          <input type="reset" class="btn btn-danger btn-sm"></button>
        </div>
    </form>
      </div>
      
    </div>
  </div>
</div>

<div class="modal fade" id="contact" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="contactLabel">Contact Us</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form class="form-horizontal" action="" method="post">
          <fieldset>
            
    
            <!-- Name input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="name">Name:</label>
              <div class="col-md-9">
                <input id="name" name="name" type="text" placeholder="Your name" class="form-control">
              </div>
            </div>
    
            <!-- Email input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="email">Your E-mail:</label>
              <div class="col-md-9">
                <input id="email" name="email" type="text" placeholder="Your email" class="form-control">
              </div>
            </div>
    
            <!-- Message body -->
            <div class="form-group">
              <label class="col-md-3 control-label" for="message">Your message:</label>
              <div class="col-md-9">
                <textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5"></textarea>
              </div>
            </div>
    
            <!-- Form actions -->
            <div class="form-group">
              <div class="col-md-12 text-right">
                <button type="submit" class="btn btn btn-success btn-sm">Submit</button>
              </div>
            </div>
          </fieldset>
          </form>
          </div>
          </div>
      
      </div>
    </div>
  



<footer>
  <div class="container">
        <div class="row">

            <div class="col-md-4">
                <div class="card-box">
                    <div class="card-title">
                    <img src="image/consult.JPG" width="300" height="150">
                        <h2>CAREERS</h2>
                        <p>In keeping with our promise to deliver the very best in healthcare, we welcome the highest echelon of specialist consultants to join our professional team.</p>
                    </div>
                    <div class="card-link">
                        <a href="careers.php" class="c-link">Go
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-box">
                    <div class="card-title">
                    <img src="image/6.JPG" width="300" height="150">
                        <h2>HIGHLIGHTS</h2>
                        <p>If you are passionate to serve humanity and be a part of a team that strives to provide the very best in patient care, please contact us. </p>
                    </div>
                    <div class="card-link">
                        <a href="" class="c-link">Go
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-box">
                    <div class="card-title">
                    <img src="image/suggest.JPEG" width="300" height="150">
                        <h2>SUGGESTIONS & COMPLAINTS</h2>
                        <p>Your suggestions and complaints help us improve the quality of our customer services, helping us to serve you with greater efficiency.</p>
                    </div>
                    <div class="card-link">
                        <a href="complain.php" class="c-link">Go
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>



</footer>


</body>
<style type="text/css">
      

        .card-box {
            background: #FAFAFA;
            min-height: 300px;
            position: relative;
            padding: 30px 30px 20px;
            margin-bottom: 20px;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
            position: relative;
            cursor: pointer;
        }

        .card-box:hover {
            background: linear-gradient(to right, #1fa2ff17 0%, #12d8fa2b 51%, #1fa2ff36 100%);
        }

        .card-box:after {
            display: block;
            background: #2196F3;
            border-top: 2px solid #2196F3;
            content: '';
            width: 100%;
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
        }

        .card-title h2 {
            margin: 0;
            padding-top: 5%;
            color: #2196F3;
            font-family: 'Oswald', sans-serif;
            text-transform: uppercase;
            font-size: 24px;
            line-height: 1;
            margin-bottom: 15px;
        }

        .card-title p {
            margin: 0;
            margin-bottom: 10px;
            font-size: 16px;
        }

        .card-link a {
            text-decoration: none;
            font-family: 'Oswald', sans-serif;
            color: #FF5722;
            font-size: 15px;
        }

      
    </style>
     

</html>
