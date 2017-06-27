<?php
include_once("cabecalho.php");
?>
      <div class="content-wrapper">
        <div class="page-title hidden-print">
          <div>
            <h1><i class="fa fa-file-text-o"></i> Impressão</h1>
            <p>Pagina de impressão</p>
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li><a href="#">Invoice</a></li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <section class="invoice">
                <div class="row">
                  <div class="col-xs-12">
                    <h2 class="page-header"><i class="fa fa-globe"></i> Salão de beleza Shalon<small class="pull-right">Data de atendimento: 01/01/2018</small></h2>
                  </div>
                </div>
				
                <div class="row invoice-info">
                  <div class="col-xs-4">	
                    <address><strong>Shalon</strong><br>67 Rua Emilio de Menezes<br>Americana, São Paulo<br>Telefone: (19) 5656-6767<br>Email: Shalon@salão.com</address>
                  </div>
				  
                  <div class="col-xs-4">
                    <address><strong></strong><br>            <br>            <br>            <br>            </address>
                  </div>
				  
                  <div class="col-xs-4"><b>Número #007612</b><br><br><b>ID:</b> 4876876<br><b>Data do pagamento</b> 01/01/2018</div>
                </div>
                <div class="row">
                  <div class="col-xs-12 table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>Ordem</th>                          
                          <th>Nome</th>
                          <th>Procedimento</th>
						  <th>Hora</th>
                          <th>Valor do procedimento</th>
                        </tr>
                      </thead>
                      <tbody>
					   <tr>
                          <td>1</td>                          
                           <th>Angelica</th>
                          <td>Tratamento intensivo</td>
						  <td>13:00</td>
                          <td>R$ 50.00</td>
                        </tr>
                        <tr>
                          <td>2</td>                          
                           <th>Bruna</th>
                          <td>Tratamento intensivo</td>
						  <td>14:00</td>
                          <td>R$ 50.00</td>
                        </tr>
                        <tr>
                          <td>3</td>                          
                           <th>Carol</th>
                          <td>Descoloração</td>
						  <td>15:00</td>
                          <td>R$ 10.70</td>
                        </tr>
                        <tr>
                          <td>4</td>                          
                           <th>Maria</th>
                          <td>Alizamento</td>
						  <td>16:00</td>
                          <td>R$ 25.99</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="row hidden-print mt-20">
                  <div class="col-xs-12 text-right"><a class="btn btn-primary" href="javascript:window.print();" target="_blank"><i class="fa fa-print"></i>Imprimir 
				 </a></div>
                </div>
              </section>
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
    <script type="text/javascript">$('body').removeClass("sidebar-mini").addClass("sidebar-collapse");</script>
  </body>
</html>