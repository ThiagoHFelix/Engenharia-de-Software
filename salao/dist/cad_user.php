<!--

  Autor: Paulo Gabriel Ronchini
  Data: 08/05/2017

  Tela de cadastro de dados na tabela pessoa. 
  Obs: Os dados cadastrados nesta tabela são usados tanto por usuários do sistema do salão como por alunos da escola de beleza.
  
-->

<?php
  session_start();
  if(empty($_SESSION['chave']) || $_SESSION['chave']<>'ok'){
    header("Location:page_login.php");
  }

  include_once("cabecalho.php");

?>

      <script type="text/javascript" src="js/busca_cep.js"></script>
      <div class="content-wrapper">
        <div class="page-title">
          <div>          
            <h3><i class="fa fa-user" aria-hidden="true"></i> Cadastro de cliente >> Informações pessoais</h3>
          </div>          
        </div>
        <div class="container" style="background-color:white; max-width:800px;">
                    <!--Formulário de cadastro de de dados pessoais-->                                       
                    <form class="form-horizontal" action="../Controller/cad_user.php" method="POST" id="cad_adm" name="cad_adm">
                        <h3><i class="fa fa-user" aria-hidden="true"></i> Cadastro de cliente >> Informações pessoais</h3>
                        <div class="form-group" style="margin-top:10px;">
                          <label class="col-sm-2 control-label" for="nome">Nome</label>
                          <div class="col-sm-8">
                            <input class="form-control" id="nome" type="text" name="nome" placeholder="Nome" required>
                          </div>
                        </div>
						            <div class="form-group">
                          <label class="col-sm-2 control-label" for="email">Email</label>
                          <div class="col-sm-8">
                            <input class="form-control" id="email" type="text"  name="email" placeholder="Email" required>
                          </div>
                        </div>
						            <div class="form-group">
                          <label class="col-sm-2 control-label" for="cpf">CPF</label>
                          <div class="col-sm-3">                            
                            <input  class="form-control" id="cpf" type="text" name="cpf" placeholder="CPF" maxlength="14" OnKeyPress="formatar('###.###.###-##', this)" required pattern="\d{3}\.\d{3}\.\d{3}-\d{2}"> 
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-2 control-label" for="rg">RG</label>
                          <div class="col-sm-3">                           
                            <input  class="form-control" id="rg" type="text" name="rg" placeholder="RG" maxlength="13" OnKeyPress="formatar('##.###.###-#', this)" required> 
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-2  control-label" style="padding-top:0px;" for="date">Data de Nascimento</label>
                          <div class="col-sm-3">
                            <input id="data" style="border-size:2px; border-color:#cccccc;border-style:solid; border-radius:2px;margin-top:5px;" type="date"  name="data" required onblur="verifica_data(this)">                          
                          </div>
                        </div>
						            <div class="form-group">
                          <label class="col-sm-2 control-label" for="cep">CEP</label>
                          <div class="col-sm-3">                            
                            <input class="form-control" type="text" name="cep" id="cep" maxlength="9" onblur="pesquisacep(cep.value)" OnKeyPress="formatar('#####-###', this);" placeholder="CEP" required>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-2 control-label" for="numero">Número</label>
                          <div class="col-sm-3">
                            <input class="form-control" id="numero" type="number"  name="numero" placeholder="Número" pattern="[0-9]+$" required>                                                     
                          </div>
                        </div>
						            <div class="form-group">
                          <label class="col-sm-2 control-label" for="rua">Rua</label>
                          <div class="col-sm-5">
                            <input class="form-control" id="rua1" type="text"  name="rua" required disabled>
                            <input class="form-control" id="rua" type="hidden" type="text"  name="rua" required>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-2 control-label" for="bairro">Bairro</label>
                          <div class="col-sm-5">
                            <input class="form-control" id="bairro1" type="text" name="bairro" disabled>
                            <input id="bairro" type="hidden" type="text" name="bairro" required>
                          </div>
                        </div>						            
						            <div class="form-group">
                          <label class="col-sm-2 control-label" for="cidade">Cidade</label>
                          <div class="col-sm-4">
                            <input class="form-control" id="cidade1" type="text"  name="cidade"  disabled> 
                            <input id="cidade" type="hidden" type="text"  name="cidade"  required>
                          </div>
                        </div>
						            <div class="form-group">
                          <label class="col-sm-2 control-label">Estado</label>
                          <div class="col-sm-3">
                            <input class="form-control" id="estado1" type="text"  name="estado" disabled>
                            <input type="hidden" id="estado" type="text"  name="estado">
                          </div>
                        </div>						                        
                        <div class="form-group">
                          <label class="col-lg-2 control-label">Sexo</label>
                          <div class="col-lg-10">
                            <div class="radio">
                              <label>
                                <input id="optionsRadios1" type="radio" name="sexo" value="masculino" checked required>Masculino
                              </label>
                            </div>
                            <div class="radio">
                              <label>
                                <input id="optionsRadios2" type="radio" name="sexo" value="feminino" required>Feminino
                              </label>
                            </div>
                          </div>
                        </div>  
                        <div class="form-group">
                          <label class="col-sm-2 control-label" for="inputPassword">Telefone</label>
                          <div class="col-sm-3">
                            <input class="form-control" id="tel" type="text"  name="tel" placeholder="Telefone" OnKeyPress="formatar('##-####-####', this);" maxlength="12" required>                            
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-2 control-label" for="inputPassword">Celular</label>
                          <div class="col-sm-3">
                            <input class="form-control" id="cel" type="text"  name="cel" placeholder="Celular" OnKeyPress="formatar('##-#####-####', this);" maxlength="13" required>                            
                          </div>
                        </div>                    
            					  <!--<div class="form-group">					
              						<label class="col-lg-2 control-label">Escolher foto</label>
              						   <div class="col-lg-10">
              								<input class="form-control" type="file" accept="image/*" id="img" name="img">
              						   </div>
              					  </div>
              					<div class="form-group">              						
              						<div class="checkbox">
              						  <label class="col-sm-3 control-label">						  
              							<input type="checkbox">Aceitar os termos
              						  </label>
                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>
              						</div>
            					  </div>-->                                            
                    </form>
                    <div class="form-group">
                          <div class="col-lg-10 col-lg-offset-2">
                            <button class="btn btn-default" style="margin-bottom:20px;" onclick="voltar();" type="reset">Cancelar</button>
                            <button class="btn btn-primary" style="margin-bottom:20px;" onclick="cadastrar();" >Avançar</button>
                          </div>
                    </div>
                   <!-- <div class="modal-content">
  Modal 
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
       Modal content
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>-->
    </div>
    </div>    
    </div>
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/essential-plugins.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/pace.min.js"></script>
    <script src="js/main.js"></script>
    <script type="text/javascript" src="js/control_form.js"></script>    
    <script type="text/javascript">
    
    function cadastrar() {
      var tag = true;
      if(!verifica_campos() == true){
        alert("Existe campos não preenchidos"); 
        tag = false;    
      }else{
        if(verifica_cel() == false){
          verifica_tel();
          alert("O telefone ou o celular estão inválidos");
          tag = false; 
        }
        if(verifica_tel() == false){
          verifica_cel()
          alert("O telefone ou o celular estão inválidos");
          tag = false;
        }

        if(!verifica_rg() == true){
          alert("RG inválido");
          tag = false; 
        }

        if(!verifica_cpf() == true){
          alert("CPF inválido");
          tag = false; 
        }

        if(!verifica_cep() == true){
          alert("Nenhum endereço encontrado, verifique o CEP");
          tag = false; 
        }   

        if(!verifica_data()){
          alert("Data inválida, deve ser antes de:1999");
          tag = false;
        }    
      }

      if(tag == true){
        //alert(tag);
        document.getElementById("cad_adm").submit();
      }
    }  

    function voltar(){      
        if(confirm("Você tem certeza que quer sair? Suas alterações seram perdidas!")){
            window.location.href = "adm.php";
        }
    }

    function verifica_data(){
      var data = document.getElementById('data').value; 
      if(moment(data).isAfter(moment().format("YYYY-MM-DD"))){        
        return false;
      }else{        
        return true;
      }
    }

    function verifica_tel(){        
        if(cad_adm.tel.value.length < 12 && cad_adm.tel.value.length > 0){
          cad_adm.tel.style.borderColor = "red";
          return false;
        }else{    
          cad_adm.tel.style.borderColor = "#cccccc";              
          return true;
        }
    }

    function verifica_cel(){     
        if(cad_adm.cel.value.length < 13 && cad_adm.cel.value.length > 0){  
          cad_adm.cel.style.borderColor = "red";        
          return false;
        }else{    
          cad_adm.cel.style.borderColor = "#cccccc";      
          return true;
        }
    }

    function verifica_rg(){     
        if(cad_adm.rg.value.length < 12 && cad_adm.rg.value.length > 0){  
          cad_adm.rg.style.borderColor = "red";        
          return false;
        }else{
          return true;
        }
    }

    function verifica_cpf(){     
        if(cad_adm.cpf.value.length < 14 && cad_adm.cpf.value.length > 0){  
          cad_adm.cpf.style.borderColor = "red";        
          return false;
        }else{          
          return true;
        }
    }

    function verifica_cep(){     
        if(cad_adm.cidade1.value.trim().length == 0){
          cad_adm.cep.style.borderColor = "red";        
          return false;
        }else{          
          return true;
        }
    }

    function verifica_campos(){

      var booleano = true;

      if(cad_adm.nome.value.trim().length == 0){
        cad_adm.nome.style.borderColor = "red";        
        booleano = false;
      }else{
        cad_adm.nome.style.borderColor = "#cccccc";        
      }

      if(cad_adm.email.value.trim().length == 0){
        cad_adm.email.style.borderColor = "red";        
        booleano = false;
      }else{
        cad_adm.email.style.borderColor = "#cccccc";        
      }

      if(cad_adm.cpf.value.trim().length == 0){
        cad_adm.cpf.style.borderColor = "red";        
        booleano = false;
      }else{
        cad_adm.cpf.style.borderColor = "#cccccc";        
      }

      if(cad_adm.rg.value.trim().length == 0){
        cad_adm.rg.style.borderColor = "red";        
        booleano = false;
      }else{
        cad_adm.rg.style.borderColor = "#cccccc";        
      }

      if(cad_adm.cep.value.trim().length == 0){
        cad_adm.cep.style.borderColor = "red";        
        booleano = false;
      }else{
        cad_adm.cep.style.borderColor = "#cccccc";        
      }

      if(cad_adm.numero.value.trim().length == 0){
        cad_adm.numero.style.borderColor = "red";        
        booleano = false;
      }else{
        cad_adm.numero.style.borderColor = "#cccccc";        
      }

      return booleano;
    }

  </script>
  <script src='http://momentjs.com/downloads/moment.min.js'></script>
  </body>
</html>