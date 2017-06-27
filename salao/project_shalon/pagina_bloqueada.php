<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <title>Shalon Admin</title>
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
    <section class="lockscreen-content">
      <div class="logo">
        <h1>Shalon</h1>
      </div>
      <div class="lock-box"><img class="img-circle user-image" src="imagens/user.png">
        <h4 class="text-center user-name">Aléx dos Santos</h4>
        <p class="text-center text-muted">Conta bloqueada</p>
        <form class="unlock-form" action="index.html">
          <div class="form-group">
            <label class="control-label">SENHA</label>
            <input class="form-control" type="password" placeholder="Password" autofocus>
          </div>
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block" type="submit">ENTRAR<i class="fa fa-unlock fa-lg" action="adm.html"></i></button>
          </div>
        </form>
        <p><a href="page-login.html">Não é Aléx ? Pagina de Login.</a></p>
      </div>
    </section>
  </body>
  <script src="js/jquery-2.1.4.min.js"></script>
  <script src="js/essential-plugins.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/plugins/pace.min.js"></script>
  <script src="js/main.js"></script>
</html>