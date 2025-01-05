<?php

   if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
	if(!isset($_SESSION['data'])){
		header("Location:index.php");
	}

  require 'connections/connection.php';

if(isset($_GET['image_id'])) {
	global $employeedb;
$sql = "select * from images WHERE empId=" . $_GET['image_id'];
$result=$employeedb->query($sql);
if($result->num_rows>0){
	$row=$result->fetch_object();
	$result->close();
}


header("Content-type: " . $row->file_name);
echo $row->img;
}
mysql_close($conn);
?>