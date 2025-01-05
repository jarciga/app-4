<?php
/**
 * Created by PhpStorm.
 * User: kean
 * Date: 7/18/2017
 * Time: 11:10 AM
 */
require_once '../models/children.php';

$req_type = $_POST['request_type'];

switch ($req_type) {
    case 1:

	$fullname=$_POST['fullname'];
	$id=$_POST['id'];
	$bdate=$_POST['bdate'];
	$cols=array(
		"fullname"=>$fullname,
		"bdate"=>$bdate,
		"id"=>$id
	);
	$result=Children::modify($cols);
	if($result!=0){
		  echo json_encode(array(
                'Success' => true,
                'Message' => 'Successfully updated a child'
            ));
	}
	break;
	case 2:
	$fullname=$_POST['fullname'];
	$empId=$_POST['empId'];
	$bdate=$_POST['bdate'];
	$cols=array(
		"fullname"=>$fullname,
		"bdate"=>$bdate,
		"empId"=>$empId
	);
	$result=Children::insert($cols);
	if($result!=0){
		  echo json_encode(array(
                'Success' => true,
                'Message' => 'Successfully added a child',
				'params'=>$result
            ));
	}
	break;
	case 3:
	
		$id=$_POST['cId'];
		$result=Children::delete($id);
		if($result){
			 echo json_encode(array(
                'Success' => true,
                'Message' => 'Successfully remove a child'
            ));
		}
	break;
}


?>