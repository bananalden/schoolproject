<?php

include 'functioncheck.php';

$stmt = "SELECT * FROM userlist;";
$result=mysqli_query($conn, $stmt);

if($result){
    while($row = mysqli_fetch_assoc($result)){
        $id = $row["empID"];
        $name = $row["fullName"];
        $department = $row["dept"];
        $pos = $row["position"];
        $empStatus = $row["empStatus"];
        $dep = renameDep($department);
        $position = renamePos($pos);
        $status = renameStat($empStatus);
        $test = "poopoo";


        echo '<tr>
        <td>'.$id.'</td>
        <td>'.$name.'</td>
        <td>'.$dep.'</td>
        <td>'.$position.'</td>
        <td>'.$status.'</td>
        <td><a class="update" href="update.php?updateID='.$id.'">UPDATE</a><a class="delete" id="delete-button" href="backend/delete.php?getID='.$id.'">DELETE</a></td>
        </tr>';
               
    
    }
     
    
 }

 
?>
