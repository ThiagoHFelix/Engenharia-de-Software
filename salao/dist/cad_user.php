<!--

  Autor: Paulo Gabriel Ronchini
  Data: 08/05/2017

  Tela de cadastro de dados na tabela pessoa. 
  Obs: Os dados cadastrados nesta tabela são usados tanto por usuários do sistema do salão como por alunos da escola de beleza.
  
-->
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
      function cadastrar() {
              document.getElementById("cad_adm").submit();
      } 

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
                    <!--Formulário de cadastro de de dados pessoais-->
                    <form class="form-horizontal" action="../Controller/cad_user.php" method="POST" id="cad_adm">                
                        <h3 class="h3">Cadastro de cliente >> Informações pessoais</h3>
                        <div class="form-group">
                          <label class="col-sm-2 control-label" for="inputEmail">Nome</label>
                          <div class="col-sm-8">
                            <input class="form-control" id="nome" type="text" name="nome" placeholder="Nome">
                          </div>
                        </div>
						            <div class="form-group">
                          <label class="col-sm-2 control-label" for="email">Email</label>
                          <div class="col-sm-8">
                            <input class="form-control" id="email" type="text"  name="email" placeholder="Email">
                          </div>
                        </div>
						            <div class="form-group">
                          <label class="col-sm-2 control-label" for="">CPF</label>
                          <div class="col-sm-3">
                            <input class="form-control" id="email" type="text"  name="cpf" placeholder="CPF" required>    
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-2 control-label" for="">RG</label>
                          <div class="col-sm-3">
                            <input class="form-control" id="email" type="text"  name="rg" placeholder="CPF" required>    
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-2 control-label" for="inputPassword">Data de Nascimento</label>
                          <div class="col-sm-3">
                            <input class="form-control" id="demoDate" type="date"  name="data">                          
                          </div>
                        </div>
						            <div class="form-group">
                          <label class="col-sm-2 control-label" for="inputPassword">CEP</label>
                          <div class="col-sm-3">
                            <input class="form-control" id="cep" type="text"  name="cep" placeholder="CEP">                            
                          </div>
                        </div>
						            <div class="form-group">
                          <label class="col-sm-2 control-label" for="inputPassword">Rua</label>
                          <div class="col-sm-3">
                            <input class="form-control" id="cep" type="text"  name="rua" placeholder="Nome da rua" required>                            
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-2 control-label" for="inputPassword">Bairro</label>
                          <div class="col-sm-3">
                            <input class="form-control" id="cep" type="text"  name="bairro" placeholder="Nome da rua" required>                            
                          </div>
                        </div>
						            <div class="form-group">
                          <label class="col-sm-2 control-label" for="inputPassword">Número</label>
                          <div class="col-sm-3">
                            <input class="form-control" id="cep" type="text"  name="numero" placeholder="Número da rua" required>                            
                          </div>
                        </div>
						            <div class="form-group">
                          <label class="col-sm-2 control-label" for="inputPassword">Cidade</label>
                          <div class="col-sm-4">
                            <input class="form-control" id="cep" type="text"  name="cidade" placeholder="Ex: Americana" required>                            
                          </div>
                        </div>
						            <div class="form-group">
                          <label class="col-sm-2 control-label" for="inputPassword">Estado</label>
                          <div class="col-sm-3">
                            <select name="estado" class="form-control">
                              <option value="SP">São Paulo</option>
                              <option value="RJ">Rio de Janeiro</option>
                              <option value="PR">Paraná</option>
                              <option value="MG">Minas Gerais</option>
                            </select>                         
                          </div>
                        </div>						                        
                        <div class="form-group">
                          <label class="col-lg-2 control-label">Sexo</label>
                          <div class="col-lg-10">
                            <div class="radio">
                              <label>
                                <input id="optionsRadios1" type="radio" name="sexo" value="masculino" checked>Masculino
                              </label>
                            </div>
                            <div class="radio">
                              <label>
                                <input id="optionsRadios2" type="radio" name="sexo" value="feminino">Feminino
                              </label>
                            </div>
                          </div>
                        </div>  
                        <div class="form-group">
                          <label class="col-sm-2 control-label" for="inputPassword">Telefone</label>
                          <div class="col-sm-3">
                            <input class="form-control" id="tel" type="tel"  name="tel" placeholder="Telefone" required>                            
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-2 control-label" for="inputPassword">Celular</label>
                          <div class="col-sm-3">
                            <input class="form-control" id="cel" type="tel"  name="cel" placeholder="Celular" required>                            
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
                            <button class="btn btn-default" onclick="voltar();" type="reset">Cancelar</button>
                            <button class="btn btn-primary" onclick="cadastrar();" type="submit">Avançar</button>
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