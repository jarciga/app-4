<?php
  if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
	if(!isset($_SESSION['data'])){
		header("Location:index.php");
	}else{
		if($_SESSION['admin']=="0"){
		header("Location:index.php");	
		}
	}
	
?>
<?php require_once 'layouts/header.php'; ?>
    <?php require 'connections/connection.php' ?>
	<style>
	table td{
	font-size:12px;
}
table th{
	font-size:12px;
}
	</style>

        <!-- Page Content -->
       <!-- <div id="page-wrapper">-->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h4 class="page-header">List of Users</h4>
                    </div>
                </div>
        <div class="row">
        <div class="panel panel-default">
                      
                        <div class="panel-body">
                          <table class="table" id="userstable"> 
                           <thead> 
                           <tr> 
                           <th>#</th> 
                               <th>Username</th>
                            <th>Password</th>
                             <th>Status</th> 
                             <th>Admin</th> 
                             <th>Actions</th>
                             </tr> 
                             </thead> 
                             <tbody> 
                             	<?php
                                 $i=1;
                                 global $employeedb;
                                 $query = "SELECT * from users where id<>1 order by id desc";

                            if ($result = $employeedb->query($query)) {

                                /* fetch object array */
                                while ($u = $result->fetch_object()) {?>
                                     <tr>    
                                <td><?php echo $i;?> </td>
                                <td><?php echo $u->username ?></td>
                                <td><?php echo $u->pwd ?></td>
                                <td><?php if($u->stat==1)
                                {
                                    echo "Active";
                                }else echo "InActive";
                                ?></td>
                                <td> <?php if($u->isAdmin==1){ echo "Administrator";} else{ echo "Normal";} ?></td>
                                <td class="td-actions"><a href="#editModal"
                                        data-id="<?php echo $u->id;?>" class="btn btn-small btn-success userEdit"
                                         role="button"
                                            data-toggle="modal"> <span class="glyphicon glyphicon-pencil"></span> </i></a>
                                                <button type="button"   data-id="<?php echo $u->id;?>" class="btn btn-danger btn-small userDelete">
                                                 <span class="glyphicon glyphicon-remove"></span> </button>
                                            
                                            </td>
                                </tr>
                               <?php   $i+=1;}
                                $result->close();
                              
                            }?>
							 
                             </tbody>
                              </table>
                        </div>
                        <div class="panel-footer">
      
                      <a class="btn btn-primary btn-lg"  role="button" id="adduserbtn" >Add User</a>
                        </div>
                    </div>
                    <div class="modal fade" id="addmodal" tabindex="-1" role="dialog" aria-labelledby="addmodalLabel">
                 <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="addmodalLabel">Add User</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <input type="hidden" id="editChildrenHidden"/>
                    <form>
                        <div class="form-group" style="padding-bottom: 30px;">
                            <label for="usernameinput" class="col-sm-2 control-label">Username</label>
                            <div class="col-sm-10" style="padding-right: 15px;">
                                <input type="text" class="form-control" id="usernameinput"
                                       placeholder="username">
                            </div>
                        </div>
                     <div class="form-group" style="padding-bottom: 30px;">
                            <label for="passwordinput" class="col-sm-2 control-label">Password</label>
                            <div class="col-sm-10" style="padding-right: 15px;">
                                <input type="password" class="form-control" id="passwordinput"
                                       placeholder="password">
                            </div>
                        </div>
                          <div class="form-group" style="padding-bottom: 30px;">
                           <div class="checkbox col-sm-12">
                              <label><input type="checkbox" value="" id="admincheckbox">Administrator</label>
                            </div>
                            <div class="checkbox col-sm-12">
                          <label><input type="checkbox" value="" id="activecheckbox" checked>Active</label>
                        </div>
                        </div>
                     
                    </form>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" >Close
                </button>
                <button type="button" class="btn btn-primary" id="btnSaveChildren">Save changes</button>
            </div>
        </div>
    </div>
</div>
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editmodalLabel">
                 <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="editmodalLabel">Edit User</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <input type="hidden" id="editChildrenHidden"/>
                    <form>
                        <div class="form-group" style="padding-bottom: 30px;">
                            <label for="editusernameinput" class="col-sm-2 control-label">Username</label>
                            <div class="col-sm-10" style="padding-right: 15px;">
                                <input type="text" class="form-control" id="editusernameinput"
                                       placeholder="username">
                            </div>
                        </div>
                     <div class="form-group" style="padding-bottom: 30px;">
                            <label for="editpasswordinput" class="col-sm-2 control-label">Password</label>
                            <div class="col-sm-10" style="padding-right: 15px;">
                                <input type="password" class="form-control" id="editpasswordinput"
                                       placeholder="password">
                            </div>
                        </div>
                          <div class="form-group" style="padding-bottom: 30px;">
                           <div class="checkbox col-sm-12">
                              <label><input type="checkbox" value="" id="editadmincheckbox">Administrator</label>
                            </div>
                            <div class="checkbox col-sm-12">
                          <label><input type="checkbox" value="" id="editactivecheckbox" checked>Active</label>
                        </div>
                        </div>
                     
                    </form>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" >Close
                </button>
                <button type="button" class="btn btn-primary" id="editUserBtn">Save changes</button>
            </div>
        </div>
    </div>
