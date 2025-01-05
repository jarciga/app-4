<?php
//require '../connections/connection.php';
require 'C:/xampp/htdocs/ems/connections/connection.php';
global $employeedb;

//Create Uploads Directory
$upload_dir_path = "C:\\xampp\\htdocs\\ems\\uploads";
echo "\nCreating Uploads Directory.\n";

$structure = $upload_dir_path;
$structure = str_replace('\\','/', $structure);

if (!file_exists($structure)) 
{
	mkdir($structure, 0777, true);
	echo "The {$structure} was successfully created.\n";
}
else 
{
	echo "Failed to create directories...\n\n";
}

//Add column(s) file_type and file_size to images table.
//file_type
//file_size

echo "\nAdd column(s) file_type and file_size to images table.\n";
$profile_query = "ALTER TABLE `images` ";
$profile_query .= "ADD file_type VARCHAR(50) NULL DEFAULT NULL ";
$profile_query .= "AFTER file_name, ";
$profile_query .= "ADD file_size BIGINT NULL DEFAULT NULL ";
$profile_query .= "AFTER file_type";
$profile_result = mysqli_query($employeedb, $profile_query);

if ($profile_result == 1)
{
	echo "\nColumn(s) file_type and file_size are now added to the images table.\n";
}


//Add column(s) file_type and file_size to images table.
//file_type
//file_size

echo "\nAdd column(s) file_type and file_size to images table.\n";
$attachments_query = "ALTER TABLE `attachments` ";
$attachments_query .= "ADD file_size BIGINT NULL DEFAULT NULL ";
$attachments_query .= "AFTER size";
$attachments_result = mysqli_query($employeedb, $attachments_query);

if ($attachments_result == 1)
{
	echo "\nColumn(s) file_size are now added to the attachments table.\n";
}