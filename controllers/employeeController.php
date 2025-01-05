<?php
/**
 * Created by PhpStorm.
 * User: kean
 * Date: 7/11/2017
 * Time: 11:10 AM
 */
require_once '../models/employee.php';
session_start();
$req_type = $_POST['request_type'];

switch ($req_type) {
    case 1:
        $empId=$_POST['empId'];

        $exist=Employee::select($empId);
        if(isset($exist)){
                echo json_encode(array(
                'Success' => false,
                'Message' => 'Employee number already in used',
                'params'=>0
            ));
                return;
        }
        $position =$_POST['position'];
        $lname =$_POST['lastnameInput'];
        $fname = $_POST['fname'];
        $mname = $_POST['mname'];
        $cityAddress = $_POST['cityAddressInput'];
        $provAddress =$_POST['provAddressInput'];
        $gender = $_POST['gender'];
        $dob =$_POST['dob'];
        $pob = $_POST['pob'];
        $civilstat = $_POST['civilstat'];
        $citizenship = $_POST['citizenship'];
        $height = $_POST['height'];
        $weight = $_POST['weight'];
        $religion =$_POST['religion'];
        $telephone =$_POST['telephone'];
        $cellphone =$_POST['cellphone'];
        $spouse =$_POST['spouse'];
        $spouseAdd = $_POST['spouseAdd'];
        $noOfChildren = $_POST['noOfChildren'];
        $fatherName = $_POST['fatherName'];
        $fatherOccu = $_POST['fatherOccu'];
        $motherName = $_POST['motherName'];
        $motherOccu =$_POST['motherOccu'];
        $parentAddress =$_POST['parentAddress'];
        $langspoken =$_POST['langspoken'];
        $pemergency = $_POST['pemergency'];
        $cemergency =$_POST['cemergency'];
        $elementary =$_POST['elementary'];
        $eyeargrad = $_POST['eyeargrad'];
        $highschool = $_POST['highschool'];
        $hyeargrad = $_POST['hyeargrad'];
        $vocational =$_POST['vocational'];
        $vyeargrad = $_POST['vyeargrad'];
        $college =$_POST['college'];
        $cyeargrad = $_POST['cyeargrad'];
        $specialskill =$_POST['specialskill'];
        $sss = $_POST['sss'];
        $philhealth = $_POST['philhealth'];
        $tin = $_POST['tin'];
        $pagibig = $_POST['pagibig'];
        $salary = $_POST['salary'];
		$children=$_POST['children'];
		$employment=$_POST['employmentrecord'];
		$company=$_POST['company'];
		$status="Pending";
        $accountNumber=$_POST['accountNum'];
		if(isset($company)){
			$status="Deployed";
		}
        $cols = array(
            'empId'=>$empId,
            'position' => $position,
            'lname' => $lname,
            'fname' => $fname,
            'mname' => $mname,
            'cityAddress' => $cityAddress,
            'provAddress' => $provAddress,
            'gender' => $gender,
            'dob' => $dob,
            'pob' => $pob,
            'civilstat' => $civilstat,
            'citizenship' => $citizenship,
            'height' => $height,
            'weight' => $weight,
            'religion' => $religion,
            'telephone' => $telephone,
            'cellphone' => $cellphone,
            'spouse' => $spouse,
            'spouseAdd' => $spouseAdd,
            'noOfChildren' => $noOfChildren,
            'fatherName' => $fatherName,
            'fatherOccu' => $fatherOccu,
            'motherName' => $motherName,
            'motherOccu' => $motherOccu,
            'parentAddress' => $parentAddress,
            'langspoken' => $langspoken,
            'pemergency' => $pemergency,
            'cemergency' => $cemergency,
            'elementary' => $elementary,
            'eyeargrad' => $eyeargrad,
            'highschool' => $highschool,
            'hyeargrad' => $hyeargrad,
            'vocational' => $vocational,
            'vyeargrad' => $vyeargrad,
            'college' => $college,
            'cyeargrad' => $cyeargrad,
            'specialskill' => $specialskill,
            'sss' => $sss,
            'philhealth' => $philhealth,
            'tin' => $tin,
            'pagibig' => $pagibig,
            'salary' => $salary,
			'children'=>$children,
			'employment'=>$employment,
            'status'=>$status,
			'company'=>$company,
            'accountNum'=>$accountNumber
			);
		
        $success = Employee::insert($cols);
      
        if ($success >0) {
            echo json_encode(array(
                'Success' => true,
                'Message' => 'Successfully inserted new Employee',
                'params'=>$success
            ));
        }
        break;
    case 2:
        $company=$_POST['company'];
        $empId=$_POST['empId'];

        $success=Employee::deploy($empId,$company);
        if($success>0){
              echo json_encode(array(
                'Success' => true,
                'Message' => 'Employee has been deployed to '. $company
            ));
        }
    break;
	case 3:
		$employeeId=$_POST['employeeId'];
		$result=Employee::select($employeeId);
		echo json_encode($result);
	break;
	case 4:
		$position =$_POST['position'];
        $lname =$_POST['lastnameInput'];
        $fname = $_POST['fname'];
        $mname = $_POST['mname'];
        $cityAddress = $_POST['cityAddressInput'];
        $provAddress =$_POST['provAddressInput'];
        $gender = $_POST['gender'];
        $dob =$_POST['dob'];
        $pob = $_POST['pob'];
        $civilstat = $_POST['civilstat'];
        $citizenship = $_POST['citizenship'];
        $height = $_POST['height'];
        $weight = $_POST['weight'];
        $religion =$_POST['religion'];
        $telephone =$_POST['telephone'];
        $cellphone =$_POST['cellphone'];
        $spouse =$_POST['spouse'];
        $spouseAdd = $_POST['spouseAdd'];
        $noOfChildren = $_POST['noOfChildren'];
        $fatherName = $_POST['fatherName'];
        $fatherOccu = $_POST['fatherOccu'];
        $motherName = $_POST['motherName'];
        $motherOccu =$_POST['motherOccu'];
        $parentAddress =$_POST['parentAddress'];
        $langspoken =$_POST['langspoken'];
        $pemergency = $_POST['pemergency'];
        $cemergency =$_POST['cemergency'];
        $elementary =$_POST['elementary'];
        $eyeargrad = $_POST['eyeargrad'];
        $highschool = $_POST['highschool'];
        $hyeargrad = $_POST['hyeargrad'];
        $vocational =$_POST['vocational'];
        $vyeargrad = $_POST['vyeargrad'];
        $college =$_POST['college'];
        $cyeargrad = $_POST['cyeargrad'];
        $specialskill = $_POST['specialskill'];
        $sss = $_POST['sss'];
        $philhealth = $_POST['philhealth'];
        $tin = $_POST['tin'];
        $pagibig = $_POST['pagibig'];
        $salary = $_POST['salary'];

		$oldId=$_POST['realId'];
        $newId=$_POST['newId'];
        $empId=$oldId;
        if($oldId!=$newId){
            $empId=$newId;
              $exist=Employee::select($newId);
               if(isset($exist)){
                        echo json_encode(array(
                        'Success' => false,
                        'Message' => 'Employee number already in used',
                        'params'=>0
                    ));
                        return;
                }
        }
		$company=$_POST['company'];
        $accountNum=$_POST['accountNum'];
		$status="Pending";
		if(isset($company)){
			$status="Deployed";
		}

        $cols = array('position' => $position,
            'lname' => $lname,
            'fname' => $fname,
            'mname' => $mname,
            'cityAddress' => $cityAddress,
            'provAddress' => $provAddress,
            'gender' => $gender,
            'dob' => $dob,
            'pob' => $pob,
            'civilstat' => $civilstat,
            'citizenship' => $citizenship,
            'height' => $height,
            'weight' => $weight,
            'religion' => $religion,
            'telephone' => $telephone,
            'cellphone' => $cellphone,
            'spouse' => $spouse,
            'spouseAdd' => $spouseAdd,
            'noOfChildren' => $noOfChildren,
            'fatherName' => $fatherName,
            'fatherOccu' => $fatherOccu,
            'motherName' => $motherName,
            'motherOccu' => $motherOccu,
            'parentAddress' => $parentAddress,
            'langspoken' => $langspoken,
            'pemergency' => $pemergency,
            'cemergency' => $cemergency,
            'elementary' => $elementary,
            'eyeargrad' => $eyeargrad,
            'highschool' => $highschool,
            'hyeargrad' => $hyeargrad,
            'vocational' => $vocational,
            'vyeargrad' => $vyeargrad,
            'college' => $college,
            'cyeargrad' => $cyeargrad,
            'specialskill' => $specialskill,
            'sss' => $sss,
            'philhealth' => $philhealth,
            'tin' => $tin,
            'pagibig' => $pagibig,
            'salary' => $salary,
            'empId'=>$oldId,
			'status'=>$status,
			'company'=>$company,
            'accountNum'=>$accountNum,
            'newId'=>$empId
			);
		
        $success =Employee::modify($cols);
        
        if ($success >0) {
            echo json_encode(array(
                'Success' => true,
                'Message' => 'Successfully updated an Employee,Please wait while we redirect you automatically'
            ));
        }
		
		
	break;
	case 5:
		$eid=$_POST['id'];
		  $success =Employee::delete($eid);
        
        if ($success >0) {
            echo json_encode(array(
                'Success' => true,
                'Message' => 'Employee was removed successfully'
            ));
        }
	break;
    case 6:
        $empId=$_POST['empId'];
        $comment=$_POST['comment'];
        $user=$_POST['user'];

        $cols=array(
        'empId'=>$empId,
        'comment'=>$comment,
        'user'=>$user
        );
    
        $result=Employee::insert_comment($cols);
        if($result>0){
             echo json_encode(array(
                'Success' => true,
                'Message' => 'New comment posted',
                'params'=>$result,
                'isAdmin'=> $_SESSION['admin']
            ));
        }else{
             echo json_encode(array(
                'Success' => false,
                'Message' => 'Failed comment posting',
                'params'=>0
            ));
            
        }
    break;
    case 7:
    $empId=$_POST['empId'];
    $result=Employee::delete_comment($empId);
    if($result){
        echo json_encode(array(
                'Success' => true,
                'Message' => 'Successfully deleted'
            ));
    }
    break;
}

?>