<?php
/**
 * Created by PhpStorm.
 * User: kean
 * Date: 7/11/2017
 * Time: 11:10 AM
 */
require_once '../models/employment.php';

$req_type = $_POST['request_type'];

switch ($req_type) {
    case 1:
		$empId=$_POST['empId'];
		$eFrom=$_POST['eFrom'];
		$eTo=$_POST['eTo'];
		$position=$_POST['position'];
		$reason=$_POST['reason'];
		$company=$_POST['company'];
		$cols=array(
			"empId"=>$empId,
			"eFrom"=>$eFrom,
			"eTo"=>$eTo,
			"position"=>$position,
			"reason"=>$reason,
			"company"=>$company
		);
		$result=Employment::insert($cols);
		if($result>0){
			  echo json_encode(array(
                'Success' => true,
                'Message' => 'Successfully added new employment record',
				'params'=>$result
            ));
		}
	break;
	case 2:
		
		$id=$_POST['eId'];
		$result=Employment::eDelete($id);
		
		if($result){
			 echo json_encode(array(
                'Success' => true,
                'Message' => 'Successfully remove an employment record'
            ));
		}
	break;
	case 3:
		$id=$_POST['id'];
		$eFrom=$_POST['eFrom'];
		$eTo=$_POST['eTo'];
		$position=$_POST['position'];
		$reason=$_POST['reason'];
		$company=$_POST['company'];
		$cols=array(
			"eFrom"=>$eFrom,
			"eTo"=>$eTo,
			"position"=>$position,
			"reason"=>$reason,
			"company"=>$company,
			"id"=>$id
		);
		$result=Employment::modify($cols);
		
		if($result>0){
			  echo json_encode(array(
                'Success' => true,
                'Message' => 'Successfully update an employment record'
            ));
		}
	break;
}
