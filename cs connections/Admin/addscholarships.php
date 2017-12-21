<?php 



?>

<!doctype html>
<html lang="en">
  <head>
    <title>Connections Scholarships</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  <body>
   <div class="container-fluid ">
      <div class="row">
        <div class="col-md-2 col-lg-2">
    	


    </div>
    <div class="col-md-8 col-lg-8 first">
<form action="Appliers/search.php"  onsubmit=" return validate()">
        &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;<b>catagory:</b>
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="radio" name="catagory" value="All"size="45px"> &nbsp;&nbsp;All &nbsp;&nbsp;
          <input type="radio"  name="catagory" value="Full ScholarShip"size="45px"> &nbsp;&nbsp;Full ScholarShip &nbsp;&nbsp;
          <input type="radio"  name="catagory" value="Partial ScholarShip"size="45px"> &nbsp;&nbsp;Partial ScholarShip
          <br><br><b>
        &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;University:  &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" 
        name="university" size="45px"><br><br>
        &nbsp;&nbsp;&nbsp;</b>


      <b>    &nbsp;&nbsp;&nbsp; &nbsp;Degree:</b>   &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="degreey" value="All"size="45px"> &nbsp;&nbsp;All &nbsp;&nbsp;
        <input type="radio"  name="degree" value="Non-Degree"size="45px"> &nbsp;&nbsp;Non-Degree &nbsp;&nbsp;
        <input type="radio"  name="degree" value="Bachelor"size="45px"> &nbsp;&nbsp;Bachelor&nbsp;&nbsp;
        <input type="radio"  name="degree" value="Masters"size="45px"> &nbsp;&nbsp;Masters &nbsp;&nbsp;
        <input type="radio"  name="degree" value="Doctor"size="45px"> &nbsp;&nbsp;Doctor&nbsp;&nbsp;

        <br><br>
        &nbsp;&nbsp;&nbsp;&nbsp;<b> &nbsp;&nbsp; &nbsp;Language:</b>

        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio"  name="language" value="All"size="45px"> &nbsp;&nbsp;All&nbsp;&nbsp;
        <input type="radio"  name="language" value="Chinese"size="45px"> &nbsp;&nbsp;Chinese&nbsp;&nbsp;
          <input type="radio"  name="language" value="English"size="45px"> &nbsp;&nbsp;English&nbsp;&nbsp;
        <br><br>
         &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;<b>Semester: </b>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio"  name="semester"value="All" size="45px"> &nbsp;&nbsp;All &nbsp;&nbsp;
        <input type="radio"  name="semester"value="Spring" size="45px"> &nbsp;&nbsp;Spring&nbsp;&nbsp;
        <input type="radio"  name="semester"value="Autumn" size="45px"> &nbsp;&nbsp;Autumn &nbsp;&nbsp;
        <br><br>
        &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;<b>Program: </b>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b><input type="text" size="45px" name="program" placeholder="enter a program"><br><br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <!--<input class="btn btn-success btn-lg" type="image" src="" value="search" >-->
       sample pictures: <input type="file" name=""><br><br>
        <input type="submit" value="Add" name="">

</form>
    	


    </div>
    <div class="col-md-2 col-lg-2">
    	


    </div>
</div>
</div>








    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>