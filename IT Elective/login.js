$('#btnLogin').click(function(){
    var username = $('#username').val();
    var password = $('#password').val();

    $.ajax({
        method: 'POST',
        url: './login.php',
        datatype: 'json',
        data:{
            username:username,
            password:password
        },
        success:function(data){
            if(data == '1')
            {
                location.href="HOMEPAGE.php";
                //alert('Welcome Admin');
            }
            else
            {
                alert('Wrong  username or password.');
            }
        },

    });
});