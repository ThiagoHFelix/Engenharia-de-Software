<?php
  session_start();
 if(empty($_SESSION['chave']) || $_SESSION['chave']<>'ok'){
    header("Location:page_login.php");
  }
  /*
    Autor: Paulo Gabriel Ronchini
    Data: 08/05/2017

    Página com o formulário de agendamento.

  */
if(isset($_SESSION['return'])){
  if($_SESSION['return'] == 'false'){
    echo "<script type='text/javascript'>alert('CPF não foi encontrado');</script>";
  }elseif($_SESSION['return'] == 'true'){
    echo "<script type='text/javascript'>alert('Cadastrado com sucesso!');</script>";
  }
  $_SESSION['return'] = null;
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
    --><script type="text/javascript">
      function cadastrar(){
        document.getElementById('agendar').submit();
      }

    </script> 
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
              <h3 class="card-title" style="margin-bottom:0px;">Agendar</h3>              
              <div class="card-body">                 
                  <form method="post" action="../Controller/agendar.php" id="agendar">                    
                    <div class='form-group'>            
                      <label class="control-label">Selecione a data</label>          
                      <input class='form-control' type='date' name='data' id='data'>
                    </div>                  
                    <div class="form-group">
                      <label class="control-label">Digite o CPF do cliente</label>
                      <input class="form-control" type="text" name="cpf" id="cpf" >
                    </div> 
                    <div class="form-group">
                      <label class="control-label">Qual procedimento você deseja realizar?</label>      
                      <select class="form-control" id="proc" name="proc">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                      </select>
                    </div> 
                    <div class="form-group">
                      <label class="control-label">Selecione um horário</label>
                      <select class="form-control" id="hora" name="hora">
                       <?php

                          $ini = new DateTime('07:00');
                          $fim = new DateTime('18:00');

                          while($ini->add(new DateInterval('PT60M')) < $fim) {   
                              echo "<option>".$ini->format('H:i')."</option>";
                          }
                       ?>
                      </select>                      
                    </div>            
                  </form>                  
              </div>  
              <div class="card-footer">
                <button class="btn btn-primary icon-btn" type="button" onclick="cadastrar();"><i class="fa fa-fw fa-lg fa-check-circle"></i>Cadastrar</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-default icon-btn" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
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

