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
<?php
if(!isset($_GET['id'])){
	header('Location:home.php');
}
$empId=$_GET['id'];
?>
  <?php require 'connections/connection.php' ?>
<!-- Page Content -->

<div class="se-pre-con"></div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="page-header">Edit Employee Details</h4>
            </div>
        </div>
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Employee Form 
                </div>
                <div class="panel-body">
						<input type="hidden" value="<?php echo $empId;?>" id="empIdInput"/>
                        <input type="hidden" value="<?php echo $_SESSION['data'];?>" id="usernameInput"/>
                    <div class="row">
                        <div class="col-lg-6">
                            <form class="form-horizontal">
                              <div class="form-group ">
                                    <label for="employeenoinput" class="col-sm-2 control-label">Employee No.</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" id="employeenoinput"
                                               placeholder="Employee Number">
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="positionInput" class="col-sm-2 control-label">Position</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="positionInput"
                                               placeholder="Position">
                                    </div>
                                </div>
								
                            </form>
                        </div>
                        <div class="col-lg-6">
                            <form class="form-horizontal">
                                <div class="form-group ">
                                    <label for="todayDateInput" class="col-sm-2 control-label">Date</label>
                                    <div class="col-sm-10">
                                        <input type="text" readonly="true" class="form-control" id="todayDateInput"
                                               value="7/7/2017">
                                    </div>
                                </div>
                                    <div class="form-group ">
                                    <label for="companyInput" class="col-sm-2 control-label">Company</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="companyInput"
                                               placeholder="Company">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="panel panel-primary" style="border-color: transparent !important;">
                        <div class="panel-heading">
                            Personal Information
                        </div>
                        <div class="panel-body">
                            <div class="col-lg-6">
                                <form class="form-horizontal">
                                    <div class="form-group ">
                                        <label for="firstnameInput" class="col-sm-2 control-label">First Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="firstnameInput"
                                                   placeholder="First Name">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="middlenameInput" class="col-sm-2 control-label">Middle Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="middlenameInput"
                                                   placeholder="Middle Name">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="lastnameInput" class="col-sm-2 control-label">Last Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="lastnameInput"
                                                   placeholder="Last Name">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="genderCombo" class="col-sm-2 control-label">Gender</label>
                                        <div class="col-sm-10">
                                            <select class="form-control" id="genderCombo">
                                                <option value="1">Male</option>
                                                <option value="0">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="birthdateInput" class="col-sm-2 control-label">Birthdate</label>
                                        <div class="col-sm-10 input-group date form_date" data-date=""
                                             data-date-format="yyyy-mm-dd" data-link-field="dtp_input2"
                                             data-link-format="yyyy-mm-dd"
                                             style="    padding-right: 15px;">
                                            <input class="form-control" size="16" type="text" value="" readonly
                                                   style="margin-left:15px;width:97%;" id="birthdateInput">
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-remove"
                                                                                  style="z-index:100;"></span></span>
                                            <span class="input-group-addon"><span
                                                        class="glyphicon glyphicon-calendar"></span></span>
                                        </div>
                                        <input type="hidden" id="dtp_input2" value=""/><br/>
                                    </div>
                                    <div class="form-group ">
                                        <label for="birthplaceInput" class="col-sm-2 control-label">Birthplace</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="birthplaceInput"
                                                   placeholder="Place of birth">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="citizenshiptCombo"
                                               class="col-sm-2 control-label">Citizenship</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="citizenshipInput"
                                                   placeholder="Citizenship">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="heightInput" class="col-sm-2 control-label">Height(cm)</label>
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control" id="heightInput"
                                                   placeholder="Height">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="religionInput" class="col-sm-2 control-label">Religion</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="religionInput"
                                                   placeholder="Religion">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-md-12">
                                        <img src="imageView.php?image_id=<?php echo $_GET['id']; ?>" id="img-upload"
                                             alt="Profile Picture" class="img-thumbnail center-block" " width="304"
                                        height="236">
                                        <div class="input-group " style="padding-top: 5px;">
										<span class="input-group-btn" style="padding-top: 5px;">
												</span>
                                            <a href="editattachments.php?id=<?php echo $_GET['id']; ?>" class="btn btn-primary pull-right" style="margin-left: 135px;margin-bottom: 5px;">Change</a>
                                            
                                        </div>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-horizontal">
                                        <div class="form-group ">
                                            <label for="civilCombo" class="col-sm-2 control-label">Civil
                                                Status</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" id="civilCombo">
                                                    <option>Single</option>
                                                    <option>Married</option>
                                                    <option>Divorced</option>
                                                    <option>Separated</option>
                                                    <option>Widowed</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label for="weightInput" class="col-sm-2 control-label">Weight(kg)</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" id="weightInput"
                                                       placeholder="Weight">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="panel panel-primary" style="border-color: transparent !important;">
                        <div class="panel-heading">
                            Contact Details
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form class="form-horizontal">
                                        <div class="form-group ">
                                            <label for="cityAddressInput" class="col-sm-2 control-label">City
                                                Address</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="cityAddressInput"
                                                       placeholder="Current Address">
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label for="provAddressInput" class="col-sm-2 control-label">Provincial
                                                Address</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="provAddressInput"
                                                       placeholder="Provincial Address">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-lg-6">
                                    <form class="form-horizontal">
                                        <div class="form-group ">
                                            <label for="landlineNumber" class="col-sm-2 control-label">Landline</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="landlineNumber"
                                                       placeholder="Telephone Number">
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label for="mobileNumber" class="col-sm-2 control-label">Mobile</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="mobileNumber"
                                                       placeholder="Mobile Number">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <form class="form-horizontal">
                                        <div class="form-group ">
                                            <label for="spouseInput" class="col-sm-2 control-label">Spouse</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="spouseInput"
                                                       placeholder="Name of spouse">
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label for="spouseaddInput" class="col-sm-2 control-label">Address</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="spouseaddInput"
                                                       placeholder="Spouse Address">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-lg-6">

                                    <div class="form-horizontal">
                                        <div class="form-group ">
                                            <label for="noOfChildrenInput"
                                                   class="col-sm-2 control-label">Children</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" id="noOfChildrenInput"
                                                       placeholder="No. of children">
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <div class="col-sm-12">
                                                <input class="btn btn-success pull-right" type="button"
                                                       value="Add Children" data-toggle="modal"
                                                       data-target="#myModal">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <table class="table" id="childrenTable">
                                    <caption>Children Details</caption>
                                    <thead>
                                    <tr>

                                        <th>Full Name</th>
                                        <th>Birthdate</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody id="childrentableBody">
									<?php
										global $employeedb;
                                            $query = 'select * from children where empId='.$_GET['id'].' order by id desc';
                                             if ($result = $employeedb->query($query)) {
                                                 while ($e = $result->fetch_object()) {?>
												 <tr>
													<td><?php echo $e->fullname; ?></td>
													<td><?php echo $e->bdate; ?></td>
													<td>
													    <button type="button" alt="Modify"   data-id="<?php echo $e->id;?>" class="btn btn-warning btn-small edit">
                                                 <span class="glyphicon glyphicon-pencil"></span> </button>&nbsp;
                                                       <button type="button" alt="Remove"  data-id="<?php echo $e->id;?>" class="btn btn-danger btn-small remove">
                                                 <span class="glyphicon glyphicon-remove"></span> 
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
                                <div class="col-lg-6">
                                    <form class="form-horizontal">
                                        <div class="form-group ">
                                            <label for="fatherInput" class="col-sm-2 control-label">Father</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="fatherInput"
                                                       placeholder="Father's Name">
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label for="motherInput" class="col-sm-2 control-label">Mother</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="motherInput"
                                                       placeholder="Mother's Name">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-lg-6">
                                    <form class="form-horizontal">
                                        <div class="form-group ">
                                            <label for="fatherOccuInput"
                                                   class="col-sm-2 control-label">Occupation</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="fatherOccuInput"
                                                       placeholder="Father's Occupation">
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label for="motherOccuInput"
                                                   class="col-sm-2 control-label">Occupation</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="motherOccuInput"
                                                       placeholder="Mother's Occupation">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <form class="form-horizontal">
                                        <div class="form-group ">
                                            <label for="familyAddress"
                                                   class="col-sm-2 control-label">Family Address</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="familyAddress"
                                                       placeholder="Family Address">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <form class="form-horizontal">


                                        <div class="form-group ">
                                            <label for="pEmergencyInput"
                                                   class="col-sm-12 control-label">Person to be contacted IN CASE OF
                                                EMERGENCY</label>

                                        </div>
                                        <div class="form-group ">
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" id="pEmergencyInput"
                                                       placeholder="Person to be contacted IN CASE OF EMERGENCY">
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label for="languageInput"
                                                   class="col-sm-12 control-label">Language or Dialect you can Speak
                                                or Write</label>

                                        </div>
                                        <div class="form-group ">
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" id="languageInput"
                                                       placeholder="Language or Dialect you can Speak or Write">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-lg-6">
                                    <form class="form-horizontal">
                                        <div class="form-group ">
                                            <label for="cEmergencyInput"
                                                   class="col-sm-12 control-label">Contact Number</label>

                                        </div>
                                        <div class="form-group ">
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" id="cEmergencyInput"
                                                       placeholder="Contact # in case of EMERGENCY">
                                            </div>
                                        </div>


                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-primary" style="border-color: transparent !important;">
                        <div class="panel-heading">
                            Educational Background
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form class="form-horizontal">
                                        <div class="form-group ">
                                            <label for="elemInput"
                                                   class="col-sm-2 control-label">Elementary</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="elemInput"
                                                       placeholder="Elementary">
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label for="hsInput" class="col-sm-2 control-label">Highschool</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="hsInput"
                                                       placeholder="High School">
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label for="vocationalInput" class="col-sm-2 control-label">Vocatonal
                                            </label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="vocationalInput"
                                                       placeholder="Vocatonal">
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label for="collegeInput" class="col-sm-2 control-label">College</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="collegeInput"
                                                       placeholder="College">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-lg-6">
                                    <form class="form-horizontal">
                                        <div class="form-group ">
                                            <label for="elemYGradInput" class="col-sm-2 control-label">Year</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" id="elemYGradInput"
                                                       placeholder="Year Graduated">
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label for="hsYGradInput" class="col-sm-2 control-label">Year</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" id="hsYGradInput"
                                                       placeholder="Year Graduated">
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label for="vocationalYGradInput"
                                                   class="col-sm-2 control-label">Year</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" id="vocationalYGradInput"
                                                       placeholder="Year Graduated">
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label for="collegeYGradInput" class="col-sm-2 control-label">Year</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" id="collegeYGradInput"
                                                       placeholder="Year Graduated">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-12">

                                <div class="form-group ">
                                    <label for="specialskillInput" class="col-sm-2 control-label">Special Skills</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="specialskillInput"
                                               placeholder="Special Skills">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="panel panel-primary" style="border-color: transparent !important;">
                        <div class="panel-heading">
                            Employment Record
                            <div class="btn-group pull-right">

                                <input class="btn btn-primary btn-sm" type="button" value="Add Record"
                                       style="    margin-top: -5px;" data-toggle="modal"
                                       data-target="#emprecordModal">

                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <table class="table" id="employmentTableRecord">

                                    <thead>
                                    <tr>

                                        <th>From Date</th>
                                        <th>To Date</th>
                                        <th>Company</th>
                                        <th>Position</th>
                                        <th>Reason for Leaving</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody id="employmenttablebody">
										<?php
										global $employeedb;
                                            $query = 'select * from employment where empId='.$_GET['id'].' order by id desc';
                                             if ($result = $employeedb->query($query)) {
                                                 while ($e = $result->fetch_object()) {?>
												 <tr>
													<td><?php echo $e->eFrom; ?></td>
													<td><?php echo $e->eTo; ?></td>
													<td><?php echo $e->company; ?></td>
													<td><?php echo $e->position; ?></td>
													<td><?php echo $e->reason; ?></td>
													<td>
													    <button type="button" alt="Modify"   data-id="<?php echo $e->id;?>" class="btn btn-warning btn-small employmentEdit">
                                                 <span class="glyphicon glyphicon-pencil"></span> </button>&nbsp;
                                                       <button type="button" alt="Remove"  data-id="<?php echo $e->id;?>" class="btn btn-danger btn-small employmentRemove">
                                                 <span class="glyphicon glyphicon-remove"></span> 
													</td>
												 </tr>
												 <?php
												 }
											 }
										
									?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-primary" style="border-color: transparent !important;">
                        <div class="panel-heading">
                            Extra Details
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form class="form-horizontal">
                                        <div class="form-group ">
                                            <label for="sssInput"
                                                   class="col-sm-2 control-label">SSS</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="sssInput"
                                                       placeholder="SSS">
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label for="tinInput" class="col-sm-2 control-label">TIN</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="tinInput"
                                                       placeholder="TIN">
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label for="salaryInput" class="col-sm-2 control-label">Salary</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="salaryInput"
                                                       placeholder="Salary">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-lg-6">
                                    <form class="form-horizontal">
                                        <div class="form-group ">
                                            <label for="philhealthInput"
                                                   class="col-sm-2 control-label">PhilHealth</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="philhealthInput"
                                                       placeholder="Philhealth">
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label for="pagibigInput" class="col-sm-2 control-label">Pagibig</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="pagibigInput"
                                                       placeholder="Pagibig">
                                            </div>
                                        </div>
                                         <div class="form-group ">
                                            <label for="accountnumInput" class="col-sm-2 control-label">Account No.</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="accountnumInput"
                                                       placeholder="Account number">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
 <div class="panel panel-primary" style="border-color: transparent !important;">
                        <div class="panel-heading">
								Attachments
							    <div class="btn-group pull-right">
                                <a class="btn btn-primary btn-sm" style="margin-top: -5px;" href="extras.php?id=<?php echo $empId;?>">Add Attachment</a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <table class="table" id="employmentTableRecord">
                                    <thead>
                                    <tr>
                                        <th>File Name</th>
                                        
										<th>Date Uploaded</th>
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
													<td><?php echo $e->upload_date; ?></td>
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
                        </div>
                    </div>  
                     <div class="panel panel-primary" style="border-color: transparent !important;">
                        <div class="panel-heading">
                                Notes
                  
                                 <div class="btn-group pull-right">

                                <input class="btn btn-primary btn-sm" type="button" value="Add Notes"
                                       style="    margin-top: -5px;" data-toggle="modal"
                                       data-target="#commentsModal">

                            </div>
                        </div>
                        <div class="panel-body">

                            <div class="row">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Notes</th>
                                         <th>By</th>
                                        <th>Date</th>
                                                <?php  if($_SESSION['admin']=="1"){?>
                                        <th>Actions</th>
                                        <?php }?>
                                    </tr>
                                    </thead >
                                    <tbody id="commenttabledbody">
                                    <?php
                                           global $employeedb;
                                        $query = "SELECT * from comments where empId=".$_GET['id'] .' order by createdDate desc';
                                        if ($result = $employeedb->query($query)) {
                                                 while ($e = $result->fetch_object()) {?> 
                                                 <tr>
                                                        <td><?php echo $e->comment_text; ?></td>
                                                        <td><?php echo $e->writtenBy;?></td>
                                                        <td><?php echo $e->createdDate;?></td>
                                                       <?php  if($_SESSION['admin']=="1"){?>
                                                        <td>

   <button type="button" alt="Remove" data-id="<?php echo $e->id;?>" class="btn btn-danger btn-small removeComment">
                                                 <span class="glyphicon glyphicon-remove"></span> 
                                                    </button>

                                                        </td><?php }?>
                                                 </tr>
                           
                                    <?php 
                                    }
                                        }
                                    ?>
                              
                                    </tbody>
                                </table>
                        
                            </div>
                        </div>
                    </div>               
			   </div>
                <div class="panel-footer">
                    <input class="btn btn-primary" type="button" value="Save Changes" id="submitBtn">
                    <input class="btn btn-default" type="button" value="Back" onclick="window.location.href='home.php';" >
                </div>
            </div>

        </div>
    </div>
</div>

<!-- /#wrapper -->
</div>
<!-- edit modal -->
<div class="modal fade" id="editChildModal" tabindex="-1" role="dialog" aria-labelledby="editchildrenlabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="editchildrenlabel">Edit Child details</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <input type="hidden" id="editChildrenHidden"/>
                    <form>
                        <div class="form-group" style="padding-bottom: 30px;">
                            <label for="editchildfullname" class="col-sm-2 control-label">Fullname</label>
                            <div class="col-sm-10" style="padding-right: 15px;">
                                <input type="text" class="form-control" id="editchildfullname"
                                       placeholder="name of children">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="editchildbdate" class="col-sm-2 control-label">Birthdate</label>
                            <div class="col-sm-10 input-group date form_date" data-date=""
                                 data-date-format="dd MM yyyy" data-link-field="editdtpchildbdate"
                                 data-link-format="yyyy-mm-dd"
                                 style="    padding-right: 15px;">
                                <input id="editchildbdate" class="form-control" size="16" type="text" value="" readonly
                                       style="margin-left:15px;width:97%;">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-remove"
                                                                      style="z-index:100;"></span></span>
                                <span class="input-group-addon"><span
                                            class="glyphicon glyphicon-calendar"></span></span>
                            </div>
                            <input type="hidden" id="editdtpchildbdate" value=""/><br/>
                        </div>
                    </form>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" >Close
                </button>
                <button type="button" class="btn btn-primary" id="btnEditChildren">Save changes</button>
            </div>
        </div>
    </div>
</div>
<!-- comments modal -->
<div class="modal fade" id="commentsModal" tabindex="-1" role="dialog" aria-labelledby="commentsModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="commentsModalLabel">Add Comments</h4>
            </div>
            <div class="modal-body">
                <div class="row" style="padding:10px;"  >
                  
                      <div class="input-group"> 
                            <input class="form-control input-lg" id="commentbox" placeholder="Add a comment" type="text" onkeypress="return insertComment(event)">
                            <span class="input-group-addon">
                            <a href="#" id="insertCommentbtn"><i class="fa fa-edit"></i></a>  
                    </span>
                    </div>
       
                </div>
                

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close
                </button>
            </div>
        </div>
    </div>
</div>
<!-- children Add Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Add Children</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                  
                    <form>
                        <div class="form-group" style="padding-bottom: 30px;">
                            <label for="childfullname" class="col-sm-2 control-label">Fullname</label>
                            <div class="col-sm-10" style="padding-right: 15px;">
                                <input type="text" class="form-control" id="childfullname"
                                       placeholder="name of children">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="childbdate" class="col-sm-2 control-label">Birthdate</label>
                            <div class="col-sm-10 input-group date form_date" data-date=""
                                 data-date-format="dd MM yyyy" data-link-field="dtpchildbdate"
                                 data-link-format="yyyy-mm-dd"
                                 style="    padding-right: 15px;">
                                <input id="childbdate" class="form-control" size="16" type="text" value="" readonly
                                       style="margin-left:15px;width:97%;">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-remove"
                                                                      style="z-index:100;"></span></span>
                                <span class="input-group-addon"><span
                                            class="glyphicon glyphicon-calendar"></span></span>
                            </div>
                            <input type="hidden" id="dtpchildbdate" value=""/><br/>
                        </div>
                    </form>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" >Close
                </button>
                <button type="button" class="btn btn-primary" id="btnSaveChildren">Add Children</button>
            </div>
        </div>
    </div>
</div>
<!--employment record modal-->
<div class="modal fade" id="emprecordModal" tabindex="-1" role="dialog" aria-labelledby="empModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="empModalLabel">Add Employment Record</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                 
                    <div class="col-md-6">
					<div class="form-group">
                            <label for="frominput" class="col-sm-2 control-label">From</label>
                            <div class="col-sm-10 input-group date form_date" data-date=""
                                 data-date-format="dd MM yyyy" data-link-field="dtpprevfrom"
                                 data-link-format="yyyy-mm-dd"
                                 style="    padding-right: 15px;">
                                <input id="frominput" class="form-control" size="16" type="text" value="" readonly
                                       style="margin-left:15px;width:97%;">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-remove"
                                                                      style="z-index:100;"></span></span>
                                <span class="input-group-addon"><span
                                            class="glyphicon glyphicon-calendar"></span></span>
                            </div>
                            <input type="hidden" id="dtpprevfrom" value=""/><br/>
                        </div>
                    </div>
                    <div class="col-md-6">
							<div class="form-group">
                            <label for="toInput" class="col-sm-2 control-label">From</label>
                            <div class="col-sm-10 input-group date form_date" data-date=""
                                 data-date-format="dd MM yyyy" data-link-field="dtpprevfrom"
                                 data-link-format="yyyy-mm-dd"
                                 style="    padding-right: 15px;">
                                <input id="toInput" class="form-control" size="16" type="text" value="" readonly
                                       style="margin-left:15px;width:97%;">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-remove"
                                                                      style="z-index:100;"></span></span>
                                <span class="input-group-addon"><span
                                            class="glyphicon glyphicon-calendar"></span></span>
                            </div>
                            <input type="hidden" id="dtpprevfrom" value=""/><br/>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="prevcompanyInput">Company</label>
                            <input type="email" class="form-control" id="prevcompanyInput" placeholder="Company">
                        </div>
                        <div class="form-group">
                            <label for="epositionInput">Position</label>
                            <input type="email" class="form-control" id="epositionInput" placeholder="Position">
                        </div>
                        <div class="form-group">
                            <label for="reasonInput">Reason</label>
                            <textarea class="form-control" rows="3" id="reasonInput"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="addemploymentbtn">Add Record</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="editemprecordModal" tabindex="-1" role="dialog" aria-labelledby="editempModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="editempModalLabel">Edit Employment Record</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <input type="hidden" id="ehidfield" />
                    <div class="col-md-6">
						<div class="form-group">
                            <label for="editfrominput" class="col-sm-2 control-label">From</label>
                            <div class="col-sm-10 input-group date form_date" data-date=""
                                 data-date-format="dd MM yyyy" data-link-field="dtpeditprevfrom"
                                 data-link-format="yyyy-mm-dd"
                                 style="    padding-right: 15px;">
                                <input id="editfrominput" class="form-control" size="16" type="text" value="" readonly
                                       style="margin-left:15px;width:97%;">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-remove"
                                                                      style="z-index:100;"></span></span>
                                <span class="input-group-addon"><span
                                            class="glyphicon glyphicon-calendar"></span></span>
                            </div>
                            <input type="hidden" id="dtpeditprevfrom" value=""/><br/>
                        </div>
                    </div>
                    <div class="col-md-6">
                   
							<div class="form-group">
                            <label for="edittoInput" class="col-sm-2 control-label">From</label>
                            <div class="col-sm-10 input-group date form_date" data-date=""
                                 data-date-format="dd MM yyyy" data-link-field="dtpeditprevto"
                                 data-link-format="yyyy-mm-dd"
                                 style="    padding-right: 15px;">
                                <input id="edittoInput" class="form-control" size="16" type="text" value="" readonly
                                       style="margin-left:15px;width:97%;">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-remove"
                                                                      style="z-index:100;"></span></span>
                                <span class="input-group-addon"><span
                                            class="glyphicon glyphicon-calendar"></span></span>
                            </div>
                            <input type="hidden" id="dtpeditprevto" value=""/><br/>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="editcompanyInput">Company</label>
                            <input type="email" class="form-control" id="editcompanyInput" placeholder="Company">
                        </div>
                        <div class="form-group">
                            <label for="editepositionInput">Position</label>
                            <input type="email" class="form-control" id="editepositionInput" placeholder="Position">
                        </div>
                        <div class="form-group">
                            <label for="editreasonInput">Reason</label>
                            <textarea class="form-control" rows="3" id="editreasonInput"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="editemploymentbtn">Save changes</button>
            </div>
        </div>
    </div>
</div>
<?php require_once 'layouts/footer.php'; ?>

<script>
	//global var
	var control_click;
	//attachment remove
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
    //employmenttablebody
    $('#addemploymentbtn').on('click', function (e) {
			var eFrom=$('#frominput').val()
				if(eFrom===''){
			$('#frominput').css('border-color', 'red');
			showAlert('Input when did you start working');
			return;
		}else{$('#frominput').css('border-color', '');}
		
			var eTo=$('#toInput').val();
				if(eTo===''){
			$('#toInput').css('border-color', 'red');
			showAlert('Input when did you leave your previous work');
			return;
		}else{$('#toInput').css('border-color', '');}
		
			var ecompany=$('#prevcompanyInput').val();		
				if(ecompany===''){
			$('#prevcompanyInput').css('border-color', 'red');
			showAlert('Previous company is required');
			return;
		}else{$('#prevcompanyInput').css('border-color', '');}
		
			var position=$('#epositionInput').val();
							if(position===''){
			$('#epositionInput').css('border-color', 'red');
			showAlert('Previous position is required');
			return;
		}else{$('#epositionInput').css('border-color', '');}
		
			var reason=$('#reasonInput').val();
			
							if(reason===''){
			$('#reasonInput').css('border-color', 'red');
			showAlert('Reason for leaving previous work is required');
			return;
		}else{$('#reasonInput').css('border-color', '');}
			var e_empid=$('#empIdInput').val();
			$.ajax({
				url:'controllers/employmentController.php',
				type:'POST',
				dataType:'JSON',
				data:{
					request_type:1,
					empId:e_empid,
					eFrom:eFrom,
					eTo:eTo,
					position:position,
					reason:reason,
					company:ecompany
				},
				success:function(data){
					if(data.Success){
						
					   var markup = "<tr>" +
								"<td>" + $('#frominput').val() + "</td>" +
								"<td>" + $('#toInput').val() + "</td>" +
								"<td>" + $('#companyInput').val() + "</td>" +
								"<td>" + $('#epositionInput').val() + "</td>" +
								"<td>" + $('#reasonInput').val() + "</td>" +
								"<td><button type='button' class='btn btn-warning btn-small employmentEdit' data-id='"+data.params +"' ><span class='glyphicon glyphicon-pencil'></span></button>&nbsp;" +
								"<button type='button' class='btn btn-danger btn-small employmentRemove' data-id='"+data.params +"' ><span class='glyphicon glyphicon-remove'></span></button>" +
								"</td>"
							"</tr>";
							$('#employmenttablebody').append(markup);
							$('#ehidfield').val('');
						
							$.toast({
									heading: 'Information',
									text:data.Message,
									showHideTransition: 'slide',
									icon: 'success',
									position:'top-right'
								});		
								$('#frominput').val('');
							$('#toInput').val('');
							$('#prevcompanyInput').val('');
							$('#epositionInput').val('');
							$('#reasonInput').val('');
							$('#empIdInput').val('');
					}
				}
			});
     
    });
    $(document).on('click','.employmentRemove',function(e){
			var tr=$(this);
		var e_Id=$(this).data('id');
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
									url:'controllers/employmentController.php',
									type:'post',
									dataType:'JSON',
									data:{request_type:2,eId:e_Id},
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
	$(document).on('click','.employmentEdit',function(e){
		      var fromto = $(this).closest('tr').children('td:eq(0)').text();
				var to = $(this).closest('tr').children('td:eq(1)').text();
				var company = $(this).closest('tr').children('td:eq(2)').text();
				var position = $(this).closest('tr').children('td:eq(3)').text();
				var reason = $(this).closest('tr').children('td:eq(4)').text();
				var id=$(this).data('id');
					control_click=$(this);
					$('#ehidfield').val(id);
				 $('#editfrominput').val(fromto);
				$('#edittoInput').val(to);
				$('#editcompanyInput').val(company);
				$('#editepositionInput').val(position);
				$('#editreasonInput').val(reason);
				 $('#editemprecordModal').modal('show');
	});
	$('#editemploymentbtn').on('click',function(e){
		
				var fromto =$('#editfrominput').val();
				if(fromto===''){
				$('#editfrominput').css('border-color', 'red');
				showAlert('Input when did you start working');
				return;
			}else{$('#editfrominput').css('border-color', '');}
			
				var to =$('#edittoInput').val();
				if(to===''){
				$('#edittoInput').css('border-color', 'red');
				showAlert('Input when did you leave your previous work');
				return;
			}else{$('#edittoInput').css('border-color', '');}
				var company = $('#editcompanyInput').val();
				if(company===''){
				$('#editcompanyInput').css('border-color', 'red');
				showAlert('Previous company is required');
				return;
			}else{$('#editcompanyInput').css('border-color', '');}
			
				var position =$('#editepositionInput').val();
				if(position===''){
				$('#editepositionInput').css('border-color', 'red');
				showAlert('Previous position is required');
				return;
			}else{$('#editepositionInput').css('border-color', '');}
			
				var reason =$('#editreasonInput').val();
				if(reason===''){
				$('#editreasonInput').css('border-color', 'red');
				showAlert('Reason for leaving your previous work is required');
				return;
			}else{$('#editreasonInput').css('border-color', '');}
			
				var eid=$('#ehidfield').val();
					
				
				$.ajax({
					url:'controllers/employmentController.php',
					type:'POST',
					dataType:'JSON',
					data:{
						request_type:3,
						id:eid,
						eFrom:fromto,
						eTo:to,
						position:position,
						reason:reason,
						company:company
					},
					success:function(data){
							if(data.Success){
							control_click.parent().parent().remove();
									$('#editemprecordModal').modal('hide');
									$('#ehidfield').val('');
									   $.toast({
										heading: 'Information',
										text:data.Message ,
										showHideTransition: 'slide',
										icon: 'success',
										position:'top-right'
								});
								  var markup = "<tr>" +
								"<td>" + fromto + "</td>" +
								"<td>" + to + "</td>" +
								"<td>" + company + "</td>" +
								"<td>" + position + "</td>" +
								"<td>" + reason+ "</td>" +
								"<td><button type='button' class='btn btn-warning btn-small employmentEdit' data-id='"+eid+"' ><span class='glyphicon glyphicon-pencil'></span></button>&nbsp;" +
								"<button type='button' class='btn btn-danger btn-small employmentRemove' data-id='"+eid +"' ><span class='glyphicon glyphicon-remove'></span></button>" +
								"</td>"
							"</tr>";
							$('#employmenttablebody').append(markup);
						}
					}
				});
				 
				
				
				
				
	});
	
	
	$(document).on("click", "#eeditbtn", function () {
		
        //initialize value set to null
        $('#ehidfield').val('');
        var fromto = $(this).closest('tr').children('td:eq(0)').text();
        var to = $(this).closest('tr').children('td:eq(1)').text();
        var company = $(this).closest('tr').children('td:eq(2)').text();
        var position = $(this).closest('tr').children('td:eq(3)').text();
        var reason = $(this).closest('tr').children('td:eq(4)').text();

        $('#frominput').val(fromto);
        $('#toInput').val(to);
        $('#companyInput').val(company);
        $('#epositionInput').val(position);
        $('#reasonInput').val(reason);

        var markup = "<tr>" +
            "<td>" + fromto + "</td>" +
            "<td>" + to + "</td>" +
            "<td>" + company + "</td>" +
            "<td>" + position + "</td>" +
            "<td>" + reason + "</td>" +
            "<td><button type='button' class='btn btn-success btn-sm' id='eeditbtn'><span class='glyphicon glyphicon-pencil'></span></button>&nbsp;" +
            "<button type='button' class='btn btn-danger btn-sm'  onclick='$(this).parent().parent().remove();'><span class='glyphicon glyphicon-trash'></span></button>" +
            "</td>"
        "</tr>";

        $('#ehidfield').val(markup);
        $(this).closest('tr').remove();
        $('#emprecordModal').modal('show');
    });
	$(document).on('click','.remove',function(){

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
			url:'controllers/childrenController.php',
			type:'post',
			dataType:'JSON',
			data:{request_type:3,cId:uId},
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
	$(document).on('click','.edit',function(){
		var uId=$(this).data('id');
		var fullname = $(this).closest('tr').children('td:eq(0)').text();
        var bdate = $(this).closest('tr').children('td:eq(1)').text();

        $('#editchildfullname').val(fullname);
        $('#editchildbdate').val(bdate);
		$('#editChildrenHidden').val(uId);
		$('#editChildModal').modal('show');
		control_click=$(this);
	});
	$('#btnEditChildren').on('click',function(e){
		var fullname=$('#editchildfullname').val();
        var bdate=$('#editchildbdate').val();
		
			if(fullname===''){
			$('#editchildfullname').css('border-color', 'red');
			showAlert('Child name is required');
			return;
		}else{$('#editchildfullname').css('border-color', '');}
		
		if(bdate===''){
			$('#editchildbdate').css('border-color', 'red');
			showAlert('Child Birthdate is required');
			return;
		}else{$('#editchildbdate').css('border-color', '');}
		var cId=$('#editChildrenHidden').val();
		$.ajax({
			url:'controllers/childrenController.php',
			type:'POST',
			dataType:'JSON',
			data:{request_type:1,
				fullname:fullname,
				bdate:bdate,
				id:cId
				},
			success:function(data){
				if(data.Success){
					control_click.parent().parent().remove();
						markup = "<tr>" +

							"<td>" +fullname + "</td>" +
							"<td>" + bdate + "</td>" +
							"<td><button type='button' class='btn btn-warning btn-small edit' ><span class='glyphicon glyphicon-pencil'></span></button>&nbsp;" +
							"<button type='button' class='btn btn-danger btn-small remove' data-id='"+ cId +"' ><span class='glyphicon glyphicon-remove'></span></button>" +
							"</td>"
						"</tr>"
						
						$('#childrentableBody').append(markup);
					
					
					$('#editChildModal').modal('hide');
					$('#editChildrenHidden').val('');
						$('#editchildfullname').val('');
					$('#editchildbdate').val('');
					   $.toast({
                        heading: 'Information',
                        text:data.Message ,
                        showHideTransition: 'slide',
                        icon: 'success',
                        position:'top-right'
		
                    });
				}
					
				
			}
		});
	});
	$('#btnSaveChildren').on('click', function (e) {
		
		var fullname=$('#childfullname').val();
		var bdate=$('#childbdate').val();
		
		if(fullname===''){
			$('#childfullname').css('border-color', 'red');
			showAlert('Child name is required');
			return;
		}else{$('#childfullname').css('border-color', '');}
		if(bdate===''){
			$('#childbdate').css('border-color', 'red');
			showAlert('Child Birthdate is required');
			return;
		}else{$('#childbdate').css('border-color', '');}
		
		var empId=$('#empIdInput').val();
		var markup="";
		$.ajax({
			url:'controllers/childrenController.php',
			type:'POST',
			dataType:'JSON',
			data:{request_type:2,fullname:fullname,bdate:bdate,empId:empId},
			success:function(data){
				if(data.Success){
						var count = $('#childrentableBody').children('tr').length + 1;
						markup = "<tr>" +

							"<td>" + $('#childfullname').val() + "</td>" +
							"<td>" + $('#childbdate').val() + "</td>" +
							"<td><button type='button' class='btn btn-warning btn-small edit' ><span class='glyphicon glyphicon-pencil'></span></button>&nbsp;" +
							"<button type='button' class='btn btn-danger btn-small remove' data-id='"+ data.params +"' ><span class='glyphicon glyphicon-remove'></span></button>" +
							"</td>"
						"</tr>"
						
						$('#childrentableBody').append(markup);
						$('#noOfChildrenInput').val(count);		
						 $('#childfullname').val('');
						 $('#childbdate').val('');
							$.toast({
									heading: 'Information',
									text:data.Message,
									showHideTransition: 'slide',
									icon: 'success',
									position:'top-right'
								});						
				}
			}
		});
        
    });

    $('#submitBtn').on('click', function (e) {
     var empId=$('#employeenoinput').val();
       if(empId===''){
            $('#employeenoinput').css('border-color', 'red');
            showAlert('Employee number is required');
            return;
        }else{$('#employeenoinput').css('border-color', '');}

        var pos = $('#positionInput').val();
		if(pos===''){
			$('#positionInput').css('border-color', 'red');
			showAlert('Position is required');
			return;
		}else{$('#positionInput').css('border-color', '');}
		

		 var fname = $('#firstnameInput').val();
		if(fname===''){
			$('#firstnameInput').css('border-color', 'red');
			showAlert('Firstname is required');
			return;
		}else{$('#firstnameInput').css('border-color', '');}
		
      
		var mname = $('#middlenameInput').val();
		if(mname===''){
			$('#middlenameInput').css('border-color', 'red');
			showAlert('Middlename is required');
			return;
		}else{$('#middlenameInput').css('border-color', '');}
		
       
		 var lastnameInput = $('#lastnameInput').val();
		if(lastnameInput===''){
			$('#lastnameInput').css('border-color', 'red');
			showAlert('Lastname is required');return;
		}else{$('#lastnameInput').css('border-color', '');}
		
        var gender = $('#genderCombo').val();
		
		 var bdate = $('#birthdateInput').val();
		if(bdate===''){
			$('#birthdateInput').css('border-color', 'red');
			showAlert('Birthdate is required');return;
		}else{$('#birthdateInput').css('border-color', '');}
       
        var citizenship = $('#citizenshipInput').val();
		if(citizenship===''){
			$('#citizenshipInput').css('border-color', 'red');
			showAlert('Citizenship is required');return;
		}else{$('#citizenshipInput').css('border-color', '');}
		
        var height = $('#heightInput').val();
        var weight = $('#weightInput').val();
		
        var religion = $('#religionInput').val();
		if(religion==''){
			$('#religionInput').css('border-color', 'red');
			showAlert('Religion is required');return;
		}else{$(religionInput).css('border-color', '');}
		
        var civilstatus = $('#civilCombo').val();
        var spouse = $('#spouseInput').val();
        var spouse_address = $('#spouseaddInput').val();
        var children = $('#noOfChildrenInput').val();
        var father = $('#fatherInput').val();
        var father_occu = $('#fatherOccuInput').val();
        var mother = $('#motherInput').val();
        var mother_occu = $('#motherInput').val();
        var family_add = $('#familyAddress').val();
        var pemergency = $('#pEmergencyInput').val();
        var cemergency = $('#cEmergencyInput').val();
        var language = $('#languageInput').val();
        var elem = $('#elemInput').val();
        var elemyear = $('#elemYGradInput').val();
        var hs = $('#hsInput').val();
        var hsyear = $('#hsYGradInput').val();
        var vocational = $('#vocationalInput').val();
        var vocationalyear = $('#vocationalYGradInput').val();
        var college = $('#collegeInput').val();
        var collegeyear = $('#collegeYGradInput').val();
		
        var sss = $('#sssInput').val();
			if(sss===''){
			$('#sssInput').css('border-color', 'red');
			showAlert('SSS is required');
			return;
		}else{$(sssInput).css('border-color', '');}
		
		
        var philhealth = $('#philhealthInput').val();
			if(philhealth===''){
			$('#philhealthInput').css('border-color', 'red');
			showAlert('Philhealth is required');return;
		}else{$('#philhealthInput').css('border-color', '');}
		
        var tin = $('#tinInput').val();
		if(tin===''){
					$('#tinInput').css('border-color', 'red');
					showAlert('TIN number is required');return;
		}else{$('#tinInput').css('border-color', '');}
		
        var pagibig = $('#pagibigInput').val();
		if(pagibig===''){
			$('#pagibigInput').css('border-color', 'red');
			showAlert('Pagibig is required');return;
		}else{$('#pagibigInput').css('border-color', '');}
		
        var salary = $('#salaryInput').val();
        var cityAddressInput = $('#cityAddressInput').val();
        var provAddressInput = $('#provAddressInput').val();
        var landline = $('#landlineNumber').val();
		
        var mobile = $('#mobileNumber').val();
		if(mobile===''){
			$('#mobileNumber').css('border-color', 'red');
			showAlert('Mobile number is required');return;
		}else{$('#mobileNumber').css('border-color', '');}
		
        var birthplace = $('#birthplaceInput').val();
		if(birthplace===''){
		$('#birthplaceInput').css('border-color', 'red');
		showAlert('Place of birth is required');return;
		}else{$('#birthplaceInput').css('border-color', '');}
		
        var specialskill = $('#specialskillInput').val();
		var realId=$('#empIdInput').val();
        var newId=$('#employeenoinput').val();
		var company=$('#companyInput').val();
        var accountnumber=$('#accountnumInput').val();

        $.ajax({
            url: 'controllers/employeeController.php',
            type: 'POST',
             dataType:'JSON',
            data: {
                request_type: 4,
				realId:realId,
                newId:newId,
                telephone: landline,
                cellphone: mobile,
                position: pos,
                fname: fname,
                mname: mname,
                gender: gender,
                dob: bdate,
                pob: birthplace,
                citizenship: citizenship,
                height: height,
                weight: weight,
                religion: religion,
                civilstat: civilstatus,
                spouse: spouse,
                spouseAdd: spouse_address,
                noOfChildren: children,
                fatherName: father,
                fatherOccu: father_occu,
                motherName: mother,
                motherOccu: mother_occu,
                parentAddress: family_add,
                pemergency: pemergency,
                cemergency: cemergency,
                langspoken: language,
                elementary: elem,
                eyeargrad: elemyear,
                highschool: hs,
                hyeargrad: hsyear,
                vocational: vocational,
                vyeargrad: vocationalyear,
                college: college,
                cyeargrad: collegeyear,
                sss: sss,
                philhealth: philhealth,
                tin: tin,
                pagibig: pagibig,
                salary: salary,
                lastnameInput: lastnameInput,
                cityAddressInput: cityAddressInput,
                provAddressInput: provAddressInput,
                specialskill: specialskill,
			company:company,
            accountNum:accountnumber

            },
            success: function (data) {
			
                    if(data.Success==true){
                     $.toast({
                        heading: 'Information',
                        text:data.Message,
                        showHideTransition: 'slide',
                        icon: 'success',
                        position:'top-right',
						    afterHidden: function () {
                             window.location.href="home.php";
                        }
                        });
                     }else{

                        showAlert(data.Message);
                        return;
                     }
            }
        });
    });

    $(document).ready(function () {
		  Pace.start();
		//fetch data to modify
		var empId=$('#empIdInput').val();
		 $.ajax({
            url: 'controllers/employeeController.php',
            type: 'POST',
            data: {request_type:3,employeeId:empId},
			dataType:'JSON',
			success:function(e){
				
				setValues(e);
			}
		 });
		   Pace.stop();
        //initialize value
        $('#todayDateInput').val(new moment().format('L'));
        //datetimepicker initialize
        $('.form_date').datetimepicker({
            language: 'es',
            weekStart: 1,
            todayBtn: 1,
            autoclose: 1,
            todayHighlight: 1,
            startView: 2,
            minView: 2,
            forceParse: 0
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
	function setValues(data){

        try{
                  $('#employeenoinput').val(data.empId);
                    $('#companyInput').val(data.current_company);
                    $('#accountnumInput').val(data.accountNum);
                    $('#positionInput').val(data.position);
                    $('#firstnameInput').val(data.fname);
                    $('#middlenameInput').val(data.mname);
                     $('#lastnameInput').val(data.lname);
                     $('#genderCombo').val(data.gender);
                    $('#birthdateInput').val(data.dob);
                   $('#citizenshipInput').val(data.citizenship);
                   $('#heightInput').val(data.height);
                    $('#weightInput').val(data.weight);
                   $('#religionInput').val(data.religion);
                    $('#civilCombo').val(data.civilstat);
                   $('#spouseInput').val(data.spouse);
                    $('#spouseaddInput').val(data.spouseAdd);
                    $('#noOfChildrenInput').val(data.noOfChildren);
                    $('#fatherInput').val(data.fatherName);
                   $('#fatherOccuInput').val(data.fatherOccu);
                   $('#motherInput').val(data.motherName);
                   $('#motherOccuInput').val(data.motherOccu);
                   $('#familyAddress').val(data.parentAddress);
                   $('#pEmergencyInput').val(data.pemergency);
                   $('#cEmergencyInput').val(data.cemergency);
                   $('#languageInput').val(data.langspoken);
                   $('#elemInput').val(data.elementary);
                   $('#elemYGradInput').val(data.eyeargrad);
                   $('#hsInput').val(data.highschool);
                   $('#hsYGradInput').val(data.hyeargrad);
                    $('#vocationalInput').val(data.vocational);
                   $('#vocationalYGradInput').val(data.vyeargrad);
                   $('#collegeInput').val(data.college);
                    $('#collegeYGradInput').val(data.cyeargrad);
                    $('#sssInput').val(data.sss);
                    $('#philhealthInput').val(data.philhealth);
                   $('#tinInput').val(data.tin);
                    $('#pagibigInput').val(data.pagibig);
                   $('#salaryInput').val(data.salary);
                    $('#cityAddressInput').val(data.cityAddress);
                    $('#provAddressInput').val(data.provAddress);
                    $('#landlineNumber').val(data.telephone);
                   $('#mobileNumber').val(data.cellphone);
                    $('#birthplaceInput').val(data.pob);
                    $('#specialskillInput').val(data.specialskill);
        }catch(e){
              $.toast({
                        heading: 'Error',
                        text:'Error Encountered...Please wait while we redirect you.',
                        showHideTransition: 'slide',
                        icon: 'error',
                        position:'bottom-right',
                            afterHidden: function () {
                             window.location.href="home.php";
                        }
                        });
        }
       
	}
    $('#insertCommentbtn').on('click',function(e){
        e.preventDefault();

        var comment=$('#commentbox').val();
        var empId=$('#empIdInput').val();
        var user=$('#usernameInput').val();
        $.ajax({
            url:'controllers/employeeController.php',
            type:'POST',
            data:{request_type:6,empId:empId,comment:comment,user:user},
              dataType:'JSON',
            success:function(data){
             
                if(data.Success){
                    var markup= "<tr>";
                    markup +="<td>"+ comment+ "</td>";
                    markup +="<td>"+ user+ "</td>";
                    markup +="<td>"+ moment().format('MMMM Do YYYY, h:mm:ss a');+ "</td>";
                    if(data.isAdmin==1){
                    markup +="<td>";
                    markup +="<button type='button' alt='Remove' data-id='"+data.params +"' class='btn btn-danger btn-small removeComment'>";
                    markup +="<span class='glyphicon glyphicon-remove'></span> ";
                    markup+="</button>  </td>";
                }

                     $('#commenttabledbody').prepend(markup);

                     $.toast({
                                    heading: 'Information',
                                    text:data.Message,
                                    showHideTransition: 'slide',
                                    icon: 'success',
                                    position:'top-right'
                                });     
                                $('#commentbox').val('');
                    var badge=parseInt($('#noOfCommentsLabel').text()) +1;
                    $('#noOfCommentsLabel').text(badge);
                }
            }
            
        });
    });
    $('.removeComment').on('click',function(e){
        var id=$(this).data('id');
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
            url:'controllers/employeeController.php',
            type:'POST',
            data:{request_type:7,empId:id},
            dataType:'JSON',
            success:function(data){
                if(data.Success){
                    tr.parent().parent().remove();
                             $.toast({
                                    heading: 'Information',
                                    text:data.Message,
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
    function insertComment(e){
         if (e.keyCode == 13) {
          $('#insertCommentbtn').click();
      }
    }
</script>
</body>

</html>