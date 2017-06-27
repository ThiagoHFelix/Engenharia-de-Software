<!-- inclui um arquivo de cabeçalho html que esta dentro de um arquivo php-->
<!-- 13/05/2017-->
<?php
    session_start();
    include_once("php/seguranca.php");
    include_once("cabecalho.php");
?>

<!-- comando para se conectar no banco e trazer os dodos sql-->
<!-- 13/05/2017-->
<?php
    include_once('conexao.php');
    $resultado = mysqli_query($conectar, "SELECT PE.NOME, C.CPF, PR.MARCA, PR.TIPO_OX, PR.RESULTADO, PR.NOME_PRO, PR.PONTUACAO, 
    PR.TIPO, PR.DATA FROM PESSOA AS PE, CLIENTE AS C, PROCEDIMENTO AS PR WHERE PE.CPF=C.CPF AND C.CPF='".$_SESSION['usuario_cpf']."' AND C.ID=PR.ID_CLIENTE");
    $linhas = mysqli_num_rows($resultado);
?>

      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1>Listar Procedimentos</h1>            
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
                      <th>Cpf</th>
                      <th>Nome</th>
                      <th>Marca</th>
                      <th>Tipo OX</th>
                      <th>Resultado</th>
                     <th>Nome do Procedimento</th>
                     <th>Pontuação</th>
                     <th>Tipo</th>
                     <th>Data</th>
                 </tr>
                </thead>
                
                <tbody>
                 <?php                    
                    while($linhas = mysqli_fetch_assoc($resultado)){                        
                        echo "<tr>";      
                            echo "<td>".$linhas['CPF']."</td>"; 
                            echo "<td>".$linhas['NOME']."</td>";                                                   
                            echo "<td>".$linhas['MARCA']."</td>";
                            echo "<td>".$linhas['TIPO_OX']."</td>";
                            echo "<td>".$linhas['RESULTADO']."</td>";
                            echo "<td>".$linhas['NOME_PRO']."</td>";
                            echo "<td>".$linhas['PONTUACAO']."</td>";
                            echo "<td>".$linhas['TIPO']."</td>";	
                            echo "<td>".$linhas['DATA']."</td>";	                          
                        echo "</tr>";                       
                    }              
                 
                    mysqli_close($conectar);
                 ?>              
                </tbody>
                 <!-- trecho a ser excluído
                  </thead>
                  <tbody>
                    <tr>                     
                      <td>234234234-44</td>
                      <td>Maria</td> 
	<td>Nívea</td>
	<td>Simples</td>
	<td>Bom</td><
                      <td>Chapinha</td>
	<td>8</td>
	<td>Tratamento</td>			
	</tr>
                                            
                        <tr>
                            <td>234243423-34</td>
                            <td>Jéssica</td> 
                            <td>Nívea</td>
                            <td>Simples</td>
                            <td>Bom</td>
                            <td>Chapinha</td>
                            <td>7</td>
                            <td>Tratamento</td>	
                       </tr>

                    -->
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