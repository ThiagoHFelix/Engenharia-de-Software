<?php
/*
  Autor: Paulo Gabriel Ronchini
  Data: 08/05/2017

  Página inicial do perfil do administrador.
*/
  session_start();
  #header('Content-Type: text/html; charset=ISO-8859-1');
#Verifica se o usuário esta logado, caso não esteja, ele é redirecionado para a tela de login.
  if(empty($_SESSION['chave']) || $_SESSION['chave']<>'ok'){
    header("Location:page_login.php");
  }

  if(isset($_SESSION['cad_cliente']) && $_SESSION['cad_cliente'] == true){
      echo "<script type='text/javascript'>alert('Cliente cadastrado!');</script>";
      unset($_SESSION['cad_cliente']);
  }

  if(isset($_SESSION['updateadm']) && $_SESSION['updateadm'] == 1){
      echo "<script type='text/javascript'>alert('Dados atualizados!');</script>";
      unset($_SESSION['updateadm']);
  }elseif(isset($_SESSION['updateadm']) && $_SESSION['updateadm'] == 0){
      echo "<script type='text/javascript'>alert('Dados atualizados!');</script>";
      unset($_SESSION['updateadm']);
  }

?>


<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
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
          <?php
            echo "<h1><i class='fa fa-dashboard'></i>  Bem Vindo ".$_SESSION['user']."</h1>"
          ?>
            <p>Perfil Administrador</p>
          </div>          
        </div>
        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <h3 class="card-title">Agenda de hoje <?php echo date('d/m/y');?></h3>
              <div class="card-body">                  
                  <div class="table-responsive">
                  <table class="table">
                    <?php
                  $connect = mysqli_connect('localhost','root','', 'projeto shalon');
                  $result = mysqli_query($connect, "select p.nome, cs.Servico, cs.hora, cs.status, cs.ID from cliente c, consulta cs, pessoa p where cs.data = '".date("Y-m-d")."' and cs.Id_cliente = c.Id and c.CPF = p.CPF order by cs.Hora");
                      if(mysqli_num_rows($result) == 0){
                        echo "<p>Nenhum horário agendado para hoje".date("d/m/y")."</p>";                        
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
                                  <a data-toggle='tooltip' title='Realizar consulta' class='btn btn-warning btn-xs' href='listar_agenda.php?st=r&id=".$row['ID']."&data=".date("Y-m-d")."'><i class='fa fa-check-square-o' aria-hidden='true'></i></a>
                                  <a data-toggle='tooltip' title='Cancelar consulta' class='btn btn-danger btn-xs' href='listar_agenda.php?st=c&id=".$row['ID']."&data=".date("Y-m-d")."'><i class='fa fa-times' aria-hidden='true'></i></a></td></tr>";        
                          }elseif($row['status']=='r'){
                            echo "<tr><td>".$row['nome']."</td><td>".$row['Servico']."</td><td>".$row['hora']."</td><td>Realizado</td><td></td></tr>";
                          }elseif($row['status']=='c'){
                            echo "<tr><td>".$row['nome']."</td><td>".$row['Servico']."</td><td>".$row['hora']."</td><td>Cancelado</td><td></td></tr>";
                        }
                      }
                    }
                    ?>
                  </table>
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
    
    <script type="text/javascript" src="js/plugins/chart.js"></script>
    
    <script type="text/javascript" src="js/plugins/jquery.vmap.min.js"></script>
   
    <script type="text/javascript" src="js/plugins/jquery.vmap.world.js"></script>
    
    <script type="text/javascript" src="js/plugins/jquery.vmap.sampledata.js"></script>
    
    <script type="text/javascript">
      $(document).ready(function(){
      	var data = {
      		labels: ["January", "February", "March", "April", "May"],
      		datasets: [
      			{
      				label: "My First dataset",
      				fillColor: "rgba(220,220,220,0.2)",
      				strokeColor: "rgba(220,220,220,1)",
      				pointColor: "rgba(220,220,220,1)",
      				pointStrokeColor: "#fff",
      				pointHighlightFill: "#fff",
      				pointHighlightStroke: "rgba(220,220,220,1)",
      				data: [65, 59, 80, 81, 56]
      			},
      			{
      				label: "My Second dataset",
      				fillColor: "rgba(151,187,205,0.2)",
      				strokeColor: "rgba(151,187,205,1)",
      				pointColor: "rgba(151,187,205,1)",
      				pointStrokeColor: "#fff",
      				pointHighlightFill: "#fff",
      				pointHighlightStroke: "rgba(151,187,205,1)",
      				data: [28, 48, 40, 19, 86]
      			}
      		]
      	};
      	var ctxl = $("#lineChartDemo").get(0).getContext("2d");
      	var lineChart = new Chart(ctxl).Line(data);
      
      	var map = $('#demo-map');
      	map.vectorMap({
      		map: 'world_en',
      		backgroundColor: '#fff',
      		color: '#333',
      		hoverOpacity: 0.7,
      		selectedColor: '#666666',
      		enableZoom: true,
      		showTooltip: true,
      		scaleColors: ['#C8EEFF', '#006491'],
      		values: sample_data,
      		normalizeFunction: 'polynomial'
      	});
      });
    </script>
  </body>
</html>
                  