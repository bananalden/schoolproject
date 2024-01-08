$(document).ready(function(){

    $("#timeout").prop("disabled", true);

    $("#timein").on("click",timeIn);
    $("#timeout").on("click",timeOut);

    });

function timeIn (){
    var confirmation = confirm("Do you want to time in now?");
    var value = $(this).val();
    var isTimedin = "Gregor";
    if (confirmation != true){
     alert("Data not entered")
    }

    else {
     $("#timeout").prop("disabled", false);
     $("#timein").prop("disabled", true);
   $.ajax({
    url : "inserttable.php",
    type : "POST",
    data : { value : value,
            isTimedin : isTimedin},
    success: function(response){
        alert("Data has passed through");
        $("#session").text(isTimedin);
    }


   });
}
}

function timeOut (){
    var confirmation = confirm("Do you want to time out now?");
    var value = $(this).val();
    var isTimedin = "Yi Sang";
    if (confirmation != true){
     alert("Data not entered")
    }

    else {
     $("#timeout").prop("disabled", true);
     $("#timein").prop("disabled", false);
     $.ajax({
        url : "inserttable.php",
        type : "POST",
        data : { value : value,
                isTimedin : isTimedin },
        success: function(response){
            alert("Data has passed through");
            $("#session").text(isTimedin);
        }

    })
}
}
