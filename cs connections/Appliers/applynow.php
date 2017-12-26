<?
session_start();


$firstname=htmlentities($_POST["fname"]);
$lastname=htmlentities($_POST["lname"]);
$email =htmlentities($_POST["email"]);
$phoneno=htmlentities($_POST["cellpo"]);
$passportno=htmlentities($_POST["passno"]);
$gender=htmlentities($_POST["Gender"]);;
$country=htmlentities($_POST["CR"]);
$birthcountry=htmlentities($_POST["BR"]);
$currentresidence=htmlentities($_POST["Nationality"]);
$dob=htmlentities($_POST["dob"]);



$catagory =htmlentities($_SESSION['catagory']);
$university =htmlentities($_SESSION['university']);
$degree= htmlentities($_SESSION['degree']);
$language=htmlentities($_SESSION['language']);
$semester=htmlentities($_SESSION['semester']);
$program=htmlentities($_SESSION['program']);








?>