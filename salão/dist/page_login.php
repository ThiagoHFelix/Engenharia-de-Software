<?php
  //session_start();
  /*
    Autor: Paulo Gabriel Ronchini
    Data: 08/05/2017
    Tela de login do administrador do sistema do salão.
  */
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <title>Shalon admin</title>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--if lt IE 9
    script(src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')
    script(src='https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')
    -->
  </head>
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo">
        <h1>Shalon</h1>
      </div>
      <div class="login-box">
        <form class="login-form" action="../Controller/login.php" method="POST">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>ENTRAR</h3>
          <div class="form-group">
            <label class="control-label">CPF</label>
            <input class="form-control" type="text" placeholder="CPF" autofocus name="login" id="login">
          </div>
          <div class="form-group">
            <label class="control-label">SENHA</label>
            <input class="form-control" type="password" placeholder="senha" name="senha" id="senha">
          </div>
          <div class="form-group">
            <div class="utility">
              <div class="animated-checkbox">
                <label class="semibold-text">
                  <input type="checkbox"><span class="label-text">Continuar logado</span>
                </label>
              </div>
              <p class="semibold-text mb-0"><a id="toFlip" href="#">Esqueceu sua senha?</a></p>
            </div>
          </div>
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block">Entrar<i class="fa fa-sign-in fa-lg"></i></button>
          </div>
        </form>
        <form class="forget-form" action="adm.html">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-lock"></i>Esqueceu a senha?</h3>
          <div class="form-group">
            <label class="control-label">CPF</label>
            <input class="form-control" type="text" placeholder="CPF">
          </div>
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block">Recuperar<i class="fa fa-unlock fa-lg"></i></button>
          </div>
          <div class="form-group mt-20">
            <p class="semibold-text mb-0"><a id="noFlip" href="#"><i class="fa fa-angle-left fa-fw"></i>Voltar ao Login</a></p>
          </div>
        </form>
      </div>
    </section>
  </body>
  <script src="js/jquery-2.1.4.min.js"></script>
  <script src="js/essential-plugins.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/plugins/pace.min.js"></script>
  <script src="js/main.js"></script>
</html>