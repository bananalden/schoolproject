$(document).ready(function(){

    $("#delete-button").on("click",userDelete);

    function userDelete (){
        var confirmation = confirm("Are you sure you want to delete this user?");
        var userID = $(this).val();
        if (confirmation != true){
         alert("Data not entered")
        }
    
        else {
       $.ajax({
        url : "delete.php",
        type : "POST",
        data : { userID : userID },
        success: function(response){
            alert("User has been deleted!");
        }
    
    
       });
    }
    }
});