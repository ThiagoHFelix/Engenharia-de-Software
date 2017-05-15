<?php
	header('Content-Type: text/html; charset=ISO-8859-1');
  ?>

  <body class="sidebar-mini fixed">
    <div class="wrapper">
      <!-- Navbar-->
      <header class="main-header hidden-print"><a class="logo" href="index.html">Shalon</a>
        <nav class="navbar navbar-static-top">
          <!-- Sidebar toggle button--><a class="sidebar-toggle" href="#" data-toggle="offcanvas"></a>
          <!-- Navbar Right Menu-->
          <div class="navbar-custom-menu">
            <ul class="top-nav">
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
              <p class="designation">Administrador</p>
            </div>
          </div>
          <!-- Sidebar Menu-->
          <ul class="sidebar-menu">
            <li class="active"><a href="adm.php"><i class="fa fa-dashboard"></i><span>Painel</span></a></li>
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
                <li><a href="cad_procedimento.php"><i class="fa fa-circle-o"></i> Cadastrar Procedimento</a></li>
				    <li><a href="cad_diagnosticos.php"><i class="fa fa-circle-o"></i> Cadastrar diagnóstico</a></li>			           
              </ul>			  
            </li>
			
			<li class="treeview"><a href="#"><i class="fa fa-edit"></i><span>Atualização</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">                
                <li><a href="listar_procedimentos.php"><i class="fa fa-circle-o"></i> Atualizar procedimentos</a></li>				
				<li><a href="atualizar_diagnosticos.php"><i class="fa fa-circle-o"></i> Atualzar diagnosticos</a></li>                
              </ul>			  
            </li>
			
			<li class="treeview"><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i><span>Agendamento</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">               
                 <li><a href="agendamento.php"><i class="fa fa-circle-o"></i>Agendar horario</a></li>
				 <li><a href="listar_agenda.php"><i class="fa fa-circle-o"></i>Verificar horários</a></li>
              </ul>
            </li>
			
			<li class="treeview"><a href="listar_cliente.php"><i class="fa fa-file-text"></i><span>Lista de clientes</a></li>
           </ul>
        </section>
      </aside>