<?php
$root =$_SERVER['DOCUMENT_ROOT'];
require "$root/scholarships/cs connections/Conn.php";






$save_messages="insert into messages values(?,?,?)";
$stmt1 = $conn->prepare($save_messages);
$stmt1->bind_param("sss", $name, $email, $messages);
$name = $_GET["name"];
$email=$_GET["email"];
$messages =$_GET["message"];


if($stmt1->execute()){
	echo "We will reply as soon as possible";
}
else{
	echo "System busy Please try agin later";
}






?>