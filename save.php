<?php
require 'Conn.php';

$catagory ="ALL";
$university ="nuaa";
$degree= "masters";
$language="english";
$semester="fall";
$program="computer Science";

if($catagory=="ALL"){
	if ($university =="ALL"){
		#contine from here
		


	}
	else if ($degree= ="ALL") {
		# code...
	}
	elseif ($language=="ALL") {
	# code...
    }
     else if ($semester=="ALL") {
	# code...
   }
   else if ($program=="ALL") {
	# code...
   }
   else{

   	echo "error occured";
   }


}
else if ($university =="ALL") {
	# code...
}
else if ($degree= ="ALL") {
	# code...
}
elseif ($language=="ALL") {
	# code...
}
else if ($semester=="ALL") {
	# code...
}
else if ($program=="ALL") {
	# code...
}
else{
	$query = "select * from scholars";


}








?>