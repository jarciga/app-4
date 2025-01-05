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


<!-- Page Content -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="page-header">New Employee</h4>
            </div>
        </div>
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Employee Form
                </div>
                <div class="panel-body">

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
                                        <label for="lastnameInput" class="col-sm-2 control-label">Last Mame</label>
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
                                                   placeholder="Height in cm">
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
<!--                                        <img src="http://ith-india.com/images/speakers/male.jpg" id="img-upload"-->
<!--                                             alt="Male" class="img-thumbnail center-block" " width="304"-->
<!--                                        height="236">-->
<!--                                        <div class="input-group " style="padding-top: 5px;">-->
<!--										<span class="input-group-btn" style="padding-top: 5px;">-->
<!--												</span>-->
<!--                                            <span class="btn btn-default btn-file" style="float:right;">-->
<!--														Browse… <input type="file" id="imgInp">-->
<!--													</span>-->
<!---->
<!--                                            <input type="text" class="form-control" readonly="" style="-->
<!--    visibility: hidden;-->
<!--">-->
<!--                                        </div>-->

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
                                                       placeholder="Weight in kg">
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
                                                       data-target="#myModal" id="showchildrenmodalbtn">
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

                                        <th>Fullname</th>
                                        <th>Birthdate</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody id="childrentableBody">

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
                                                   class="col-sm-12 control-label">Contact number</label>

                                        </div>
                                        <div class="form-group ">
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" id="cEmergencyInput"
                                                       placeholder="Contact No. in case of EMERGENCY">
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
                                       data-target="#emprecordModal" id="showerecordbtn">

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
                                        <th>Reason for Living</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody id="employmenttablebody">
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
                                                <input type="number" class="form-control" id="salaryInput"
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
                                                       placeholder="PhilHealth">
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label for="pagibigInput" class="col-sm-2 control-label">Pag-IBIG</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="pagibigInput"
                                                       placeholder="Pag-IBIG">
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label for="accountnuminput" class="col-sm-2 control-label">Account No.</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="accountnuminput"
                                                       placeholder="Account number">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <input class="btn btn-primary" type="button" value="ADD" id="submitBtn">
                    <input class="btn btn-default" type="button" value="Back" onclick="window.location.href='home.php';" >
                </div>
            </div>

        </div>
    </div>
</div>

<!-- /#wrapper -->
</div>

<!-- children Add Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
             
                <h4 class="modal-title" id="myModalLabel">Add Children</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <input type="hidden" id="editChildrenHidden"/>
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
                <button type="button" class="btn btn-default" data-dismiss="modal" id="childmodalclosebtn">Close
                </button>
                <button type="button" class="btn btn-primary" id="btnSaveChildren">Add Children</button>
            </div>
        </div>
    </div>
</div>
<!--employment record modal-->
<div class="modal fade" id="emprecordModal" tabindex="-1" role="dialog" aria-labelledby="empModalLabel" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
              <!--   <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="visibility:hidden;"><span aria-hidden="true">&times;</span>
                </button> -->
                <h4 class="modal-title" id="empModalLabel">Add Employment Record</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <input type="hidden" id="ehidfield"/>
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
                            <label for="toInput" class="col-sm-2 control-label">To</label>
                            <div class="col-sm-10 input-group date form_date" data-date=""
                                 data-date-format="dd MM yyyy" data-link-field="dtpprevto"
                                 data-link-format="yyyy-mm-dd"
                                 style="    padding-right: 15px;">
                                <input id="toInput" class="form-control" size="16" type="text" value="" readonly
                                       style="margin-left:15px;width:97%;">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-remove"
                                                                      style="z-index:100;"></span></span>
                                <span class="input-group-addon"><span
                                            class="glyphicon glyphicon-calendar"></span></span>
                            </div>
                            <input type="hidden" id="dtpprevto" value=""/><br/>
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
                <button type="button" class="btn btn-default" data-dismiss="modal" id="eclosebtn">Close</button>
                <button type="button" class="btn btn-primary" id="addemploymentbtn">Add Record</button>
            </div>
        </div>
    </div>
</div>

<?php require_once 'layouts/footer.php'; ?>

