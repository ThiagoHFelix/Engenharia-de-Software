

<?php
session_start();
  include_once("php/seguranca.php");
  include_once("cabecalho.php");
  include_once("conexao.php");
  
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
               <!--
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
                    <!-- 
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
                  </di>
              </div>
                </div>
                  -->
              </div>
			  
              <div class="tab-pane fade" id="user-settings">
                <div class="card user-settings">
                  <h4 class="line-head">Atualizar dados</h4>
                  
                  
  
                  <?php
                  
                      $resultado = mysqli_query($conectar, "SELECT pe.nome, pe.cpf, pe.rg, pe.rua, pe.cep, pe.bairro, pe.cidade, pe.estado, cli.senha, cli.patologias, cli.obs from pessoa as pe, cliente as cli where pe.cpf=cli.cpf AND pe.cpf='".$_SESSION['usuario_cpf']."' AND cli.cpf='".$_SESSION['usuario_cpf']."' LIMIT 1");                      
                                                      
                   $pesquisa = mysqli_fetch_assoc($resultado);                
                        
                        $nome =$pesquisa['nome'];
                        $cpf =$pesquisa['cpf'];
                        $rg =$pesquisa['rg'];
                        $senha =$pesquisa['senha'];
                        $rua =$pesquisa['rua'];
                        $cep =$pesquisa['cep'];
                        $bairro =$pesquisa['bairro'];
                        $cidade =$pesquisa['cidade'];
                        $estado =$pesquisa['estado'];
                        $patologias =$pesquisa['patologias'];
                        $obs =$pesquisa['obs'];
                  
                    echo "<script>alert('".$cidade."');</script>"
                                                            
                ?>
                  
                  
                  
                  <form method="POST" action="php/atualiza_dados.php">                   
                  
                      
                      <div class="row mb-20">                          
                      <div class="col-md-8">
                        <label>Nome completo</label>
                        <input class="form-control" type="text" name="at_nome" id="nome" value=<?php  echo $pesquisa['nome'];?> >
                      </div>                     
                    </div>
                      

                       <div class="row mb-20">
                       <div class="col-md-8">
                        <label>CPF</label>
                        <input class="form-control" type="text" name="at_cpf" id="cpf" value=<?php  echo $cpf;?> >
                      </div>    
                       </div>                          
                                  
                  
                                 
                      <div class="row"> 
                   
                      <div class="clearfix"></div>
                      <div class="col-md-8 mb-20">
                        <label>RG</label>
                        <input class="form-control" type="text" name="at_rg"id="rg" value=<?php  echo $rg;?> >
                      </div>
                       
                      
                     
                       
                      <div class="clearfix"></div>
                      <div class="col-md-8 mb-20">
                        <label>Senha</label>
                        <input class="form-control" type="password" name="at_senha" id="senha" id="senha" value=<?php  echo $senha;?> >
                      </div>

                                      
                      <div class="clearfix"></div>
                      
                         <div class="col-md-8 mb-20">
                          <label>CEP</label> 
                          <input class="form-control" type="text" name="cep" id="cep"  onblur="pesquisacep(this.value);" placeholder="Digite seu CEP" maxlength="8" value=<?php  echo $cep;?> >
                      </div>
                           
                      <div class="clearfix"></div>
                       <div class="col-md-8 mb-20">
                          <label>Rua</label>
                          <input class="form-control" type="text" name="at_rua" id="rua" value=<?php  echo $rua;?> >
                      </div>

                      
                        <div class="clearfix"></div>
                            <div class="col-md-8 mb-20">
                          <label>Número</label>
                          <input class="form-control" type="text" name="at_numero" placeholder="Número da casa" id="numero" value="146">
                      </div>     
                        
                        
                        
                        <div class="clearfix"></div>
                        
                      <div class="col-md-8 mb-20">
                        <label>Bairro</label>
                        <input class="form-control" type="text" name="at_bairro" id="bairro" value=<?php  echo $bairro;?> >
                      </div>
                        
                      <?php  
                      echo "<div class='clearfix'></div>
                        <div class='col-md-8 mb-20'>
                        <label>Cidade</label>
                        <input class='form-control' type='text' name='at_cidade' id='cidade' value='".$cidade."' >
                      </div>";
                      ?>
                        
                        
                         <div class="clearfix"></div>
                        
                        <div class="col-md-8 mb-20">
                        <label>Estado</label>
                        <input class="form-control" type="text" name="at_estado" id="uf"  id="estado" value=<?php  echo $estado;?> >
                      </div>	 			  
                    
                         
                           <div class="clearfix"></div>
                        
                        <div class="col-md-8 mb-20">
                            <label>Sexo</label><br>
                            <label class="radio-inline"> <input type="radio" name="at_sexo" value="m" id="bt"/>Masculino</label>
                            <label class="radio-inline"> <input type="radio" name="at_sexo" value="f" checked id="bt"> Feminino </label>
                      </div>
                         
                           
                      <div class="clearfix"></div>
                        
                        <div class="col-md-8 mb-20">
                            <label>Patologias</label><br>
                            <textarea class="form-control" rows="5" placeholder="Opcional" name="at_patologias" value= <?php  echo $pesquisa['patologias'];?> ></textarea>
                      </div>
                               
                      <div class="clearfix"></div>
                        
                        <div class="col-md-8 mb-20">
                            <label>Gestante</label><br>
                            <label class="radio-inline"> <input type="radio" name="at_gestante" value="s" >Sim</label>
                            <label class="radio-inline"> <input type="radio" name="at_gestante" value="n" checked>Não</label>
                      </div>
                      
                        <div class="clearfix"></div>
                        
                        <div class="col-md-8 mb-20">
                            <label>Cardíaco</label><br>
                            <label class="radio-inline"> <input type="radio" name="at_cardiaco" value="1" >Sim</label>
                            <label class="radio-inline"> <input type="radio" name="at_cardiaco" value="0" >Não</label>
                      </div>
                        
                       
                       
                             <div class="clearfix"></div>
                        
                        <div class="col-md-8 mb-20">
                            <label>Hipertenso</label><br>
                             <label class="radio-inline"> <input type="radio" name="at_hipertenso" value="1" >Sim</label>
                            <label class="radio-inline"> <input type="radio" name="at_hipertenso" value="0"  checked>Não</label>
                      </div>
                             
                               
                                          
                         
                    <div class="row mb-10">
                      <div class="col-md-12">
                          <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Salvar</button>
                      </div>                        
                    </div>                                                           
                </div>
              </form>
                  
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
    <script src="js/plugins/pace.min.js"></script>    
    <script type="text/javascript" src="js/plugins/bootstrap-notify.min.js"></script>
    <script type="text/javascript" src="js/plugins/sweetalert.min.js"></script>
    <script type="text/javascript"></script>
    
               
      
      </script>
      
    <!-- Evento de confirmação ao at os -->
      <script type=text/javascript>     
      
       $('#xxx').click(function(){
      	swal({
      		title: "Tem certeza",
      		text: "Você será capaz de alterar novamente quando quiser!",
      		type: "warning",
      		showCancelButton: true,
      		confirmButtonText: "OK, Alterado!",
      		cancelButtonText: "Não, Cancelar!",
      		closeOnConfirm: false,
      		closeOnCancel: false
      	}, function(isConfirm) {
      		if (isConfirm) {
      			swal("OK!", "Suas informações cadastradas foram alteradas com sucesso", "success");
                                                                                        
      		} else {
      			swal("Cancelado", "Informações não atualizadas", "error");
                                                
      		}
      	});
      });
            </script>

      
    
    
    <!-- Pega o endereço usando javascript-->
    <script type="text/javascript">
      
       function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('rua').value=("");
            document.getElementById('bairro').value=("");
            document.getElementById('cidade').value=("");
            document.getElementById('uf').value=("");
         
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('rua').value=(conteudo.logradouro);
            document.getElementById('bairro').value=(conteudo.bairro);
            document.getElementById('cidade').value=(conteudo.localidade);
            document.getElementById('uf').value=(conteudo.uf);
           
        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }
        
    function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('rua').value="...";
                document.getElementById('bairro').value="...";
                document.getElementById('cidade').value="...";
                document.getElementById('uf').value="...";
               

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = '//viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    };



      </script>
    
    
  </body>
</html>