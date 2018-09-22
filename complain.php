<?php
  session_start();


include("header.php");
include("library.php");
  
?>


<!DOCTYPE html>
<html>
 <head>  
     
<title> Your Suggestion & Complains </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   
</head>
 
<body>
    
<div class="container-fluid">
   <div class="row">
       <img src="image/1.png" class="img-fluid" width="100%">
   </div>
</div> 
        
<div class="container">
  
     <h2 class="text-primary">Your Suggestions & Complaints</h2>
    
    <h4 class="text-success"><i>We value your ideas </i></h4>
    
    
<form method="POST" action="contactlink.php">
    
<div class="col-xs-6 col-sm-6">
   <div class="form-group">
        
    
    <div class="form-group">
        <label for="jobTitle">User Name:</label>
            <input type="text" class="form-control" id="Uname" placeholder="Enter User Name" name="username">
    </div>
    
    <div class="form-group">
        <label for="jobType">Email:</label>
            <input type="text" class="form-control" id="email" placeholder="Enter Email" name="email">
    </div>
    
     <div class="form-group">
        <label for="jobAmount">Telephone:</label>
            <input type="text" class="form-control" id="phone" placeholder="Enter Phone Number" name="number">
    </div>
     <div class="form-group">
        <label for="jobPeriod">Comment:</label>
            <input type="text" class="form-control"  id="jobPeriod" placeholder="Enter Comment" name="comment">
    </div>
       
    
    
       <div class="form-row text-right">
           
        <div class="col-12">
         <button type="button" class="btn btn-danger">Cancel</button>
        <button type="submit" name="save" id="save" class="btn btn-success">Submit</button>
       </div>
    </div>
 </div>
        
   
 
</form>
   
        </div>
        
    </body>
</html>
