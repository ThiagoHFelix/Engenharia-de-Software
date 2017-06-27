<?php
  session_start();
  include_once("cabecalho.php");
  if(empty($_SESSION['chave']) || $_SESSION['chave']<>'ok'){
    header("Location:page_login.php");
  }
  /*
    Autor: Paulo Gabriel Ronchini
    Data: 08/05/2017

    P�gina com o formul�rio de atualiza��o de diagn�sticos.

  */

  if(isset($_GET['pagina'])){
      $itens_por_pagina = 10 * intval($_GET['pagina']);
      if($itens_por_pagina < 0){
        $itens_por_pagina = 0;
      }
  }else{
      $itens_por_pagina = 0;
  }
  
?>

      <div class="content-wrapper">        
        <div class="page-title" id="titulo">                    
          <h1><i class="fa fa-edit"></i> Lista de Diagn�sticos</h1>          
        </div>
        <div class="page-title">
          <ul class="breadcrumb">              
            <li><a href="adm.php">Home</a></li>
            <li><a href="#">Lista de Diagn�sticos</a></li>
          </ul>
        </div>
        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <form method="get" class="form-inline">
                <div class="form-group">
                  <div class="col-xs-12 col-sm-6"><input class="form-control" type="text" maxlength="14" OnKeyPress="formatar('###.###.###-##', this)" placeholder="CPF do cliente" name="cpf" id="cpf"></div>
                </div>
                <div class="form-group">
                  <div class="col-sm-2"><input class="form-control" type="submit" value="Buscar" name="ok"></div>   
                </div>                      
              </form> 
              <div class="card-body">
                  <?php
                      /*O primeiro if verifica se a vari�vel $_POST['cpf'] est� preenchida, caso seja verdadeiro essa verifica��o 
                    o programa faz a conex�o com o banco de dados, em seguida a vari�vel local $result recebe os diagn�sticos encontrados no banco de dados relacionados ao cpf informado, em seguida � listado todos os registro com tr�s bot�es de a��o, um que redireciona o usu�rio para a tela de visualiza��o dos dados, o segundo bot�o leva para a tela de altera��o de dados, e o terceiro deleta o item selecionado.
                      */
                     if(isset($_GET['cpf'])){                      
                      $connect = mysqli_connect('localhost','root','', 'projeto shalon');

                      $result = mysqli_query($connect, "SELECT p.Nome, d.Funcionario,DATE_FORMAT(d.data, '%d/%m/%y') as data, d.ID from pessoa p, cliente c, diagnostico d where '".$_GET['cpf']."' = p.cpf and p.CPF = c.CPF and c.ID = d.ID_Cliente LIMIT 10 offset ".$itens_por_pagina)or die(mysqli_error($connect));

                      $pegar_todos = mysqli_query($connect,  "SELECT p.Nome, d.Funcionario,DATE_FORMAT(d.data, '%d/%m/%y') as data, d.ID from pessoa p, cliente c, diagnostico d where '".$_GET['cpf']."' = p.cpf and p.CPF = c.CPF and c.ID = d.ID_Cliente");

                      $num_paginas = ceil(mysqli_num_rows($pegar_todos)/10);
                      /*echo $num_paginas."</br>";
                      echo ceil(mysqli_num_rows($pegar_todos)/10)."</br>";
                      echo mysqli_num_rows($pegar_todos)."</br>";*/
                      if(mysqli_num_rows($result) == 0){
                        echo "<script type='text/javascript'>
                                  alert('Cliente n�o encontrado');
                              </script>";
                      }else{
                        echo "<table class= 'table table-striped'>";
                        echo "<thead>";
                        echo " <tr>";
                        echo    "<th>Cliente</th>";
                        echo    "<th>Funcion�rio</th>";
                        echo    "<th>Data</th>"; 
                        echo    "<th>A��es</th>";                       
                        echo  "</tr>";
                        echo "</thead>";
                        while($row = mysqli_fetch_assoc($result)){
                            echo "<tr><td>".$row['Nome']."</td><td>".$row['Funcionario']."</td><td>".$row['data']."</td><td class='actions'>
                                  <a class='btn btn-success btn-xs' data-toggle='tooltip' data-placement='top' title='Vizualizar dados' href='view_diag.php?apagar=".$row['ID']."'><i class='fa fa-eye' aria-hidden='true'></i></a>
                                  <a class='btn btn-warning btn-xs' data-toggle='tooltip' data-placement='top' title='Alterar dados' href='update_diag.php?apagar=".$row['ID']."'><i class='fa fa-pencil-square-o' aria-hidden='true'></i></a>
                                  <a class='btn btn-danger btn-xs' data-toggle='tooltip' data-placement='top' title='Deletar diagn�stico' onclick='cancelar(".$row['ID'].")'><i class='fa fa-trash-o' aria-hidden=true'></i></a>
                                  </td></tr>";                    
                        }
                        echo "</table>";                        
                        if($num_paginas > 1){
                        ?>
                            <nav aria-label="Page navigation">
                              <ul class="pagination">
                                <li>
                                  <a href="atualizar_diagnosticos.php?pagina=0&cpf=<?php echo $_GET['cpf'];?>" aria-label="Previous">
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

                                 // echo $i;
                                    for($i; $i<3; $i++){
                                      if(isset($_GET['pagina']) && $a == $_GET['pagina']){
                                        echo "<li class='active'><a href='atualizar_diagnosticos.php?pagina=".$a."&cpf=".$_GET['cpf']."'>".$a."</a></li>";
                                      }elseif (!isset($_GET['pagina']) && $a == 0) {
                                        echo "<li class='active'><a href='atualizar_diagnosticos.php?pagina=".$a."&cpf=".$_GET['cpf']."'>".$a."</a></li>";
                                      }else{
                                        echo "<li><a href='atualizar_diagnosticos.php?pagina=".$a."&cpf=".$_GET['cpf']."'>".$a."</a></li>";
                                      }
                                      $a++;
                                      if($a > $num_paginas-1){
                                        break;
                                      }
                                    }
                                  ?>
                                  <li>
                                    <a href='atualizar_diagnosticos.php?pagina=<?php echo $num_paginas-1; echo "&cpf=".$_GET['cpf'];?>' aria-label="Next">
                                      <span aria-hidden="true">&raquo;</span>
                                    </a>
                                  </li>
                                </ul>
                              </nav>    
                        <?php
                        }
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
    <script type="text/javascript" src="js/control_form.js"></script>
    <link rel="stylesheet" type="text/css" href="css/breadcrumb.css">
    <script>
      $(document).ready(function(){
          $('[data-toggle="tooltip"]').tooltip();   
      });
    </script>

    <script type="text/javascript">
     
      function cancelar(id){
        var r = confirm("Voc� tem certeza que deseja apagar o diagn�stico?");
        if(r == true){
          alert('Diagn�stico deletado!');
          window.location.href = "../Controller/deletar_diag.php?apagar="+id;
        }
      }
    </script>
  </body>
</html>