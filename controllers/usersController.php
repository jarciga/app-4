<?php
require_once '../models/users.php';
$req_type = $_POST['request_type'];
switch ($req_type) {
    case 1:
  
    $username=$_POST['username'];
    $password=$_POST['password'];
    $admin=$_POST['admin'];
    $status=$_POST['status'];
     $cols = array('username' => $username,
     	'password'=>$password,
     	'admin'=>$admin,
     	'status'=>$status
     	);
        
 	     $success = Users::insert($cols);
        if ($success !=null) {
            echo json_encode(array(
                'Success' => true,
                'Message' => 'Successfully inserted new user.Page will be refresh'
            ));
        }
        break;
    case 2:
    $id=$_POST['id'];
    $result=Users::delete($id);
    if($result>0){
 			echo json_encode(array(
                'Success' => true,
                'Message' => 'Deletion Complete'
            ));
    }
    break;
   case 3:
    $username=$_POST['username'];
   	$result=Users::Exist($username);
   	echo $result;
   break;
  case 4:
		$id=$_POST['id'];
		$username=$_POST['username'];
		$pwd=$_POST['password'];
		$stat=$_POST['status'];
		$isAdmin=$_POST['admin'];
		$id=$_POST['id'];
		$cols=array('username'=>$username,'pwd'=>$pwd,'stat'=>$stat,'isAdmin'=>$isAdmin,'id'=>$id);
		if(Users::modify($cols)){
			  echo json_encode(array(
                'Success' => true,
                'Message' => 'Successfully modify a user'
            ));
		}
  break;
 case 5:
 					$username=$_POST['username'];
 					$password=$_POST['password'];
 					$result=Users::Login($username,$password);
					$admin=0;
					if(isset($result)){
									if($result->isAdmin==1){
										$admin=1;
									}
									  echo json_encode(array(
										'admin' => $admin,
										'status'=>true
							));
					}else{
						echo json_encode(array(
										'admin' => $admin,
										'status'=>false
							));
					}
				
 					
 break;
case 6:
				$username=$_POST['username'];
 					$password=$_POST['password'];
					$oldpwd=$_POST['old'];
					
					$validate=Users::Login($username,$oldpwd);
					
						if(isset($validate)){
								$result=Users::changepassword($password,$username);
									if(isset($result)){

													  echo json_encode(array(
														'Success'=>true,
														'Message'=>'Password updated,You will be log out in a bit'
											));
									}
					}else{
						 echo json_encode(array(
										'Success'=>false,
										'Message'=>'Invalid password, please try again or contact an administrator'));
					}
					

}

?>