<?php
  
  /*
    Autor: Paulo Gabriel Ronchini
    Data: 08/05/2017
    Tela de visualização de dados de procedimentos.
  */

  session_start();
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
    <title>Shalon Administrador</title>
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
            <h1><i class="fa fa-edit"></i> Procedimento</h1>
            
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li>Home</li>
              <li><a href="#">Consultar Procedimento</a></li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <h3 class="card-title">Consultar Procedimento</h3>
              <div class="card-body">
                  <div class="table-responsive">
                  <table class="table">
                    <?php
/*  O código a seguir faz a conexão ao banco através do comendo mysqli_connect, em seguida com o comando mysqli_query é feita a busca pelos dados de um procedimento específico a partir do valor da variável  $_GET['apagar'], em seguida o programa exibe os dados.*/
                      $connect = mysqli_connect('localhost','root','', 'projeto shalon');
                      $result = mysqli_query($connect, "SELECT p.Nome, c.CPF, pr.Marca, pr.Tipo_OX, pr.Resultado, pr.Nome_pro, pr.Pontuacao, pr.Tipo, pr.data from pessoa p, cliente c, procedimento pr where pr.ID = ".$_GET['apagar']." and pr.ID_Cliente = c.ID and c.CPF = p.CPF");
                      if(mysqli_num_rows($result)<=0 || mysqli_num_rows($result)>1){
                        echo "<script type='text/javascript'>
                                  alert('Algo de errado não está certo');
                              </script>";
                      }else{
                        $row = mysqli_fetch_assoc($result);
                        echo "<tr><td>Nome do Paciente</td>";
                        echo "<td>".$row['Nome']."</td></tr>";
                        echo "<tr><td>CPF</td>";
                        echo "<td>".$row['CPF']."</td></tr>";
                        echo "<tr><td>Marca</td>";
                        echo "<td>".$row['Marca']."</td></tr>";
                        echo "<tr><td>Tipo_OX</td><td>".$row['Tipo_OX']."</td></tr>";
                        echo "<tr><td>Nome do Produto</td><td>".$row['Nome_pro']."</td></tr>";
                        
                        echo "<tr><td>Pontuação</td><td>".$row['Pontuacao']."</td></tr>";
                        echo "<tr><td>Tipo</td><td>".$row['Tipo']."</td></tr>";
                        echo "<tr><td>Resultado</td><td>".$row['Resultado']."</td></tr>";
                        echo "<tr><td>Data</td><td>".$row['data']."</td></tr>";
                        echo "</table>";
                        echo "<a href = 'listar_procedimentos.php'>Voltar</a>";
                    }
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