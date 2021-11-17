var referenceNumber;


$(document).ready(function(){
    
$("#btnSeacrh").click(function(){

    referenceNumber = $("#txtInput").val();

    if(referenceNumber != "")
    {
        $.ajax({
            method:'POST',
                url:'update.php',
                data:{
                    reference:referenceNumber
                },
            success:function(data)
                {
                    $('#displayUser').html(data);
                    $("#txtInput").val("");
                } 
            });
    }
    else
    {
        alert("Please insert a reference number!");
        $('#displayUser').html("");
    }
   
})

$(document).on("click", "#btnUpdate", function(){
    var newLine = "\n"
    $.ajax({
        method:'POST',
            url:'confirm.php',
            data:{
                reference:referenceNumber
            },
        success:function(name, date)
            {
                alert(name, date);
                $('#displayUser').html("");
               
            } 
        });
})
})
