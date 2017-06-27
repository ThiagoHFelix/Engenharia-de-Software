<?php
session_start();
include_once("php/seguranca.php");
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <title>Shalon</title>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--if lt IE 9
    script(src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')
    script(src='https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')
    -->
  </head>
  <body class="sidebar-mini fixed">
    <div class="wrapper">
      <!-- Navbar-->
      <header class="main-header hidden-print"><a class="logo" href="index.php">Shalon</a>
        <nav class="navbar navbar-static-top">
          <!-- Sidebar toggle button--><a class="sidebar-toggle" href="#" data-toggle="offcanvas"></a>
          <!-- Navbar Right Menu-->
          <div class="navbar-custom-menu">
            <ul class="top-nav">
              <!--Notification Menu-->
              <li class="dropdown notification-menu"><a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell-o fa-lg"></i></a>
                <ul class="dropdown-menu">
                  <li class="not-head">Você tem 1 nova notificação</li>
                  <li><a class="media" href="javascript:;"><span class="media-left media-icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
                      <div class="media-body"><span class="block">Lisa se cadastrou</span></div></a></li>
                 
                </ul>
              </li>
              <!-- User Menu-->
              <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user fa-lg"></i></a>
                <ul class="dropdown-menu settings-menu">
                  <li><a href="pagina_usuario.php"><i class="fa fa-cog fa-lg"></i>Configurações</a></li>
                  <li><a href="pagina_usuario.php"><i class="fa fa-user fa-lg"></i>Perfil</a></li>
                  <li><a href="php/seguranca.php"><i class="fa fa-sign-out fa-lg"></i>Sair</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Side-Nav-->
      <aside class="main-sidebar hidden-print">
        <section class="sidebar">
         
          <!-- Sidebar Menu-->
          <ul class="sidebar-menu">
            <li class="active"><a href="#"><i class="fa fa-dashboard"></i><span>Painel</span></a></li>         
            <li class="treeview"><a href="#"><i class="fa fa-edit"></i><span>Atualização</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">                
                <li><a href="pagina_usuario.php"><i class="fa fa-circle-o"></i> Atualizar informações</a></li>           			           '             </ul>			  
            </li>
			          <li class="treeview"><a href="#"><i class="fa fa-th-list"></i><span>Informações</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="visualizar_agen.php"><i class="fa fa-circle-o"></i> Visualizar agendamentos</a></li>
                <li><a href="listar_clientes"><i class="fa fa-circle-o"></i> Visualizar clientes cadastrados</a></li>
                <li><a href="listar_procedimentos.php"><i class="fa fa-circle-o"></i> Listar procedimentos</a></li>
                <li><a href="listar_diagnosticos.php"><i class="fa fa-circle-o"></i> Listar diagnosticos</a></li>		
              </ul>
            </li>
			
                <li class="treeview"><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i><span>Agendamento</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">               
              <li><a href="agendamento.php"><i class="fa fa-circle-o"></i>Agendar horario</a></li>
              </ul>
            </li>
	<!-- 		
            <li class="treeview"><a href="#"><i class="fa fa-file-text"></i><span>Outros</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">                
                <li><a href="pagina_login.html"><i class="fa fa-circle-o"></i>Pagina de login</a></li>                
                <li><a href="page-lockscreen.html"><i class="fa fa-circle-o"></i>Pagina Lock</a></li>
                <li><a href="pagina_erro.html"><i class="fa fa-circle-o"></i>Pagina de erro</a></li>                                
                
              </ul>
            </li>     
'               -->
          </ul>
        </section>
      </aside>

