<?php
 include('session.php'); 
  require 'queries/schedule_query.php';           
 require 'queries/patientschedule_query.php';  
   date_default_timezone_set('Asia/Manila');  

  $checkdate = date("Y-m-d");
  $checkday  = date("l");                                                
$found = checkschedule($checkdate, $checkday);
 if( !empty($found) ){ 

 }else{ 
     if(date("l") == 'Monday'){
       $num = '5';
       refresh($num);   
     }
 }                                                                  
                                                    
?>

    <html>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <title>PDMIS</title>
        <!-- Favicon-->
        <!-- Favicon-->
        <link rel="icon" href="../../favicon.ico" type="image/x-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

        <!-- Bootstrap Select Css -->
        <link href="../../plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
        <!-- Bootstrap Core Css -->
        <link href="../../plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

        <!-- Waves Effect Css -->
        <link href="../../plugins/node-waves/waves.css" rel="stylesheet" />

        <!-- Animation Css -->
        <link href="../../plugins/animate-css/animate.css" rel="stylesheet" />

        <!-- JQuery DataTable Css -->
        <link href="../../plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

        <!-- Custom Css -->
        <link href="../../css/style4.css" rel="stylesheet">

        <!-- mytable Css -->
        <link href="../../css/table.css" rel="stylesheet">

        <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
        <link href="../../css/themes/theme-indigo.css" rel="stylesheet" />


    </head>

    <body class="theme-indigo">

        <!-- Page Loader -->
        <div class="page-loader-wrapper">
            <div class="loader">
                <div class="preloader">
                    <div class="spinner-layer pl-indigo">
                        <div class="circle-clipper left">
                            <div class="circle"></div>
                        </div>
                        <div class="circle-clipper right">
                            <div class="circle"></div>
                        </div>
                    </div>
                </div>
                <p>Please wait...</p>
            </div>
        </div>
        <!-- #END# Page Loader -->
        <!-- Overlay For Sidebars -->
        <div class="overlay"></div>
        <!-- #END# Overlay For Sidebars -->
        <!-- Search Bar -->

        <!-- #END# Search Bar -->
        <!-- Top Bar -->
        <nav class="navbar">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                    <a href="javascript:void(0);" class="bars"></a>
                    <center>
                        <a class="navbar-brand" href="index.html">
                            <div class="title"></div>
                        </a>
                    </center>

                </div>
                <div class="collapse navbar-collapse" id="navbar-collapse">
                    
      <?php include ('modals/dialysisreport_modal.php')?>
        <?php include ('modals/employee_modal.php')?>    
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Call Search -->

                        <!-- #END# Call Search -->
                        <!-- Notifications -->

                        <!-- #END# Notifications -->
                        <!-- Tasks -->

                        <!-- #END# Tasks -->
                        <!--  <li class="pull-right"><a class="navbar-brand" href="index.html">Sign-Out</a></li> -->
                    </ul>
                </div>
            </div>
        </nav>
        <!-- #Top Bar -->
        <section>
            <!-- Left Sidebar -->
            <aside id="leftsidebar" class="sidebar">
                <!-- User Info -->
                <div class="user-info">
                    <div class="image">
                        <img src="../../images/nurse.png" width="48" height="48" alt="User" />
                    </div>
                    <div class="info-container">
                        <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $name; ?></div>
                        <div class="email"><?php echo $position; ?></div>
                        <div class="btn-group user-helper-dropdown">


                        </div>
                    </div>
                </div>
                <!-- #User Info -->
                <!-- Menu -->
                 <div class="menu">
                    <ul class="list">
                        <li class="header">MAIN NAVIGATION</li>
                          
                        <li class="active" id="profile">
                            <a href="javascript:void(0);" class="menu-toggle">
                                <i class="material-icons">people</i>
                                <span>Profile</span>
                            </a>
                            <ul class="ml-menu">
                                <li id="patientprofile">
                                    <a href="PatientProfile.php">Patient Profile</a>
                                </li>
                                <li id="employeeprofile">
                                    <a href="EmployeeProfile.php">Employee Profile</a>
                                </li>
                            
                                <li class="" id="nephrologist">
                                    <a href="nephrologist.php">Nephrologist</a>
                                </li>
                            <li class="active" id="schedule">
                            <a href="javascript:void(0);" class="menu-toggle">
                                <span>Schedule</span>
                            </a>
                            <ul class="ml-menu">
                                 <li class="active" id="descriptors">
                                    <a href="patientschedule.php">Patient</a>
                                </li>
                                <li id="descriptors">
                                    <a href="nephroschedule.php">Nephrologist</a>
                                </li>
                                
                                </ul>
                                </li>
                            </ul>
                        </li>
                        <li id="transaction">
                            <a href="javascript:void(0);" class="menu-toggle">
                                 <i class="material-icons">folder</i>
                                <span>Transaction</span>
                            </a>
                             <ul class="ml-menu">
                                <li id="transaction">
                                    <a href="transaction.php">HemoTreatment</a>
                                </li>
                            </ul>
                        </li>
                        <li id="maintenance">

                            <a href="javascript:void(0);" class="menu-toggle">
                                <i class="material-icons">settings</i>
                                <span>Maintenance</span>
                            </a>
                            <ul class="ml-menu">
                                <li id="userprofile">
                                    <a href="UserProfile.php">User Profile</a>
                                </li>
                                <li id="systemmaintenance">
                                    <a href="maintenance.php">System Maintenance</a>
                                </li>
                            </ul>
                        </li>
                         <li id="reports">
                            <a href="javascript:void(0);" class="menu-toggle">
                                <i class="material-icons">assignment</i>
                                <span>Reports</span>
                            </a>
                            <ul class="ml-menu">
                                
                                <li  id="progressstat">
                                    <a data-toggle="modal" data-target="#dialysisreport_modal" >
                                            Patient Reports</a>
                                </li>
                                <li id="">
                                    <a data-toggle="modal" data-target="#employee_modal" >Employee Reports</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                           <a href="logout.php">
                                <i class="material-icons">input</i>
                                <span>Logout</span>
                            </a>
                        </li>


                    </ul>
                </div>
                <!-- #Menu -->
                <!-- Footer -->
                <div class="legal">
                    <div class="copyright">
                        &copy; 2016 - 2017 <a href="javascript:void(0);">Dynamic Explorers</a>.
                    </div>

                </div>
                <!-- #Footer -->
            </aside>
            <!-- #END# Left Sidebar -->
            <!-- Right Sidebar -->
            <aside id="rightsidebar" class="right-sidebar">


                <!-- tab content (header right)-->
                <!-- tab content -->
            </aside>
            <!-- #END# Right Sidebar -->
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header bg-indigo">
                                <h2>
                                    Schedules
                                </h2>

                            </div>
                            <div class="body">
                                  <!-- Nav tabs -->
                            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                         
                                <li role="presentation"><a href="#All" data-toggle="tab">All</a></li>
                                <li role="presentation"<?php if(date("l") =='Monday' ) {?> class="active"<?php }  ?>><a href="#Monday" data-toggle="tab">Monday</a></li>
                                <li role="presentation" <?php if(date("l") =='Tuesday' ) {?> class="active"<?php }  ?>><a href="#Tuesday" data-toggle="tab">Tuesday</a></li>
                                 <li role="presentation" <?php if(date("l") =='Wednesday' ) {?> class="active"<?php }  ?>><a href="#Wednesday" data-toggle="tab">Wednesday</a></li>
                                 <li role="presentation" <?php if(date("l") =='Thursday' ) {?> class="active"<?php }  ?>><a href="#Thursday" data-toggle="tab">Thursday</a></li>
                                 <li role="presentation" <?php if(date("l") =='Friday' ) {?> class="active"<?php }  ?>><a href="#Friday" data-toggle="tab">Friday</a></li>
                                
                             
                            </ul>
                                
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in" id="All">
                            
                                     <table id="patientsched1" class="table table-bordered table-striped table-hover dataTable">
                                                <thead>
                                                    <tr>
                                             
                                                        <th>Hospital ID</th>
                                                        <th>Name</th>
                                                        <th>Day</th>
                                                        <th>Time</th>
                                                         <th>Status</th>
                                                       
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                            $count = 0;
                                                            $conn = new mysqli("localhost", "root", "", "PDMIS") or die(mysqli_error());
                                                           $query = $conn->query("SELECT  `patientprofile`.`P_Fname`,`patientprofile`.`P_Mname`,`patientprofile`.`P_Lname`,`patientprofile`.`Hospital_Id`,`patientschedule`.`treatment_day`,`patientschedule`.`treatment_time`,`patientprofile`.`P_Status`,`patientschedule`.`treatment_status`
                                                           FROM `patientprofile` INNER JOIN `patientschedule` ON `patientprofile`.`Hospital_Id` = `patientschedule`.`Hospital_Id` WHERE `patientprofile`.`P_Status` = 1") or die(mysqli_error());
                                                  
                                                           while($fetch = $query ->fetch_array()){     
                                                               $count = $count + 1;
                                                        ?>
                                                    <tr>
                                                         <td>
                                                             <?php echo $fetch['Hospital_Id'] ?>
                                                        </td>
                                                          <td>
                                                              <?php echo $fetch['P_Fname'].' '.$fetch['P_Mname'].' '.$fetch['P_Lname']?>
                                                        </td>
                                                       
                                                          <td>
                                                            <?php echo $fetch['treatment_day'] ?>
                                                        </td>
                                                          <td>
                                                             <?php echo $fetch['treatment_time'] ?>
                                                        </td>
                                                        <td>
                                                            <?php if($fetch['treatment_status'] == 1) echo "Present" ?>
                                                            <?php if($fetch['treatment_status'] == 2) echo "Absent" ?>
                                                            <?php if($fetch['treatment_status'] == 3) echo "Cancelled" ?> 
                                                            <?php if($fetch['treatment_status'] == 4) echo "ReScheduled" ?>
                                                             <?php if($fetch['treatment_status'] == 5) echo "Pending" ?>        
                                                        </td>
                                                    </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                    <b>Overall Total Number of Patients: <u><?php echo $count ?></u></b>   
                         
                                        <div class="col-lg-offset-10 col-xs-offset-3">
                                            <button type="button" class="btn btn-primary m-t-15 waves-effect" data-toggle="modal" data-target="#manageschedule"> <i class="material-icons">date_range</i> Manage</button> &nbsp;
                                    </div>
                                </div>
                                  <div role="tabpanel" 
                                       <?php if(date("l") =='Monday' ) {?> class="tab-pane fade in active"<?php }  ?>
                                        <?php if(date("l") !='Monday' ) {?> class="tab-pane fade in"<?php }  ?>                                       id="Monday">
                            
                                     <table id="patientsched2" class="table table-bordered table-striped table-hover dataTable">
                                                <thead>
                                                    <tr>
                                                        <th>Hospital ID</th>
                                                        <th>Name</th>
                                                        <th>Time</th>
                                                         <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                            $count1 = 0;
                                                            $conn = new mysqli("localhost", "root", "", "PDMIS") or die(mysqli_error());
                                                           $query = $conn->query("SELECT * FROM `patientprofile` INNER JOIN `patientschedule` ON `patientprofile`.`Hospital_Id` = `patientschedule`.`Hospital_Id` WHERE `patientschedule`.`treatment_day` = 'monday' && `patientprofile`.`P_Status` = 1") or die(mysqli_error());
                                                  
                                                           while($fetch = $query ->fetch_array()){ 
                                                               $count1 = $count1 + 1;
                                                        ?>
                                                    <tr>
                                                         <td>
                                                              <a href="#manageschedule<?php echo $fetch['Hospital_Id'];?>" data-toggle="modal" data-target="#manageschedule<?php echo $fetch['Hospital_Id'];?>" style="color: black;">
                                                             <?php echo $fetch['Hospital_Id'] ?>
                                                             </a>
                                                        </td>
                                                          <td>
                                                                 <a href="#manageschedule<?php echo $fetch['Hospital_Id'];?>" data-toggle="modal" data-target="#manageschedule<?php echo $fetch['Hospital_Id'];?>" style="color: black;">
                                                              <?php echo $fetch['P_Fname'].' '.$fetch['P_Mname'].' '.$fetch['P_Lname']?>
                                                              </a>
                                                        </td>
                                                          <td>
                                                                 <a href="#manageschedule<?php echo $fetch['Hospital_Id'];?>" data-toggle="modal" data-target="#manageschedule<?php echo $fetch['Hospital_Id'];?>" style="color: black;">
                                                             <?php echo $fetch['treatment_time'] ?>
                                                              </a>
                                                        </td>
                                                        <td>
                                                              <a href="#manageschedule<?php echo $fetch['Hospital_Id'];?>" data-toggle="modal" data-target="#manageschedule<?php echo $fetch['Hospital_Id'];?>" style="color: black;">
                                                          <?php if($fetch['treatment_status'] == 1) echo "Present" ?>
                                                            <?php if($fetch['treatment_status'] == 2) echo "Absent" ?>
                                                            <?php if($fetch['treatment_status'] == 3) echo "Cancelled" ?> 
                                                            <?php if($fetch['treatment_status'] == 4) echo "ReScheduled" ?> 
                                                             <?php if($fetch['treatment_status'] == 5) echo "Pending" ?>              
                                                     
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <?php } ?>       
                                                </tbody>

                                            </table>
                                         <b>Overall Total Number of Patients: <u><?php echo $count1 ?></u></b><br>
                                       <b>Status: <u><?php if($count1 <= 3 && $count1 >=1) echo "Low"?><?php if($count1 <= 7 && $count1 >=4) echo "Average"?><?php if($count1 == 14) echo "Full"?></u></b>   
                                        <div class="col-lg-offset-10 col-xs-offset-3">
                                            <button type="button" class="btn btn-primary m-t-15 waves-effect" data-toggle="modal" data-target="#manageschedule"> <i class="material-icons">date_range</i> Manage</button> &nbsp;
                                    </div>
                                </div>
                                <div role="tabpanel" <?php if(date("l") =='Tuesday' ) {?> class="tab-pane fade in active"<?php }  ?>
                                        <?php if(date("l") !='Tuesday' ) {?> class="tab-pane fade in"<?php }  ?>                                        id="Tuesday">
                            
                                     <table id="patientsched3" class="table table-bordered table-striped table-hover dataTable">
                                                <thead>
                                                    <tr>
                                             
                                                        <th>Hospital ID</th>
                                                        <th>Name</th>
                                                        <th>Time</th>
                                                         <th>Status</th>
                                                       
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                            $count2 = 0;
                                                            $conn = new mysqli("localhost", "root", "", "PDMIS") or die(mysqli_error());
                                                           $query = $conn->query("SELECT * FROM `patientprofile` INNER JOIN `patientschedule` ON `patientprofile`.`Hospital_Id` = `patientschedule`.`Hospital_Id` WHERE `patientschedule`.`treatment_day` = 'tuesday' && `patientprofile`.`P_Status` = 1") or die(mysqli_error());
                                                  
                                                           while($fetch = $query ->fetch_array()){      
                                                               $count2 = $count2 + 1;
                                                        ?>
                                                    <tr>
                                                         <td>
                                                                <a href="#manageschedule<?php echo $fetch['Hospital_Id'];?>" data-toggle="modal" data-target="#manageschedule<?php echo $fetch['Hospital_Id'];?>" style="color: black;">
                                                             <?php echo $fetch['Hospital_Id'] ?>
                                                             </a>
                                                        </td>
                                                          <td>
                                                                 <a href="#manageschedule<?php echo $fetch['Hospital_Id'];?>" data-toggle="modal" data-target="#manageschedule<?php echo $fetch['Hospital_Id'];?>" style="color: black;">
                                                              <?php echo $fetch['P_Fname'].' '.$fetch['P_Mname'].' '.$fetch['P_Lname']?>
                                                              </a>
                                                        </td>
                                                          <td>
                                                                 <a href="#manageschedule<?php echo $fetch['Hospital_Id'];?>" data-toggle="modal" data-target="#manageschedule<?php echo $fetch['Hospital_Id'];?>" style="color: black;">
                                                             <?php echo $fetch['treatment_time'] ?>
                                                              </a>
                                                        </td>
                                                        <td>
                                                               <a href="#manageschedule<?php echo $fetch['Hospital_Id'];?>" data-toggle="modal" data-target="#manageschedule<?php echo $fetch['Hospital_Id'];?>" style="color: black;">
                                                            <?php if($fetch['treatment_status'] == 1) echo "Present" ?>
                                                            <?php if($fetch['treatment_status'] == 2) echo "Absent" ?>
                                                            <?php if($fetch['treatment_status'] == 3) echo "Cancelled" ?> 
                                                            <?php if($fetch['treatment_status'] == 4) echo "ReScheduled" ?>
                                                             <?php if($fetch['treatment_status'] == 5) echo "Pending" ?>               
                                                            </a>
                                                        </td>
                                                    </tr>       
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                      <b>Overall Total Number of Patients: <u><?php echo $count2 ?></u></b><br>
                                       <b>Status: <u><?php if($count2 <= 3 && $count2 >=1) echo "Low"?><?php if($count2 <= 7 && $count2 >=4) echo "Average"?><?php if($count2 == 14) echo "Full"?></u></b>   
                                        <div class="col-lg-offset-10 col-xs-offset-3">
                                            <button type="button" class="btn btn-primary m-t-15 waves-effect" data-toggle="modal" data-target="#manageschedule"> <i class="material-icons">date_range</i> Manage</button> &nbsp;
                                    </div>
                                </div>
                                <div role="tabpanel" <?php if(date("l") =='Wednesday' ) {?> class="tab-pane fade in active"<?php }  ?>
                                        <?php if(date("l") !='Wednesday' ) {?> class="tab-pane fade in"<?php }  ?>                                        id="Wednesday">
                            
                                     <table id="patientsched4" class="table table-bordered table-striped table-hover dataTable">
                                                <thead>
                                                    <tr>
                                             
                                                        <th>Hospital ID</th>
                                                        <th>Name</th>
                                                        <th>Time</th>
                                                         <th>Status</th>
                                                       
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                            $count3 = 0;
                                                            $conn = new mysqli("localhost", "root", "", "PDMIS") or die(mysqli_error());
                                                           $query = $conn->query("SELECT `patientprofile`.`P_Fname`,`patientprofile`.`P_Mname`,`patientprofile`.`P_Lname`,`patientprofile`.`Hospital_Id`,`patientschedule`.`treatment_day`,`patientschedule`.`treatment_time`,`patientprofile`.`P_Status`,`patientschedule`.`treatment_status`
                                                            FROM `patientprofile` INNER JOIN `patientschedule` ON `patientprofile`.`Hospital_Id` = `patientschedule`.`Hospital_Id` WHERE `patientschedule`.`treatment_day` = 'wednesday' && `patientprofile`.`P_Status` = 1") or die(mysqli_error());
                                                  
                                                           while($fetch = $query ->fetch_array()){        
                                                               $count3 = $count3 + 1;
                                                        ?>
                                                    <tr>
                                                         <td>
                                                                <a href="#manageschedule<?php echo $fetch['Hospital_Id'];?>" data-toggle="modal" data-target="#manageschedule<?php echo $fetch['Hospital_Id'];?>" style="color: black;">
                                                             <?php echo $fetch['Hospital_Id'] ?>
                                                             </a>
                                                        </td>
                                                          <td>
                                                                 <a href="#manageschedule<?php echo $fetch['Hospital_Id'];?>" data-toggle="modal" data-target="#manageschedule<?php echo $fetch['Hospital_Id'];?>" style="color: black;">
                                                              <?php echo $fetch['P_Fname'].' '.$fetch['P_Mname'].' '.$fetch['P_Lname']?>
                                                              </a>
                                                        </td>
                                                          <td>
                                                                 <a href="#manageschedule<?php echo $fetch['Hospital_Id'];?>" data-toggle="modal" data-target="#manageschedule<?php echo $fetch['Hospital_Id'];?>" style="color: black;">
                                                             <?php echo $fetch['treatment_time'] ?>
                                                              </a>
                                                        </td>
                                                        <td>
                                                               <a href="#manageschedule<?php echo $fetch['Hospital_Id'];?>" data-toggle="modal" data-target="#manageschedule<?php echo $fetch['Hospital_Id'];?>" style="color: black;">
                                                            <?php if($fetch['treatment_status'] == 1) echo "Present" ?>
                                                            <?php if($fetch['treatment_status'] == 2) echo "Absent" ?>
                                                            <?php if($fetch['treatment_status'] == 3) echo "Cancelled" ?> 
                                                            <?php if($fetch['treatment_status'] == 4) echo "ReScheduled" ?>
                                                             <?php if($fetch['treatment_status'] == 5) echo "Pending" ?>               
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <?php } ?>
                                                </tbody>

                                            </table>
                                          <b>Overall Total Number of Patients: <u><?php echo $count3 ?></u></b><br>
                                       <b>Status: <u><?php if($count3 <= 3 && $count3 >=1) echo "Low"?><?php if($count3 <= 7 && $count3 >=4) echo "Average"?><?php if($count3 == 14) echo "Full"?></u></b>   
                                        <div class="col-lg-offset-10 col-xs-offset-3">
                                            <button type="button" class="btn btn-primary m-t-15 waves-effect" data-toggle="modal" data-target="#manageschedule"> <i class="material-icons">date_range</i> Manage</button> &nbsp;
                                    </div>
                                </div>
                                <div role="tabpanel" <?php if(date("l") =='Thursday' ) {?> class="tab-pane fade in active"<?php }  ?>
                                        <?php if(date("l") !='Thursday' ) {?> class="tab-pane fade in"<?php }  ?>                                        id="Thursday">
                            
                                     <table id="patientsched5" class="table table-bordered table-striped table-hover dataTable">
                                                <thead>
                                                    <tr>
                                             
                                                        <th>Hospital ID</th>
                                                        <th>Name</th>
                                                        <th>Time</th>
                                                         <th>Status</th>
                                                       
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                            $count4 = 0;
                                                            $conn = new mysqli("localhost", "root", "", "PDMIS") or die(mysqli_error());
                                                           $query = $conn->query("SELECT `patientprofile`.`P_Fname`,`patientprofile`.`P_Mname`,`patientprofile`.`P_Lname`,`patientprofile`.`Hospital_Id`,`patientschedule`.`treatment_day`,`patientschedule`.`treatment_time`,`patientprofile`.`P_Status`,`patientschedule`.`treatment_status`
                                                           FROM `patientprofile` INNER JOIN `patientschedule` ON `patientprofile`.`Hospital_Id` = `patientschedule`.`Hospital_Id` WHERE `patientschedule`.`treatment_day` = 'thursday' && `patientprofile`.`P_Status` = 1") or die(mysqli_error());
                                                  
                                                           while($fetch = $query ->fetch_array()){      
                                                               $count4 = $count4 + 1;
                                                        ?>
                                                    <tr>
                                                         <td>
                                                                <a href="#manageschedule<?php echo $fetch['Hospital_Id'];?>" data-toggle="modal" data-target="#manageschedule<?php echo $fetch['Hospital_Id'];?>" style="color: black;">
                                                             <?php echo $fetch['Hospital_Id'] ?>
                                                             </a>
                                                        </td>
                                                          <td>
                                                                 <a href="#manageschedule<?php echo $fetch['Hospital_Id'];?>" data-toggle="modal" data-target="#manageschedule<?php echo $fetch['Hospital_Id'];?>" style="color: black;">
                                                              <?php echo $fetch['P_Fname'].' '.$fetch['P_Mname'].' '.$fetch['P_Lname']?>
                                                              </a>
                                                        </td>
                                                          <td>
                                                                 <a href="#manageschedule<?php echo $fetch['Hospital_Id'];?>" data-toggle="modal" data-target="#manageschedule<?php echo $fetch['Hospital_Id'];?>" style="color: black;">
                                                             <?php echo $fetch['treatment_time'] ?>
                                                              </a>
                                                        </td>
                                                        <td>
                                                               <a href="#manageschedule<?php echo $fetch['Hospital_Id'];?>" data-toggle="modal" data-target="#manageschedule<?php echo $fetch['Hospital_Id'];?>" style="color: black;">
                                                            <?php if($fetch['treatment_status'] == 1) echo "Present" ?>
                                                            <?php if($fetch['treatment_status'] == 2) echo "Absent" ?>
                                                            <?php if($fetch['treatment_status'] == 3) echo "Cancelled" ?> 
                                                            <?php if($fetch['treatment_status'] == 4) echo "ReScheduled" ?>  
                                                             <?php if($fetch['treatment_status'] == 5) echo "Pending" ?>               
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <?php } ?>
                                                  
                                                           
                                            
                                                </tbody>

                                            </table>
                                 <b>Overall Total Number of Patients: <u><?php echo $count4 ?></u></b><br>
                                       <b>Status: <u><?php if($count4 <= 3 && $count4 >=1) echo "Low"?><?php if($count4 <= 7 && $count4 >=4) echo "Average"?><?php if($count4 == 14) echo "Full"?></u></b>   
                                        <div class="col-lg-offset-10 col-xs-offset-3">
                                            <button type="button" class="btn btn-primary m-t-15 waves-effect" data-toggle="modal" data-target="#manageschedule"> <i class="material-icons">date_range</i> Manage</button> &nbsp;
                                    </div>
                                </div>
                                <div role="tabpanel" <?php if(date("l") =='Friday' ) {?> class="tab-pane fade in active"<?php }  ?>
                                        <?php if(date("l") !='Friday' ) {?> class="tab-pane fade in"<?php }  ?>                                        id="Friday">
                            
                                     <table id="patientsched6" class="table table-bordered table-striped table-hover dataTable">
                                                <thead>
                                                    <tr>
                                             
                                                        <th>Hospital ID</th>
                                                        <th>Name</th>
                                                        <th>Time</th>
                                                         <th>Status</th>
                                                       
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                            $count5 = 0;
                                                            $conn = new mysqli("localhost", "root", "", "PDMIS") or die(mysqli_error());
                                                           $query = $conn->query("SELECT * FROM `patientprofile` INNER JOIN `patientschedule` ON `patientprofile`.`Hospital_Id` = `patientschedule`.`Hospital_Id` WHERE `patientschedule`.`treatment_day` = 'friday' && `patientprofile`.`P_Status` = 1") or die(mysqli_error());
                                                  
                                                           while($fetch = $query ->fetch_array()){ 
                                                               $count5 = $count5 + 1;
                                                        ?>
                                                    <tr>
                                                         <td>
                                                                <a href="#manageschedule<?php echo $fetch['Hospital_Id'];?>" data-toggle="modal" data-target="#manageschedule<?php echo $fetch['Hospital_Id'];?>" style="color: black;">
                                                             <?php echo $fetch['Hospital_Id'] ?>
                                                             </a>
                                                        </td>
                                                          <td>
                                                                 <a href="#manageschedule<?php echo $fetch['Hospital_Id'];?>" data-toggle="modal" data-target="#manageschedule<?php echo $fetch['Hospital_Id'];?>" style="color: black;">
                                                              <?php echo $fetch['P_Fname'].' '.$fetch['P_Mname'].' '.$fetch['P_Lname']?>
                                                              </a>
                                                        </td>
                                                          <td>
                                                                 <a href="#manageschedule<?php echo $fetch['Hospital_Id'];?>" data-toggle="modal" data-target="#manageschedule<?php echo $fetch['Hospital_Id'];?>" style="color: black;">
                                                             <?php echo $fetch['treatment_time'] ?>
                                                              </a>
                                                        </td>
                                                        <td>
                                                               <a href="#manageschedule<?php echo $fetch['Hospital_Id'];?>" data-toggle="modal" data-target="#manageschedule<?php echo $fetch['Hospital_Id'];?>" style="color: black;">
                                                            <?php if($fetch['treatment_status'] == 0) echo "Present" ?>
                                                            <?php if($fetch['treatment_status'] == 2) echo "Absent" ?>
                                                            <?php if($fetch['treatment_status'] == 3) echo "Cancelled" ?> 
                                                            <?php if($fetch['treatment_status'] == 4) echo "ReScheduled" ?>
                                                            <?php if($fetch['treatment_status'] == 5) echo "Pending" ?>        
                                                              
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <?php } ?>

                                                </tbody>

                                            </table>
                                 <b>Overall Total Number of Patients: <u><?php echo $count5 ?></u></b><br>
                                       <b>Status: <u><?php if($count5 <= 3 && $count5 >=1) echo "Low"?><?php if($count5 <= 7 && $count5 >=4) echo "Average"?><?php if($count5 == 14) echo "Full"?></u></b>   
                                        <div class="col-lg-offset-10 col-xs-offset-3">
                                            <button type="button" class="btn btn-primary m-t-15 waves-effect" data-toggle="modal" data-target="#manageschedule"> <i class="material-icons">date_range</i> Manage</button> &nbsp;
                                    </div>
                                </div>
                                
                          
                               
                            </div>
                                
                            </div>


                        </div>
                    </div>
                </div>
            </div>
            
                                                    <?php
                                                            $conn = new mysqli("localhost", "root", "", "PDMIS") or die(mysqli_error());
                                                           $query = $conn->query("SELECT * FROM `patientprofile` INNER JOIN `patientschedule` ON `patientprofile`.`Hospital_Id` = `patientschedule`.`Hospital_Id`") or die(mysqli_error());
                                                  
                                                           while($fetch = $query ->fetch_array()){        
                                                        ?>
            
           <div class="modal fade" id="manageschedule<?php echo $fetch['Hospital_Id'];?>" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-default" role="document">

                        <div class="modal-content">
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="card">
                                        <div class="header bg-indigo">
                                            <h2>
                                                Manage Schedule

                                                <a href=""><i class="material-icons pull-right" data-dismiss="modal">clear</i></a>
                                            </h2>

                                        </div>
                                        <div class="body">  
                                       
                                          <form class="form-horizontal" form method="POST" action="save/saveschedule.php">
                                            <div class="row clearfix">
                                            
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 form-control-label">
                                            <label for="email_address_2">Patient Name</label>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                           <div class="input-group">
                                             <select class="form-control" name="patient_S" id="patient_S" title="&nbsp" data-live-search="true" readonly>
                                                   
                                                        <option value="<?php echo $fetch['Hospital_Id']; ?>" Selected>
                                                        <?php echo $fetch['P_Fname']." ".$fetch['P_Mname']." ".$fetch['P_Lname']; ?>
                                                        </option>
                                              
                                            </select> 
                                            </div>
                                            </div>
                                         
                  
                                    </div>
                                              <div class="row clearfix">
                                        <div class="col-lg-3 col-md-1 col-sm-2 col-xs-3 form-control-label">
                                            <label for="email_address_2">Day</label>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">

                                            <select class="form-control show-tick" name="day_S" id="day_S" title="&nbsp;" >
                                                <option value="#">&nbsp;</option>
                                                <option value="Monday" <?php if($fetch['treatment_day']== 'Monday') echo "selected"; ?>
                                                        >Monday</option>
                                                 <option value="Tuesday" <?php if($fetch['treatment_day']== 'Tuesday') echo "selected"; ?>
                                                        >Tuesday</option>
                                                 <option value="Wednesday" <?php if($fetch['treatment_day']== 'Wednesday') echo "selected"; ?>
                                                        >Wednesday</option>
                                                 <option value="Thursday" <?php if($fetch['treatment_day']== 'Thursday') echo "selected"; ?>
                                                        >Thursday</option>
                                                 <option value="Friday" <?php if($fetch['treatment_day']== 'Friday') echo "selected"; ?>
                                                        >Friday</option>
                                            </select>
                                        </div>
                                    </div>
                                         <div class="row clearfix">
                                        <div class="col-lg-3 col-md-1 col-sm-2 col-xs-3 form-control-label">
                                            <label for="email_address_2">Time</label>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                            
                                            <select class="form-control show-tick" name="time_S" id="time_S" title="&nbsp;" >
                                                <option value="#">&nbsp;</option>
                                                <option value="7:30 AM - 11:30 AM" <?php if($fetch['treatment_time']== '7:30 AM - 11:30 AM') echo "selected"; ?>
                                                        >7:30 AM - 11:30 AM</option>
                                                 <option value="11:30 AM - 4:30 PM" <?php if($fetch['treatment_time']== '11:30 AM - 4:30 PM') echo "selected"; ?>
                                                        >11:30 AM - 4:30 PM</option>
                                            </select>
                                        </div>
                                    </div>
                                                <div class="row clearfix">
                                        <div class="col-lg-3 col-md-1 col-sm-2 col-xs-3 form-control-label">
                                            <label for="email_address_2">Status</label>
                                        </div>
                                        <div class="col-lg-4 col-md-1 col-sm-2 col-xs-3">

                                            <select class="form-control show-tick" name="status_S" id="status_S" title="&nbsp;" >
                                                <option value="#">&nbsp;</option>
                                                <option value="1" <?php if($fetch['treatment_status']== '1') echo "selected"; ?>
                                                        class="hidden">Present</option>
                                                 <option value="2" <?php if($fetch['treatment_status']== '2') echo "selected"; ?>
                                                        >Absent</option>
                                                <option value="3" <?php if($fetch['treatment_status']== '3') echo "selected"; ?>
                                                        >Cancelled</option>
                                                 <option value="4" <?php if($fetch['treatment_status']== '4') echo "selected"; ?>
                                                        >ReScheduled</option>
                                                <option value="5" <?php if($fetch['treatment_status']== '5') echo "selected"; ?>
                                                        >Pending</option>
                                            </select>
                                        </div>
                                    </div>
                                             
                                              
                                              <div class="row clearfix">
                                        <div class="col-lg-offset-6 col-xs-offset-3">
                                          
                                            <button type="submit" class="btn btn-primary m-t-15 waves-effect" button name="submit"><i class="material-icons">save</i>Save</button> &nbsp;
                                           
                                        </div>


                                    </div>
                                              
                                              
                                              
                                            </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
            </div>
          <?php
        }
        $conn->close();
        ?>
                      
            <div class="modal fade" id="manageschedule" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-default" role="document">

                        <div class="modal-content">
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="card">
                                        <div class="header bg-indigo">
                                            <h2>
                                                Manage Schedule

                                                <a href=""><i class="material-icons pull-right" data-dismiss="modal">clear</i></a>
                                            </h2>

                                        </div>
                                        <div class="body">  
                                       
                                          <form class="form-horizontal" form method="POST" action="save/saveschedule.php">
                                            <div class="row clearfix">
                                            
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 form-control-label">
                                            <label for="email_address_2">Patient Name</label>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-5 col-xs-5">
                                            <select class="form-control show-tick" name="patient_S" id="patient_S" title="&nbsp" data-live-search="true" required>
                                                        
                                                        <?php 

                                                          $conn = new mysqli("localhost", "root", "", "PDMIS") or die(mysqli_error());
                                                          $query = $conn->query("SELECT * FROM `patientprofile` WHERE `P_Status` = '1'") or die(mysqli_error());
                                                    
                                                        while ($row = $query->fetch_array()){

                                                        ?>
                                                        <option value="<?php echo $row['Hospital_Id']; ?>" 
                                                        <?php if($fetch['Hospital_Id']==$row['Hospital_Id']) echo "selected"; ?>>
                                                        <?php echo $row['P_Fname']." ".$row['P_Lname']?>
                                                        </option>

                                                        <?php
                                                        }
                                                    ?>
                                            </select>
                                        </div>
                                         
          
                                    </div>
                                              <div class="row clearfix">
                                        <div class="col-lg-3 col-md-3 col-sm-2 col-xs-3 form-control-label">
                                            <label for="email_address_2">Day</label>
                                        </div>
                                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">

                                            <select class="form-control show-tick" name="day_S" id="day_S" title="&nbsp;" >
                                                <option value="#">&nbsp;</option>
                                                <option value="Monday"  <?php if($total =='14' ) {?> disabled style="color:red"<?php }  ?><?php if($fetch['']== 'monday') echo "selected"; ?>
                                                        >Monday<?php if($total =='14' ) {?> (Full)<?php }  ?></option>
                                                 <option value="Tuesday" <?php if($total1 =='14' ) {?> disabled style="color:red"<?php }  ?><?php if($fetch['']== 'tuesday') echo "selected"; ?>
                                                        >Tuesday<?php if($total1 =='14' ) {?> (Full)<?php }  ?></option>
                                                 <option value="Wednesday" <?php if($total2 =='14' ) {?> disabled style="color:red"<?php }  ?><?php if($fetch['']== 'wednesday') echo "selected"; ?>
                                                        >Wednesday<?php if($total2 =='14' ) {?> (Full)<?php }  ?></option>
                                                 <option value="Thursday" <?php if($total3 =='14' ) {?> disabled style="color:red"<?php }  ?><?php if($fetch['']== 'thursday') echo "selected"; ?>
                                                        >Thursday<?php if($total3 =='14' ) {?> (Full)<?php }  ?></option>
                                                 <option value="Friday" <?php if($total4 =='14' ) {?> disabled style="color:red"<?php }  ?><?php if($fetch['']== 'friday') echo "selected"; ?>
                                                        >Friday<?php if($total4 =='14' ) {?> (Full)<?php }  ?></option>
                                            </select>
                                        </div>
                                    </div>
                                         <div class="row clearfix">
                                        <div class="col-lg-3 col-md-1 col-sm-2 col-xs-3 form-control-label">
                                            <label for="email_address_2">Time</label>
                                        </div>
                                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">

                                            <select class="form-control show-tick" name="time_S" id="time_S" title="&nbsp;" >
                                                <option value="#">&nbsp;</option>
                                                <option value="7:30 AM - 11:30 AM" <?php if($fetch['']== '7:30 AM - 11:30 AM') echo "selected"; ?>
                                                        >7:30 AM - 11:30 AM</option>
                                                 <option value="11:30 AM - 4:30 PM" <?php if($fetch['']== '11:30 AM - 4:30 PM') echo "selected"; ?>
                                                        >11:30 AM - 4:30 PM</option>
                                            </select>
                                        </div>
                                    </div>
                                              <div class="row clearfix">
                                        <div class="col-lg-offset-6 col-xs-offset-3">
                                          
                                            <button type="submit" class="btn btn-primary m-t-15 waves-effect" button name="submit"><i class="material-icons">save</i>Save</button> &nbsp;
                                           
                                        </div>


                                    </div>
                                              
                                              
                                              
                                            </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
            </div>
        
        </section>

        <!-- Dropzone Plugin Js -->
        <script src="../../plugins/dropzone/dropzone.js"></script>

        <!-- Jquery Core Js -->
        <script src="../../plugins/jquery/jquery.min.js"></script>

        <!-- Bootstrap Core Js -->
        <script src="../../plugins/bootstrap/js/bootstrap.js"></script>

        <!-- Select Plugin Js -->
        <script src="../../plugins/bootstrap-select/js/bootstrap-select.js"></script>

        <!-- Slimscroll Plugin Js -->
        <script src="../../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

        <!-- Waves Effect Plugin Js -->
        <script src="../../plugins/node-waves/waves.js"></script>


        <script src="../../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>

        <script src="../../plugins/jquery-inputmask/jquery.inputmask.bundle.js"></script>


        <!-- Jquery DataTable Plugin Js -->
        <script src="../../plugins/jquery-datatable/jquery.dataTables.js"></script>
        <script src="../../plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
        <script src="../../plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
        <script src="../../plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
        <script src="../../plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
        <script src="../../plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
        <script src="../../plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
        <script src="../../plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
        <script src="../../plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>
        <?php include('queries/headers_query.php'); ?>
        <!-- Custom Js -->
        <script src="../../js/admin.js"></script>
        <script src="../../js/pages/tables/jquery-datatable.js"></script>
        <script src="../../js/pages/forms/advanced-form-elements.js"></script>


        <!-- Demo Js -->
        <script src="../../js/demo.js"></script>
        <script>
        $( window ).load(function(){
        var module ='<?php echo $transaction_a; ?>';
        var module1 ='<?php echo $patientprofile_a; ?>';
        var module2 ='<?php echo $employeeprofile_a; ?>';
        var module3 ='<?php echo $schedule_a; ?>';
        var module4 ='<?php echo $nephrologist_a; ?>';
        var module5 ='<?php echo $descriptors_a; ?>';
        var module6 ='<?php echo $userprofile_a; ?>';
        var module7 ='<?php echo $maintenance_a; ?>';
        var module8 ='<?php echo $reports_a; ?>';
        
        if(module == '0') 
        {                       
            $('#transaction').hide(); 
            
        }

         if(module1 == '0') 
        {                       
            $('#patientprofile').hide(); 
            
        }
       
         if(module2 == '0') 
        {                       
            $('#employeeprofile').hide(); 
            
        }
       
         if(module3 == '0') 
        {                       
            $('#schedule').hide(); 
            
        }
       
         if(module4 == '0') 
        {                       
            $('#nephrologist').hide(); 
            
        }
      
         if(module5 == '0') 
        {                       
            $('#descriptors').hide(); 
            
        }
   
         if(module6 == '0') 
        {                       
            $('#userprofile').hide(); 
            
        }
    
         if(module7 == '0') 
        {                       
            $('#systemmaintenance').hide(); 
            
        }
      
         if(module8 == '0') 
        {                       
            $('#reports').hide(); 
            
        }
         if(module1 == '0' && module2 == '0' && module3 == '0' && module4 == '0' && module5 == '0'){
              $('#profile').hide(); 
           
         }  
        if(module6 == '0' && module7 == '0'){
              $('#maintenance').hide(); 
           
         } 
        });
        
        
    </script>  
       
    </body>

    </html>
