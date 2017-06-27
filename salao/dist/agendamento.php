
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
    -->
    <script type="text/javascript" src="js/control_form.js"></script>
    <script type="text/javascript">
      function cadastrar(){
        if(validarData() == true && validar_campos() == true){
          document.getElementById('agendar').submit();
        }
      }

      function validarData() {
        var data = document.getElementById('data').value;        
        if(moment().format("YYYY-MM-DD") == data || moment(data).isAfter(moment().format("YYYY-MM-DD"))){  
          return true;
        }else{
          alert("Data inválida!");
          return false;
        }
      }

      function validar_campos(){
        var cpf = document.getElementById('cpf');
        var proc = document.getElementById('proc');
        var hora = document.getElementById('hora');
        var flag = true;
        if(cpf.value == "" || cpf.value == null){
          flag = false;
          cpf.style.borderColor = "red";
        }

        if(proc.value == "" || proc.value == null){
          flag = false;
          proc.style.borderColor = "red";
        }

        if(hora.value == "" || hora.value == null){
          flag = false;
          hora.style.borderColor = "red";
        }

        if(flag == false){
          alert("Preencha os campos em branco!");
          return false;
        }else{
          return true
        }
      }

    function cancelar(){
      var r = confirm("Você tem certeza que quer sair da página?");
      if(!r == false){
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
            <h1><i class="fa fa-calendar"></i> Agendar horário</h1>
            
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
              <div class="card-body">                 
                  <form method="post" action="../Controller/agendar.php" id="agendar">                    
                    <div class='form-group'>            
                      <label class="control-label">Selecione a data</label>  
                      <?php   
                       if(isset($_GET['st']) and isset($_GET['id'])){
                          gerenciar_agenda($_GET['st'],$_GET['id']);
                       }   

                       if(isset($_GET['data'])){
                          echo "<input  type='date' name='data' id='data' value='".$_GET['data']."' onblur='validarData()'>";
                       }else{
                          echo "<input  type='date' name='data' id='data' onblur='validarData()'>";
                       }
                      ?>
                    </div>                  
                    <div class="form-group">
                      <label class="control-label">Digite o CPF do cliente</label>
                      <input class="form-control" type="text" name="cpf" id="cpf" maxlength="14" OnKeyPress="formatar('###.###.###-##', this)">
                    </div> 
                    <div class="form-group">
                      <label class="control-label">Qual procedimento você deseja realizar?</label>
                      <input class="form-control" type="text" id="proc" name="proc">                      
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
                  <?php
                 
                  if(isset($_GET['st']) and isset($_GET['id'])){
                          gerenciar_agenda($_GET['st'],$_GET['id']);
                  }   

                  if(isset($_GET['data'])){

                  $connect = mysqli_connect('localhost','root','', 'projeto shalon');
                  $result = mysqli_query($connect, "select p.nome, cs.Servico, cs.hora, cs.status, cs.ID from cliente c, consulta cs, pessoa p where cs.data = '".$_GET['data']."' and cs.Id_cliente = c.Id and c.CPF = p.CPF");
                      if(mysqli_num_rows($result) == 0){
                        echo "<script type='text/javascript'>
                                  alert('Nenhum procedimento encontrado');
                              </script>";                        
                      }else{
                        echo "<table class= 'table'>";
                        echo "<thead>";
                        echo " <tr>";
                        echo    "<th>Cliente</th>";
                        echo    "<th>Procedimento</th>";
                        echo    "<th>Hora</th>";                                                
                        echo    "<th>Status</th>";  
                        echo    "<th>Ações</th>";                                                
                        echo  "</tr>";
                        echo "</thead>";
                        while($row = mysqli_fetch_assoc($result)){
                          if($row['status']=='a'){
                            echo "<tr><td>".$row['nome']."</td><td>".$row['Servico']."</td><td>".$row['hora']."</td><td>Marcado</td><td class='actions'>
                                  <a data-toggle='tooltip' title='Realizar consulta' class='btn btn-warning btn-xs' href='listar_agenda.php?st=r&id=".$row['ID']."&data=".$_GET['data']."'><i class='fa fa-check-square-o' aria-hidden='true'></i></a>
                                  <a data-toggle='tooltip' title='Cancelar consulta' class='btn btn-danger btn-xs' href='listar_agenda.php?st=c&id=".$row['ID']."&data=".$_GET['data']."'><i class='fa fa-times' aria-hidden='true'></i></a></td></tr>";        
                          }elseif($row['status']=='r'){
                            echo "<tr><td>".$row['nome']."</td><td>".$row['Servico']."</td><td>".$row['hora']."</td><td>Realizado</td><td></td></tr>";
                          }elseif($row['status']=='c'){
                            echo "<tr><td>".$row['nome']."</td><td>".$row['Servico']."</td><td>".$row['hora']."</td><td>Cancelado</td><td></td></tr>";
                        }
                      }
                    }
                  }    
                          
                  ?>                  
              </div>  
              <div class="card-footer">
                <button class="btn btn-primary icon-btn" type="button" onclick="cadastrar();"><i class="fa fa-fw fa-lg fa-check-circle"></i>Agendar</button>&nbsp;&nbsp;&nbsp;<a onclick="cancelar()" class="btn btn-default icon-btn" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
              </div>           
            </div>
          </div>        
        </div>
      </div>
    </div>
    <!-- Javascripts-->
    <script src='http://momentjs.com/downloads/moment.min.js'></script>
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/essential-plugins.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/pace.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>

