<!-- Side-Nav-->
<aside class="main-sidebar hidden-print">
    <section class="sidebar">
        <div class="user-panel">
            <div class="pull-left image"><img class="img-circle" src="../imagens/user.png" alt="User Image"></div>
            <div class="pull-left info">
                <p><?php echo $_SESSION['primeironome']." ".$_SESSION['sobrenome'];?></p>
                <p class="designation"> <?php echo $_SESSION['entidade']; ?> </p>
            </div>
        </div>
        <!-- Sidebar Menu-->
        <ul class="sidebar-menu">
            <li class="active"><a href="#"><i class="fa fa-dashboard"></i><span>Painel</span></a></li>
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
            <!-- <li><a href="charts.html"><i class="fa fa-pie-chart"></i><span>Charts</span></a></li> -->

            <li class="treeview"><a href="#"><i class="fa fa-edit"></i><span>Gerenciar</span><i class="fa fa-angle-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="CadastroAluno.php"><i class="fa fa-circle-o"></i> Aluno</a></li>                
                    <li><a href="CadastroCurso.php"><i class="fa fa-circle-o"></i> Curso</a></li>
                    <li><a href="CadastroMateria.php"><i class="fa fa-circle-o"></i> Matéria</a></li>
                    <li><a href="CadastroProfessor.php"><i class="fa fa-circle-o"></i> Professor</a></li>
                    <li><a href="CadastroAdministrador.php"><i class="fa fa-circle-o"></i> Administrador</a></li>

                </ul>			  
            </li>

            <li class="treeview"><a href="#"><i class="fa fa-edit"></i><span>Alterar</span><i class="fa fa-angle-right"></i></a>
                <ul class="treeview-menu">

                    <li><a href="AlterarCadastroAluno.php"><i class="fa fa-circle-o"></i> Aluno </a></li>				
                    <li><a href="AlterarCadastroCurso.php"><i class="fa fa-circle-o"></i> Curso</a></li> 
                    <li><a href="AlterarCadastroMateria.php"><i class="fa fa-circle-o"></i> Materia</a></li>  
                    <li><a href="AlterarCadastroProfessor.php"><i class="fa fa-circle-o"></i> Professor</a></li> 
                    <li><a href="AlterarCadastroAdministrador.php"><i class="fa fa-circle-o"></i> Administrador </a></li> 
                </ul>			  
            </li>

            <li class="treeview"><a href="#"><i class="fa fa-th-list"></i><span>Informações</span><i class="fa fa-angle-right"></i></a>
                <ul class="treeview-menu">
                    
                    <li><a href="table-data-table.html"><i class="fa fa-circle-o"></i> Alunos </a></li>
                    <li><a href="table-data-table.html"><i class="fa fa-circle-o"></i> Cursos </a></li>
                    <li><a href="table-data-table.html"><i class="fa fa-circle-o"></i> Matérias </a></li>
                    <li><a href="table-data-table.html"><i class="fa fa-circle-o"></i> Professores </a></li>
                    <li><a href="table-data-table.html"><i class="fa fa-circle-o"></i> Administradores </a></li>
                    
                </ul>
            </li>

            <li class="treeview"><a href="#"><i class="fa fa-file-text"></i><span>Outros</span><i class="fa fa-angle-right"></i></a>
                <ul class="treeview-menu">

                    <li><a href="page-login.html"><i class="fa fa-circle-o"></i> Conteúdo não disponível </a></li>
                   

                </ul>
            </li>
        </ul>
    </section>
</aside>

