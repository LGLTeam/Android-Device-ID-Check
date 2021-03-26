<?php 
 	
	//database constants
	define('DB_HOST', 'localhost');
	define('DB_USER', 'username');
	define('DB_PASS', 'password');
	define('DB_NAME', 'db_name');
	
	//connecting to database and getting the connection object
	$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
	$query = mysqli_query($conn, 'SELECT * FROM member');

    //while ($row = mysqli_fetch_assoc($query)) {
	//$json[]  = $row;
    //}

$result = array();

while($row = mysqli_fetch_array($query)){
array_push($result,
array('id'=>$row[0],
'device_id'=>$row[1],
'name'=>$row[2],
'validity'=>$row[3]
));
}

echo json_encode(array("member"=>$result), JSON_PRETTY_PRINT);		
?>