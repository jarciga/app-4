<?php

// check if a file was submitted
require_once '../connections/connection.php';
global $employeedb;
if(isset( $_POST["submit"]) ) {
    $errorinfo = $_FILES["userfile"]["error"];
    $filename = $_FILES["userfile"]["name"];
    $tmpfile = $_FILES["userfile"]["tmp_name"];
    $filesize = $_FILES["userfile"]["size"];
    $filetype = $_FILES["userfile"]["type"];
    $empId=$_POST['employeeId'];
    $extension=getExtensions($filetype);
    $imgData= file_get_contents($tmpfile);
    $sql="INSERT INTO images (empId,img,file_name) values (?,?,?)";
    $result=$employeedb->prepare($sql);
    $result->bind_param("iss",$empId,$imgData,$filename);
    $result->execute();


}
function getExtensions($imageType){
    switch ($imageType) {
        case 'image/bmp':
            return '.bmp';
            break;
        case 'image/gif':
            return '.gif';
            break;
        case 'image/png':
            return '.png';
            break;
        case 'image/jpeg':
            return '.jpeg';
            break;
    }
}
?>