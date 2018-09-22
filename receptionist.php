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



<div class="container">
 <?php 
    if(isset($_POST['remail'])){
      $i = register($_POST['remail'],$_POST['rpassword'],$_POST['rfullname'],'non',"receptionist");
    }

    if(isset($_POST['RcDelEmail'])){
      $i = delete("receptionist",$_POST['RcDelEmail']);
    }
?>

<div class="col col-xl-6 col-sm-6 bg-light" id="register1">
    <form method="post" action="receptionist.php" class="col-sm-10 bg-light" style="margin-top:20px;">
      <h2>Add Receptionist</h2>
        <div class="form-group">
          <label for="usr">Full Name:</label>
          <input type="text" class="form-control" name="rfullname" required>
        </div>
        
        <div class="form-group">
          <label for="usr">Email:</label>
          <input type="email" class="form-control" name="remail" required>
        </div>
            
        <div class="form-group">
          <label for="pwd">Password:</label>
          <input type="password" class="form-control"  name="rpassword" required>
        </div>

       

        <div class="form-group">
          <input type="submit" class="btn btn-primary btn-sm" value="Register">
          <input type="reset" name="" class="btn btn-danger btn-sm"></button>
        </div>


    </form>
      <hr>
     <form method="post" action="receptionist.php" class="col-sm-10 bg-light" style="opacity:0.90;">

      <div class="form-group">
                <h2>Delete Receptionist</h2>
            <select class='form-control' required value=1 name="RcDelEmail">
            <?php 
                $result = getListOfEmails('receptionist');

                if(is_bool($result)){
                  echo "No receptionist found in database";
                }else{
                  while($row = $result->fetch_array())
                  {
                    echo "<option value='" . $row['email'] . "'>" . $row['email'] . "</option>";
                  }
                }

            ?>
            </select>
            </div>
            <div class="form-group">

            <input type="submit" class="btn btn-primary btn-sm" style="padding: 10px;" value="Delete">
            </div>
          </form>
</div>

