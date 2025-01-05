<?php

//require '../connections/connection.php';
require 'C:/xampp/htdocs/ems/connections/connection.php';
global $employeedb;

$upload_dir_path = "C:\\xampp\\htdocs\\ems\\uploads\\";
$empId_arr = array(12001, 129137);

$employee_query = "SELECT * FROM `employee`";
$employee_result = mysqli_query($employeedb, $employee_query);

if (mysqli_num_rows($employee_result) > 0)
{
	while ($employee_row = mysqli_fetch_assoc($employee_result)) 
	{	
		//if (in_array($employee_row["empId"], $empId_arr)) 
		//{
			echo "\nCreating Employee Directory " . trim($employee_row["empId"]) . "\n";
			$structure = $upload_dir_path . trim($employee_row["empId"]);
			$structure = str_replace('\\','/',$structure);
			if (!file_exists($structure)) 
			{
				mkdir($structure, 0777, true);
				echo "The {$structure} was successfully created.\n";

				$profile_structure = $structure . "/" . "profile"; 
				if (!file_exists($profile_structure)) {
					mkdir($profile_structure, 0777, true);
					echo "The {$profile_structure} under " . trim($employee_row["empId"]) . " directory was successfully created.\n";
				} 
				else 
				{
					echo "Failed to create sub directory profile.\n\n";
				}

				$attachments_structure = $structure . "/" . "attachments"; 
				if (!file_exists($attachments_structure)) {
					mkdir($attachments_structure, 0777, true);
					echo "The {$attachments_structure} under " . trim($employee_row["empId"]) . " directory was successfully created.\n";
				} 
				else
				{
					echo "Failed to create directories attachments.\n\n";
				}
			} 
			else 
			{
				echo "Failed to create directories...\n\n";
			}

		//}

	}	
}
mysqli_free_result($employee_result);



$profile_query = "SELECT * FROM `employee` emp";
$profile_query .= " INNER JOIN `images` imgs ON emp.empId = imgs.empId";
$profile_result = mysqli_query($employeedb, $profile_query);

if (mysqli_num_rows($profile_result) > 0) {
	while ($profile_row = mysqli_fetch_assoc($profile_result))
	{
		//if (in_array($profile_row["empId"], $empId_arr)) 
		//{
			$now = DateTime::createFromFormat('U.u', microtime(true));
			$file_name = $profile_row["empId"] . "_" . $now->format("mdYHisu");
			$file = $profile_row["img"];
			$file_type = trim($profile_row["file_name"]);
			//$file_size = $profile_row["size"];

			if ($file_type == "image/jpeg")
			{
				$f_name = $file_name . ".jpg";
				file_put_contents($upload_dir_path . $profile_row["empId"] . "\\profile\\" . $file_name . ".jpg", $file);
			} elseif ($file_type == "image/png")
			{
				$f_name = $file_name . ".png";
				file_put_contents($upload_dir_path . $profile_row["empId"] . "\\profile\\" . $file_name . ".png", $file);
			}

			if (file_exists($upload_dir_path . $profile_row["empId"] . "\\profile\\" . $file_name . ".jpg") ||
				file_exists($upload_dir_path . $profile_row["empId"] . "\\profile\\" . $file_name . ".png"))
			{
				echo "\nUpdating column(s) file_type and file_size\n";
				//Update column(s) file_type and file_size
				$profile_update_query = "UPDATE `images` ";
				$profile_update_query .= "SET file_type = '" . $file_type . "', file_size = " . filesize($upload_dir_path . $profile_row["empId"] . "\\profile\\" . trim($f_name));
				$profile_update_query .= " WHERE empId = " . $profile_row["empId"];

				echo $profile_update_query;

				$profile_update_result = mysqli_query($employeedb, $profile_update_query);

				if ($profile_update_result) 
				{
					echo "\nTable images updated successfully\n";
					$profile_file_name_update_query = "UPDATE `images` ";
					$profile_file_name_update_query .= "SET file_name = '" . trim($f_name) . "' ";
					$profile_file_name_update_query .= "WHERE empId = " . $profile_row["empId"];

					echo $profile_file_name_update_query;

					$profile_file_name_update_result = mysqli_query($employeedb, $profile_file_name_update_query);
				} 
				else
				{
					echo "\nCould not update images table.\n";
				}
				
			}

			/*$fp = fopen($upload_dir_path . $profile_row["empId"] . "\\profile\\" . $file_name, 'w');
			fwrite($fp, $file);
			fclose($fp);*/
		//}
	}

}
else 
{
	echo "No profile photo for Employee ID: " . $profile_row["empId"];
}
mysqli_free_result($profile_result);

$attachments_query = "SELECT * FROM `employee` emp";
$attachments_query .= " INNER JOIN `attachments` attmts ON emp.empId = attmts.empId";

//$attachments_query = "SELECT * FROM `attachments` WHERE empId IN (12317, 129137)";
$attachments_result = mysqli_query($employeedb, $attachments_query);

if (mysqli_num_rows($attachments_result) > 0 ) {
	while( $attachments_row = mysqli_fetch_assoc($attachments_result) )
	{
		//if (in_array($attachments_row["empId"], $empId_arr)) 
		//{
			$file_name = $attachments_row["file_name"];
			$file = $attachments_row["file"];
			$file_type = trim($attachments_row["file_type"]);
			//$file_size = $attachments_row["size"];
			if ($file_type == "image/jpeg")
			{
				file_put_contents($upload_dir_path . $attachments_row["empId"] . "\\attachments\\" . $file_name . ".jpg", $file);
			} elseif ($file_type == "image/png")
			{
				file_put_contents($upload_dir_path . $attachments_row["empId"] . "\\attachments\\" . $file_name . ".png", $file);
			}

			if (file_exists($upload_dir_path . $attachments_row["empId"] . "\\attachments\\" . $file_name . ".jpg") ||
				file_exists($upload_dir_path . $attachments_row["empId"] . "\\attachments\\" . $file_name . ".png"))
			{
				echo "\nUpdating column(s) file_size \n";
				//Update column(s) file_size
				$attachments_update_query = "UPDATE `attachments` ";
				//$attachments_update_query .= "SET file_size = " . filesize($upload_dir_path . $attachments_row["empId"] . "\\attachments\\" . trim($file_name));
				$attachments_update_query .= "SET file_size = " . $attachments_row["size"];
				$attachments_update_query .= " WHERE id = " . $attachments_row["id"] . " AND empId = " . $attachments_row["empId"];

				echo $attachments_update_query;

				$attachments_update_result = mysqli_query($employeedb, $attachments_update_query);

				if ($attachments_update_result) 
				{
					echo "\nTable attachments updated successfully\n";
				} 
				else
				{
					echo "\nCould not update attachments table.\n";
				}
				
			}

			/*$fp = fopen("C:/xampp/htdocs/ems/uploads/2012/" . $file_name, 'w');
			fwrite($fp, $file);
			fclose($fp);*/
		//}
	}
} 
else 
{
	echo "No attachments for Employee ID: " . $attachments_row["empId"];
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
