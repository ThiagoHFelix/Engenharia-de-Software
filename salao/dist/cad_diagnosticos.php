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
    Verifica a variavel de sessão $_SESSION["resposta_diag"] que indica se o cpf informado foi encontrado e se o procedimento foi cadastrado, e informa ao usuário o resultado da aperação. 
  */
  if(isset($_SESSION["resposta_diag"])){
    if($_SESSION["resposta_diag"] == 'false'){
         echo "<script type='text/javascript'>
             alert('CPF não encontrado ou inválido');
         </script>";   
         $_SESSION["resposta_diag"] = null;   
    }elseif($_SESSION["resposta_diag"] == 'true'){
         echo "<script type='text/javascript'>
             alert('Diagnóstico cadastrado com sucesso!');
         </script>";
         $_SESSION["resposta_diag"] = null;
    }
    unset($_SESSION["resposta"]);
  }
	include_once("cabecalho.php");
?>
      <div class="content-wrapper">
        <div class="page-title" id="titulo">                    
          <h1><i class="fa fa-edit"></i> Cadastrar Diagnóstico</h1>          
        </div>
        <div class="page-title">
          <ul class="breadcrumb">              
            <li><a href="#">Home</a></li>
            <li><a href="#">Cadastrar Diagnóstico</a></li>
          </ul>
        </div>
        <div class="row">
          <div class="col-md-8">
            <div class="card">              
              <div class="card-body">
                <form method="post" id="verifica_cpf" style="display:block;" class="form-inline">
                  <div class="form-group">                         
                    <input class="form-control" type="text" maxlength="14" OnKeyPress="formatar('###.###.###-##', this)" placeholder="CPF do cliente" name="ver_cpf" id="ver_cpf">
                  </div>                  
                  <div class="form-group">
                    <div class="col-sm-2">
                    <input class="form-control" type="submit" value="Buscar CPF" name="ok">
                    </div>
                  </div>  
                </form>       
              <!--Formulário de cadastro de diagnóstico-->
                <form action="../Controller/Diagnostico.php" method="post" id="cad_diag" style="display:none;">
                  
                  <input class="form-control" type="hidden"  name="cpf" id="cpf">
                  
				          <div class="form-group">
                    <label class="control-label">Textura</label>	  	
                    <input class="form-control" type="text" maxlength="150" placeholder="Textura" name="tex" id="tex" required>
                  </div>
                  <div class="form-group">
                    <label class="control-label">Forma de cabelo</label>
                    <input class="form-control" type="text" maxlength="150" placeholder="Forma" name="for" id="for" required>
                  </div>
                  <div class="form-group">
                    <label class="control-label">Fibra</label>
                     <input class="form-control" type="text" maxlength="150" placeholder="Fibra" name="fi" id="fi" required>
                  </div>
				          <div class="form-group">
                    <div class="checkbox">
                      <label><input type="checkbox" name="que" id="que">O paciente tem queda de cabelo?</label>
                    </div>                    
                  </div>
				          <div class="form-group">
                    <label class="control-label">Emocional</label>
                    <input class="form-control" type="text" maxlength="150" placeholder="Estado emocional do cliente" name="emo" id="emo" required>
                  </div>
                  <div class="form-group">
                    <label class="control-label">Cutícula</label>
                    <input class="form-control" type="text" maxlength="150" placeholder="Cutícula" name="cu" id="cu" required>
                  </div>
                  <div class="form-group">
                    <label class="control-label">Característica Capilares</label>
                    <input class="form-control" type="text" maxlength="150" placeholder="Característica Físicas" name="caf" id="caf" required>
                  </div>
				          <div class="form-group">
                    <label class="control-label">Cor</label>
                    <input class="form-control" type="text" maxlength="150" placeholder="Pontuação" name="cor" id="cor" required>
                  </div>
				          <div class="form-group">
                    <label class="control-label">Funcionário</label>
                    <input class="form-control" type="text" maxlength="150" placeholder="Nome do funcionário que fez o diagnóstico" name="fun" id="fun" required>
                  </div>                                                   
                 </form>
              </div>
              <div class="card-footer">
                <button style="display:none;" form="cad_diag" id="bt_cad" class="btn btn-primary icon-btn" onclick="verifica_campos();" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>Cadastrar</button>&nbsp;&nbsp;&nbsp;<a style="display:none;" id="bt_can" class="btn btn-default icon-btn" onclick="voltar();"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancelar</a>
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
    <script type="text/javascript" src="js/control_form.js"></script>
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

      function verifica_campos(){

      var booleano = true;

      if(cad_diag.tex.value.trim().length == 0){
        cad_diag.tex.style.borderColor = "red";        
        booleano = false;
      }else{
        cad_diag.tex.style.borderColor = "#cccccc";        
      }

      if(cad_diag.for.value.trim().length == 0){
        cad_diag.for.style.borderColor = "red";        
        booleano = false;
      }else{
        cad_diag.for.style.borderColor = "#cccccc";        
      }

      if(cad_diag.fi.value.trim().length == 0){
        cad_diag.fi.style.borderColor = "red";        
        booleano = false;
      }else{
        cad_diag.fi.style.borderColor = "#cccccc";        
      }

      if(cad_diag.emo.value.trim().length == 0){
        cad_diag.emo.style.borderColor = "red";        
        booleano = false;
      }else{
        cad_diag.emo.style.borderColor = "#cccccc";        
      }

      if(cad_diag.cu.value.trim().length == 0){
        cad_diag.cu.style.borderColor = "red";        
        booleano = false;
      }else{
        cad_diag.cu.style.borderColor = "#cccccc";        
      }

      if(cad_diag.caf.value.trim().length == 0){
        cad_diag.caf.style.borderColor = "red";        
        booleano = false;
      }else{
        cad_diag.caf.style.borderColor = "#cccccc";        
      }

      if(cad_diag.cor.value.trim().length == 0){
        cad_diag.cor.style.borderColor = "red";        
        booleano = false;
      }else{
        cad_diag.cor.style.borderColor = "#cccccc";        
      }

      if(cad_diag.fun.value.trim().length == 0){
        cad_diag.fun.style.borderColor = "red";        
        booleano = false;
      }else{
        cad_diag.fun.style.borderColor = "#cccccc";        
      }

      if(booleano == true){
        cad_diag.submit();
      }else{
        alert("Verifique os campos em branco");
      }
    }

    </script> 
    <?php
      include_once("../Controller/verifica_cpf.php");

      if(isset($_POST["ver_cpf"])){  
        if(verifica_cpf($_POST["ver_cpf"]) == 'false'){
             #echo "<script type='text/javascript'>alert('".verifica_cpf($_POST["ver_cpf"])."');</script>";   
             echo "<script type='text/javascript'>alert('CPF  não encontrado ou inválido');</script>";   
             #$_SESSION["resposta_diag"] = '';   
        }elseif(verifica_cpf($_POST["ver_cpf"]) == 'true'){
             echo "<script type='text/javascript'>exibir_form('".$_POST["ver_cpf"]."');</script>";
             #$_SESSION["resposta_diag"] = '';
        }
      }
    ?>
  </body>
</html>