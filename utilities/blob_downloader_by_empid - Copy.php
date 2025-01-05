<?php
require '../connections/connection.php';
global $employeedb;

$employee_query = "SELECT * FROM `employee`";
$employee_result = mysqli_query($employeedb, $employee_query);

//var_dump($result);
if (mysqli_num_rows($employee_result) > 0 ){

	while( $employee_row = mysqli_fetch_assoc($employee_result) )
	{
		echo $employee_row["empId"] . "<br>";
		
		$structure = $_SERVER['DOCUMENT_ROOT'].'/ems/uploads' . '/' . trim($employee_row["empId"]);
		echo $structure = str_replace('\\','/',$structure);

		//echo dirname(basename);

		/*if (!mkdir($structure, 0777, true)) {
			die('Failed to create directories...');
		}*/
		@mkdir($structure, 0777, true);

		$images_query = "SELECT * FROM `images`";
		$images_result = mysqli_query($employeedb, $images_query);

		if (mysqli_num_rows($images_result) > 0 ) {
			while( $images_row = mysqli_fetch_assoc($images_result) )
			{
				//Download employee profile  blob data.
				//Column/s: empid, img, file_name
				//echo $images_row["empId"] . " " . $images_row["file_name"];
				
				$file_type = $images_row["file_name"];
				$file = $images_row["img"];

				//echo $structure . "/" . $file;

				/*
				header("Content-type: " . $file_type);
				header("Content-Disposition: attachment; filename=" . $structure . "/" . $file);
				ob_clean();
				flush();
				*/
			}
		} 
		else 
		{
			echo "No profile photo for Employee ID: " . $employee_row["empId"];
		}


		$attachments_query = "SELECT * FROM `attachments`";
		$attachments_result = mysqli_query($employeedb, $attachments_query);

		if (mysqli_num_rows($attachments_result) > 0 ) {
			while( $attachments_row = mysqli_fetch_assoc($attachments_result) )
			{
				//Download employee profile  blob data.
				//Column/s: id, empid, file, file_type, file_name, size, upload_date
				
				$file_type = $attachments_row["file_type"];
				$file = $attachments_row["file"];
				$file_name = $attachments_row["file_name"];
				$file_size = $attachments_row["size"];

				//echo $structure . "/" . $file;
				
				header("Content-type: " . $file_type);
				header("Content-Disposition: attachment; filename=" . $structure . "/" . $file);
				//ob_clean();
				//flush();
			}
		} 
		else 
		{
			echo "No profile photo for Employee ID: " . $employee_row["empId"];
		}

	}

}
else 
{
	die("No record found!");
}
mysqli_free_result($employee_result);
mysqli_free_result($images_result);
mysqli_free_result($attachments_result);

return;

//if(isset($_GET['empid'])) 
//{
	//$empid = (int) $_GET['empid'];
	//$attachmentdir = realpath(__DIR__.'/uploads') . '/' . trim($empid);
	//$structure = realpath(__DIR__.'/uploads') . '/' . trim($empid);
	$structure = $_SERVER['DOCUMENT_ROOT'].'/ems/uploads' . '/' . trim($empid);
	echo $structure = str_replace('\\','/',$structure);

	//return;
	
	/*if (!mkdir($structure, 0777, true)) {
		die('Failed to create directories...');
	}*/
	
	//$id  = $_GET['id'];

/*	
	$query = 'select * from attachments where empid='.trim($empid);
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
*/	
//} 
//else 
//{
//	echo 'Silence is Golden';
//}

?>
