<?php
  session_start();

  /*
    Autor: Paulo Gabriel Ronchini
    Data: 08/05/2017
    Tela de atualização de dados de procedimentos.
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
               <div class="card-body">
                  <div class="table-responsive">
                    <form method="post" action="../Controller/atualizar_proc.php">                      
                        <?php
                          #Comando para se conectar ao banco de dados.
                          $connect = mysqli_connect('localhost','root','', 'projeto shalon');
                          #Comando para selecionar o registro da tabela procedimento, que se deseja atualizar.
                          $result = mysqli_query($connect, "SELECT p.Nome, c.CPF, pr.Marca, pr.Tipo_OX, pr.Resultado, pr.Nome_pro, pr.Pontuacao, pr.Tipo, pr.data from pessoa p, cliente c, procedimento pr where pr.ID = ".$_GET['apagar']." and pr.ID_Cliente = c.ID and c.CPF = p.CPF")or die("Erro!");
                          $row = mysqli_fetch_assoc($result);
                          #Preenchimento dos campos para que o usuário possa alterar os dados.
                          echo "
                          <input type='hidden'  name='id' value='".$_GET['apagar']."' id='id'>
                          <div class='form-group'>
                            <label class='control-label'>Marca</label>      
                            <input class='form-control' type='text' placeholder='Marca' name='marca' value='".$row['Marca']."'>
                          </div>
                          <div class='form-group'>
                            <label class='control-label'>Tipo_OX</label>
                            <input class='form-control' type='text' placeholder='Tipo_OX' name='tipo_ox' value='".$row['Tipo_OX']."'>
                          </div>
                          <div class='form-group'>
                            <label class='control-label'>Nome do Produto</label>
                             <input class='form-control' type='text' placeholder='Nome do Produto' name='nome_pro' value='".$row['Nome_pro']."'>
                          </div>
                          <div class='form-group'>
                            <label class='control-label'>Pontuação</label>
                            <input class='form-control' type='text' placeholder='Pontuação' name='pont' value='".$row['Pontuacao']."'>
                          </div>
                          <div class='form-group'>
                            <label class='control-label'>Tipo</label>
                            <input class='form-control' type='text' placeholder='Tipo' name='tipo' value='".$row['Tipo']."'>
                          </div>
                          <div class='form-group'>
                            <label class='control-label'>Resultado</label>
                            <input class='form-control' type='text' placeholder='Resultado' name='res' value='".$row['Resultado']."'>
                          </div>";
                          echo "<input type='submit' name='salvar' value='SALVAR'/>";
                          echo "<a href = 'atualizar_diagnosticos.php'> Voltar</a>";
                    ?>
                    </form>
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