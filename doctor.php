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
 //  noAccessForDoctor();
 //  noAccessForReceptionist();
 //  noAccessForNormal();


 //  noAccessIfNotLoggedIn();

?>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="jumbotron.css" rel="stylesheet">

<div class="view jarallax" data-jarallax='{"speed": 0.2}' style="background-image: url('image/doctor.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
<div class="container">
 <?php 
    if(isset($_POST['demail'])){
      $i = register($_POST['demail'],$_POST['dpassword'],$_POST['dfullname'],$_POST['dSpecialist'],"doctors");
    }

    if(isset($_POST['DrDelEmail'])){
      $i = delete("doctors",$_POST['DrDelEmail']);
    }
?>

<div class="col col-xl-6 col-sm-6" id="register1" style="opacity:0.90;">
    <form method="post" action="doctor.php" class="col-sm-10 bg-light">
      <h2>Add Doctor</h2>
        <div class="form-group">
          <label for="usr">Full Name:</label>
          <input type="text" class="form-control" name="dfullname" required>
        </div>
        
        <div class="form-group">
          <label for="usr">Email:</label>
          <input type="email" class="form-control" name="demail" required>
        </div>
            
        <div class="form-group">
          <label for="pwd">Password:</label>
          <input type="password" class="form-control"  name="dpassword" required>
        </div>

        <div class="form-group">
          <label for="pwd">Speciality:</label>
            <select class='form-control' required value=1 name="dSpecialist">
              <option value="Audiologist" class="option">Audiologist - Ear Expert</option>
              <option value="Allergist" class="option">Allergist - Allergy Expert</option>
              <option value="Anesthesiologist" class="option">Anesthesiologist - Anesthetic Expert</option>
              <option value="Cardiologist" class="option">Cardiologist - Heart Expert</option>
              <option value="Dentist" class="option">Dentist - Oral Care Expert</option>
              <option value="Dermatologist" class="option">Dermatologist - Skin Expert</option>
              <option value="Endocrinologist" class="option">Endocrinologist - Endocrine Expert</option>
            </select>
        </div>

        <div class="form-group">
          <input type="submit" class="btn btn-primary btn-sm" value="Register">
          <input type="reset" name="" class="btn btn-danger btn-sm"></button>
        </div>
    </form>
 
        <hr>
        <form method="post" action="doctor.php" class="col-sm-10 bg-light" style="opacity:0.90;">

        <div class="form-group">
                <h2>Delete Doctor</h2>
            <select class='form-control' required value=1 name="DrDelEmail">

            <?php 
                $result = getListOfEmails('doctors');

                if(is_bool($result)){
                  echo "No doctors found in database";
                }else{
                  while($row = $result->fetch_array())
                  {
                    echo "<option value='" . $row['email'] . "'>" . $row['email'] . "</option>";
                  }
                  echo '&emsp;';

                }

            ?>
            </select></div>
            <div class="form-group">
              <input type="submit" class="btn btn-primary btn-sm" value="Delete">
            </div>
          </form>
        </div>
    </form>
  </div>
</div>
