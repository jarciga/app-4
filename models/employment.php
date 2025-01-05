<?php
require_once '../connections/connection.php';

class Employment
{
	public static function insert($item){
		global $employeedb;
				$empId=$item['empId'];
				$e_from=$item['eFrom'];
				$eTo=$item['eTo'];
				$position=$item['position'];
				$company=$item['company'];
				$reason=$item['reason'];
				$sql="INSERT INTO `employment`(`empId`, `eFrom`, `eTo`, `position`, `company`, `reason`) VALUES (?,?,?,?,?,?)";
				$e_result=$employeedb->prepare($sql);
				$e_result->bind_param('isssss',$empId,$e_from,$eTo,$position,$company,$reason);
				 if($e_result->execute()){
					 return $employeedb->insert_id;
				 }
				$e_result->close();
				return 0;
	}
	public static function eDelete($id){
		global $employeedb;
        $result = $employeedb->query('delete from employment where id=' . $id);
        return $result;
        $result->close();
	}
		public static function modify($cols){
		  global $employeedb;
		  $sql="UPDATE employment set eFrom=?,eTo=?,position=?,company=?,reason=?  where id=?";
		  $result=$employeedb->prepare($sql);
		  $result->bind_param('sssssi',
		  $cols['eFrom'],
		  $cols['eTo'],
		  $cols['position'],
		  $cols['company'],
		  $cols['reason'],
		  $cols['id']
		  );
		  return $result->execute();
		  
	}
}