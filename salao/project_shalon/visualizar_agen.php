<?php
include_once("cabecalho.php");
?>
      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1>Agendamentos</h1>            
          </div>
         
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <table class="table table-hover table-bordered" id="sampleTable">
                  <thead>
                    <tr>
                      <th>Nome</th>
                      <th>Cpf</th>
                      <th>Email</th>
					  <th>Telefone</th>
					  <th>Procedimento</th>
					  <th>Data</th>
					  <th>Hora</th>
					  <th>Status</th>	
                    </tr>
					
                  </thead>
                  <tbody>
                    <tr>
                      <td>Maria da Silva</td>
                      <td>234234234-34</td>
                      <td>Maria@hotmail.com</td> 
					  <td>19 93444-4556</td>
					  <td>Chapinha</td>
					  <td>13/04/2017</td>
					  <td>13:00</td>
					  <td>Concluído</td>
                    </tr>
					
					 <tr>
                      <td>Ana Maria</td>
                      <td>234234267-34</td>
					  <td>Ana@hotmail.com</td>
					  <td>19 93444-4556</td>
				      <td>Pintura</td>
                      <td>14/05/2017</td>
					  <td>14:00</td>
					  <td>Agendado</td>					  
                    </tr>
                    
                  </tbody>
                </table>
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
    <script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
  </body>
</html>