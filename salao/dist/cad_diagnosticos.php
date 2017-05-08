<?php
/*
  Autor: Paulo Gabriel Ronchini
  Data: 08/05/2017

  Tela para cadastro de diagnósticos.
*/

  session_start();
if(empty($_SESSION['chave']) || $_SESSION['chave']<>'ok'){
    header("Location:page_login.php");
  }
/*
    Verifica a variavel de sessão $_SESSION["resposta"] que indica se o cpf informado foi encontrado e se o diagnóstico foi cadastrado, e informa ao usuário o resultado da aperação. 
*/
if(isset($_SESSION["resposta"])){
  if($_SESSION["resposta"] == 'false'){
       echo "<script type='text/javascript'>alert('CPF não encontrado ou inválido');</script>";   
       $_SESSION["resposta"] = '';   
  }elseif($_SESSION["resposta"] == 'true'){
       echo "<script type='text/javascript'>alert('Diagnóstico cadastrado com sucesso!');</script>";
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
              document.getElementById("cad_diag").submit();
      } 

      function voltar(){
        if(confirm("Você tem certeza que quer sair? Suas alterações seram perdidas!")){
            window.location.href = "adm.php";
        }
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
              <p class="designation">Teste</p>
            </div>
          </div>
          <!-- Sidebar Menu-->
          <ul class="sidebar-menu">
            <li class="active"><a href="index.html"><i class="fa fa-dashboard"></i><span>Painel</span></a></li>
            
            
                
            <li class="treeview"><a href="#"><i class="fa fa-edit"></i><span>Cadastro</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="form-componants.html"><i class="fa fa-circle-o"></i> Cadastrar dados</a></li>                
				<li><a href="cad_procedimento.html"><i class="fa fa-circle-o"></i> Cadastrar Procedimento</a></li>
				<li><a href="cad_diagnosticos.html"><i class="fa fa-circle-o"></i> Cadastrar diagnóstico</a></li>
				           
              </ul>			  
            </li>
			
			 <li class="treeview"><a href="#"><i class="fa fa-edit"></i><span>Atualização</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                
                <li><a href="page-user.html"><i class="fa fa-circle-o"></i> Atualizar informações</a></li>				
				<li><a href="atualizar_diagnosticos.php"><i class="fa fa-circle-o"></i> Atualizar diagnosticos</a></li>                
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
            <h1><i class="fa fa-edit"></i> Cadastrar diagnósticos</h1>
            
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li>Home</li>
              <li><a href="#">Novo diagnóstico</a></li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <h3 class="card-title">Cadastrar informações</h3>
              <div class="card-body">
              <!--Formulário de cadastro de diagnóstico-->
                <form action="../Controller/Diagnostico.php" method="post" id="cad_diag">
                  <div class="form-group">
                    <label class="control-label">CPF</label>	  	
                    <input class="form-control" type="text" placeholder="CPF do cliente" name="cpf">
                  </div>
				          <div class="form-group">
                    <label class="control-label">Textura</label>	  	
                    <input class="form-control" type="text" placeholder="Textura" name="tex">
                  </div>
                  <div class="form-group">
                    <label class="control-label">Forma</label>
                    <input class="form-control" type="text" placeholder="Marca do produto" name="for">
                  </div>
                  <div class="form-group">
                    <label class="control-label">Fibra</label>
                     <input class="form-control" type="text" placeholder="Fibra" name="fi">
                  </div>
				          <div class="form-group">
                    <div class="checkbox">
                      <label><input type="checkbox" name="que">O paciente tem queda de cabelo?</label>
                    </div>                    
                  </div>
				          <div class="form-group">
                    <label class="control-label">Emocinal</label>
                    <input class="form-control" type="text" placeholder="Nome do Procedimento" name="emo">
                  </div>
                  <div class="form-group">
                    <label class="control-label">Cutícula</label>
                    <input class="form-control" type="text" placeholder="Cutícula" name="cu">
                  </div>
                  <div class="form-group">
                    <label class="control-label">Característica Físicas</label>
                    <input class="form-control" type="text" placeholder="Característica Físicas" name="caf">
                  </div>
				          <div class="form-group">
                    <label class="control-label">Cor</label>
                    <input class="form-control" type="text" placeholder="Pontuação" name="cor">
                  </div>
				          <div class="form-group">
                    <label class="control-label">Funcionário</label>
                    <input class="form-control" type="text" placeholder="Nome do funcionário que fez o diagnóstico" name="fun">
                  </div>                                                   
                 </form>
              </div>
              <div class="card-footer">
                <button class="btn btn-primary icon-btn" onclick="cadastrar();" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>Cadastrar</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-default icon-btn" onclick="voltar();"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancelar</a>
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