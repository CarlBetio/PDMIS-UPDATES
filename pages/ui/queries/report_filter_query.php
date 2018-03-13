<?php
 $conn = new mysqli("localhost", "root", "", "PDMIS") or die(mysqli_error());
if(isset($_POST['dialysisdetail3'])){
 if($_POST['dialysisdetail3'] == ''){
      $query3 = $conn->query("Select `patientprofile`.`Hospital_Id`,`diagnostic/examination`.`DM`, `diagnostic/examination`.`HPN`,`diagnostic/examination`.`PTB`,`diagnostic/examination`.`Cancer`,`diagnostic/examination`.`Asthma`,`diagnostic/examination`.`PIO_others`,`patientprofile`.`P_Lname`,`patientprofile`.`P_Fname`,`patientprofile`.`P_Mname` FROM `patientprofile` INNER JOIN `diagnostic/examination` ON `diagnostic/examination`.`Hospital_Id` = `patientprofile`.`Hospital_Id` WHERE `diagnostic/examination`.`date` BETWEEN '$from' AND '$to' GROUP BY `diagnostic/examination`.`date`") or die(mysqli_error());
 }
    if($_POST['dialysisdetail3'] != ''){
        $var = $_POST['dialysisdetail3'];
      $query3 = $conn->query("Select `patientprofile`.`Hospital_Id`,`diagnostic/examination`.`DM`, `diagnostic/examination`.`HPN`,`diagnostic/examination`.`PTB`,`diagnostic/examination`.`Cancer`,`diagnostic/examination`.`Asthma`,`diagnostic/examination`.`PIO_others`,`patientprofile`.`P_Lname`,`patientprofile`.`P_Fname`,`patientprofile`.`P_Mname` FROM `patientprofile` INNER JOIN `diagnostic/examination` ON `diagnostic/examination`.`Hospital_Id` = `patientprofile`.`Hospital_Id` WHERE `diagnostic/examination`.`date` BETWEEN '$from' AND '$to' AND `diagnostic/examination`.`$var` = '1' GROUP BY `diagnostic/examination`.`date`") or die(mysqli_error());
 }  
}
?>