<?php
session_start();

?>

<!doctype html>
<html lang="en">
<body style="background-color: rgb(190, 190, 190)"></body>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="loginstyles.css">

    <!-- Bootstrap CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet"
          href="googleapis.css">
    <title>Login</title>
  </head>
  
  <body>
    
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12"></div>
            <div class="col-md-4 col-sm-4 col-xs-12">
    <!--Form Start-->
            <form class="form-container">
              <h1 class="loginHeader">Login as admin</h1>
                <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" aria-describedby="emailHelp">
                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                </div>
                <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="password">
                </div>
                <!--Checkbox-->
                <!-- <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div> --->

                <div class="d-grid gap-2">
                  <button class="btn btn-login btn-block" type="button" id="btnLogin">Login</button>
                </div>
            </form>
    <!--Form End-->
                </div>
            <div class="col-md-4 col-sm-4 col-xs-12"></div>
        </div>
    </div>        


    <script src="jquery-3.5.1.slim.min.js"></script>
    <script src="ajax_libs_jquery_2.1.3_jquery.min.js"></script>
    <script src="popper.min.js"></script>
    <script src="bootstrap.min.js"></script>
    <script src="login.js"></script>
  </body>
</html>