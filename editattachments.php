<?php

   if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
	if(!isset($_SESSION['data'])){
		header("Location:index.php");
	}

if(!isset($_GET['id'])){
		header('Location:home.php');
	}
?>

  <?php require 'connections/connection.php' ?>
<?php
	
	$fullname='';
		global $employeedb;
		//check if have no profile pic
	
		$profile=$employeedb->query("select * from images where empId=".$_GET['id']);
		if($profile->num_rows==0){
		echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.location.href='attachments.php?id=". $_GET['id'] ."';
        </SCRIPT>");
		}
        $result = $employeedb->query('select lname,fname,mname  from employee where empId=' .  $_GET['id']);
		if($result->num_rows <=0){
			$fullname="Unknown Employee";
		}else{
			$emp= $result->fetch_object();
			$result->close();
			$fullname='Attachment for '.$emp->lname.','.$emp->fname .' '. $emp->mname;	
		}
        if(count($_FILES) > 0 && $_POST['postType']=='profile') {
			if(is_uploaded_file($_FILES['userImage']['tmp_name'])) {
						$imgData =addslashes(file_get_contents($_FILES['userImage']['tmp_name']));
						$imageProperties = getimageSize($_FILES['userImage']['tmp_name']);
						$sql = "UPDATE images set img='{$imgData}',file_name='{$imageProperties['mime']}' where empId='{$_GET['id']}'";
						$employeedb->query($sql);
						echo ("<SCRIPT LANGUAGE='JavaScript'>
								window.location.href='edit.php?id=". $_GET['id'] ."';
								</SCRIPT>");
				}
		}	
?>
<?php require_once 'layouts/header.php'; ?>
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="page-header"><?php echo $fullname;?></h4>
            </div>
        </div>
        <div class="row">
<div>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    
    <li role="presentation"  class="active"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
  
    
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    
    <div role="tabpanel" class="tab-pane active" id="profile">
				<form enctype="multipart/form-data" action="" method="post" style="padding-top:10px" >
                        <input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
                            <img src="images/blank-person.png" id="img-upload"alt="Male" 
                            class="img-thumbnail center-block"  width="304"height="236">
                                       <div class="input-group " style="padding-top: 10px;padding-left: 282px;">
                                        <span class="input-group-btn" style="padding-top: 5px;">
                                                </span>
                                         <input type="hidden" value="profile" name="postType"/>
                                             <input type="submit" class="btn btn-success pull-right" 
                                             value="Submit" name="submit" style="    margin-left: 5px;" />&nbsp;&nbsp;&nbsp;
                                <span class="btn btn-primary btn-file" style="float:right;">
                                                       Browse<input type="file" name="userImage" id="imgInp"/>
                                                  </span> 
                                          <input type="text" class="form-control" readonly="" style="visibility: hidden;">
                                       </div>
                 
                    </form>
	</div>

    
  </div>

</div>

        </div>
			<div class="row">
							 <a class="btn btn-link btn-sm" style="margin-top: -5px;" href="extras.php?id=<?php echo $_GET['id'];?>">Add Attachments</a>
							 
							</div>
    </div>
</div>

<!-- /#wrapper -->
</div>


<?php require_once 'layouts/footer.php'; ?>

<script>
 $(document).on('change', '.btn-file :file', function () {
            var input = $(this),
                label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
            input.trigger('fileselect', [label]);
        });

        $('.btn-file :file').on('fileselect', function (event, label) {

            var input = $(this).parents('.input-group').find(':text'),
                log = label;

            if (input.length) {
                input.val(log);
            } else {
                if (log) alert(log);
            }

        });
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#img-upload').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#imgInp").change(function () {
            readURL(this);
        });
   
</script>
</body>

</html>
