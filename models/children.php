<?php
require_once '../connections/connection.php';

class Children
{
	 public static function getChildrensByEmpId($empId)
    {
        global $employeedb;
        $ret_list = array();
        $result = $employeedb->query('select * from children where empId='.$empId.'order by id desc');
        if ($result) {
            while ($row = $result->fetch_object('Children')) {
                $ret_list[] = $row;
                $result->close();
            }
            return $ret_list;
        }
    }
	public static function modify($cols){
		  global $employeedb;
		  $sql="UPDATE children set fullname=?,bdate=? where id=?";
		  $result=$employeedb->prepare($sql);
		  $result->bind_param('ssi',
		  $cols['fullname'],
		  $cols['bdate'],
		  $cols['id']
		  );
		  return $result->execute();
		  
	}
	public static function insert($cols){
		global $employeedb;
				$empId=$cols['empId'];
				$fullname = $cols['fullname']; 
				$bdate=$cols['bdate']; 
				$sql="INSERT INTO `children`( `empId`, `fullname`, `bdate`) VALUES (?,?,?)";
				$x_result = $employeedb->prepare($sql);
				$x_result->bind_param("iss",$empId,$fullname,$bdate);
				if($x_result->execute()){
					return $employeedb->insert_id;
				}
				$x_result->close();
				return 0;
	}
	  public static function delete($empId)
    {
        global $employeedb;
        $result = $employeedb->query('delete from children where id=' . $empId);
        return $result;
        $result->close();
    }
}
	?>