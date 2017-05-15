<?php
  /*
    Autor: Paulo Gabriel Ronchini
    Data: 08/05/2017
    Tela de cadastro de cliente.
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
    <script type="text/javascript">
      /*  Função JavaScript para veerificar se o campo de senha e de confirmar senha são iguais, caso sejam iguais 
        permite o cadastro dos dados atrvés do comando submit().
      */
      function cadastrar() {
        var senha = document.getElementById("senha");
        var c_senha = document.getElementById("c_senha");
        var form = document.getElementById("cad_cliente");
            if(senha.value == c_senha.value){
              form.submit();
            }else{
              alert("As senhas não conferem!");              
            }
      } 
      /*Função para o usuário voltar para a tela inicial (no caso a tela inicial de administrador), primeiro ele pede a confirmação do usuário para depois redireciona-lo.*/
      function voltar(){
        if(confirm("Você tem certeza que quer sair? Suas alterações seram perdidas!")){
            window.location.href = "adm.php";
        }
      }
    </script>
  </head>
  <body>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">
           Shalon
          </a>
        </div>
      </div>
    </nav>
    <div class="container" style="background-color:white; max-width:800px;">
                    <!--Formulário para cadastro de cliente-->
                    <form class="form-horizontal" action="../Controller/cad_cliente.php? " method="POST" id="cad_cliente">
                        <h3 class="h3">Cadastro de cliente >> Informações sobre saúde</h3>
                        <?php
                        #Este input fica escondido para o usuário e serve para armazenar o dado(cpf) que será colocado na chave estrangeira da tabela cliente.
                             echo "<input id='cpf' type='hidden' name='cpf' value=".$_GET['cpf'].">"
                        ?>
                        <div class="form-group">
                          <label class="col-sm-5 col-sm-offset-1 col-xs-offset-1">1- Se você possuí alguma doença, quais são elas?</label>
                          <div class="col-sm-10 col-sm-offset-1 col-xs-offset-1">
                            <input class="form-control" id="nome" type="text" name="patologias">
                          </div>
                        </div>
						            <div class="form-group">
                          <label class="col-sm-5 col-sm-offset-1 col-xs-offset-1" for="email">2- Se você possuí alguma alergia, quais são elas?</label>
                          <div class="col-sm-10 col-sm-offset-1 col-xs-offset-1">
                            <input class="form-control" id="email" type="text"  name="alergia">
                          </div>
                        </div>
						            <div class="form-group">
                          <label class="col-sm-6 col-sm-offset-1 col-xs-offset-1" for="">3- Se Você faz algum tipo de tratamento, quais são?</label>
                          <div class="col-sm-10 col-sm-offset-1 col-xs-offset-1">
                            <input class="form-control" id="email" type="text"  name="tratamento">    
                          </div>
                        </div>
                        <div class="checkbox col-sm-offset-1 col-xs-offset-1">
                          <label><input type="checkbox" name="hipertenso">Você é hipertenso?</label>
                        </div>
                        <div class="checkbox col-sm-offset-1 col-xs-offset-1">
                          <label><input type="checkbox" name="cardiaco">Você tem alguma doença cardiaca?</label>
                        </div>
                        <?php
                        if($_GET['sexo'] == 1){
                            echo "<div class='checkbox col-sm-offset-1 col-xs-offset-1'>
                              <label><input type='checkbox' name='gravidez' disabled>Você está gravida?</label>
                            </div>
                            <div class='checkbox col-sm-offset-1 col-xs-offset-1'>
                              <label><input type='checkbox' name='amamenta' disabled>Você amamenta?</label>
                            </div>";
                        }else{
                            echo "<div class='checkbox col-sm-offset-1 col-xs-offset-1'>
                              <label><input type='checkbox' name='gravidez'>Você está gravida?</label>
                            </div>
                            <div class='checkbox col-sm-offset-1 col-xs-offset-1'>
                              <label><input type='checkbox' name='amamenta'>Você amamenta?</label>
                            </div>";
                        }
                        ?>
                        <div class="form-group">
                          <label class="col-sm-3 control-label" >Digite uma senha</label>
                          <div class="col-sm-3">
                            <input class="form-control" id="senha" type="password"  name="senha">                 
                          </div>
                        </div>
						            <div class="form-group">
                          <label class="col-sm-3 control-label" for="inputPassword">Confirme a senha</label>
                          <div class="col-sm-3">
                            <input class="form-control" id="c_senha" type="password"  name="senha">
                          </div>
                        </div>						                               
            					  <!--<div class="form-group">					
              						<label class="col-lg-2 control-label">Escolher foto</label>
              						   <div class="col-lg-10">
              								<input class="form-control" type="file">
              						   </div>
              					  </div>
              					<div class="form-group">              						
              						<div class="checkbox">
              						  <label class="col-sm-3 control-label">						  
              							<input type="checkbox">Aceitar os termos
              						  </label>
              						</div>
            					  </div>-->
                        <div class="form-group">
                          <div class="col-lg-10 col-lg-offset-2">
                            <button class="btn btn-default" onclick="voltar();" type="button">Cancelar</button>
                            <button class="btn btn-primary" onclick="cadastrar();" type="button">Avançar</button>
                          </div>
                        </div>                     
                    </form>
    </div>
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/essential-plugins.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/pace.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>