<?php
  
  /*
    Autor: Paulo Gabriel Ronchini
    Data: 08/05/2017
    Tela de visualização de dados de procedimentos.
  */

  session_start();
  if(empty($_SESSION['chave']) || $_SESSION['chave']<>'ok'){
    header("Location:page_login.php");
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
    <title>Shalon Administrador</title>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--if lt IE 9
    script(src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')
    script(src='https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')
    -->
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
            <h1><i class="fa fa-edit"></i> Procedimento</h1>
            
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li>Home</li>
              <li><a href="#">Consultar Procedimento</a></li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <h3 class="card-title">Consultar Procedimento</h3>
              <div class="card-body">
                  <div class="table-responsive">
                  <table class="table">
                    <?php
/*  O código a seguir faz a conexão ao banco através do comendo mysqli_connect, em seguida com o comando mysqli_query é feita a busca pelos dados de um procedimento específico a partir do valor da variável  $_GET['apagar'], em seguida o programa exibe os dados.*/
                      $connect = mysqli_connect('localhost','root','', 'projeto shalon');
                      $result = mysqli_query($connect, "SELECT p.Nome, c.CPF, pr.Marca, pr.Tipo_OX, pr.Resultado, pr.Nome_pro, pr.Pontuacao, pr.Tipo, pr.data from pessoa p, cliente c, procedimento pr where pr.ID = ".$_GET['apagar']." and pr.ID_Cliente = c.ID and c.CPF = p.CPF");
                      if(mysqli_num_rows($result)<=0 || mysqli_num_rows($result)>1){
                        echo "<script type='text/javascript'>
                                  alert('Algo de errado não está certo');
                              </script>";
                      }else{
                        $row = mysqli_fetch_assoc($result);
                        echo "<tr><td>Nome do Paciente</td>";
                        echo "<td>".$row['Nome']."</td></tr>";
                        echo "<tr><td>CPF</td>";
                        echo "<td>".$row['CPF']."</td></tr>";
                        echo "<tr><td>Marca</td>";
                        echo "<td>".$row['Marca']."</td></tr>";
                        echo "<tr><td>Tipo_OX</td><td>".$row['Tipo_OX']."</td></tr>";
                        echo "<tr><td>Nome do Produto</td><td>".$row['Nome_pro']."</td></tr>";
                        
                        echo "<tr><td>Pontuação</td><td>".$row['Pontuacao']."</td></tr>";
                        echo "<tr><td>Tipo</td><td>".$row['Tipo']."</td></tr>";
                        echo "<tr><td>Resultado</td><td>".$row['Resultado']."</td></tr>";
                        echo "<tr><td>Data</td><td>".$row['data']."</td></tr>";
                        echo "</table>";
                        echo "<a href = 'listar_procedimentos.php'>Voltar</a>";
                    }
                    ?>
                  
                  </div>
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