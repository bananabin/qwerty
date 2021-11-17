$(document).ready(function(){

    $('#image_form').submit(function(event){
        event.preventDefault();
        //var pname = $('#product_name').val();
        var image_name = $('#image').val();
        //var psize = $('#product_size').val();
        //var pprice = $('#product_price').val();
        //var pstatus = $('#product_status').val();
        if(image_name == '')
        {
         alert("Please Select Image");
         return false;
        }
        else
        {
         var extension = $('#image').val().split('.').pop().toLowerCase();
         if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)
         {
          alert("Invalid Image File");
          $('#image').val('');
          return false;
         }
         else
         {
          $.ajax({
           url:"insert.php",
           method:"POST",
           data:new FormData(this),
            contentType:false,
            processData:false,
           success:function(data)
           {
            alert(data);
            //fetch_data();
           // $('#image_form')[0].reset();
            //$('#imageModal').modal('hide');
           }
          });
         }
        }
       });
});
