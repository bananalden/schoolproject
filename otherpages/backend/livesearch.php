<?php

include 'functioncheck.php';

if(isset($_GET["search"])){
    $empID = $_GET["search"];
    $stmt = "SELECT * FROM usertime WHERE empID = '$empID';";
    $result=mysqli_query($conn, $stmt);
    if(mysqli_num_rows($result) > 0){

        foreach ($result as $rows){
              $dept = $rows["dept"];
              $deptChange = renameDep($dept); 
            
            echo '
            <tr>
            <td>'.$rows["empID"].'</td>
                <td>'.$rows["fullName"].'</td>
                <td>'.$deptChange.'</td>
                <td>'.$rows["timein"].'</td>
                <td>'.$rows["timeExit"].'</td>
            </tr>';

        }
    }
  

}



 
?>