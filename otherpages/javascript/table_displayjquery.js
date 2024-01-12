$(document).ready(function(){

    $("#grabEmpID").keyup(function(){

        var input = $(this).val();

        if (input != ""){
            $.ajax({
                url: "livesearch.php",
                method: "POST",
                data: {input:input},

                success:function(data){
                    $("#displayResult").html(data);
                }
            });
        }
        else{
            $("#displayResult").css("display", "none");
        }


    });
    
    
    
    });
    






