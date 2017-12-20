<?php
session_start();



//$_SESSION['catagory'] =htmlentities($_GET["catagory"]);
//$_SESSION['university'] =htmlentities($_GET["university"]);
//$_SESSION['degree']= htmlentities($_GET["degree"]);
//$_SESSION['language']=htmlentities($_GET["language"]);
//$_SESSION['semester']=htmlentities($_GET["semester"]);
//$_SESSION['program']=htmlentities($_GET["program"]);




?>

<!doctype html>
<html lang="en">
  <head>
    <title>Please fill this form carefully</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  <body class="main">
    <div class="container-fluid ">
      <div class="row">
        <div class="col-md-4  col-lg-2">
        </div>
        <div class="col-md-4  col-lg-8">
          <div style="text-align: center;">
          <h3>Please fill this form carefully</h3>
          
          
        
          </div>
          <div class="first">
            
    <form name="RegisterForSummer" method="POST" action="apply.php" enctype="multipart/form-data"  onsubmit="return validateform()">
      
  <div class="form-group">
    <label for="exampleInputEmail1">first name</label>
    <input name="fname" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="First Name" required="">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Last name</label>
    <input name="lname" type="text" class="form-control" id="exampleInputPassword1" placeholder="Last Name" required="">
  </div>
  <div class="form-group">
  <label  for="exampleInputPassword1">Gender</label>
  
  <div class="radio">
  
    <label class="radio-inline" for="exampleInputPassword1">Male
    <input name="Gender" type="radio" value="MALE" class="form-control" id="exampleInputPassword1" placeholder="Last Name" required=""></label>
    
    <label class="radio-inline" for="exampleInputPassword1">Female
    <input name="Gender" type="radio" value="FEMALE" class="form-control" id="exampleInputPassword1" placeholder="Last Name" required=""></label>
    
</div>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Passport number</label>
    <input name="passno" type="text" class="form-control" id="exampleInputPassword1" placeholder="PNO" required="">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Date Of Birth</label>
    <input name="dob" type="date" class="form-control" id="exampleInputPassword1" placeholder="DOB" required="">
  </div>


  
  
  
  <div class="form-group">
    <label for="exampleInputPassword1">Birth country</label>
    <input name="BR" type="text" class="form-control" id="exampleInputPassword1" placeholder="Birth country" required="">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Nationality</label>
    <input name="Nationality" type="text" class="form-control" id="exampleInputPassword1" placeholder="Nationality" required="">
  </div>
   <div class="form-group">
    <label for="exampleInputPassword1">Current Resident</label>
    <input name="CR" type="text" class="form-control" id="exampleInputPassword1" placeholder="Current Resident" required="">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Cell Phone</label>
    <input name="cellpo" type="Phone" class="form-control" id="exampleInputPassword1" placeholder="+86" required="">
  </div>


  <div class="form-group">
    <label for="exampleInputPassword1">Photo</label>
     <input name="image" type="file" class="form-control" id="exampleInputPassword1" placeholder="*.jpg" required="">
     <small>Photo type must be *.JPG</small>
  
  
</div>
<div class="form-group">
    <label for="exampleInputPassword1">Passport picture</label>
     <input name="image" type="file" class="form-control" id="exampleInputPassword1" placeholder="*.jpg" required="">
     <small>Passport picture type must be *.pdf</small>
  
  
</div>
<br>

  <button type="Submit" class="btn btn-lg btn-primary" style="text-align: center;">Apply</button>
</form>

</div>
</div>
</div>
<div class="col-md-4 col-lg-2">



  </div>

</div>
</div>

<script>

function validateform(){
   

        /*var  cv = document.forms["RegisterForSummer"]["cv"].value;
        var image =document.forms["RegisterForSummer"]["image"].value;


        if (!image.match(/.(jpg)$/i)){
            alert("photo type must be jpg ");
            return false;
          }

        if (!cv.match(/.(pdf)$/i)){
              alert("cv type must be pdf ");
              return false;

            }*/
            return true;


  }





</script>






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>