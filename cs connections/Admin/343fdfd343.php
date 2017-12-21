<?php
session_start();




if(empty($_SESSION["username"])){

    header("Location:adefee.html");




}



$root =$_SERVER['DOCUMENT_ROOT'];
require "$root/scholarships/cs connections/Conn.php";


?>
<!doctype html>
<html lang="en">
  <head>
    <title>Admin</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  <body background="2.png">
    <nav ></nav>
    <div class="container-fluid ">
      <div class="row">
        <div class="col-md-4 col-lg-2">
          <a href="addscholarships.php"><button class="btn btn-danger">Add scholarships</button></a><br>
          <a href="readmessages.php"><button class="btn btn-danger">Read Message</button></a><br>

        </div>
        <div class="col-md-4 col-lg-8 third">


         <div style="background-color: black; opacity: 0.9;">

            <h3 style="text-align: center ;">Welcome to Admin Page</h3><br>
            <p style="text-align: center ;">Applicants</p>
           

    


           
    </div>
        <div class="col-md-4 col-lg-2">
           <a href="logout.php"><button class="btn btn-danger">Log Out</button></a>


            
        	
        </div>
    </div>
</div>


<script type="text/javascript">
function ac(email,num) {
  //document.getElementById("demo").innerHTML = "accepted";
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("demo").innerHTML = "accepted";

    }
  };
  xhttp.open("GET", "accept.php?email="+email, true);
  document.getElementById(num).innerHTML = "accepted";
  xhttp.send();
}
</script>

<script type="text/javascript">
      function de(email,num) {
        //document.getElementById("demo").innerHTML = "declined";
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("demo").innerHTML = "declined";
    }
  };
  xhttp.open("GET", "decline.php?email="+email, true);
  document.getElementById(num).innerHTML = "declined";
  xhttp.send();
}
</script>








    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>

