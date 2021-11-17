$("document").ready(function(){

        $.ajax({
            method:'POST',
            url:'./user_display.php',
        success:function(data){
            $('#table').html(data);
        } 
    });
    
  });