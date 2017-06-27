<!-- inclui um arquivo de cabeçalho html que esta dentro de um arquivo php-->
<!-- 13/05/2017-->
<?php
    session_start();
    include_once("php/seguranca.php");    
    include_once('conexao.php');   
?>

<!-- comando para se conectar no banco e trazer os dodos sql-->
<!-- 13/05/2017-->
<?php
    $resultado = mysqli_query($conectar, "SELECT PE.NOME, C.CPF, DI.TEXTURA, DI.FORMA, DI.FIBRA, DI.CUTICULA, DI.QUEDA, DI.EMOCIONAL, DI.CARACTERFISI, DI.COR, DI.COR, DI.FUNCIONARIO FROM PESSOA AS PE, CLIENTE AS C, DIAGNOSTICO AS DI WHERE PE.CPF=C.CPF AND C.CPF='".$_SESSION['usuario_cpf']."' AND C.ID=DI.ID_CLIENTE");
    $linhas = mysqli_num_rows($resultado);
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
            <h1>Listar Diagnósticos</h1>            
          </div>
          <div><a class="btn btn-primary btn-flat" href="form-componants.html"><i class="fa fa-lg fa-plus"></i></a><a class="btn btn-info btn-flat" href="#"><i class="fa fa-lg fa-refresh"></i></a><a class="btn btn-warning btn-flat" href="#"><i class="fa fa-lg fa-trash"></i></a></div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <table class="table table-hover table-bordered" id="sampleTable">
                  <thead>
                     <tr>
                      <th>Nome</th>	
                      <th>CPF</th>	                      
                      <th>Textura</th>
                      <th>Forma</th>
                      <th>Fibra</th>
                      <th>Cutícula</th>
                      <th>Queda</th>
                      <th>Emocional</th>
                      <th>Características Fisícas</th>
                      <th>Cor</th>
                      <th>Funcionário</th>			  
                   </tr>

                  </thead>
                  <tbody>
                      
                      <?php
                        while($linhas = mysqli_fetch_assoc($resultado)){
                        echo "<tr>";
                                echo "<td>".$linhas['NOME']."</td>";
                                echo "<td>".$linhas['CPF']."</td>";
                                echo "<td>".$linhas['TEXTURA']."</td>";
                                echo "<td>".$linhas['FORMA']."</td>";
                                echo "<td>".$linhas['FIBRA']."</td>"; 
                                echo "<td>".$linhas['CUTICULA']."</td>";   
                                echo "<td>".$linhas['QUEDA']."</td>";   
                                echo "<td>".$linhas['EMOCIONAL']."</td>";   
                                echo "<td>".$linhas['CARACTERFISI']."</td>";   
                                echo "<td>".$linhas['COR']."</td>";   
                                echo "<td>".$linhas['FUNCIONARIO']."</td>";       
                        echo "</tr>";
                        }
                        
                       mysqli_close($conectar);
                      ?>  
                      
                  </tbody>
                </table>
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
    <script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
  </body>
</html>