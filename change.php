<?php
   if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
	if(!isset($_SESSION['data'])){
		header("Location:index.php");
	}
?>
<?php require_once 'layouts/header.php'; ?>
    <?php require 'connections/connection.php' ?>

        <!-- Page Content -->
       <!-- <div id="page-wrapper">-->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h4 class="page-header">Change Password</h4>
                    </div>
                </div>
        <div class="row">
   
                        <div class="panel-body">
						<div class="col-lg-4"></div>
						<div class="col-lg-4">
								
							   <form>
								<input type="hidden" id="usernameinput" value="<?php 
									echo  $_SESSION['data'];
								?>"/>
					<div class="form-group">
					<label for="currentpasswordinput">Current Password</label>
					<input type="password" class="form-control input-lg" id="currentpasswordinput" placeholder="Old Password">
				  </div>
				  <div class="form-group">
					<label for="newpasswordinput">Password</label>
					<input type="password" class="form-control input-lg" id="newpasswordinput" placeholder="New Password">
				  </div>
				  <div class="form-group">
					<label for="verifypasswordinput">Verify Password</label>
					<input type="password" class="form-control input-lg" id="verifypasswordinput" placeholder="Verify Password">
				  </div>
				  <button type="button" class="btn btn-default" id="btnsubmit">Submit</button>
				</form>
				
			</div>
						<div class="col-lg-4"></div>
                    
                        </div>
                      
                

    <?php require_once 'layouts/footer.php'; ?>
<script>
$('#btnsubmit').on('click',function(e){
		var old=$('#currentpasswordinput').val();
		if(old===''){
		$('#currentpasswordinput').css('border-color', 'red');
		showAlert('Input you current password');return;
		}else{$('#currentpasswordinput').css('border-color', '');}
		
		var pwd=$('#newpasswordinput').val();
	if(pwd===''){
		$('#newpasswordinput').css('border-color', 'red');
		showAlert('Please input your desired password');return;
		}else{$('#newpasswordinput').css('border-color', '');}
		
		var verify=$('#verifypasswordinput').val();
		if(verify===''){
		$('#verifypasswordinput').css('border-color', 'red');
		showAlert('Please verify your password first');return;
		}else{$('#verifypasswordinput').css('border-color', '');}
		
	
		
	var username=$('#usernameinput').val();
	

	
		$.ajax({
							url:'controllers/usersController.php',
							type:'POST',
							dataType:'JSON',
							data:{request_type:6,
								password:pwd,
								username:username,
								old:old
								},
							success:function(e){
								
								if(e.Success){
										$.toast({
											heading: 'Information',
											text:e.Message,
											showHideTransition: 'slide',
											icon: 'success',
											position:'top-right',
											 afterHidden: function () {
												 window.location.href="destroy.php";
										}
										});
								}else{
									showAlert(e.Message);
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