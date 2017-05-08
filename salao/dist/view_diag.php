<?php
  session_start();
   /*
    Autor: Paulo Gabriel Ronchini
    Data: 08/05/2017
    Tela de visualização de dados de procedimentos.
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
    <title>Shalon Admin</title>
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
                  <li class="not-head">Você tem 0 novas notoficações.</li>
                  
                </ul>
              </li>
              <!-- User Menu-->
              <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user fa-lg"></i></a>
                <ul class="dropdown-menu settings-menu">
                  <li><a href="page-user.html"><i class="fa fa-cog fa-lg"></i> Configurações</a></li>
                  <li><a href="page-user.html"><i class="fa fa-user fa-lg"></i> Perfil</a></li>
                  <li><a href="page-login.html"><i class="fa fa-sign-out fa-lg"></i> Sair</a></li>
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
              <p>Aléx dos Santos</p>
              <p class="designation">Administrador</p>
            </div>
          </div>
          <!-- Sidebar Menu-->
          <ul class="sidebar-menu">
            <li class="active"><a href="index.html"><i class="fa fa-dashboard"></i><span>Painel</span></a></li>
            
            
                
            <li class="treeview"><a href="#"><i class="fa fa-edit"></i><span>Cadastro</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="form-componants.html"><i class="fa fa-circle-o"></i> Cadastrar dados</a></li>                
				<li><a href="cad_procedimento.html"><i class="fa fa-circle-o"></i> Cadastrar Procedimento</a></li>
				<li><a href="cad_diagnosticos.php"><i class="fa fa-circle-o"></i> Cadastrar diagnóstico</a></li>
				           
              </ul>			  
            </li>
			
			 <li class="treeview"><a href="#"><i class="fa fa-edit"></i><span>Atualização</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                
                <li><a href="page-user.html"><i class="fa fa-circle-o"></i> Atualizar informações</a></li>				
				<li><a href="atualizar_dignosticos.html"><i class="fa fa-circle-o"></i> Atualizar diagnosticos</a></li>                
              </ul>			  
            </li>
			
			 <li class="treeview"><a href="#"><i class="fa fa-th-list"></i><span>Informações</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="Procedimentos.html"><i class="fa fa-circle-o"></i> Agendamentos</a></li>
                <li><a href="table-data-table.html"><i class="fa fa-circle-o"></i> Clientes cadastrados</a></li>
				<li><a href="listar_procedimentos.html"><i class="fa fa-circle-o"></i> Listar procedimentos</a></li>
				<li><a href="listar_diagnosticos.html"><i class="fa fa-circle-o"></i> Listar diagnosticos</a></li>
				
              </ul>
            </li>
			
			
			<li class="treeview"><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i><span>Agendamento</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">               
                 <li><a href="page-calendar.html"><i class="fa fa-circle-o"></i>Agendar horario</a></li>
              </ul>
            </li>
			
            <li class="treeview"><a href="#"><i class="fa fa-file-text"></i><span>Outros</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                
                <li><a href="page-login.html"><i class="fa fa-circle-o"></i> Página de login</a></li>
                <li><a href="page-user.html"><i class="fa fa-circle-o"></i> Página de usuário</a></li>
                <li><a href="page-lockscreen.html"><i class="fa fa-circle-o"></i> Página de lock</a></li>
                <li><a href="page-error.html"><i class="fa fa-circle-o"></i> Página de erro</a></li>
                <li><a href="page-invoice.html"><i class="fa fa-circle-o"></i> Página de impressão</a></li>
                
                
              </ul>
            </li>
         
          </ul>
        </section>
      </aside>
      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-edit"></i> Atualizar Diagnóstico</h1>
            
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
              <h3 class="card-title">Consultar Diagnósticos</h3>
              <div class="card-body">
                  <h3>Diagnóstico</h3>
                  <div class="table-responsive">
                  <table class="table">
                    <?php
/*  O código a seguir faz a conexão ao banco através do comendo mysqli_connect, em seguida com o comando mysqli_query é feita a busca pelos dados de um diagnóstico específico a partir do valor da variável  $_GET['apagar'], em seguida o programa exibe os dados.*/
                      $connect = mysqli_connect('localhost','root','', 'projeto shalon');
                      $result = mysqli_query($connect, "SELECT p.Nome, c.CPF, d.Fibra, d.Forma, d.Emocional, d.Funcionario, d.Queda, d.Textura, d.data, d.Cuticula, d.CatacterFisi from pessoa p, cliente c, diagnostico d where d.ID = ".$_GET['apagar']." and d.ID_Cliente = c.ID and c.CPF = p.CPF");
                      $row = mysqli_fetch_assoc($result);
                      echo "<tr><td>Nome do Paciente</td>";
                      echo "<td>".$row['Nome']."</td></tr>";
                      echo "<tr><td>CPF</td>";
                      echo "<td>".$row['CPF']."</td></tr>";
                      echo "<tr><td>Fibra</td>";
                      echo "<td>".$row['Fibra']."</td></tr>";
                      echo "<tr><td>Forma</td><td>".$row['Forma']."</td></tr>";
                      echo "<tr><td>Emocional</td><td>".$row['Emocional']."</td></tr>";
                      if($row['Queda'] == 1)
                      {
                        echo "<tr><td>Queda<td>Sim</td></tr>";
                      }else
                      {
                        echo "<tr><td>Queda<td>Não</td></tr>";
                      }
                      echo "<tr><td>Textura</td><td>".$row['Textura']."</td></tr>";
                      echo "<tr><td>Características Físicas</td><td>".$row['CatacterFisi']."</td></tr>";
                      echo "<tr><td>Cuticula</td><td>".$row['Cuticula']."</td></tr>";
                      echo "<tr><td>Data</td><td>".$row['data']."</td></tr>";
                      echo "<tr><td>Funcionario</td><td>".$row['Funcionario']."</td></tr>";
                      echo "</table>";
                      echo "<a href = 'atualizar_diagnosticos.php'>Voltar</a>";
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