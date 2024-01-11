

$(document).ready(function(){




    $("#timein").on("click",timeIn);
    $("#timeout").on("click",timeOut);

    });

function timeIn (){
    var confirmation = confirm("Do you want to time in now?");
    let yourDate = new Date();
    var curr_date = yourDate.getDate();
    var curr_month = yourDate.getMonth() + 1; //Months are zero based
    var curr_year = yourDate.getFullYear()
    var Hour = yourDate.getHours();
    var Minutes = yourDate.getMinutes();
    var Seconds = yourDate.getSeconds();
    var dateTime = curr_date + "-" + curr_month + "-" + curr_year  + Hour + ':' + Minutes + ":" + Seconds;
    var value = dateTime;
    var isTimedin = "Gregor";
    if (confirmation != true){
     alert("Data not entered")
    }

    else {
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
    let yourDate = new Date();
    var curr_date = yourDate.getDate();
    var curr_month = yourDate.getMonth() + 1; //Months are zero based
    var curr_year = yourDate.getFullYear()
    var Hour = yourDate.getHours();
    var Minutes = yourDate.getMinutes();
    var Seconds = yourDate.getSeconds();
    var dateTime = curr_date + "-" + curr_month + "-" + curr_year  + Hour + ':' + Minutes + ":" + Seconds;
    var value = dateTime;
    var isTimedin = "Yi Sang";
    if (confirmation != true){
     alert("Data not entered")
    }

    else {
    
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



