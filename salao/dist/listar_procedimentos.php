<?php
  session_start();
  /*
    Autor: Paulo Gabriel Ronchini
    Data: 08/05/2017

    Página com o formulário de atualização de diagnósticos.

  */
  if(empty($_SESSION['chave']) || $_SESSION['chave']<>'ok'){
    header("Location:page_login.php");
  }

  
  if(isset($_GET['pagina'])){
      $itens_por_pagina = 10 * intval($_GET['pagina']);
  }else{
      $itens_por_pagina = 0;
  }


  include_once("cabecalho.php");

?>
     <div class="content-wrapper">        
        <div class="page-title" id="titulo">                    
          <h1><i class="fa fa-edit"></i> Lista de Procedimentos</h1>          
        </div>
        <div class="page-title">
          <ul class="breadcrumb">              
            <li><a href="adm.php">Home</a></li>
            <li><a href="#">Lista de Procedimentos</a></li>
          </ul>
        </div>
        <div class="row">
          <div class="col-md-8">
            <div class="card">              
              <form method="get" class="form-inline">
                <div class="form-group">
                  <div class="col-xs-12 col-sm-6"><input class="form-control" maxlength="14" OnKeyPress="formatar('###.###.###-##', this)" type="text" placeholder="CPF do cliente" name="cpf" id="cpf"></div>
                </div>
                <div class="form-group">
                  <div class="col-sm-2"><input class="form-control" type="submit" value="Buscar" name="ok"></div>   
                </div>                      
              </form> 
              <div class="card-body">
                  <?php
/*  O primeiro if verifica se a variável $_POST['cpf'] está preenchida, caso seja verdadeiro essa verificação o programa faz a conexão com o banco de dados, em seguida a variável local $result recebe os procedimentos encontrados no banco de dados relacionados ao cpf informado, em seguida é listado todos os registro com três botões de ação, um que redireciona o usuário para a tela de visualização dos dados, o segundo botão leva para a tela de alteração de dados, e o terceiro deleta o procedimento selecionado.
*/
                     if(isset($_GET['cpf'])){                      
                      $connect = mysqli_connect('localhost','root','', 'projeto shalon');    

                      $result = mysqli_query($connect, "SELECT p.Nome, DATE_FORMAT(d.data, '%d/%m/%y') as data, d.ID, d.Nome_pro from pessoa p, cliente c, procedimento d where '".$_GET['cpf']."'  = p.CPF and '".$_GET['cpf']."'  = c.CPF and c.ID = d.ID_Cliente LIMIT 10 offset ".$itens_por_pagina)or die(mysqli_error($connect));

                      $pegar_todos = mysqli_query($connect, "SELECT  d.ID from pessoa p, cliente c, procedimento d where '".$_GET['cpf']."'  = p.CPF and '".$_GET['cpf']."'  = c.CPF and c.ID = d.ID_Cliente")or die(mysqli_error($connect));

                      $num_paginas = ceil(mysqli_num_rows($pegar_todos)/10);
                                            
                      if(mysqli_num_rows($result) == 0){
                        echo "<script type='text/javascript'>
                                  alert('Nenhum procedimento encontrado');
                              </script>";                        
                      }else{
                        echo "<table class= 'table table-striped'>";
                        echo "<thead>";
                        echo " <tr>";
                        echo    "<th>Cliente</th>";
                        echo    "<th>Procedimento</th>";
                        echo    "<th>Data</th>"; 
                        echo    "<th>Ações</th>";                       
                        echo  "</tr>";
                        echo "</thead>";
                        while($row = mysqli_fetch_assoc($result)){
                            echo "<tr><td>".$row['Nome']."</td><td>".$row['Nome_pro']."</td><td>".$row['data']."</td><td class='actions'>
                                  <a class='btn btn-success btn-xs' data-toggle='tooltip' data-placement='top' title='Visualizar dados' href='view_proc.php?apagar=".$row['ID']."'><i class='fa fa-eye' aria-hidden='true'></i></a>
                                  <a class='btn btn-warning btn-xs' data-toggle='tooltip' data-placement='top' title='Alterar dados' href='update_proc.php?apagar=".$row['ID']."'><i class='fa fa-pencil-square-o' aria-hidden='true'></i></a>
                                  <a class='btn btn-danger btn-xs' onclick='cancelar(".$row['ID'].")' data-toggle='tooltip' data-placement='top' title='Deletar procedimento' ><i class='fa fa-trash-o' aria-hidden=true'></i></a>
                                  </td></tr>";                    
                        }
                        echo "</table>";
                        ?>
                            <nav aria-label="Page navigation">
                              <ul class="pagination">
                                <li>
                                  <a href="listar_procedimentos.php?pagina=0&cpf=<?php echo $_GET['cpf'];?>" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                  </a>
                                </li>
                                <?php

                                  if(!isset($_GET['pagina'])){
                                      $a=0;
                                    }elseif($_GET['pagina'] == $num_paginas && $_GET['pagina']  >= 2){
                                      $a=$_GET['pagina']-2;
                                    }elseif($_GET['pagina'] == 0 || ($_GET['pagina'] == $num_paginas && $_GET['pagina']  <= 2)){
                                      $a=0;
                                    }else{
                                      $a=$_GET['pagina']-1;  
                                    }

                                  if($num_paginas > 2){
                                    $i = 0;
                                  }else if($num_paginas = 2){
                                    $i = 1;
                                  }  
                                  
                                  for($i=0; $i<3; $i++){
                                    if(isset($_GET['pagina']) && $a == $_GET['pagina']){
                                      echo "<li class='active'><a href='listar_procedimentos.php?pagina=".$a."&cpf=".$_GET['cpf']."'>".$a."</a></li>";
                                    }elseif (!isset($_GET['pagina']) && $a == 0) {
                                      echo "<li class='active'><a href='listar_procedimentos.php?pagina=".$a."&cpf=".$_GET['cpf']."'>".$a."</a></li>";
                                    }else{
                                      echo "<li><a href='listar_procedimentos.php?pagina=".$a."&cpf=".$_GET['cpf']."'>".$a."</a></li>";
                                    }
                                    $a++;
                                    if($a > $num_paginas-1){
                                        break;
                                    }
                                  }
                                ?>
                                <li>
                                  <a href='listar_procedimentos.php?pagina=<?php echo $num_paginas-1; echo "&cpf=".$_GET['cpf'];?>' aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                  </a>
                                </li>
                              </ul>
                            </nav>                            
                        <?php
                      }
                      mysqli_close($connect);
                      $_GET['cpf'] = NULL;                     
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
    <script type="text/javascript" src="js/control_form.js"></script>
    <script>
      $(document).ready(function(){
          $('[data-toggle="tooltip"]').tooltip();   
      });

      function cancelar(id){
        var r = confirm("Você tem certeza que deseja apagar o procedimento?");
        if(r == true){
          alert('Procedimento deletado!');
          window.location.href = "../Controller/deletar_proc.php?apagar="+id;
        }
      }
    </script>
  </body>
</html>