<?php 

$root =$_SERVER['DOCUMENT_ROOT'];
require "$root/scholarships/cs connections/Conn.php";

$messages="select * from messages";
$results =$conn->query($messages);
	if($results->num_rows > 0){

		while($message = $results->fetch_assoc()){

			echo $message["name"]."<br>";
			echo $message["email"]."<br>";
			echo $message["textmessages"]."<br>";



		}


	}











?>