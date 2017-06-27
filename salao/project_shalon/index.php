

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Shalon</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">




  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="container-fluid">

        <nav class="navbar navbar-default navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Shalon</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">Sobre</a></li> 
                
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Empresa<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    
                    <li><a href="../Escola/escola.php">Escola</a></li>
                    <!--  <li role="separator" class="divider"></li>
                    <li class="dropdown-header">Nav header</li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li> -->
                  </ul>
                </li>
              </ul>
                <form class="navbar-form navbar-right" action="pagina_login.php">
                  <!-- 
				  <div class="form-group">
                    <input type="text" placeholder="CPF" class="form-control">
                  </div>
                  <div class="form-group">
                    <input type="password" placeholder="Senha" class="form-control">
                  </div>
                  -->
                  <button class="btn btn-sm btn-primary" type="submit" class="btn btn-success">Entrar</button> 
                  
				  <!--
                  <button  class="btn btn-sm btn-primary" type="submit" class="btn btn-success" >Cadastrar</button>

                  <button  class="btn btn-sm btn-link" type="submit" class="btn btn-success" >Esqueci a senha</button>

					-->

               

                </form>
            </div>
             


          </div>

        </nav>

      </div>
    </div>


    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="imagens/s1.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Exemplo de JQuery</h1>
              <p>Conteúdo que aparece na imagem <!-- <code>file://</code> URL,--> </p>
              <p><a class="btn btn-lg btn-primary" href="cadastro.php" role="button">Cadastre-se</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="imagens/s2.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Outro exemplo de JQuery</h1>
              <p>Outro conteúdo que aparece na imagem</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Aprenda mais</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="imagens/s3.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Mais um exemplo de JQuery</h1>
              <p>Outro conteúdo que aparece na imagem</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Mostrar galeria</a></p>
            </div>
          </div>
        </div>
      </div>
      
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="imagens/m1.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2>Morenas</h2>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
          <p><a class="btn btn-default" href="#" role="button">Ver detalhes &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="imagens/m2.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2>Loiras</h2>
          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
          <p><a class="btn btn-default" href="#" role="button">Ver detalhes &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="imagens/m3.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2>Ruivas</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn btn-default" href="#" role="button">Ver detalhes &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Excelentes profissionais<span class="text-muted"> que vão te surpreender</span></h2>
          <p class="lead">Testo vai aqui</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" src="imagens/s4.jpg">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading">Ambiente familiar amigável<span class="text-muted"> vejá por si mesma</span></h2>
          <p class="lead">Texto vai aqui</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" src="imagens/s6.jpg">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Por último<span class="text-muted"> satisfação ou seu dinheiro de volta</span></h2>
          <p class="lead"> Texto vai aqui</p>
        </div>
        <div class="col-md-5">
          <img  class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" src="imagens/s5.jpg">
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Voltar ao início</a></p>
        <p>&copy; 2017 Shalon. &middot; <a href="#">Privacidade</a> &middot; <a href="#">Termos</a></p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>


</style>
  </body>
</html>
