<?
session_start();


$firstname=htmlentities($_POST[""]);
$lastname=htmlentities($_POST[""]);
$email =htmlentities($_POST[""]);
$phoneno=htmlentities($_POST[""]);
$passportno=htmlentities($_POST[""]);
$gender=htmlentities($_POST[""]);;
$country=htmlentities($_POST[""]);
$birthcountry=htmlentities($_POST[""]);
$currentresidence=htmlentities($_POST[""]);
$dob=htmlentities($_POST[""]);



$catagory =htmlentities($_SESSION['catagory']);
$university =htmlentities($_SESSION['university']);
$degree= htmlentities($_SESSION['degree']);
$language=htmlentities($_SESSION['language']);
$semester=htmlentities($_SESSION['semester']);
$program=htmlentities($_SESSION['program']);








?>