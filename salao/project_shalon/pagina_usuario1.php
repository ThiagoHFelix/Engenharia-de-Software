

<?php
session_start();
include_once("php/seguranca.php");
include_once("cabecalho.php");
?>
      <div class="content-wrapper">
        <div class="row user">
          <div class="col-md-12">
            <div class="profile">
              <div class="info"><img class="user-img" src="imagens/user.png">
                  <?php                  
                echo "<h4>".$_SESSION['usuario_nome']."</h4>";
                  ?>
                <p>Usuário</p>
              </div>
              <div class="cover-image"></div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card p-0">
              <ul class="nav nav-tabs nav-stacked user-tabs">
                <li class="active"><a href="#user-timeline" data-toggle="tab">Procedimentos</a></li>
                <li><a href="#user-settings" data-toggle="tab">Configurações</a></li>
              </ul>
            </div>
          </div>
          
		<div class="col-md-9">
            <div class="tab-content">
              <div class="tab-pane active" id="user-timeline">
                <div class="timeline">
                  <div class="post">
                    <div class="post-media"><a href="#"><img src="imagens/user.png" width="50px" height="50px"></a>
                      <div class="content">
                        <h5>Antonia</h5>
                        <p class="text-muted"><small>02/11/2017</small></p>						
                      </div>
                     </div>
                    <div class="post-content">
                        <h3>Procedimento realizado</h3>	
                      <p>Corte de cabelo</p>
                    </div>
					<!--
                    <ul class="post-utility">
                       <li class="likes"><a href="#"><i class="fa fa-fw fa-lg fa-thumbs-o-up"></i>Like</a></li>
                      <li class="shares"><a href="#"><i class="fa fa-fw fa-lg fa-share"></i>Share</a></li> 
                      <li class="comments"><i class="fa fa-fw fa-lg fa-comment-o"></i>Excluir</li>
                    </ul>
					-->
                  </div>
                  <div class="post">
                    <div class="post-media"><a href="#"><img src="imagens/user.png" width="50px" height="50px"></a>
                      <div class="content">
                        <h5><a href="#">Maria</a></h5>
                        <p class="text-muted"><small>03/11/2017</small></p>
                      </div>
                    </div>
                    <div class="post-content">
	<h3>Procedimento realizado</h3>
                      <p>Chapinha</p>
                    </div>                  
                  </div>
                </div>
              </div>
			  
              <div class="tab-pane fade" id="user-settings">
                <div class="card user-settings">
                  <h4 class="line-head">Atualizar dados</h4>
                  
                  <form method="POST" action="php/atualiza_dados.php">
                    
                      
                      <div class="row mb-20">                          
                      <div class="col-md-8">
                        <label>Nome completo</label>
                        <input class="form-control" type="text" name="at_nome">
                      </div>                     
                    </div>
                      
                       <div class="row mb-20">
                       <div class="col-md-3">
                        <label>CPF</label>
                        <input class="form-control" type="text" name="at_cpf">
                      </div>    
                       </div>                          
                                                 
                    <div class="row">
                        
                      <div class="container">
                        <div class="row">
                            <div class='col-sm-6'>
                                <div class="form-group">
                                    <div class='input-group date' id='datetimepicker2'>
                                           <label>Data de Nascimento</label>
                                        <input type='text' class="form-control" />                                        
                                    </div>
                                </div>
                            </div>
                           
                            <script type="text/javascript">
                                $(function () {
                                    $('#datetimepicker2').datetimepicker({
                                        locale: 'br'
                                    });
                                });
                            </script>
                        </div>
                    </div>

                      <div class="clearfix"></div>
                      <div class="col-md-3 mb-20">
                        <label>RG</label>
                        <input class="form-control" type="text" name="at_rg">
                      </div>
                       
                        
                      <div class="clearfix"></div>
                      <div class="col-md-3 mb-20">
                        <label>Senha</label>
                        <input class="form-control" type="text" name="at_senha">
                      </div>

                      <div class="clearfix"></div>
						          
                      <div class="col-md-3 mb-20">
                        <label>Redigitar senha</label>
                        <input class="form-control" type="text" name="at_resenha">
                      </div>
                        
                      <div class="clearfix"></div>
                         <div class="col-md-3 mb-20">
                          <label>CEP</label> 
                        <input class="form-control" type="text" name="at-cep">
                      </div>
                           
                      <div class="clearfix"></div>
                            <div class="col-md-3 mb-20">
                          <label>Rua</label>
                          <input class="form-control" type="text" name="at_rua">
                      </div>

                        <div class="clearfix"></div>
          	  
                        <div class="col-md-3 mb-20">
                        <label>Número</label>
                        <input class="form-control" type="text" name="at_numero">
                      </div>

                        <div class="clearfix"></div>
                        
                        <div class="col-md-3 mb-20">
                        <label>Cidade</label>
                        <input class="form-control" type="text" name="at_cidade">
                      </div>
                        
                         <div class="clearfix"></div>
                        
                        <div class="col-md-3 mb-20">
                        <label>Estado</label>
                        <input class="form-control" type="text" name="at_estado" maxlength="2" />
                      </div>	 			  
                    
                    <div class="row mb-10">
                      <div class="col-md-12">
                        <button class="btn btn-primary" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>Salvar</button>
                      </div>
                    </div>
                  </form>
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