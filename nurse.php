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
    if(isset($_POST['nemail'])){
      $i = register($_POST['nemail'],$_POST['npassword'],$_POST['nfullname'],'non',"nurse");
    }

    if(isset($_POST['NrDelEmail'])){
      $i = delete("nurse",$_POST['NrDelEmail']);
    }
?>

<div class="col col-xl-6 col-sm-6 bg-light" id="register1">

    <form method="post" action="nurse.php" class="col-sm-10 bg-light" style="margin-top:20px;">
    
      <h2>Add Nurse</h2>
        <div class="form-group">
          <label for="usr">Full Name:</label>
          <input type="text" class="form-control" name="nfullname" required>
        </div>
        
        <div class="form-group">
          <label for="usr">Email:</label>
          <input type="email" class="form-control" name="nemail" required>
        </div>
            
        <div class="form-group">
          <label for="pwd">Password:</label>
          <input type="password" class="form-control"  name="npassword" required>
        </div>

       

        <div class="form-group">
          <input type="submit" class="btn btn-primary btn-sm" value="Register">
          <input type="reset" name="" class="btn btn-danger btn-sm"></button>
        </div>


    </form>
      <hr>
     <form method="post" action="nurse.php" class="col-sm-10 bg-light" style="opacity:0.90;">

      <div class="form-group">
                <h2>Delete Nurse</h2>
            <select class='form-control' required value=1 name="NrDelEmail">
            <?php 
                $result = getListOfEmails('nurse');

                if(is_bool($result)){
                  echo "No nurse found in database";
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
