<!-- Side-Nav-->
<aside class="main-sidebar hidden-print">
    <section class="sidebar">
        <div class="user-panel">
            <div class="pull-left image"><img class="img-circle" src="../imagens/user.png" alt="User Image"></div>
            <div class="pull-left info">
                <div ><p style=""><?php  echo $_SESSION['nome']."";?></p></div>
                <p class="designation"> <?php echo $_SESSION['entidade']; ?> </p>
            </div>
        </div>
        <!-- Sidebar Menu-->
        <ul class="sidebar-menu">
            <li class="active"><a href='<?php echo "index.php?id=$id" ?>' > <i class="fa fa-dashboard"></i><span>Home</span></a></li>
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

            <li class="treeview"><a href="#"><i class="fa fa-edit"></i><span> Cadastrar </span><i class="fa fa-angle-right"></i></a>
                <ul class="treeview-menu">
                    
                    <li><a href= <?php echo "CadastroAluno.php?id=$id" ?> ><i class="fa fa-circle-o"></i> Aluno</a></li>                
                    <li><a href= <?php echo "CadastroCurso.php?id=$id" ?> ><i class="fa fa-circle-o"></i> Curso</a></li>
                    <li><a href= <?php echo "CadastroMateria.php?id=$id" ?> ><i class="fa fa-circle-o"></i> Matéria</a></li>
                    <li><a href= <?php echo "CadastroProfessor.php?id=$id" ?>  ><i class="fa fa-circle-o"></i> Professor</a></li>
                    <li><a href= <?php echo "CadastroAdministrador.php?id=$id" ?>  ><i class="fa fa-circle-o"></i> Administrador</a></li>

                </ul>			  
            </li>

            

            <li class="treeview"><a href="#"><i class="fa fa-th-list"></i><span>Informações</span><i class="fa fa-angle-right"></i></a>
                <ul class="treeview-menu">

                    <li><a href="<?php echo "listAllAluno.php?id=$id" ?>"><i class="fa fa-circle-o"></i> Alunos </a></li>
                    <li><a href="table-data-table.html"><i class="fa fa-circle-o"></i> Cursos </a></li>
                    <li><a href="table-data-table.html"><i class="fa fa-circle-o"></i> Matérias </a></li>
                    <li><a href="<?php echo "listAllProf.php?id=$id" ?>"><i class="fa fa-circle-o"></i> Professores </a></li>
                    <li><a href='<?php echo "listAdm.php?id=$id" ?>'><i class="fa fa-circle-o"></i> Administradores </a></li>

                </ul>
            </li>

            <li class="treeview"><a href="#"><i class="fa fa-file-text"></i><span>Outros</span><i class="fa fa-angle-right"></i></a>
                <ul class="treeview-menu">

                    <li><a href="<?php echo "newAviso.php?id=$id" ?>"><i class="fa fa-circle-o"></i> Novo aviso </a></li>


                </ul>
            </li>
        </ul>
    </section>
</aside>

