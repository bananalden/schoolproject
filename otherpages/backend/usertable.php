<?php

$stmt = "SELECT * FROM userlist;";
$result=mysqli_query($conn, $stmt);

if($result){
    while($row = mysqli_fetch_assoc($result)){
        $id = $row["userID"];
        $name = $row["fullName"];
        $username = $row["username"];
        $email = $row["email"];
        echo '
    <tr>
    <td>'.$id.'</td>
    <td>'.$name.'</td>
    <td>'.$username.'</td>
    <td>'.$email.'</td>
    <td><a class="update" href="update.php?updateID='.$id.'">UPDATE</a><a class="delete" id="delete-button" href="backend/delete.php?getID='.$id.'">DELETE</a></td>
    </tr>';
           
    }
     
    
 }


?>