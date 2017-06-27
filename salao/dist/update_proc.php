<?php
  session_start();

  /*
    Autor: Paulo Gabriel Ronchini
    Data: 08/05/2017
    Tela de atualização de dados de procedimentos.
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
    
  </head>
    <?php
	include_once("cabecalho.php");
  ?>
      <div class="content-wrapper">        
        <div class="page-title" id="titulo">                    
          <h1><i class="fa fa-edit"></i> Atualizar Procedimento</h1>          
        </div>
        <div class="page-title">
          <ul class="breadcrumb">              
            <li><a href="adm.php">Home</a></li>
            <li><a href="#">Atualizar Procedimento</a></li>
          </ul>
        </div>
        <div class="row">
          <div class="col-md-8">
            <div class="card">
               <div class="card-body">
                  <div class="table-responsive">
                    <form method="post" name="cad_proc" id="cad_proc" action="../Controller/atualizar_proc.php">
                        <?php
                          #Comando para se conectar ao banco de dados.
                          $connect = mysqli_connect('localhost','root','', 'projeto shalon');
                          #Comando para selecionar o registro da tabela procedimento, que se deseja atualizar.
                          $result = mysqli_query($connect, "SELECT p.Nome, c.CPF, pr.Marca, pr.Tipo_OX, pr.Resultado, pr.Nome_pro, pr.Pontuacao, pr.Tipo, pr.data from pessoa p, cliente c, procedimento pr where pr.ID = ".$_GET['apagar']." and pr.ID_Cliente = c.ID and c.CPF = p.CPF")or die("Erro!");
                          $row = mysqli_fetch_assoc($result);
                          #Preenchimento dos campos para que o usuário possa alterar os dados.
                          echo "
                          <input type='hidden'  name='id' value='".$_GET['apagar']."' id='id'>
                          <div class='form-group'>
                            <label class='control-label'>Marca</label>      
                            <input class='form-control' type='text' placeholder='Marca' name='marca' value='".$row['Marca']."'>
                          </div>
                          <div class='form-group'>
                            <label class='control-label'>Tipo_OX</label>
                            <input class='form-control' type='text' placeholder='Tipo_OX' name='tipo_ox' value='".$row['Tipo_OX']."'>
                          </div>
                          <div class='form-group'>
                            <label class='control-label'>Nome do Produto</label>
                             <input class='form-control' type='text' placeholder='Nome do Produto' name='nome_pro' value='".$row['Nome_pro']."'>
                          </div>
                          <div class='form-group'>
                            <label class='control-label'>Pontuação</label>
                            <input class='form-control' type='text' placeholder='Pontuação' name='pont' value='".$row['Pontuacao']."'>
                          </div>
                          <div class='form-group'>
                            <label class='control-label'>Tipo</label>
                            <input class='form-control' type='text' placeholder='Tipo' name='tipo' value='".$row['Tipo']."'>
                          </div>
                          <div class='form-group'>
                            <label class='control-label'>Resultado</label>
                            <input class='form-control' type='text' placeholder='Resultado' name='res' value='".$row['Resultado']."'>
                          </div>";                          
                    ?>
                    </form>
                    <div class="card-footer">
                      <button class="btn btn-primary icon-btn" onclick="verifica_campos()" form="cad_proc" id="bt_cad" type="button" ><i class="fa fa-fw fa-lg fa-check-circle"></i>Salvar</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-default icon-btn" id="bt_can" href="atualizar_diagnosticos.php" onclick="cancelar()"><i class="fa fa-fw fa-lg fa-times-circle"></i>Voltar</a>
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
    <script type="text/javascript">

    function cancelar(){
      var r = confirm("Você tem certeza que quer sair da página?Alterações seram perdidas!");
      if(!r == false){
        window.location.href = "adm.php";
      }
    }  

    function verifica_campos(){

        var booleano = true;

        if(cad_proc.marca.value.trim().length == 0){
          cad_proc.marca.style.borderColor = "red";        
          booleano = false;
        }else{
          cad_proc.marca.style.borderColor = "#cccccc";        
        }

        if(cad_proc.tipo_ox.value.trim().length == 0){
          cad_proc.tipo_ox.style.borderColor = "red";        
          booleano = false;
        }else{
          cad_proc.tipo_ox.style.borderColor = "#cccccc";        
        }

        if(cad_proc.res.value.trim().length == 0){
          cad_proc.res.style.borderColor = "red";        
          booleano = false;
        }else{
          cad_proc.res.style.borderColor = "#cccccc";        
        }

        if(cad_proc.nome_pro.value.trim().length == 0){
          cad_proc.nome_pro.style.borderColor = "red";        
          booleano = false;
        }else{
          cad_proc.nome_pro.style.borderColor = "#cccccc";        
        }

        if(cad_proc.pont.value.trim().length == 0){
          cad_proc.pont.style.borderColor = "red";        
          booleano = false;
        }else{
          cad_proc.pont.style.borderColor = "#cccccc";        
        }

        if(cad_proc.tipo.value.trim().length == 0){
          cad_proc.tipo.style.borderColor = "red";        
          booleano = false;
        }else{
          cad_proc.tipo.style.borderColor = "#cccccc";        
        }

        if(booleano == true){
          alert("Os dados foram atualizados!");
          cad_proc.submit();
        }else{
          alert("Verifique os campos em branco");
        }
        
    }
    </script>
    </script>
  </body>
</html>