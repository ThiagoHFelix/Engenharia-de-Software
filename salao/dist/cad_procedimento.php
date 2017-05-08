<?php
/*

  Autor: Paulo Gabriel Ronchini
  Data: 08/05/2017

  Tela de cadastro de procedimentos

*/

  session_start();
  if(empty($_SESSION['chave']) || $_SESSION['chave']<>'ok'){
    header("Location:page_login.php");
  }
  /*
    Verifica a variavel de sessão $_SESSION["resposta"] que indica se o cpf informado foi encontrado e se o procedimento foi cadastrado, e informa ao usuário o resultado da aperação. 
  */
  if(isset($_SESSION["resposta"])){
    if($_SESSION["resposta"] == 'false'){
         echo "<script type='text/javascript'>
             alert('CPF não encontrado ou inválido');
         </script>";   
         $_SESSION["resposta"] = '';   
    }elseif($_SESSION["resposta"] == 'true'){
         echo "<script type='text/javascript'>
             alert('Procediem cadastrado com sucesso!');
         </script>";
         $_SESSION["resposta"] = '';
    }
  }
?>
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
    <script type="text/javascript">
      function cadastrar() {
              document.getElementById("cad_proc").submit();
      }      
    </script>

  </head>
  <body class="sidebar-mini fixed">
    <div class="wrapper">
      <!-- Navbar-->
      <header class="main-header hidden-print"><a class="logo" href="index.html">Shalon</a>
        <nav class="navbar navbar-static-top">
          <!-- Sidebar toggle button--><a class="sidebar-toggle" href="#" data-toggle="offcanvas"></a>
          <!-- Navbar Right Menu-->
          <div class="navbar-custom-menu">
            <ul class="top-nav">
              <!--Notification Menu-->
              <li class="dropdown notification-menu"><a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell-o fa-lg"></i></a>
                <ul class="dropdown-menu">
                  <li class="not-head">Voce tem 4 novas notificações<li>
                  <li><a class="media" href="javascript:;"><span class="media-left media-icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
                      <div class="media-body"><span class="block">Lisa se cadastrou</span></div></a></li>
            
            <li><a class="media" href="javascript:;"><span class="media-left media-icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
                      <div class="media-body"><span class="block">Ana se cadastrou</span></div></a></li>
                  
                
            
                  <li class="not-footer"><a href="#">Ver todas as notificações</a></li>
                </ul>
              </li>
              <!-- User Menu-->
              <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user fa-lg"></i></a>
                <ul class="dropdown-menu settings-menu">
                  <li><a href="#"><i class="fa fa-cog fa-lg"></i>Configurações</a></li>                  
                  <li><a href='#''><i class='fa fa-user fa-lg'></i>Perfil</a></li>
                  <?php                  
                    echo "<li><a href='../Controller/logout.php'><i class='fa fa-sign-out fa-lg'></i>Sair</a></li>"
                  ?>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Side-Nav-->
      <aside class="main-sidebar hidden-print">
        <section class="sidebar">
          <div class="user-panel">
            <div class="pull-left image"><img class="img-circle" src="imagens/user.png" alt="User Image"></div>
            <div class="pull-left info">
              <?php
                echo "<p>".$_SESSION['user']."</p>"
              ?>
              <p class="designation">Cliente</p>
            </div>
          </div>
          <!-- Sidebar Menu-->
          <ul class="sidebar-menu">
            <li class="active"><a href="index.html"><i class="fa fa-dashboard"></i><span>Painel</span></a></li>
            <!-- 
      <li class="treeview"><a href="#"><i class="fa fa-laptop"></i><span>UI Elements</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="bootstrap-componants.html"><i class="fa fa-circle-o"></i> Bootstrap Elements</a></li>
                <li><a href="ui-font-awesome.html"><i class="fa fa-circle-o"></i> Font Icons</a></li>
                <li><a href="ui-cards.html"><i class="fa fa-circle-o"></i> Cards</a></li>
                <li><a href="widgets.html"><i class="fa fa-circle-o"></i> Widgets</a></li>
              </ul>
            </li>
            -->
                
            <li class="treeview"><a href="#"><i class="fa fa-edit"></i><span>Cadastro</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="form-componants.html"><i class="fa fa-circle-o"></i> Cadastrar dados</a></li>                
        <li><a href="cad_procedimento.php"><i class="fa fa-circle-o"></i> Cadastrar Procedimento</a></li>
        <li><a href="cad_diagnosticos.php"><i class="fa fa-circle-o"></i> Cadastrar diagnóstico</a></li>
                   
              </ul>       
            </li>
      
       <li class="treeview"><a href="#"><i class="fa fa-edit"></i><span>Atualização</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                
                <li><a href="page-user.html"><i class="fa fa-circle-o"></i> Atualizar informações</a></li>        
        <li><a href="atualizar_diagnosticos.html"><i class="fa fa-circle-o"></i> Atualzar diagnosticos</a></li>                
              </ul>       
            </li>
      
      <li class="treeview"><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i><span>Agendamento</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">               
                 <li><a href="page-calendar.html"><i class="fa fa-circle-o"></i>Agendar horario</a></li>
              </ul>
            </li>
      
      <li class="treeview"><a href="#"><i class="fa fa-file-text"></i><span>Outros</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">                
                
                
                <li><a href="page-lockscreen.html"><i class="fa fa-circle-o"></i>Página lock</a></li>
                <li><a href="page-error.html"><i class="fa fa-circle-o"></i>Página de erro</a></li>
                <li><a href="page-invoice.html"><i class="fa fa-circle-o"></i>Informações do cliente</a></li>
                
                
              </ul>
            </li>
           </ul>
        </section>
      </aside>
      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-edit"></i> Cadastrar Procedimento</h1>
            
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li>Home</li>
              <li><a href="#">Novo procedimento</a></li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <h3 class="card-title">Cadastrar Procedimento</h3>
              <div class="card-body">
              <!--Formulário de cadastro de procedimento-->
                <form action="../Controller/cad_proc.php" method="post" id="cad_proc">
                  <div class="form-group">
                    <label class="control-label">CPF</label>	  	
                    <input class="form-control" type="text" name="cpf" id="cpf" placeholder="CPF do cliente">
                  </div>
				          <div class="form-group">
                    <label class="control-label">Marca</label>
                    <input class="form-control" type="text" name="marca" id="marca" placeholder="Marca do produto">
                  </div>
                  <div class="form-group">
                    <label class="control-label">Tipo de OX</label>
                     <input class="form-control" type="text" name="ox" id="ox" placeholder="Tipo de OX">
                  </div>
				          <div class="form-group">
                    <label class="control-label">Resultado</label>
                    <input class="form-control" type="text" name="res" id="res" placeholder="Resultado">
                  </div>
				          <div class="form-group">
                    <label class="control-label">Nome do Procedimento</label>
                    <input class="form-control" type="text" name="nproc" id="nproc" placeholder="Nome do Procedimento">
                  </div>
				          <div class="form-group">
                    <label class="control-label">Pontuação</label>
                    <input class="form-control" type="text" name="pont" id="pont" placeholder="Pontuação">
                  </div>
				          <div class="form-group">
                    <label class="control-label">Tipo</label>
                    <input class="form-control" type="text" name="tipo" id="tipo" placeholder="Tipo">
                  </div>                
                </form>
              </div>
              <div class="card-footer">
                <button class="btn btn-primary icon-btn" type="button" onclick="cadastrar();"><i class="fa fa-fw fa-lg fa-check-circle"></i>Cadastrar</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-default icon-btn" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
              </div>
            </div>
          </div>
        
         
        </div>
      </div>
    </div>
    <!-- Javascripts-->
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/essential-plugins.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/pace.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>