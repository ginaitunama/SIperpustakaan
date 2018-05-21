<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Flat Login Form</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Montserrat:400,700'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="<?php echo base_url();?>assets/login/css/style.css">

  
</head>

<body style="background-color: grey;">
<div class="container">
</div>
<div class="form">
  <h1 style="font-family: arial black">PERPUSTAKAAN</h1>
  
  <br></br>
  <div class="img"><img src="<?php echo base_url();?>assets/login/iconbook.png" style="width:50%"></div>
  <br></br>
  <form class="login-form" method="POST" action="<?php echo base_url();?>index.php/login/getlogin" submit="return cekform">
    <input type="text" id="username" name="username" class="form-control" placeholder="Username" autocomplete="off" autofocus="on" required/>
    <input type="password" id="password" name="password" class="form-control" placeholder="Password" autocomplete="off" required>
    <br></br>
    <button style="background-color: #263e60">Login</button>
  </form>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="<?php echo base_url();?>assets/js/index.js"></script>




</body>

</html>