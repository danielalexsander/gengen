<?php
//<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
echo '
<head>
  <title>GG</title>
  <link rel="stylesheet" href="./includes/css/bootstrap.min.css">
  <script src="./includes/js/bootstrap.min.js"></script>
</head>';

//echo "<input type='text' name='host' placeholder='Digite o IP aqui'>";
//
//echo "<input type='text' name='user' placeholder='Digite o Usuário aqui'>";
//
//echo "<input type='password' name='password' placeholder='Digite a senha aqui'>";
//
//echo "<input type='text' name='database' placeholder='Digite o nome do banco aqui'>";

?>

<div class="col-sm-12">

<div class="alert alert-primary" role="alert">
  A simple primary alert—check it out!
</div>
<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>