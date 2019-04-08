<?php
include_once ('inc/session.php');
include_once 'dbqueries.php';
  ?>
<!DOCTYPE html>

 <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
   <meta charset="utf-8" />
   <link rel="shortcut icon" href="images/favicon.ico">
    <title>Miathene Boys| Portal</title>
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <meta content="" name="description" />
   <meta content="" name="author" />
   <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
   <link href="assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
   <link href="assets/bootstrap/css/bootstrap-fileupload.css" rel="stylesheet" />
   <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
   <link href="css/style.css" rel="stylesheet" />
   <link href="css/style-responsive.css" rel="stylesheet" />
   <link href="css/style-default.css" rel="stylesheet" id="style_color" />

   <link href="assets/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
   <link rel="stylesheet" type="text/css" href="assets/uniform/css/uniform.default.css" />

   <link rel="stylesheet" type="text/css" href="assets/chosen-bootstrap/chosen/chosen.css" />
   <link rel="stylesheet" type="text/css" href="assets/jquery-tags-input/jquery.tagsinput.css" />
   <link rel="stylesheet" type="text/css" href="assets/clockface/css/clockface.css" />
   <link rel="stylesheet" type="text/css" href="assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />
   <link rel="stylesheet" type="text/css" href="assets/bootstrap-datepicker/css/datepicker.css" />
   <link rel="stylesheet" type="text/css" href="assets/bootstrap-timepicker/compiled/timepicker.css" />
   <link rel="stylesheet" type="text/css" href="assets/bootstrap-colorpicker/css/colorpicker.css" />
   <link rel="stylesheet" href="assets/bootstrap-toggle-buttons/static/stylesheets/bootstrap-toggle-buttons.css" />
   <link rel="stylesheet" type="text/css" href="assets/bootstrap-daterangepicker/daterangepicker.css" />

   <link href="assets/jquery-ui/jquery-ui-1.10.1.custom.min.css" rel="stylesheet"/>

