<?php 
  if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

   if(isset($_SESSION['data'])) {
   	header('Location: home.php');
   }
?>
<link rel="stylesheet" href="css/bootstrap.min.css" >
<link rel="stylesheet" href="css/jquery.toast.css" >
<link rel="stylesheet" href="css/styles/login.css" >
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.toast.js"></script>

<div class="modal fade" data-backdrop="static" data-keyboard="false" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    	  <div class="modal-dialog">
				<div class="loginmodal-container">
                                        <img src="images/logo.jpg" alt="Artecy Logo" style="width:290px;height:228px;"></br>
					<h1>Artecy EMS Login</h1><br>
				  <form >
					<input type="text" id="user" placeholder="Username"> 
					<input type="password" id="pass" placeholder="Password">
					<input type="submit" id="loginbtn" class="login loginmodal-submit" value="Login">
				  </form>
					
				  <div class="login-help">
					<!-- <a href="#">Register</a> - <a href="#">Forgot Password</a> -->
				  </div>
				</div>
			</div>
		  </div>
<script>
$(document).ready(function(){
	$('#login-modal').modal('show');
});
$('#loginbtn').on('click',function(e){
	e.preventDefault();
	var username=$('#user').val();
	var password=$('#pass').val();
	if(username==""){
		showAlert('Username is required');
		return;
	}
	if(password==""){
		showAlert('Password is required');
		return;
	}
	$.ajax({
		url:'controllers/usersController.php',
		type:'post',
		data:{request_type:5,username:username,password:password},
		dataType:'JSON',
		success:function(data){
		
			if(!data.status){
				showAlert('Either username or password are incorrect');
				return;
			}else{
				 $.ajax({
			        type : 'POST',
			        url : 'session.php',
			        data: {username:username,admin:data.admin},
			        success : function(e){
			        	
			        window.location.href = "home.php";
			        },
			        error : function(){}
			 });
				
			}
		}
	});
});
function showAlert(msg){
    $.toast({
    heading: 'Error',
    text: msg,
    showHideTransition: 'fade',
    icon: 'error',
    position:'bottom-right'
});
}
</script>
