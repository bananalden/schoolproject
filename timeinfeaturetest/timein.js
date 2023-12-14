$(document).ready(function(){

    $("#timeout").prop("disabled", true);

    $("#timein").on("click",timeIn);
    $("#timeout").on("click",timeOut);

    });

function timeIn (){
    var confirmation = confirm("Do you want to time in now?");
    var value = $(this).val();
    if (confirmation != true){
     alert("Data not entered")
    }

    else {
     $("#timeout").prop("disabled", false);
     $("#timein").prop("disabled", true);
   $.ajax({
    url : "inserttable.php",
    type : "POST",
    data : { value : value },
    success: function(response){
        alert("Data has passed through");
    }


   });
}
}


function timeOut (){
    var confirmation = confirm("Do you want to time out now?");
    var value = $(this).val();
    if (confirmation != true){
     alert("Data not entered")
    }

    else {
     $("#timeout").prop("disabled", true);
     $("#timein").prop("disabled", false);
     $.ajax({
        url : "inserttable.php",
        type : "POST",
        data : { value : value },
        success: function(response){
            alert("Data has passed through");
        }

    })
}
}
