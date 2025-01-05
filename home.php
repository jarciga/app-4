<?php
   if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
	if(!isset($_SESSION['data'])){
		header("Location:index.php");
	}
?>
<style>
tfoot input {
        width: 100%;
        padding: 3px;
        box-sizing: border-box;
    }
.dataTable > thead > tr > th[class*="sort"]:after{
    content: "" !important;
}
.sorting_1{
    display: flex !important;
}
table td{
	font-size:12px;
}
table th{
	font-size:12px;
}
</style>
  <link href="css/buttons.dataTables.min.css" rel="stylesheet">
<?php require_once 'layouts/header.php'; ?>

  <?php require 'connections/connection.php' ?>

        <!-- Page Content -->
        
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h4 class="page-header">List of Employee</h4>
                    </div>
                </div>
        <div class="row">
        <div class="panel panel-default">
                      
                        <div class="panel-body">
                     
                              <table id="example" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                            <th>Actions</th>
							<th>Employee No.</th>
                            <th>First Name</th> 
                             <th>Middle Name</th> 
                             <th>Last Name</th> 
                             <th>Birthday</th> 
                            
                             <th>Company</th> 
                             <th>Position</th> 
                             <th>SSS</th> 
                             <th>PhilHealth</th> 
                             <th>HDMF</th> 
                             <th>TIN</th> 
                             <th>Account No.</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                            <th>Actions</th>
                            <th>Employee No.</th>
                            <th>First Name</th> 
                             <th>Middle Name</th> 
                             <th>Last Name</th> 
                             <th>Birthday</th> 
                            
                             <th>Company</th> 
                             <th>Position</th> 
                             <th>SSS</th> 
                             <th>PhilHealth</th> 
                             <th>HDMF</th> 
                             <th>TIN</th> 
                             <th>Account No.</th>
            </tr>
        </tfoot>
        <tbody>
             <?php
                                        global $employeedb;
                                            $query = "SELECT * from employee order by empId desc";
                                             if ($result = $employeedb->query($query)) {
                                                 while ($e = $result->fetch_object()) {?>
                                                 <tr>
                                                 <td>
                                                 <button type="button" alt="Modify"   data-id="<?php echo $e->empId;?>" class="btn btn-warning btn-small edit">
                                                 <span class="glyphicon glyphicon-pencil"></span> </button>&nbsp;
                                                    <?php  if($_SESSION['admin']=="1"){?>
                                                       <button type="button" alt="Remove"  data-id="<?php echo $e->empId;?>" class="btn btn-danger btn-small remove">
                                                 <span class="glyphicon glyphicon-remove"></span> </button>&nbsp;
                                                <?php }?>

                                                 </td>
												   <td><?php echo $e->empId; ?> </td>
                                                <td><?php echo $e->fname; ?> </td>
                                                <td><?php echo $e->mname; ?> </td>
                                                <td><?php echo $e->lname; ?> </td>
                                                <td><?php echo $e->dob; ?> </td>
                                              
                                                <td><?php echo $e->current_company; ?> </td>
                                                <td><?php echo $e->position ?> </td>
                                                <td><?php echo $e->sss ?> </td>
                                                <td><?php echo $e->philhealth ?> </td>
                                                <td><?php echo $e->pagibig ?> </td>
                                                <td><?php echo $e->tin ?> </td>
                                                <td><?php echo $e->accountNum ?> </td>
                                                </tr>
                                             <?php
                                             }
                                             $result->close(); 
                                         }
                              ?>
            </tbody>
            </table>
                        </div>
                        <div class="panel-footer">
              
               <div class="btn-group btn-group-lg">
             <a class="btn btn-primary btn-lg" href="new.php" role="button">New</a>
            
             
</div>
                        </div>
  
             <?php require_once 'layouts/footer.php'; ?>
             <script src="js/dataTables.buttons.min.js"></script>
            <script src="js/jszip.min.js"></script>
            <script src="js/pdfmake.min.js"></script>
            <script src="js/vfs_fonts.js"></script>
            <script src="js/buttons.html5.min.js"></script>
			<script src="js/buttons.colVis.min.js"></script>
			<script src="js/buttons.print.min.js"></script>
             <script>
			 $('.remove').on('click',function(){
					var tr=$(this);
				  var uId=$(this).data('id');
    
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
							url:'controllers/employeeController.php',
							type:'POST',
							data:{id:uId,request_type:5},
							dataType:'json',
							success:function(e){
								if(e.Success){
										tr.parent().parent().remove();
							   $.toast({
										heading: 'Information',
										text: e.Message,
										showHideTransition: 'slide',
										icon: 'success',
										position:'top-right'
										 /* afterHidden: function () {
											 window.location.reload();
									} */
									});
						   }
							}
						});
					   }
					}
				});
			 });
			 $('.edit').on('click',function(e){
				 var empId=$(this).data("id");
				 window.location.href="edit.php?id=" + empId;
			 });
             $('.deploy').on('click',function(e){
                var empId=$(this).data("id");
                bootbox.prompt("Input a company", function(result){ 

                   if(result==null){
                    return;
                    }
                        $.ajax({
                            url:'controllers/employeeController.php',
                            type:'POST',
                            dataType:'JSON',
                            data:{company:result,empId:empId,request_type:2 },
                            success:function(data){

                                if(data.Success){
                                    $.toast({
                                        heading: 'Information',
                                        text: data.Message,
                                        showHideTransition: 'slide',
                                        icon: 'success',
                                        position:'top-right'
                                    });
                                }
                            }
                        });
                });
             });
      $(document).ready(function() {
    // Setup - add a text input to each footer cell
    $('#example tfoot th').each( function () {
        var title = $(this).text();
        $(this).html( '<input type="text"  />' );
    } );
 
    // DataTable
        var table = $('#example').DataTable({ 
            "scrollX": true,
            dom: 'Bfrtip',
			 buttons: [
            {
                extend: 'print',
                exportOptions: {
                   columns:[1,2,3,4,5,6,7,8,9,10,11,12]
                }
            },{
                extend: 'excelHtml5',
                exportOptions: {
                   columns:[1,2,3,4,5,6,7,8,9,10,11,12]
                }
            },
            'colvis'
			
        ],
        columnDefs: [ {
            targets: 0,
            visible: true,
            searchable:false
        } ]
        });
 
    // Apply the search
    table.columns().every( function () {
        var that = this;
 
        $( 'input', this.footer() ).on( 'keyup change', function () {
            if ( that.search() !== this.value ) {
                that
                    .search( this.value )
                    .draw();
            }
        } );
    } );
} );
             </script>