<?php
session_start();
$root =$_SERVER['DOCUMENT_ROOT'];
require "$root/scholarships/Conn.php";
if (isset($_POST["username"])  && isset($_POST["password"])) {
	$username = $_POST["username"];
	$password = $_POST["password"];
	


	$adminquery = "select * from admining";
	$results =$conn->query($adminquery);
	if($results->num_rows > 0){

		while($account = $results->fetch_assoc()){
			
			if ($account["username"] == $username ) {
				$passwordcheck = "select * from admining where username = '$username'";
				$resultpass = $conn->query($passwordcheck);

				if ($resultpass->num_rows > 0) {
					while ($p =  $resultpass->fetch_assoc()) {

						if(trim($p["password"])== crypt($password,'4fg')){

							$_SESSION["username"]=$username;
							header("Location:343fdfd343.php");



						}
						
					}



					
				}
				else{
					echo "wrong username or password";
				}
 


				
			}
			else{
				echo "wrong user name or password";
			}




		}

	}





	
}





?>