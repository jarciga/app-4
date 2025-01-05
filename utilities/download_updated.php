<?php
   require 'connections/connection.php';
if(isset($_GET['id'])) 
{

	$attachmentdir = realpath(__DIR__.'/uploads') . '/' . $_GET['empid'];

	$id  = $_GET['id'];

	global $employeedb;
	$query = 'select * from attachments where id='.$id;
	if ($result = $employeedb->query($query)) {
		$e = $result->fetch_object();

		//$file = "C:\\xampp\\htdocs\\ems\\uploads\\2012\\".$e->file;
		//$file = $$attachmentdir.$e->file; 
		$attachmentfile = $attachmentdir . '/' . basename($e->file);
		$file = str_replace('\\','/',$attachmentfile);

		header('Content-Description: File Transfer');
		header('Content-Type: application/octet-stream');
		header('Content-Disposition: attachment; filename="'.basename($file).'"');
		header('Expires: 0');
		header('Cache-Control: must-revalidate');
		header('Pragma: public');
		header('Content-Length: ' . filesize($file));
		readfile($file);

	}
	exit;
	
}

?>
