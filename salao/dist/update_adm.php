<?php 
  session_start();
  /*
    Autor: Paulo Gabriel Ronchini
    Data: 08/05/2017
    Tela de atualização de dados de diagnósticos
  */ 
  
#Verifica se o usuário esta logado, caso não esteja, ele é redirecionado para a tela de login.
  if(empty($_SESSION['chave']) || $_SESSION['chave']<>'ok'){
    header("Location:page_login.php");
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
      function cadastrar() {
        var senha = document.getElementById("senha");
        var csenha = document.getElementById("csenha");
        var form = document.getElementById("form");
            if(senha.value.length < 8 && senha.value.length > 0){
              //alert(senha.value.length);
              alert("A senha deve conter no minimo 8 caracteres!");
            }else if(senha.value != csenha.value){
              alert("As senhas não conferem!");              
            }else{
              form.submit();           
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
   <?php
  include_once("cabecalho.php");
  ?>
      <div class="content-wrapper">        
        <div class="page-title" id="titulo">                    
          <h1><i class="fa fa-edit"></i> Configurações</h1>          
        </div>
        <div class="page-title">
          <ul class="breadcrumb">              
            <li><a href="adm.php">Home</a></li>
            <li><a href="#">Configurações</a></li>
          </ul>
        </div>
        <div class="row">
          <div class="col-md-8">
            <div class="card">
               <div class="card-body">
                  <div class="table-responsive">
                    <form method="post" id="form" action="../Controller/update_adm.php">                      
                        <?php
                          #Comando para se conectar ao banco de dados.
                          $connect = mysqli_connect('localhost','root','', 'projeto shalon');
                          #Comando para selecionar o registro da tabela diagnostico, que se deseja atualizar.
                          $result = mysqli_query($connect, "SELECT p.Nome, p.email, a.CPF, a.senha from pessoa p, administrador a where p.cpf = '".$_SESSION['cpf']."' and p.CPF = a.CPF");
                          $row = mysqli_fetch_assoc($result);
                          #Preenchimento dos campos para que o usuário possa alterar os dados.
                          echo "
                          <input type='hidden'  name='id' value='".$_SESSION['cpf']."' id='id'>
                          <div class='form-group'>
                            <label class='control-label'>Nome: ".$row['Nome']."</label>                             
                          </div>
                          <div class='form-group'>
                            <label class='control-label'>Email</label>
                            <input class='form-control' type='text' placeholder='Email' id='email' name='email' value='".$row['email']."'>
                          </div>
                          <div class='form-group'>
                            <label class='control-label'>Senha</label>
                             <input class='form-control' type='password' placeholder='Senha' name='senha' id='senha'>
                          </div>
                          <div class='form-group'>
                            <label class='control-label'>Confirmar Senha</label>
                             <input class='form-control' type='password' placeholder='Confirmar senha' name='csenha' id='csenha'>
                          </div>";                          
                          
                         // echo "<button onclick='cadastrar()' name='salvar'>Salvar</button>";
                         // echo "<a href = 'adm.php' onclick='voltar()'> Voltar</a>";
                    ?>
                    </form>
                    <button onclick='cadastrar()' name='salvar'>Salvar</button>
                    <button onclick='voltar()'> Voltar</button>
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