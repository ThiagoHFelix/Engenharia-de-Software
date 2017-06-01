<?php
/*

  Autor: Paulo Gabriel Ronchini
  Data: 08/05/2017

  Tela de cadastro de procedimentos

*/

  session_start();
  if(empty($_SESSION['chave']) || $_SESSION['chave']<>'ok'){
    header("Location:page_login.php");
  }
  /*
    Verifica a variavel de sessão $_SESSION["resposta"] que indica se o cpf informado foi encontrado e se o procedimento foi cadastrado, e informa ao usuário o resultado da aperação. 
  */
  if(isset($_SESSION["resposta"])){
    if($_SESSION["resposta"] == 'false'){
         echo "<script type='text/javascript'>
             alert('CPF não encontrado ou inválido');
         </script>";   
         $_SESSION["resposta"] = '';   
    }elseif($_SESSION["resposta"] == 'true'){
         echo "<script type='text/javascript'>
             alert('Procedimento cadastrado com sucesso!');
         </script>";
         $_SESSION["resposta"] = '';
    }
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
    <script type="text/javascript">
            

      function exibir_form(cpf){
          document.getElementById("verifica_cpf").style.display = "none";
          document.getElementById("cpf").style.display = "none";
          document.getElementById("cpf").value = cpf;
          document.getElementById("cad_proc").style.display = "block";
          document.getElementById("bt_cad").style.display = "inline";
          document.getElementById("bt_can").style.display = "inline";
      }

      function cancelar(){
        var r = confirm("Você tem certeza que quer sair da página?");
        if(r == true){
          window.location.href = "adm.php";
        }
      }
    </script>

  </head>
   <?php
	include_once("cabecalho.php");
  ?>
      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-edit"></i> Cadastrar Procedimento</h1>
            
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
              <h3 class="card-title">Cadastrar Procedimento</h3>
              <div class="card-body">
                <form method="post" id="verifica_cpf" style="display:block;">
                  <div class="form-group">
                    <label class="control-label">CPF</label>      
                    <input class="form-control" type="text" placeholder="CPF do cliente" name="ver_cpf" id="ver_cpf">
                  </div>
                  <div class="form-group">
                    <input type="submit"  value="Procurar CPF">
                  </div>
                </form>
              <!--Formulário de cadastro de procedimento-->
                <form action="../Controller/cad_proc.php" method="post" id="cad_proc" style="display:none;">
                 	  	
                  <input class="form-control" type="text" name="cpf" id="cpf" placeholder="CPF do cliente">
                  
				          <div class="form-group">
                    <label class="control-label">Marca</label>
                    <input class="form-control" type="text" name="marca" id="marca" placeholder="Marca do produto" required>
                  </div>
                  <div class="form-group">
                    <label class="control-label">Tipo de OX</label>
                     <input class="form-control" type="text" name="ox" id="ox" placeholder="Tipo de OX" required>
                  </div>
				          <div class="form-group">
                    <label class="control-label">Resultado</label>
                    <input class="form-control" type="text" name="res" id="res" placeholder="Resultado" required>
                  </div>
				          <div class="form-group">
                    <label class="control-label">Nome do Procedimento</label>
                    <input class="form-control" type="text" name="nproc" id="nproc" placeholder="Nome do Procedimento" required>
                  </div>
				          <div class="form-group">
                    <label class="control-label">Pontuação</label>
                    <input class="form-control" type="text" name="pont" id="pont" placeholder="Pontuação" required>
                  </div>
				          <div class="form-group">
                    <label class="control-label">Tipo</label>
                    <input class="form-control" type="text" name="tipo" id="tipo" placeholder="Tipo" required>
                  </div>               
                </form>
              </div>
              <div class="card-footer">
                <button class="btn btn-primary icon-btn" type="submit" form="cad_proc" style="display:none;" id="bt_cad" type="button" ><i class="fa fa-fw fa-lg fa-check-circle"></i>Cadastrar</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-default icon-btn" id="bt_can" style="display:none;" href="#" onclick="cancelar()"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
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
    <?php
      include_once("../Controller/verifica_cpf.php");

      if(isset($_POST["ver_cpf"])){  
        if(verifica_cpf($_POST["ver_cpf"]) == 'false'){
             #echo "<script type='text/javascript'>alert('".verifica_cpf($_POST["ver_cpf"])."');</script>";   
             echo "<script type='text/javascript'>alert('CPF  não encontrado ou inválido');</script>";   
             #$_SESSION["resposta"] = '';   
        }elseif(verifica_cpf($_POST["ver_cpf"]) == 'true'){
             echo "<script type='text/javascript'>exibir_form('".$_POST["ver_cpf"]."');</script>";
             #$_SESSION["resposta"] = '';
        }
      }
    ?>
  </body>
</html>