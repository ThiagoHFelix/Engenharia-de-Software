<?php
  /*
    Autor: Paulo Gabriel Ronchini
    Data: 08/05/2017
    Tela de cadastro de cliente.
  */
    
    session_start();

    include_once("cabecalho.php");

    if(empty($_SESSION['chave']) || $_SESSION['chave']<>'ok'){
      header("Location:page_login.php");
    }



    
?>

    <script type="text/javascript">
      /*  Fun��o JavaScript para veerificar se o campo de senha e de confirmar senha s�o iguais, caso sejam iguais 
        permite o cadastro dos dados atrv�s do comando submit().
      */
      function cadastrar() {
        var senha = document.getElementById("senha");
        var c_senha = document.getElementById("c_senha");
        var form = document.getElementById("cad_cliente");
            if(senha.value.length < 8){
              alert(senha.value.length);
              alert("A senha deve conter no minimo 8 caracteres!");
            }else if(senha.value != c_senha.value){
              alert("As senhas n�o conferem!");              
            }else{
              form.submit();           
            }
      } 
      /*Fun��o para o usu�rio voltar para a tela inicial (no caso a tela inicial de administrador), primeiro ele pede a confirma��o do usu�rio para depois redireciona-lo.*/
      function voltar(){
        if(confirm("Voc� tem certeza que quer sair? Suas altera��es seram perdidas!")){
            window.location.href = "adm.php";
        }
      }
    </script>
      <div class="content-wrapper">
        <div class="page-title">
          <div>          
            <h3><i class="fa fa-user" aria-hidden="true"></i> Cadastro de cliente >> Informa��es sobre a sa�de</h3>            
          </div>          
        </div>

        <div class="container" style="background-color:white; max-width:800px;">
                    <!--Formul�rio para cadastro de cliente-->
                    <form class="form-horizontal" action="../Controller/cad_cliente.php? " method="POST" id="cad_cliente">
                        <h3 class="h3">Cadastro de cliente >> Informa��es sobre sa�de</h3>
                        <?php
                        #Este input fica escondido para o usu�rio e serve para armazenar o dado(cpf) que ser� colocado na chave estrangeira da tabela cliente.
                             echo "<input id='cpf' type='hidden' name='cpf' value=".$_GET['cpf'].">"
                        ?>
                        <div class="form-group">
                          <label class="col-sm-5 col-sm-offset-1 col-xs-offset-1">1- Se voc� possu� alguma doen�a, quais s�o elas?</label>
                          <div class="col-sm-10 col-sm-offset-1 col-xs-offset-1">
                            <input class="form-control" id="nome" type="text" name="patologias">
                          </div>
                        </div>
						            <div class="form-group">
                          <label class="col-sm-5 col-sm-offset-1 col-xs-offset-1" for="email">2- Se voc� possu� alguma alergia, quais s�o elas?</label>
                          <div class="col-sm-10 col-sm-offset-1 col-xs-offset-1">
                            <input class="form-control" id="email" type="text"  name="alergia">
                          </div>
                        </div>
						            <div class="form-group">
                          <label class="col-sm-6 col-sm-offset-1 col-xs-offset-1" for="">3- Se Voc� faz algum tipo de tratamento, quais s�o?</label>
                          <div class="col-sm-10 col-sm-offset-1 col-xs-offset-1">
                            <input class="form-control" id="email" type="text"  name="tratamento">    
                          </div>
                        </div>
                        <div class="checkbox col-sm-offset-1 col-xs-offset-1">
                          <label><input type="checkbox" name="hipertenso">Voc� � hipertenso?</label>
                        </div>
                        <div class="checkbox col-sm-offset-1 col-xs-offset-1">
                          <label><input type="checkbox" name="cardiaco">Voc� tem alguma doen�a cardiaca?</label>
                        </div>
                        <?php
                        if($_SESSION['sexo'] == 1){
                            echo "<div class='checkbox col-sm-offset-1 col-xs-offset-1' style='visible:none;'>
                              <label><input type='hidden' name='gravidez' disabled></label>
                            </div>
                            <div class='checkbox col-sm-offset-1 col-xs-offset-1' style='visible:none;'>
                              <label><input type='hidden' name='amamenta' disabled></label>
                            </div>";
                        }else{
                            echo "<div class='checkbox col-sm-offset-1 col-xs-offset-1'>
                              <label><input type='checkbox' name='gravidez'>Voc� est� gravida?</label>
                            </div>
                            <div class='checkbox col-sm-offset-1 col-xs-offset-1'>
                              <label><input type='checkbox' name='amamenta'>Voc� amamenta?</label>
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
                            <button class="btn btn-primary" onclick="cadastrar();" type="button">Avan�ar</button>
                          </div>
                        </div>                     
                    </form>
        </div>
      </div>    
    </div>
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/essential-plugins.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/pace.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>