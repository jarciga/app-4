<?php
   require 'connections/connection.php';
if(isset($_GET['id'])) 
{

$id    = $_GET['id'];


		 
		 	global $employeedb;
                                            $query = 'select * from attachments where id='.$id;
                                             if ($result = $employeedb->query($query)) {
                                                 $e = $result->fetch_object();
												 
												 header("Content-length: {$e->size}");
													header("Content-type: {$e->file_type}");
													header("Content-Disposition: attachment; filename={$e->file_name}");
													echo $e->file;

											 }




exit;
}

?>