<script>

    //employmenttablebody
    $('#addemploymentbtn').on('click', function (e) {
		
			 if($('#frominput').val()===''){
			$('#frominput').css('border-color', 'red');
			showAlert('Input when did you start working');
			return;
		}else{$('#frominput').css('border-color', '');}
		
		if($('#toInput').val()===''){
			$('#toInput').css('border-color', 'red');
			showAlert('Input when did you leave your previous work');
			return;
		}else{$('#toInput').css('border-color', '');}
		
		if($('#prevcompanyInput').val()===''){
			$('#prevcompanyInput').css('border-color', 'red');
			showAlert('Previous Company is required');
			return;
		}else{$('#prevcompanyInput').css('border-color', '');}
		
		if($('#epositionInput').val()===''){
			$('#epositionInput').css('border-color', 'red');
			showAlert('Previous Position is required');
			return;
		}else{$('#epositionInput').css('border-color', '');}
		
		if($('#reasonInput').val()===''){
			$('#reasonInput').css('border-color', 'red');
			showAlert('Reason why did you leave your previous work is required');
			return;
		}else{$('#reasonInput').css('border-color', '');}
		
        var markup = "<tr>" +
            "<td>" + $('#frominput').val() + "</td>" +
            "<td>" + $('#toInput').val() + "</td>" +
            "<td>" + $('#prevcompanyInput').val() + "</td>" +
            "<td>" + $('#epositionInput').val() + "</td>" +
            "<td>" + $('#reasonInput').val() + "</td>" +
            "<td><button type='button' class='btn btn-success btn-sm' id='eeditbtn'><span class='glyphicon glyphicon-pencil'></span></button>&nbsp;" +
            "<button type='button' class='btn btn-danger btn-sm'  onclick='$(this).parent().parent().remove();'><span class='glyphicon glyphicon-trash'></span></button>" +
            "</td>"
        "</tr>";
        $('#employmenttablebody').append(markup);
        $('#ehidfield').val('');
		//clear
		$('#frominput').val('');
		$('#toInput').val('');
		$('#prevcompanyInput').val('');
		$('#epositionInput').val('');
		$('#reasonInput').val('');
    });
    $(document).on("click", "#eeditbtn", function () {
			$('#empModalLabel').html('Edit Employee Record');
        //initialize value set to null
        $('#ehidfield').val('');
        var fromto = $(this).closest('tr').children('td:eq(0)').text();
        var to = $(this).closest('tr').children('td:eq(1)').text();
        var company = $(this).closest('tr').children('td:eq(2)').text();
        var position = $(this).closest('tr').children('td:eq(3)').text();
        var reason = $(this).closest('tr').children('td:eq(4)').text();

        $('#frominput').val(fromto);
        $('#toInput').val(to);
        $('#prevcompanyInput').val(company);
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
    $('#eclosebtn').on('click', function (e) {
        var hid = $('#ehidfield').val();
        if (hid != '') {
            $('#employmenttablebody').append(hid);
        }
    });
    $('#btnSaveChildren').on('click', function (e) {
	
		
			 
		 
		  if($('#childfullname').val()===''){
			$('#childfullname').css('border-color', 'red');
			showAlert('Name of child is required');
			return;
		}else{$('#childfullname').css('border-color', '');}
		
        
		 if($('#childbdate').val()===''){
			$('#childbdate').css('border-color', 'red');
			showAlert('Birthdate of child is required');
			return;
		}else{$('#childbdate').css('border-color', '');}
        var count = $('#childrentableBody').children('tr').length + 1;
        var markup = "<tr>" +

            "<td>" + $('#childfullname').val() + "</td>" +
            "<td>" + $('#childbdate').val() + "</td>" +
            "<td><button type='button' class='btn btn-success btn-sm' id='childeditbtn'><span class='glyphicon glyphicon-pencil'></span></button>&nbsp;" +
            "<button type='button' class='btn btn-danger btn-sm'  onclick='$(this).parent().parent().remove();'><span class='glyphicon glyphicon-trash'></span></button>" +
            "</td>"
        "</tr>"
        
        $('#childrentableBody').append(markup);
        $('#editChildrenHidden').val('');
        $('#noOfChildrenInput').val(count);
		
		$('#childfullname').val('') ;
		$('#childbdate').val('');
    });
    $(document).on("click", "#childeditbtn", function () {
		$('#myModalLabel').html('Modify Child');
        //initialize value set to null
        $('#editChildrenHidden').val('');

        var fullname = $(this).closest('tr').children('td:eq(0)').text();
        var bdate = $(this).closest('tr').children('td:eq(1)').text();

        $('#childfullname').val(fullname);
        $('#childbdate').val(bdate);
        $('#myModalLabel').html('Edit Child Details');
        var markup = "<tr>" +
            "<td>" + fullname + "</td>" +
            "<td>" + bdate + "</td>" +
            "<td><button type='button' class='btn btn-success btn-sm' id='childeditbtn'><span class='glyphicon glyphicon-pencil'></span></button>&nbsp;" +
            "<button type='button' class='btn btn-danger btn-sm'  onclick='$(this).parent().parent().remove();'><span class='glyphicon glyphicon-trash'></span></button>" +
            "</td>"
        "</tr>"

        $('#editChildrenHidden').val(markup);
        $(this).closest('tr').remove();
        $('#myModal').modal('show');
    });
    $('#childmodalclosebtn').on('click', function (e) {
        var hid = $('#editChildrenHidden').val();

        if (hid != '') {

            $('#childrentableBody').append(hid);
        }
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
        var mother_occu = $('#motherOccuInput').val();
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
		var company=$('#companyInput').val();
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

        var childrenData = $.toJSON(childrenTableData());
        var employmentData = $.toJSON(employmentRecordData());
        var accountNumber=$('#accountnuminput').val();
        $.ajax({
            url: 'controllers/employeeController.php',
            type: 'POST',
             dataType:'JSON',
            data: {
                request_type: 1,
                    empId:empId,
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
                children: childrenData,
                employmentrecord: employmentData,
                accountNum:accountNumber
            },
            success: function (data) {
       
                    if(data.Success==true){
                     $.toast({
                        heading: 'Information',
                        text:data.Message,
                        showHideTransition: 'slide',
                        icon: 'success',
                        position:'top-right'
                    });

                        $('#empId').val(data.params);
                        bootbox.confirm({
                            title: "Confirmation?",
                            message: "Would you like to add an attachments?",
                            buttons: {
                                cancel: {
                                    label: '<i class="fa fa-times"></i> No,Thanks'
                                },
                                confirm: {
                                    label: '<i class="fa fa-check"></i> Yes,Please'
                                }
                            },
                            callback: function (result) {
                                if(result==true){
                                     window.location.href='attachments.php?id='+data.params;
                                }else{
									 location.reload();
								}
                            }
                        });

                       
                     }else{
                        showAlert(data.Message);
                        return;
                     }
            }
        });
    });

    function childrenTableData() {
        var TableData = new Array();
        $('#childrenTable tr').each(function (row, tr) {
            TableData[row] = {
                "fullname": $(tr).find('td:eq(0)').text()
                , "bdate": $(tr).find('td:eq(1)').text()
            }
        });
        TableData.shift();
        return TableData;
    }
    function employmentRecordData() {
        var TableData = new Array();
        $('#employmentTableRecord tr').each(function (row, tr) {
            TableData[row] = {
                "eFrom": $(tr).find('td:eq(0)').text()
                , "eTo": $(tr).find('td:eq(1)').text()
                , "position": $(tr).find('td:eq(2)').text()
                , "company": $(tr).find('td:eq(3)').text()
                , "reason": $(tr).find('td:eq(4)').text()
            }
        });
        TableData.shift();
        return TableData;

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
    $(document).ready(function () {
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
    });
$('#showchildrenmodalbtn').on('click',function(){
    $('#childfullname').val('');
    $('#childbdate').val('');
	$('#myModalLabel').html('Add a Child');
    $('#editChildrenHidden').val('');
});
$('#showerecordbtn').on('click',function(){
    $('#frominput').val('');
    $('#toInput').val('');
    $('#prevcompanyInput').val('');
    $('#epositionInput').val('');
    $('#reasonInput').val('');
    $('#ehidfield').val('');
	$('#empModalLabel').html('Add Employment Record');
});

</script>
</body>

</html>