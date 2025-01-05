<?php

//require '../connections/connection.php';
require 'C:/xampp/htdocs/ems/connections/connection.php';
global $employeedb;
$attachments_query = "SELECT * FROM `attachments` WHERE empId";
//$attachments_query = "SELECT * FROM `attachments` WHERE empId IN (12317, 129137)";
$attachments_result = mysqli_query($employeedb, $attachments_query);

if (mysqli_num_rows($attachments_result) > 0 ) {
	while( $attachments_row = mysqli_fetch_assoc($attachments_result) )
	{
		//ob_start();
		//Download employee profile  blob data.
		//Column/s: id, empid, file, file_type, file_name, size, upload_date
		$file_type = $attachments_row["file_type"];
		$file = $attachments_row["file"];
		$file_name = $attachments_row["file_name"];
		$file_size = $attachments_row["size"];
		//header('content-type: ' . $file_type);
		//echo '<img src="data:'.$attachments_row["file_type"].';base64,'.base64_encode( $attachments_row['file'] ).'"/>';
		//header("Content-type: {$file_type}");
		//header("Content-length: {$file_size}");
		//header("Content-Disposition: attachment; filename={$file_name}");
		//echo $file;
		//$file_path = "C:\\xampp\\htdocs\\ems\\uploads\\2012\\" . $file_name;
		//file_put_contents("C:./xampp/htdocs/ems/uploads/2012/" . $file_name, $file);
		$fp = fopen("C:/xampp/htdocs/ems/uploads/2012/" . $file_name, 'w');
		fwrite($fp, $file);
		fclose($fp);
		//sleep(5);
		/**/
		//ob_end_clean();
	}
} 
else 
{
	echo "No profile photo for Employee ID: " . $attachments_row["empId"];
}
mysqli_free_result($attachments_result);

function fwrite_stream($fp, $string) {
    for ($written = 0; $written < strlen($string); $written += $fwrite) {
        $fwrite = fwrite($fp, substr($string, $written));
        if ($fwrite === false) {
            return $written;
        }
    }
    return $written;
}