</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="fixed-top">
   <!-- BEGIN HEADER -->
   <?php include('header.php'); ?>
   <!-- END HEADER -->
   <!-- BEGIN CONTAINER -->
   <div id="container" class="row-fluid">
      <!-- BEGIN SIDEBAR -->
            <div class="sidebar-scroll">
        <div id="sidebar" class="nav-collapse collapse">
         <!-- BEGIN SIDEBAR MENU -->
          <ul class="sidebar-menu">
              <li class="sub-menu">
                  <a class="" href="javascript:;">
                      <i class="icon-dashboard"></i>
                      <span>Dashboard</span>
                       <span class="arrow"></span>
                  </a>
                   <ul class="sub">
                      <li><a class="" href="index.php">Home</a></li>

                      </ul>
              </li>
              <li class="sub-menu">
                  <a href="javascript:;" class="">
                      <i class="icon-user"></i>
                      <span>My Account</span>
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                  <li><a class="" href="enrolment-profile">Enrolment Profile</a></li>
                   <li><a class="" href="update-profile-to-upto-date">Update Admission info</a></li>
                      <li><a class="" href="parent-record-info">Parent Information</a></li>
                      <li><a class="" href="assessment-performance">My Results</a></li>

                      <li><a class="" href="feepaidbal">Fee Status</a></li>
                      <li><a class="" href="account-administration">Account Administration</a></li>
                  </ul>
              </li>
              <li class="sub-menu">
                  <a href="javascript:;" class="">
                      <i class="icon-building"></i>
                      <span>Accomodation</span>
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                      <li><a class="" href="managedormitory">View Dormitory</a></li>
                  </ul>
              </li>
              <li class="sub-menu">
                  <a href="javascript:;" class="">
                      <i class="icon-tasks"></i>
                      <span>My Reports</span>
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                      <li><a class="" href="fee-structure">Fee Structure</a></li>
                      <li><a class="" href="studentfeepaid">Fee Statement</a></li>
                  </ul>
              </li>
              <li class="sub-menu">
                  <a href="javascript:;" class="">
                      <i class="icon-calendar"></i>
                      <span>Reporting Dates</span>
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                      <li><a class="" href="termdates">Term Updates</a></li>
                  </ul>
              </li>
              <li class="sub-menu">
                  <a class="" href="javascript:;">
                      <i class="icon-envelope"></i>
                      <span>Messages</span>
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                      <li><a href="#" class=""> Discipline</a></li>
                      <li><a href="#" class="">Mails</a></li>
                  </ul>
              </li>
              <li class="sub-menu">
                  <a class="" href="javascript:;">
                      <i class="icon-folder-close"></i>
                      <span>File/Documents</span>
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                      <li><a class="" href="form-assignment">Assignment Upload</a></li>
                      <li><a class="" href="available-assignment">My Assignment</a></li>
                  </ul>
              </li>
             <li class="sub-menu">
                      <a class="" href="assignment">
                          <i class="icon-file-alt"></i>
                          <span>My Assignment</span>
                      </a>
                  </li>
                  <li class="tooltips s" data-placement="right" data-original-title="Reporting Dates"><a href="#"><i class="icon-signin"></i> <span class="title">Reporting Dates</span></a></li>

          </ul>
         <!-- END SIDEBAR MENU -->
      </div>
      </div>
      <!-- END SIDEBAR -->
      <!-- BEGIN PAGE -->
      <div id="main-content">
         <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->
            <div class="row-fluid">
               <div class="span12">
                  <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                   <h3 class="page-title">
                                <img src="images/logo.JPG" alt="" style="height:62px;padding-top:none !important;" />&nbsp;&nbsp;MIATHENE BOYS HIGH SCHOOL
                            </h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="#">Home</a>
                           <span class="divider">/</span>
                       </li>
                       <li>
                           <a href="#">Profile</a>
                           <span class="divider">/</span>
                       </li>
                       <li class="active">
                           Edit Profile
                       </li>
                       <li class="pull-right no-text-shadow" style="background-color: #99CCFF; padding: 4px; height: 20px;">
                                    <div id="dashboard-rert-range" class="dashboard-date-range no-tooltip-on-touch-device responsive">

                                      <?php
                                    echo'Welcome: ' .date('l jS  F Y ');
                                       ?>
                                    </div>
                                </li>
                   </ul>
                   <!-- END PAGE TITLE & BREADCRUMB-->
               </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
             <div class="row-fluid">
                 <!-- BEGIN PROFILE PORTLET-->
                 <div class=" profile span12">
                     <div class="span2">
                         <div class="profile-photo">
                             <img src="images/noimage.png" alt="">
                             <a href="javascript:;" class="edit" title="Edit Photo">
                                 <i class="icon-pencil"></i>
                             </a>
                         </div>
                         <a href="update-profile-to-upto-date" class="profile-features">
                             <i class=" icon-home"></i>
                             <p class="info">Main Details</p>
                         </a>
                         <a href="parent-info-update" class="profile-features">
                             <i class=" icon-male"></i>
                             <p class="info">Parent Info</p>
                         </a>
                         <a href="schoolupdate" class="profile-features active">
                             <i class=" icon-certificate"></i>
                             <p class="info">My Schools</p>
                         </a>
                         <a href="#" class="profile-features">
                             <i class=" icon-lightbulb"></i>
                             <p class="info">Work Experience</p>
                         </a>
                         <a href="#" class="profile-features">
                             <i class=" icon-user"></i>
                             <p class="info">Profile</p>
                         </a>
                     </div>
                     <div class="span10">
                         <div class="profile-head">
                             <div class="span4">
                                 <h1><?php echo  $row['FullName']; ?></h1>
                                 <p>Lead Designer at <a href="#">Miathene Boys.</a></p>
                             </div>

                             <div class="span4">
                                 <ul class="social-link-pf">
                                     <li><a href="#">
                                         <i class="icon-facebook"></i>
                                     </a></li>
                                     <li><a href="#">
                                         <i class="icon-twitter"></i>
                                     </a></li>
                                     <li><a href="#">
                                         <i class="icon-linkedin"></i>
                                     </a></li>
                                 </ul>
                             </div>
                         </div>
                         <div class="space15"></div>
                         <div class="row-fluid">
                             <div class="span12 bio form">
                             <div class="widget green">
                                 <div class="widget-title">
                            <h4><i class="icon-certificate"></i>School Info Update</h4>
                            <span class="tools">
                                <a href="javascript:;" class="icon-chevron-down"></a>
                                <a href="javascript:;" class="icon-remove"></a>
                            </span>
                        </div>
                        <div class="space20"></div>
                         <?php
            if((isset($_POST['btn-update'])))
                {
                $name = ($_POST['PriSchool']);
                $type =($_POST['schoolType']);
                $start=($_POST['yearStart']);
                $end=($_POST['yearEnd']);
                $grade=($_POST['grade']);
                $number=($_POST['idNumber']);

                try{
                $stmt =$conn->prepare("UPDATE tblupdate SET PriSchool='$name',schoolType='$type',yearStart='$start',yearEnd='$end',grade='$grade',idNumber='$number' WHERE AdmNo='$session_id'");

            	if($stmt->execute())
             {   ?>
                        <div class="alert alert-success" style="height: 20px; width: 90%; margin-left: 20px;">
                     <strong>Success!</strong> Your Profile information has been updated successfully. Thanks you.</div>
                     <?php

                }
            else {
                  	?>
                  <div class="alert alert-danger" style="height: 20px; width: 90%; margin-left: 20px;">
                  <strong>Sorry!</strong> There was an error submitting your data.</div>
                     <?php
  }
  }
  	catch(PDOException $e){
			echo $e->getMessage();
		}

}
?>
                                 <form class="form-horizontal" style="padding-left: 15px;" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">

                                     <div class="control-group">
                                         <label class="control-label">School Name:</label>
                                         <div class="controls">
                                             <input type="text" class="span6 " name="PriSchool" value="<?php  echo$update['PriSchool']; ?>" required="required" autocomplete="off">
                                         </div>
                                     </div>
                                      <div class="control-group">
                                <label class="control-label">School Type:</label>
                                <div class="controls">
                                    <select class="span6" name="schoolType" >
                                    <option><?php  echo $update['schoolType']; ?></option>
                                        <option>Select School Type...</option>
                                        <option value="Public">Public</option>
                                        <option value="Private" >Private</option>
                                    </select>
                                </div>
                                </div>
                                <div class="control-group">
                                         <label class="control-label">Start Year:</label>
                                         <div class="controls">
                                             <input type="text" class="span6" name="yearStart"  data-mask="99/99/9999" value="<?php echo $update['yearStart']; ?>" maxlength="10" required="required" autocomplete="off">
                                             <span class="help-inline">dd/mm/yyyy</span>
                                         </div>
                                     </div>
                                 <div class="control-group">
                                         <label class="control-label">End Year:</label>
                                         <div class="controls">
                                             <input type="text" class="span6 " name="yearEnd" data-mask="99-99-9999" value="<?php echo$update['yearEnd']; ?>" maxlength="10" required="required" autocomplete="off">
                                              <span class="help-inline">dd-mm-yyyy</span>
                                         </div>
                                     </div>
                                     <div class="control-group">
                                         <label class="control-label">Total Marks:</label>
                                         <div class="controls">
                                             <input type="text" class="span6 " name="PriSchMarks" value="<?php echo$update['PriSchMarks']; ?>" readonly="readonly">
                                         </div>
                                     </div>
                                     <div class="control-group">
                                         <label class="control-label">Grade:</label>
                                         <div class="controls">
                                             <input type="text" class="span6 " name="grade" value="<?php  echo$update['grade']; ?>" required="required" autocomplete="off">
                                         </div>
                                     </div>
                                      <div class="control-group">
                                         <label class="control-label">Index Number:</label>
                                         <div class="controls">
                                             <input type="text" class="span6 " name="idNumber" value="<?php  echo$update['idNumber']; ?>" required="required" autocomplete="off">
                                         </div>
                                     </div>
                                     <div class="form-actions">
                                         <button class="btn btn-success" type="submit" name="btn-update">Update</button>
                                         <button class="btn btn-danger" type="reset" name="btn-cancel">Cancel</button>
                                     </div>
                                 </form>
                                 </div>
                                 <div class="space10"></div>
                                 <div class="space20"></div>

                             </div>
                         </div>
                     </div>
                 </div>
                 <!-- END PROFILE PORTLET-->
             </div>
            <!-- END PAGE CONTENT-->
         </div>
         <!-- END PAGE CONTAINER-->
      </div>
      <!-- END PAGE -->
   </div>
   <!-- END CONTAINER -->
   <!-- BEGIN FOOTER -->
  <?php include('footer.php');  ?>
   <!-- END FOOTER -->

   <!-- BEGIN JAVASCRIPTS -->
   <!-- Load javascripts at bottom, this will reduce page load time -->
   <script src="js/jquery-1.8.3.min.js"></script>
   <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
   <script src="assets/bootstrap/js/bootstrap.min.js"></script>
   <script type="text/javascript" src="assets/bootstrap/js/bootstrap-fileupload.js"></script>
   <script src="js/jquery.blockui.js"></script>

   <!-- ie8 fixes -->
   <!--[if lt IE 9]>
   <script src="js/excanvas.js"></script>
   <script src="js/respond.js"></script>
   <![endif]-->

   <script type="text/javascript" src="assets/bootstrap-toggle-buttons/static/js/jquery.toggle.buttons.js"></script>
   <script type="text/javascript" src="assets/chosen-bootstrap/chosen/chosen.jquery.min.js"></script>
   <script type="text/javascript" src="assets/uniform/jquery.uniform.min.js"></script>
   <script type="text/javascript" src="assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
   <script type="text/javascript" src="assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
   <script type="text/javascript" src="assets/clockface/js/clockface.js"></script>
   <script type="text/javascript" src="assets/jquery-tags-input/jquery.tagsinput.min.js"></script>
   <script type="text/javascript" src="assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
   <script type="text/javascript" src="assets/bootstrap-daterangepicker/date.js"></script>
   <script type="text/javascript" src="assets/bootstrap-daterangepicker/daterangepicker.js"></script>
   <script type="text/javascript" src="assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
   <script type="text/javascript" src="assets/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
   <script type="text/javascript" src="assets/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
   <script src="assets/fancybox/source/jquery.fancybox.pack.js"></script>
   <script src="assets/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
   <script src="js/jquery.scrollTo.min.js"></script>

   <!--common script for all pages-->
   <script src="js/common-scripts.js"></script>

   <script src="js/form-component.js"></script>
   <script src="js/sliders.js" type="text/javascript"></script>

   <!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->

</html>