<?php
require 'Conn.php';


$catagory ='ALL';
$university ='nuaa';
$degree= 'masters';
$language='english';
$semester='fall';
$program='computer Science';






if($catagory =="ALL"){

	$catagory='0';
	
}
if($university =="ALL"){

	$university='0';
	
}

if($degree =="ALL"){

	$degree='0';
	
}
if($language =="ALL"){

	$language='0';
	
}

if($semester =="ALL"){

	$semester='0';
	}

if($program =="ALL"){

	$program='0';
}





$search = "select * from scholars where category=";

if($catagory=='0'){

$search=$search."0 and  univeristy=" ;

}
else{
	$search=$search."'$catagory' and  univeristy=";


}

if($university=='0'){


    $search=$search."0 and degree=" ;

}
else{
	$search=$search."'$university' and degree=";


}


if($degree=='0'){

    $search=$search."0 and language=" ;

}
else{
	$search=$search."'$degree' and language=";


}

if($language=='0'){

    $search=$search."0 and semester=" ;

}
else{
	$search=$search."'$language' and semester=";


}
if($semester=='0'){

    $search=$search."0 and program=" ;

}
else{
	$search=$search."'$semester' and program=";


}

if($program=='0'){

    $search=$search."0 " ;

}
else{
	$search=$search."'$program' ";


}


$result=$conn->query($search);

if($result->num_rows > 0){
	while ($rows = $result->fetch_assoc()) {
		echo "<table style='border:1px solid black;'><tr><th>catagory</th><th>univeristy</th><th>degree</th><th>language</th><th>semester</th><th>program</th><th>program</th></tr><tr>";
        $cat=$rows["category"];
        $uni=$rows["univeristy"];
        $degree=$rows["degree"];
        $language=$rows["language"];
        $semester=$rows["semester"];
        $program=$rows["program"];




		echo  "<td>".$cat."</td>"."    "."<td>".$uni."</td>"."    "."<td>".$degree."</td>"."    "."<td>".
		$language."</td>".""."<td>".$semester."</td>"."   "."<td>".$program."</td>"."<td>".
		     "<a href='Appliers/apply.php?catagory=$cat&univeristy=$uni&degree=$degree&language=$language&semester=&semester&program=$program'>apply now</a>".
		     "</td>"."</tr>";
		
		echo "</table>";
		

	}
}


?>