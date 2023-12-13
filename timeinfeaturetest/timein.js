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
     alert("Data entered" + value);

     $.post( 
        "inserttable.php",
        { val: value}
          );
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
     alert("Data entered");

    }
}

