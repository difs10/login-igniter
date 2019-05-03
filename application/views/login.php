<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Signin Template · Bootstrap</title>

    <link rel="canonical" href="<?=base_url();?>bootstrap-4.3.1/site/docs/4.3/examples/sign-in">

    <!-- Bootstrap core CSS -->
<link href="<?=base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="<?=base_url();?>bootstrap-4.3.1/site/docs/4.3/examples/sign-in/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <form class="form-signin" method="POST" action="<?=site_url();?>/LoginController/conectar">
      <center>
  <img class="mb-4" src="<?=base_url();?>assets/logo.jpg" alt="" width="72" height="72">
  <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
  <label for="text" class="sr-only">Usuario</label>
  <input type="text" name="user" id="user" class="form-control" placeholder="ingrese rut" required autofocus value="18148016-5">
  <label for="password" class="sr-only">Contraseña</label>
  <input type="password" name="password" id="password" class="form-control" placeholder="ingrese Contraseña" >
  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me"> Recordar Usuario
    </label>
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit">Conectar</button>
 </center>
  <p class="mt-5 mb-3 text-muted">&copy; 2019-2030</p>
</form>
</body>
</html>