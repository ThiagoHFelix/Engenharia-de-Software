<?php
/*
  Autor: Paulo Gabriel Ronchini
  Data: 08/05/2017

  Tela para cadastro de diagnósticos.
*/

  session_start();
if(empty($_SESSION['chave']) || $_SESSION['chave']<>'ok'){
    header("Location:page_login.php");
  }
/*
    Verifica a variavel de sessão $_SESSION["resposta"] que indica se o cpf informado foi encontrado e se o diagnóstico foi cadastrado, e informa ao usuário o resultado da aperação. 
*/


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
            <h1><i class="fa fa-edit"></i> Cadastrar diagnósticos</h1>
            
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li>Home</li>
              <li><a href="#">Novo diagnóstico</a></li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <h3 class="card-title">Cadastrar informações</h3>
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
              <!--Formulário de cadastro de diagnóstico-->
                <form action="../Controller/Diagnostico.php" method="post" id="cad_diag" style="display:none;">
                  
                  <input class="form-control" type="text" placeholder="CPF do cliente" name="cpf" id="cpf">
                  
				          <div class="form-group">
                    <label class="control-label">Textura</label>	  	
                    <input class="form-control" type="text" placeholder="Textura" name="tex" required>
                  </div>
                  <div class="form-group">
                    <label class="control-label">Forma</label>
                    <input class="form-control" type="text" placeholder="Forma" name="for" required>
                  </div>
                  <div class="form-group">
                    <label class="control-label">Fibra</label>
                     <input class="form-control" type="text" placeholder="Fibra" name="fi" required>
                  </div>
				          <div class="form-group">
                    <div class="checkbox">
                      <label><input type="checkbox" name="que">O paciente tem queda de cabelo?</label>
                    </div>                    
                  </div>
				          <div class="form-group">
                    <label class="control-label">Emocinal</label>
                    <input class="form-control" type="text" placeholder="Estado emocional do cliente" name="emo" required>
                  </div>
                  <div class="form-group">
                    <label class="control-label">Cutícula</label>
                    <input class="form-control" type="text" placeholder="Cutícula" name="cu" required>
                  </div>
                  <div class="form-group">
                    <label class="control-label">Característica Físicas</label>
                    <input class="form-control" type="text" placeholder="Característica Físicas" name="caf" required>
                  </div>
				          <div class="form-group">
                    <label class="control-label">Cor</label>
                    <input class="form-control" type="text" placeholder="Pontuação" name="cor" required>
                  </div>
				          <div class="form-group">
                    <label class="control-label">Funcionário</label>
                    <input class="form-control" type="text" placeholder="Nome do funcionário que fez o diagnóstico" name="fun" required>
                  </div>                                                   
                 </form>
              </div>
              <div class="card-footer">
                <button style="display:none;" type="submit" form="cad_diag" id="bt_cad" class="btn btn-primary icon-btn" onclick="cadastrar();" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>Cadastrar</button>&nbsp;&nbsp;&nbsp;<a style="display:none;" id="bt_can" class="btn btn-default icon-btn" onclick="voltar();"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancelar</a>
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
    <script type="text/javascript">
       

      function voltar(){
        if(confirm("Você tem certeza que quer sair? Suas alterações seram perdidas!")){
            window.location.href = "adm.php";
        }
      }

      function exibir_form(cpf){
          document.getElementById("verifica_cpf").style.display = "none";
          document.getElementById("cpf").style.display = "none";
          document.getElementById("cpf").value = cpf;
          document.getElementById("cad_diag").style.display = "block";
          document.getElementById("bt_cad").style.display = "inline";
          document.getElementById("bt_can").style.display = "inline";
      }
    </script> 
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