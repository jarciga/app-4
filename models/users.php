<?php
require_once '../connections/connection.php';
	class Users{
	 public static function getAllusers(){
	 global $employeedb;
	 $ret_list=array();
	 $result=$employeedb->query('select * from users order by id desc');


	//  while($row=$result->fetch_object()){
	// 	 $ret_list[]=$row;
	//  $result->close();
	//  }
	 return $ret_list;
	 } 
	 public static function delete($id) {
	 global $employeedb;
	 $result = $employeedb->query ( 'delete from users where id=' .  $id ) ;
	 return $result;
	 $result->close ();
	 } 
	 public static function Exist($username){
	 	 global $employeedb;
	 	$result = $employeedb->query ('select * from users where username=' . $username . ' limit 1');	 
	 	return $result->fetch_object ();	
	  	$result->close ();	 

	 }
	public static function select($id) {
	 global $employeedb;
	 $result = $employeedb->query ('select * from users where id=' . mysqli_real_escape_string ($employeedb, $id ) );
	 	 return $result->fetch_object ();	
	 	  $result->close ();	
	 	   }
	 	 public static function Login($username,$password) {
	 	   	 global $employeedb;
	 	$result = $employeedb->query ("select * from users where username='" .$username . "' and pwd='" . $password ."' and stat=1 limit 1" );
	 	 return $result->fetch_object ();	
	 	  $result->close ();
	 	   }
		   public static function changepassword($password,$username){
			   global $employeedb;
			   $sql="update users set pwd=? where username=?";
			   $result=$employeedb->prepare($sql);
			   $result->bind_param("ss",$password,$username);
			   return $result->execute();
		   }
	 public static function modify($cols) {

	 global $employeedb;
	 $stat=0;
	 	if($cols["stat"]=="true"){
	 		$stat=1;
	 	}
	 	$admin=0;
	 	if($cols["isAdmin"]=="true"){
	 	
	 		$admin=1;
	 			
	 	}
	 $result = $employeedb->prepare ( 'update users set
			username=?,pwd=?,stat=?,isAdmin=?	 where id=?'); 	 $result->bind_param ('ssiii',
			$cols['username'],
			$cols['pwd'],
			$stat,
			$admin,
			$cols['id']	);
			return $result->execute ();
			 $result->close ();
	 } 
		public static function insert($cols) {
	 global $employeedb;
	 $stat=0;
	 if($cols['status']){
	 	$stat=1;
	 }
	 $admin=1;
	 if($cols['admin']=='false'){
	 	
	 		$admin=0;
	 }

 $sql = 'INSERT INTO users ( username,pwd,stat,isAdmin		) VALUES(?,?,?,?
		)';$result = $employeedb->prepare ( $sql ); $result->bind_param ('ssii',$cols ['username'] , $cols ['password'] , $stat ,
		$admin )
		;return $result->execute ();
		$result->close ();
	 } 
}

?>