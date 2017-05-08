<?php
  session_start();
 if(empty($_SESSION['chave']) || $_SESSION['chave']<>'ok'){
    header("Location:page_login.php");
  }
  /*
    Autor: Paulo Gabriel Ronchini
    Data: 08/05/2017

    Página com o formulário de atualização de diagnósticos.

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
    <script type="text/javascript">
      

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
              <h3 class="card-title" style="margin-bottom:0px;">Consultar Diagnósticos</h3>
              <form method="post">
                    <div class="form-group">
                      <div class="col-xs-12 col-sm-6"><input class="form-control" type="text" placeholder="Nome do cliente" name="cpf" id="cpf"></div>
                      <div class="col-sm-2"><input class="form-control" type="submit" value="Buscar" name="ok"></div>         
                    </div>                         
                   </form> 
              <div class="card-body">
                  <?php
                      /*O primeiro if verifica se a variável $_POST['cpf'] está preenchida, caso seja verdadeiro essa verificação 
                    o programa faz a conexão com o banco de dados, em seguida a variável local $result recebe os diagnósticos encontrados no banco de dados relacionados ao cpf informado, em seguida é listado todos os registro com três botões de ação, um que redireciona o usuário para a tela de visualização dos dados, o segundo botão leva para a tela de alteração de dados, e o terceiro deleta o item selecionado.
                      */
                     if(isset($_POST['cpf'])){                      
                      $connect = mysqli_connect('localhost','root','', 'projeto shalon');                  
                      $result = mysqli_query($connect, "SELECT p.Nome, d.Funcionario,DATE_FORMAT(d.data, '%d/%m/%y') as data, d.ID from pessoa p, cliente c, diagnostico d where '".$_POST['cpf']."' = p.Nome and p.CPF = c.CPF and c.ID = d.ID_Cliente")or die("Erro!");
                      if(mysqli_num_rows($result) == 0){
                        echo "<script type='text/javascript'>
                                  alert('Cliente não encontrado');
                              </script>";
                      }else{
                        echo "<table class= 'table table-striped'>";
                        echo "<thead>";
                        echo " <tr>";
                        echo    "<th>Cliente</th>";
                        echo    "<th>Funcionário</th>";
                        echo    "<th>Data</th>"; 
                        echo    "<th>Ações</th>";                       
                        echo  "</tr>";
                        echo "</thead>";
                        while($row = mysqli_fetch_assoc($result)){
                            echo "<tr><td>".$row['Nome']."</td><td>".$row['Funcionario']."</td><td>".$row['data']."</td><td class='actions'>
                                  <a class='btn btn-success btn-xs' href='view_diag.php?apagar=".$row['ID']."'><i class='fa fa-eye' aria-hidden='true'></i></a>
                                  <a class='btn btn-warning btn-xs' href='update_diag.php?apagar=".$row['ID']."'><i class='fa fa-pencil-square-o' aria-hidden='true'></i></a>
                                  <a class='btn btn-danger btn-xs'  href='../Controller/deletar_diag.php?apagar=".$row['ID']."'><i class='fa fa-trash-o' aria-hidden=true'></i></a>
                                  </td></tr>";                    
                        }
                        echo "</table>";
                      }
                      mysqli_close($connect);
                      $_POST['cpf'] = NULL; 
                      
                    }                 
                 ?>
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