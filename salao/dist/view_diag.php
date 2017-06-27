<!DOCTYPE html>
<?php
  session_start();
   /*
    Autor: Paulo Gabriel Ronchini
    Data: 08/05/2017
    Tela de visualiza��o de dados de procedimentos.
  */
  #Verifica se o usu�rio esta logado, caso n�o esteja, ele � redirecionado para a tela de login.
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
        <div class="page-title" id="titulo">                    
          <h1><i class="fa fa-edit"></i> Informa��es sobre o Diagn�stico</h1>          
        </div>
        <div class="page-title">
          <ul class="breadcrumb">              
            <li><a href="adm.php">Home</a></li>
            <li><a href="#">Informa��es sobre o Diagn�stico</a></li>
          </ul>
        </div>
        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <h3 class="card-title">Informa��es sobre o Diagn�stico</h3>
              <div class="card-body">                  
                  <div class="table-responsive">
                  <table class="table">
                    <?php
/*  O c�digo a seguir faz a conex�o ao banco atrav�s do comendo mysqli_connect, em seguida com o comando mysqli_query � feita a busca pelos dados de um diagn�stico espec�fico a partir do valor da vari�vel  $_GET['apagar'], em seguida o programa exibe os dados.*/
                      $connect = mysqli_connect('localhost','root','', 'projeto shalon');
                      $result = mysqli_query($connect, "SELECT p.Nome, c.CPF, d.Fibra, d.Forma, d.Emocional, d.Funcionario, d.Queda, d.Textura, d.data, d.Cuticula, d.CatacterFisi from pessoa p, cliente c, diagnostico d where d.ID = ".$_GET['apagar']." and d.ID_Cliente = c.ID and c.CPF = p.CPF");
                      $row = mysqli_fetch_assoc($result);
                      echo "<tr><td>Nome do Paciente</td>";
                      echo "<td>".$row['Nome']."</td></tr>";
                      echo "<tr><td>CPF</td>";
                      echo "<td>".$row['CPF']."</td></tr>";
                      echo "<tr><td>Fibra</td>";
                      echo "<td>".$row['Fibra']."</td></tr>";
                      echo "<tr><td>Forma</td><td>".$row['Forma']."</td></tr>";
                      echo "<tr><td>Emocional</td><td>".$row['Emocional']."</td></tr>";
                      if($row['Queda'] == 1)
                      {
                        echo "<tr><td>Queda<td>Sim</td></tr>";
                      }else
                      {
                        echo "<tr><td>Queda<td>N�o</td></tr>";
                      }
                      echo "<tr><td>Textura</td><td>".$row['Textura']."</td></tr>";
                      echo "<tr><td>Caracter�sticas F�sicas</td><td>".$row['CatacterFisi']."</td></tr>";
                      echo "<tr><td>Cuticula</td><td>".$row['Cuticula']."</td></tr>";
                      echo "<tr><td>Data</td><td>".$row['data']."</td></tr>";
                      echo "<tr><td>Funcionario</td><td>".$row['Funcionario']."</td></tr>";
                      echo "</table>";
                      echo "<a href = 'atualizar_diagnosticos.php?cpf=".$row['CPF']."'>Voltar</a>";
                    ?>
                  
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