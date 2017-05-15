<?php 
  session_start();
  /*
    Autor: Paulo Gabriel Ronchini
    Data: 08/05/2017
    Tela de atualização de dados de diagnósticos
  */ 
  
#Verifica se o usuário esta logado, caso não esteja, ele é redirecionado para a tela de login.
  if(empty($_SESSION['chave']) || $_SESSION['chave']<>'ok'){
    header("Location:page_login.php");
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
  </head>
   <?php
	include_once("cabecalho.php");
  ?>
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
                    <form method="post" action="../Controller/atualizar_diag.php">                      
                        <?php
                          #Comando para se conectar ao banco de dados.
                          $connect = mysqli_connect('localhost','root','', 'projeto shalon');
                          #Comando para selecionar o registro da tabela diagnostico, que se deseja atualizar.
                          $result = mysqli_query($connect, "SELECT p.Nome, c.CPF, d.Fibra, d.Forma, d.Emocional, d.Funcionario, d.Queda, d.Textura, d.data, d.Cuticula, d.CatacterFisi, d.Cor from pessoa p, cliente c, diagnostico d where d.ID = ".$_GET['apagar']." and d.ID_Cliente = c.ID and c.CPF = p.CPF");
                          $row = mysqli_fetch_assoc($result);
                          #Preenchimento dos campos para que o usuário possa alterar os dados.
                          echo "
                          <input type='hidden'  name='id' value='".$_GET['apagar']."' id='id'>
                          <div class='form-group'>
                            <label class='control-label'>Textura</label>      
                            <input class='form-control' type='text' placeholder='Textura' name='tex' value='".$row['Textura']."'>
                          </div>
                          <div class='form-group'>
                            <label class='control-label'>Forma</label>
                            <input class='form-control' type='text' placeholder='Marca do produto' name='for' value='".$row['Forma']."'>
                          </div>
                          <div class='form-group'>
                            <label class='control-label'>Fibra</label>
                             <input class='form-control' type='text' placeholder='Fibra' name='fi' value='".$row['Fibra']."'>
                          </div>";
                          if ($row['Queda'] == 1){
                            echo"
                            <div class='form-group'>
                              <div class='checkbox'>
                                <label><input type='checkbox' name='que' checked>Queda</label>
                              </div>                    
                            </div>";
                          }else{
                            echo"
                            <div class='form-group'>
                              <div class='checkbox'>
                                <label><input type='checkbox' name='que'>Queda</label>
                              </div>                    
                            </div>";
                          }
                          echo "
                          <div class='form-group'>
                            <label class='control-label'>Emocinal</label>
                            <input class='form-control' type='text' placeholder='Estado emocional' name='emo' value='".$row['Emocional']."'>
                          </div>
                          <div class='form-group'>
                            <label class='control-label'>Cutícula</label>
                            <input class='form-control' type='text' placeholder='Cutícula' name='cu' value='".$row['Cuticula']."'>
                          </div>
                          <div class='form-group'>
                            <label class='control-label'>Característica Físicas</label>
                            <input class='form-control' type='text' placeholder='Característica Físicas' name='caf' value='".$row['CatacterFisi']."'>
                          </div>
                          <div class='form-group'>
                            <label class='control-label'>Cor</label>
                            <input class='form-control' type='text' placeholder='Pontuação' name='cor' value='".$row['Cor']."'>
                          </div>
                          <div class='form-group'>
                            <label class='control-label'>Funcionário</label>
                            <input class='form-control' type='text' placeholder='Tipo' name='fun' value='".$row['Funcionario']."'>
                          </div>  ";
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