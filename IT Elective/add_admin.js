var id;

$(document).ready(function(){

    $('#update').hide();

    $("#addAdmin").click(function(){
        var firstname = $("#firstname").val(),
        lastname = $("#lastname").val(),
        email = $("#email").val(),
        username = $("#username").val(),
        password = $("#password").val(),
        position = $("#position").val();


                $.ajax({
                    method:'POST',
                    url:'./add_admin.php',
                    dataType: 'json',
                    data:{
                        add:1,
                        firstname:firstname,
                        lastname:lastname,
                        email:email,
                        username:username,
                        password:password,
                        position:position
                    },
                success:function(data)
                {
                    if(data == '1')
                    {
                    $('#admin_table').load("admin_display.php");
                    alert("Added Succesfully");
                    $('#firstname').val("");
                    $('#lastname').val("");
                    $('#email').val("");
                    $('#username').val("");
                    $('#password').val("");
                    $('#position').val("");
                    }
                    if(data == '0')
                    {
                        alert("Username Already Exist!");
                    }
                },

                });
    });


    $(document).on("click", "#looyahbread", function(){
        var  del = $(this);
        var deleterow = $(this).attr("data-id");
        alert(deleterow);
        var userPreference;

        if (confirm("Do you want to delete this admin?") == true)
        {
            $.ajax({
                method:'POST',
                url:'./add_admin.php',
                dataType: 'json',
                data:{
                    delete:1,
                    deleterow:deleterow,
                },
            success:function(response){
                if(response == '1')
                {
                    del.closest('tr').remove();
                    userPreference = "Deleted Succesfully!";
                }
            }
            });

        }
        else
        {
            userPreference = "Delete Cancelled!";
        }


    });





    $(document).on("click", ".update", function(){

        var  row = $(this);
        id = row.closest('tr').find('td:eq(7)').text();
        var firstname = row.closest('tr').find('td:eq(2)').text(),
            lastname = row.closest('tr').find('td:eq(1)').text(),
            username = row.closest('tr').find('td:eq(3)').text(),
            email = row.closest('tr').find('td:eq(4)').text(),
            password = row.closest('tr').find('td:eq(6)').text(),
            position = row.closest('tr').find('td:eq(5)').text();
        $('#firstname').val(firstname);
        $('#lastname').val(lastname);
        $('#username').val(username);
        $('#email').val(email);
        $('#password').val(password);
        $('#position').val(position);
        $('#update').show();
        $('#addAdmin').hide();
        $('#username').attr('readonly', true);
        $('#username').attr("style", "background:rgb(73, 72, 72);color:white;");
    });


    $("#update").click(function(){


        var firstname = $("#firstname").val(),
        lastname = $("#lastname").val(),
        email = $("#email").val(),
        username = $("#username").val(),
        password = $("#password").val(),
        position = $("#position").val();


        $.ajax({
            method:'POST',
            url:'./add_admin.php',
            dataType: 'json',
            data:{
                update:1,
                id:id,
                firstname:firstname,
                lastname:lastname,
                username:username,
                email:email,
                password:password,
                position:position
            },
        success:function(data){
            if(data == '1')
            {
            $('#admin_table').load("admin_display.php");
            alert("Updated Sucessfully");
            $('#firstname').val("");
            $('#lastname').val("");
            $('#username').val("");
            $('#email').val("");
            $('#password').val("");
            $('#position').val("");
            $('#update').hide();
            $('#addAdmin').show();
            $('#username').removeAttr('readonly');
            $('#username').removeAttr('style');
            }
        },
        });
        console.log(id);

    });



})