

$(document).ready(function(){

    $('#datepick').datepicker({ dateFormat: 'yy/mm/dd' });

    $("#btnSearch").click(function(){

        var date = $('#datepick').val();
        
        if(date != "")
        {
        $.ajax({
            method:'POST',
            url:'search.php',
            data:{
                date_search:date
            },
        success:function(response)
            {
                    $("#datepick").val("");
                    $('#table').html(response);       
            } 
        });
        }
        else
        {
            alert("Please put a Reference Number!");
            location.href="USER MANAGEMENT PAGE.html";

        }
    })
});