<?php
include_once("cabecalho.php");


?>
      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1>Cliente cadastrados</h1>            
          </div>
          <div><a class="btn btn-primary btn-flat" href="form-componants.html"><i class="fa fa-lg fa-plus"></i></a><a class="btn btn-info btn-flat" href="#"><i class="fa fa-lg fa-refresh"></i></a><a class="btn btn-warning btn-flat" href="#"><i class="fa fa-lg fa-trash"></i></a></div>
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
                    </tr>

                  </thead>
                  <tbody>

                    <tr>
                      <td>Maria da Silva</td>
                      <td>234234234-34</td>
                      <td>Maria@-hotmail.com</td>
                      <td>19 93444-4556</td>					  
                    </tr>
                    
                    <tr>
                      <td>Ana Maria</td>
                      <td>234234267-34</td>
                      <td>ana@hotmail.com</td>
	   <td>19 93467-4556</td>					  
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
  