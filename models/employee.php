<?php
require_once '../connections/connection.php';

class Employee
{
	
    public static function getAllemployee()
    {
        global $employeedb;
        $ret_list = array();
        $result = $employeedb->query('select * from employee order by empId desc');
        if ($result) {
            while ($row = $result->fetch_object('Employee')) {
                $ret_list[] = $row;
                $result->close();
            }
            return $ret_list;
        }
    }

    public static function delete($empId)
    {
        global $employeedb;
		$sql='delete from employee where empId=' .  $empId;
		$sql .=';delete from images where empId=' .  $empId;
		$sql .=';delete from children where empId=' .  $empId;
		$sql.=';delete from employment where empId=' .  $empId;
		$sql.=';delete from attachments where empId=' .  $empId;;
        if($employeedb->multi_query($sql)){
				return true;
		}else{
			echo $employeedb->error;
		}
        return false;
        $result->close();
    }

    public static function select($empId)
    {
        global $employeedb;
        $result = $employeedb->query('select * from employee where empId=' .  $empId);
        return $result->fetch_object();
        $result->close();
    }
	

    public static function modify($cols)
    {
        global $employeedb;
        $result = $employeedb->prepare('update employee set 
		empId=?,
		position=?,
		lname=?,
		fname=?,
		mname=?,
		cityAddress=?,
		
		provAddress=?,
		gender=?,
		dob=?,
		pob=?,
		civilstat=?,
			
			citizenship=?,
			height=?,
			weight=?,
			religion=?,
			telephone=?,
			
			cellphone=?,
			spouse=?,
			spouseAdd=?,
			noOfChildren=?,
			fatherName=?,
			
			fatherOccu=?,
			motherName=?,
			motherOccu=?,
			parentAddress=?,
			langspoken=?,
			
			pemergency=?,
			cemergency=?,
			elementary=?,
			eyeargrad=?,
			highschool=?,
			hyeargrad=?,
			vocational=?,
			vyeargrad=?,
			college=?,
			cyeargrad=?,
			
			specialskill=?,
			sss=?,
			philhealth=?,
			tin=?,
			pagibig=?,
			salary=?,
			status=?,
			current_company=?,
			accountNum=?
			  where empId=?');
        $result->bind_param('issssssisssssssssssisssssssssisisisisssssisssi',
			$cols['newId'],
             $cols['position'], 
			 $cols['lname'],
			 $cols['fname'],
			$cols['mname'],
			$cols['cityAddress'],
			 $cols['provAddress'],
			 $cols['gender'],
			 $cols['dob'],
			 $cols['pob'],
			 $cols['civilstat'],
				$cols['citizenship'],
				$cols['height'],
				$cols['weight'],
				$cols['religion'],
				$cols['telephone'],
				$cols['cellphone'],
				$cols['spouse'],
				$cols['spouseAdd'],
				$cols['noOfChildren'],
				$cols['fatherName'],
				$cols['fatherOccu'],
				$cols['motherName'],
				$cols['motherOccu'],
				$cols['parentAddress'],
				$cols['langspoken'],
				  $cols['pemergency'],
			   $cols['cemergency'],
			   $cols['elementary'],
			   $cols['eyeargrad'], 
			   $cols['highschool'],
			   $cols['hyeargrad'],
			    $cols['vocational'],
			 $cols['vyeargrad'],
			 $cols['college'],
			 $cols['cyeargrad'],
				 $cols['specialskill'],
			   $cols['sss'],
			    $cols['philhealth'],
				$cols['tin'],
				 $cols['pagibig'],
				  $cols['salary'],
					  $cols['status'],
					  	  $cols['company'],
				$cols['accountNum'],
			   $cols['empId']
				  );		
         if($result->execute()){
         		if($cols['newId']!= $cols['empId']){
         		
         		$sql='update  children set empId='.$cols['newId'].' where empId=' .  $cols['empId'];
				$sql .=';update comments set empId='.$cols['newId'].' where empId=' .  $cols['empId'];
				$sql .=';update children set empId='.$cols['newId'].' where empId=' .  $cols['empId'];
				$sql.=';update employment set empId='.$cols['newId'].' where empId=' .  $cols['empId'];
				$sql.=';update images set empId='.$cols['newId'].' where empId=' .  $cols['empId'];
				$sql.=';update attachments set empId='.$cols['newId'].' where empId=' .  $cols['empId'];
		        if($employeedb->multi_query($sql)){
						return true;
				}else{
					echo $employeedb->error;
						return false;
				}
         	}
	         	return true;

         }else{
         	return false;
         }
        $result->close();
    }
    public static function insert_comment($cols){
		global $employeedb;
		
		$result=$employeedb->prepare('INSERT INTO `comments`(`empId`, `comment_text`, `writtenBy`, `createdDate`) VALUES (?,?,?,now());');
		$result->bind_param('iss',$cols['empId'],$cols['comment'],$cols['user']);
		if($result->execute()){
			return $employeedb->insert_id;
		}
		return 0;
		$result->close();
	}
	public static function delete_comment($id){
		global $employeedb;
		$result=$employeedb->query('delete from comments where id=' .$id);
		return $result;
		$result->close();
	}
    public static function deploy($empId,$company){
    	global $employeedb;
    	$status='Deployed';
    	$result=$employeedb->prepare("update employee set current_company=? ,status=? where empId=?");
    	$result->bind_param("ssi",$company,$status,$empId);
    	return $result->execute();
    	$result->close();
    }

    public static function insert($cols)
    {
		global $employeedb;
		$childrenData=stripcslashes($cols['children']);
		$childrenData=json_decode($childrenData,true);
		$employmentData=stripcslashes($cols['employment']);
		$employmentData=json_decode($employmentData,true);
		$employeedb->autocommit(false);
		
        $sql = 'INSERT INTO `employee`( empId,
		`position`,
		`dateCreated`,
		`lname`, 
		`fname`,
		`mname`, 
		`cityAddress`,
		`provAddress`, 
		`gender`, 
		`dob`,
		`pob`,
		`civilstat`,
		`citizenship`,
		`height`, 
		`weight`, 
		`religion`,
		`telephone`,
		`cellphone`,
		`spouse`,
		`spouseAdd`, 
		`noOfChildren`, 
		`fatherName`,
		`fatherOccu`, 
		`motherName`, 
		`motherOccu`, 
		`parentAddress`,
		`langspoken`,
		`pemergency`,
		`cemergency`,
		`elementary`,
		`eyeargrad`, 
		`highschool`, 
		`hyeargrad`, 
		`vocational`, 
		`vyeargrad`, 
		`college`,
		`cyeargrad`, 
		`specialskill`,
		`sss`,
		`philhealth`,
		`tin`, 
		`pagibig`,
		`salary`,
		`status`,
		`current_company`,
		`accountNum`
		)
		VALUES (?,?,now(),?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
        $result =$employeedb->prepare($sql);
        $result->bind_param('issssssisssssssssssisssssssssisisisisssssisss', 
        	$cols['empId'],
		$cols['position'],
		$cols['lname'], 
		$cols['fname'],
		$cols['mname'], 
		$cols['cityAddress'],
		$cols['provAddress'], 
		$cols['gender'], 
		$cols['dob'],
		$cols['pob'],
		$cols['civilstat'],
		
		$cols['citizenship'],
		$cols['height'], 
		$cols['weight'], 
		$cols['religion'],
		$cols['telephone'],
		$cols['cellphone'],
		$cols['spouse'],
		$cols['spouseAdd'], 
		$cols['noOfChildren'], 
		$cols['fatherName'],
		$cols['fatherOccu'], 
		$cols['motherName'], 
		$cols['motherOccu'], 
		$cols['parentAddress'],
		$cols['langspoken'],
		$cols['pemergency'],
		$cols['cemergency'],
		$cols['elementary'],
		$cols['eyeargrad'], 
		$cols['highschool'], 
		$cols['hyeargrad'], 
		$cols['vocational'], 
		$cols['vyeargrad'], 
		$cols['college'],
		$cols['cyeargrad'], 
		$cols['specialskill'],
		$cols['sss'],
		$cols['philhealth'],
		$cols['tin'], 
		$cols['pagibig'],
		$cols['salary'],
		$cols['status'],
		$cols['company'],
		$cols['accountNum']
		);
	
       $result->execute();
			//$empId=$employeedb->insert_id;
       $empId=$cols['empId'];
			//insert children
			foreach($childrenData as $item) { 
				$fullname = $item['fullname']; 
				$bdate=$item['bdate']; 
				$sql="INSERT INTO `children`( `empId`, `fullname`, `bdate`) VALUES (?,?,?)";
				$x_result = $employeedb->prepare($sql);
				$x_result->bind_param("iss",$empId,$fullname,$bdate);
				$x_result->execute();
				$x_result->close();
			}
			$result->close();
			//insert employment record
			foreach($employmentData as $item){
				
				$e_from=$item['eFrom'];
				$eTo=$item['eTo'];
				$position=$item['position'];
				$company=$item['company'];
				$reason=$item['reason'];
				$sql="INSERT INTO `employment`(`empId`, `eFrom`, `eTo`, `position`, `company`, `reason`) VALUES (?,?,?,?,?,?)";
				$e_result=$employeedb->prepare($sql);
				$e_result->bind_param('isssss',$empId,$e_from,$eTo,$position,$company,$reason);
				 $e_result->execute();
				$e_result->close();
			}
        
		$employeedb->commit();
		return $empId;
    }

}

?>