<?php
  session_start();
   /*
    Autor: Paulo Gabriel Ronchini
    Data: 08/05/2017
    Tela de visualização de dados de procedimentos.
  */
  #Verifica se o usuário esta logado, caso não esteja, ele é redirecionado para a tela de login.
  if(empty($_SESSION['chave']) || $_SESSION['chave']<>'ok'){
    header("Location:page_login.php");
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
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
            <h1><i class="fa fa-edit"></i> Consulta de clientes</h1>
            
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
              <h3 class="card-title">Dados do cliente</h3>
              <div class="card-body">
                  <div class="table-responsive">
                  <table class="table">
                    <?php
/*  O código a seguir faz a conexão ao banco através do comendo mysqli_connect, em seguida com o comando mysqli_query é feita a busca pelos dados de um diagnóstico específico a partir do valor da variável  $_GET['apagar'], em seguida o programa exibe os dados.*/
                      include_once("../Controller/buscar_dados_cliente.php");
                      $row = mysqli_fetch_assoc(buscar_dados_cliente($_GET['cpf']));
                      echo "<tr><td>Nome do Paciente</td>";
                      echo "<td>".$row['Nome']."</td></tr>";
                      buscar_tel($row['CPF']);
                      echo "<tr><td>CPF</td>";
                      echo "<td>".$row['CPF']."</td></tr>";
                      echo "<tr><td>Data de Nascimento</td>";
                      echo "<td>".$row['data_nasc']."</td></tr>";
                      echo "<tr><td>RG</td><td>".$row['RG']."</td></tr>";
                      echo "<tr><td>E-mail</td><td>".$row['email']."</td></tr>";
                      echo "<tr><td>CEP</td><td>".$row['CEP']."</td></tr>";
                      echo "<tr><td>Rua</td><td>".$row['Rua']."</td></tr>";
                      echo "<tr><td>Bairro</td><td>".$row['Bairro']."</td></tr>";
                      echo "<tr><td>Cidade</td><td>".$row['Cidade']."</td></tr>";
                      echo "<tr><td>Estado</td><td>".$row['Estado']."</td></tr>";
                      echo "<tr><td>Patologias</td><td>".$row['Patologias']."</td></tr>";
                      echo "<tr><td>Tratamentos</td><td>".$row['Tratamento']."</td></tr>";
                      echo "<tr><td>Alergia</td><td>".$row['Alergia']."</td></tr>";
                      if($row['sexo'] == 1)
                      {
                        echo "<tr><td>Sexo<td>Masculino</td></tr>";
                      }else
                      {
                        echo "<tr><td>Sexo<td>Feminino</td></tr>";
                        if($row['Gestante'] == 1)
                        {
                          echo "<tr><td>Gestante<td>Sim</td></tr>";
                        }else
                        {
                          echo "<tr><td>Gestante<td>Não</td></tr>";
                        }
                        if($row['lactante'] == 1)
                        {
                          echo "<tr><td>Lactante<td>Sim</td></tr>";
                        }else
                        {
                          echo "<tr><td>Lactante<td>Não</td></tr>";
                        }
                      }         
                      if($row['Cardiaco'] == 1)
                      {
                        echo "<tr><td>Cardiaco<td>Sim</td></tr>";
                      }else
                      {
                        echo "<tr><td>Cardiaco<td>Não</td></tr>";
                      }
                      if($row['Hipertenso'] == 1)
                      {
                        echo "<tr><td>Hipertenso<td>Sim</td></tr>";
                      }else
                      {
                        echo "<tr><td>Hipertenso<td>Não</td></tr>";
                      }
                      echo "<tr><td>Observação</td><td><textarea style='max-width: 100%;' form='observacao' rows='6' cols='25' name='observacao_field'>".$row['obs']."</textarea></td></tr>"; 
                      echo "</table>";                                        

                    ?>
                   <form id="observacao" method="post">
                      <?php
                        echo "<input type='hidden' name='cpf' id='cpf' value='".$row['CPF']."'>"
                      ?>
                    </form>
                    <div class="card-footer">
                      <button type="submit" form="observacao" class="btn btn-primary icon-btn" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>Salvar observação</button>&nbsp;&nbsp;&nbsp;<a  id="bt_can" class="btn btn-default icon-btn"><i class="fa fa-fw fa-lg fa-times-circle"></i>Voltar</a>
                    </div>            
                  
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