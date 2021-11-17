$(document).ready(function(){
    $.ajax({
        method:'POST',
        url:'./admin_display.php',
    success:function(data){
        $('#admin_table').html(data);
    } 
});

})