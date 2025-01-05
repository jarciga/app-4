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
<?php require_once 'layouts/header.php'; ?>
  <?php require 'connections/connection.php' ?>
<?php
	$fullname='';
		
		global $employeedb;
        $result = $employeedb->query('select lname,fname,mname  from employee where empId=' .  $_GET['id']);
		if($result->num_rows <=0){
			$fullname="Unknown Employee";
		}else{
			$emp= $result->fetch_object();
			$result->close();
			$fullname='Attachment for '.$emp->lname.','.$emp->fname .' '. $emp->mname;	
		}
  
		$message="";
		if(count($_FILES) > 0 && $_POST['postType']=='extras') {

				

						$fileName = $_FILES['extrasfile']['name'];
						$tmpName  = $_FILES['extrasfile']['tmp_name'];
						$fileSize = $_FILES['extrasfile']['size'];
						$fileType = $_FILES['extrasfile']['type'];

						$fp      = fopen($tmpName, 'r');
						$content = fread($fp, filesize($tmpName));
						$content = addslashes($content);
						fclose($fp);

						/*if(!get_magic_quotes_gpc())
						{*/
							$fileName = addslashes($fileName);
						/*}*/


						$query = "INSERT INTO attachments (file_name, size, file_type, file,empId,upload_date ) ".
						"VALUES ('{$fileName}', '{$fileSize}', '{$fileType}', '{$content}','{$_GET['id']}',NOW())";

						$employeedb->query($query);
						
						$message= "<br>File $fileName uploaded<br>";
					
		}
		
	
		
?>
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="page-header"><?php echo $fullname;?></h4>
            </div>
        </div>
        <div class="row">
		<form enctype="multipart/form-data" action="" method="post" class="form-horizontal"  style="    padding-top: 10px;" >
		 <input type="hidden" value="extras" name="postType"/>
		 <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">File</label>
			<div class="col-sm-10">
			  <span class="btn btn-primary" >
                                                       Browse<input type="file" name="extrasfile" id="imgInp"/>
                                                  </span> 
			</div>
		  </div>
		 <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <input type="submit" class="btn btn-primary" value="Submit"/>
	  <p class="text-success">
		<?php
			if(isset($message)){
				echo $message;
			}
		?>
	  </p>
    </div>
  </div>
		
	</form>

        </div>
	 <div class="row">
                                <table class="table" id="employmentTableRecord">
                                    <thead>
                                    <tr>
                                        <th>Filename</th>
                                        <th>Size</th>
										<th>Remove<th>
                                    </tr>
                                    </thead>
                                    <tbody>
									<?php
											global $employeedb;
                                            $query = 'select * from attachments where empId='.$_GET['id'].' order by id desc';
                                             if ($result = $employeedb->query($query)) {
                                                 while ($e = $result->fetch_object()) {?>
												 <tr>
													<td><a href="download.php?id=<?php echo $e->id;?>" class="btn btn-link"role="button" ><?php echo $e->file_name;?></a></td>
													<td><?php echo $e->size;?></td>
													<td>
													    <button type="button" alt="Remove" data-id="<?php echo $e->id;?>" class="btn btn-danger btn-small attachmentRemove">
                                                 <span class="glyphicon glyphicon-remove"></span> 
													</button>
													</td>
												 </tr>
									<?php
									}
											 }
									?>
									</tbody>
								</table>
                        
                            </div>
							<div class="row">
							 <a class="btn btn-link btn-sm" style="margin-top: -5px;" href="editattachments.php?id=<?php echo $_GET['id'];?>">Change Profile Picture</a>
							 &nbsp;&nbsp;
							 <a class="btn btn-link btn-sm" style="margin-top: -5px;" href="attachments.php?id=<?php echo $_GET['id'];?>">Set Profile Picture</a>
							 &nbsp;&nbsp;
							  <a class="btn btn-link btn-sm" style="margin-top: -5px;" href="home.php">Home</a>
							   &nbsp;&nbsp;
							  <a class="btn btn-link btn-sm" style="margin-top: -5px;" href="edit.php?id=<?php echo $_GET['id'];?>">Go Back</a>
							</div>
    </div>
</div>

<!-- /#wrapper -->
</div>


<?php require_once 'layouts/footer.php'; ?>

<script>
$('.attachmentRemove').on('click',function(){
		var tr=$(this);
		var a_id=$(this).data('id');
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
									url:'controllers/attachmentController.php',
									type:'post',
									dataType:'JSON',
									data:{request_type:1,id:a_id},
									success:function(e){
										
										if(e.Success){
											   $.toast({
												heading: 'Information',
												text:e.Message,
												showHideTransition: 'slide',
												icon: 'success',
												position:'top-right'
											});
											tr.parent().parent().remove();
										}
									}
									});
							   }
							}
						});
	});
   
</script>
</body>

</html>
