<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title class="fa fa-home">LOGIN</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Montserrat:400,700'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="<?php echo base_url();?>assets/login/css/style.css">

  
</head>
<style>
  .form{
    margin-top:50px; 
    background-color: transparent;
    border: 3px solid #442930;
    height:450px;
  }
h1{
  font-family: 'Fredoka One', cooper black;
  width: 100%;
  text-align: center;
  position: cenTER;
  font-size: 50px;
  margin: 0;
  color: #442930;
}

</style>
<body style="background-image: url('<?php echo base_url();?>assets/login/b.jpg');">
<div class="container">
</div>
<div class="form">
  <h1 class="text1">SIPEs-WEB</h1>
  <br></br>
  <div class="img"><img src="<?php echo base_url();?>assets/login/books1.png" style="width:50%"></div>
  <br></br>
  <form class="login-form" method="POST" action="<?php echo base_url();?>index.php/login/getlogin" submit="return cekform">
    <input type="text" id="username" name="username" class="form-control" placeholder="Username" autocomplete="off" autofocus="on" required/>
    <input type="password" id="password" name="password" class="form-control" placeholder="Password" autocomplete="off" required>
    <br></br>
    <button style="background-color: #442930;">Login</button>
  </form>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="<?php echo base_url();?>assets/js/index.js"></script>




</body>

</html>