</div>
    <?php require_once 'layouts/footer.php'; ?>
<script>
$('#editUserBtn').on('click',function(e){
        var username=$('#editusernameinput').val();
    var password=$('#editpasswordinput').val();
    var isAdmin=$('#editadmincheckbox').is(":checked");
    var isActive=$('#editactivecheckbox').is(":checked");
    var id=$('.userEdit').data('id');

     if(username=="" || username==null){
        showAlert('Please input a username');
        return;
        }
        if(password=="" || password==null){
        showAlert('Please input a password');
        return;
        }
        if(password.length<6){
            showAlert('Password too short');
            return;
        }
        $.ajax({
            url:'controllers/usersController.php',
            type:'POST',
            dataType:'JSON',
            data:{username:username,password:password,admin:isAdmin,status:isActive,request_type:4,id:id},
            success:function(e){

                if(e.Success==true){
                  $('#addmodal').modal('hide');
                      $.toast({
                        heading: 'Information',
                        text: e.Message,
                        showHideTransition: 'slide',
                        icon: 'success',
                        position:'top-right',
                         afterHidden: function () {
                             window.location.reload();
                    }
                    });
                }
            }
        });
});
$('.userEdit').on('click',function(e){
     var uId=$(this).data('id');
       var username = $(this).closest('tr').children('td:eq(1)').text();
        var password = $(this).closest('tr').children('td:eq(2)').text();
        var status=$(this).closest('tr').children('td:eq(3)').text();
        var admin=$(this).closest('tr').children('td:eq(4)').text();

    $('#editusernameinput').val(username);
   $('#editpasswordinput').val(password);

   if(admin.trim()=='Administrator'){
    $('#editadmincheckbox').prop('checked', true);
   }else{
    $('#editadmincheckbox').prop('checked', false);
   }
       if(status=="Active"){
     $('#editactivecheckbox').prop('checked', true);
   }else{
    $('#editactivecheckbox').prop('checked', false);
        }
});
$('#adduserbtn').click(function(e){
    $('#addmodal').modal('show');
});
$(document).ready(function(e){
      $('#userstable').DataTable();
});
$('.userDelete').on('click',function(e){
    var uId=$(this).data('id');
    var tr=$(this);
   bootbox.confirm({
    title: "Delete?",
    message: "Are you sure you want to delete?",
    buttons: {
        cancel: {
            label: '<i class="fa fa-times"></i> Cancel'
        },
        confirm: {
            label: '<i class="fa fa-check"></i> Confirm'
        }
    },
    callback: function (result) {
       if(result){
        $.ajax({
            url:'controllers/usersController.php',
            type:'POST',
            data:{id:uId,request_type:2},
            dataType:'json',
            success:function(e){
                if(e.Success){
                  tr.parent().parent().remove();
               $.toast({
                        heading: 'Information',
                        text: 'Successfully deleted',
                        showHideTransition: 'slide',
                        icon: 'success',
                        position:'top-right'
                
                    });
           }
            }
        });
       }
    }
});
});
$('#btnSaveChildren').on('click',function(e){
    var username=$('#usernameinput').val();
    var password=$('#passwordinput').val();
    var isAdmin=$('#admincheckbox').is(":checked");
    var isActive=$('#activecheckbox').is(":checked");
     if(username=="" || username==null){
        showAlert('Please input a username');
        return;
        }
        if(password=="" || password==null){
        showAlert('Please input a password');
        return;
        }
        if(password.length<6){
            showAlert('Password too short');
            return;
        }

    $.ajax({
        url:'controllers/usersController.php',
        type:'POST',
        dataType:'JSON',
        data:{request_type:1,username:username,password:password,admin:isAdmin,status:isActive},
        success:function(data){
        
              if(data.Success){
                   $.toast({
                        heading: 'Information',
                        text:data.Message,
                        showHideTransition: 'slide',
                        icon: 'success',
                        position:'top-right',
                         afterHidden: function () {
                             window.location.reload();
                    }
                    });
              }
        }
    });
});
function Exist(username){
   
}
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