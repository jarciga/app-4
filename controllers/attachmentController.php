<?php
/**
 * Created by PhpStorm.
 * User: kean
 * Date: 7/11/2017
 * Time: 11:10 AM
 */
require_once '../models/attachment.php';

$req_type = $_POST['request_type'];

switch ($req_type) {
    case 1:
		$id=$_POST['id'];
		$result=Attachment::delete($id);
		if($result){
			 echo json_encode(array(
                'Success' => true,
                'Message' => 'Attachment deleted successfully'
            ));
		}
	break;
}