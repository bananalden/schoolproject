<?php

include 'functioncheck.php';

if(isset($_GET["search"])){
    $empID = $_GET["search"];
    $stmt = "SELECT empID, fullName, dept, DATE(timein) AS dayin, TIME(timein) AS clockin, DATE(timeExit) AS dayout, TIME(timeExit) AS clockExit FROM usertime WHERE empID = '$empID';";
    $result=mysqli_query($conn, $stmt);
    if(mysqli_num_rows($result) > 0){

        foreach ($result as $rows){
              $dept = $rows["dept"];
              $deptChange = renameDep($dept);
              $oldDatein = $rows["dayin"];
              $newDatein = date("M, d, Y", strtotime($oldDatein)); //PLACE THIS FOR TABLE
              $oldDateout = $rows["dayout"];
              $newDateout = date("M, d, Y", strtotime($oldDateout)); //PLACE THIS FOR TABLE
              $oldClockin = $rows["clockin"];
              $newClockin = date("g:i a", strtotime($oldClockin));
              $oldClockout = $rows["clockExit"];
              $newClockout = date("g:i a", strtotime($oldClockout));   
            
            echo '<tr>
                    <td>'.$rows["empID"].'</td>
                    <td>'.$rows["fullName"].'</td>
                    <td>'.$deptChange.'</td>
                    <td>'.$newDatein.'</td>
                    <td>'.$newClockin.'</td>
                    <td>'.$newDateout.'</td>
                    <td>'.$newClockout.'</td>
            
            ';

        }
    }
  

}



 
?>