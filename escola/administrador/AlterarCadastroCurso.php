<html>
    <head>
        <title>Protótipo tela de alteração de dados</title>
        <meta charset="utf-8">    
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- CSS-->
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link rel="stylesheet" type="text/css" href="css/table.css">


    </head>
    <body>
        
              <?php
   // Verifica se a pagina foi chamada durante uma sessão, se não foi, não é possivel acessa-lá 
        
            session_start();
        
            $id = filter_input(INPUT_GET, id);
      
            if(isset($_SESSION['id']))
            {
                
                if($id != $_SESSION['id']){
                    header("location:../index.php");
                }//if
                
            }//if
            else {
                
                header("location:../login-escola/");
                
            }//else
            
            
        ?>
        
        <div class="wrapper">
            <!-- Navbar-->
            <?php
            include_once './menu/menuNavbar.php';
            ?>

            <!-- Sidebar-->
            <?php
            include_once './menu/menuSidebar.php';
            ?>

            <div class="content-wrapper">
                <div class="page-title">
                    <div>
                        <h1><i class="fa fa-edit"></i>Alterar Cadastro de Curso</h1>
                        <p>Informações do curso</p>
                    </div>
                    <div>
                        <ul class="breadcrumb">
                            <li><i class="fa fa-home fa-lg"></i></li>
                            <li>Alterar</li>
                            <li>Alterar Cadastro de curso</li>
                        </ul>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="row">
                                <div class="col-lg-10">
                                    <div class="well bs-component">
                                        <legend>Alterar Cadastro de Cursos</legend>
                                        <div class="container">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h3 class="panel-title">Cursos Cadastrados</h3>
                                                    <div class="pull-right">
                                                        <span class="clickable filter" data-toggle="tooltip" title="Toggle table filter" data-container="body">
                                                            <i class="fa fa-search"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="panel-body">
                                                    <input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-table" placeholder="Filtre os Cursos" />
                                                </div>


                                                <table class="table table-bordered" id="dev-table">
                                                    <thead>
                                                        <tr>
                                                            <th>RC</th>
                                                            <th>Nome</th>
                                                            <th>Descrição</th>
                                                            <th>Status</th>
                                                            <th><em class="fa fa-cog"></em></th>
                                                        </tr> 
                                                    </thead>
                                                    <tbody>
                                                        <tr>                                                      
                                                            <td class="hidden-xs">1</td>
                                                            <td>Corte</td>
                                                            <td>O objetivo do curso é preparar o aluno a fazer cortes de cabelo.</td>
                                                            <td><em class="fa fa-check"</td>
                                                            <td>
                                                                <a class="btn btn-default" title="Editar" href="#editar"><em class="fa fa-pencil"></em></a>
                                                                <a class="btn btn-danger" title="Remover" ><em class="fa fa-trash"></em></a>
                                                            </td>
                                                        </tr>

                                                        <tr>                                                      
                                                            <td class="hidden-xs">2</td>
                                                            <td>Alisamento</td>
                                                            <td>O objetivo do curso é preparar o aluno a fazer alisamentos de cabelo</td>
                                                            <td><em class="fa fa-remove"</td>
                                                            <td>
                                                                <a class="btn btn-default" title="Editar" href="#editar"><em class="fa fa-pencil"></em></a>
                                                                <a class="btn btn-danger" title="Remover"><em class="fa fa-trash"></em></a>
                                                            </td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col col-xs-4">Pagina 1 de 5
                                            </div>
                                            <div class="col col-xs-8">
                                                <ul class="pagination hidden-xs pull-right">
                                                    <li><a href="#">1</a></li>
                                                    <li><a href="#">2</a></li>
                                                    <li><a href="#">3</a></li>
                                                    <li><a href="#">4</a></li>
                                                    <li><a href="#">5</a></li>
                                                </ul>
                                                <ul class="pagination visible-xs pull-right">
                                                    <li><a href="#">«</a></li>
                                                    <li><a href="#">»</a></li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>	
                        </div>	
                    </div>	
                </div>

                <div class="row" id="editar">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="row">
                                <div class="col-lg-10">
                                    <div class="well bs-component">	
                                        <form class="form-horizontal">
                                            <fieldset>
                                                <legend>Alterar Cadastro de Curso</legend>                                   
                                                <div class="form-group">
                                                    <label class="control-label col-sm-2" for="email">Nome:</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control" value="Corte" placeholder="Nome">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-2" for="pwd">Descrição:</label>
                                                    <div class="col-sm-4"> 
                                                        <textarea class="form-control" rows="5" rows="4" cols="50" placeholder="Descrição">O objetivo do curso é preparar o aluno a fazer cortes de cabelo.</textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-2" for="pwd">Preço:</label>
                                                    <div class="col-sm-4"> 
                                                        <input type="text" class="form-control" value="R$150,51 ou 10 x R$15,50" placeholder="Preço">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-2" for="pwd">Carga Horária:</label>
                                                    <div class="col-sm-2"> 
                                                        <input type="text" class="form-control" value="250 Horas" placeholder="Carga Horária">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-2" for="pwd">Dia da Semana:</label>
                                                    <div class="col-sm-3"> 
                                                        <select>
                                                            <option value="volvo">Segunda</option>
                                                            <option value="saab">Terça</option>
                                                            <option value="opel">Quarta</option>
                                                            <option value="audi">Quinta</option>
                                                            <option value="audi">Sexta</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">			  
                                                    <label class="control-label col-sm-2" for="pwd">Horário de inicio:</label>
                                                    <div class="col-sm-2"> 
                                                        <input type="text" class="form-control" value="19:30" placeholder="Horário de inicio">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-2" for="pwd">Horário de Fim:</label>
                                                    <div class="col-sm-5"> 
                                                        <input type="text" class="form-control" value="22:00" placeholder="Horário de fim">
                                                    </div>
                                                </div>
                                                <h3>Escolha as matérias do curso</h3>
                                                <div class="form-group">
                                                    <div class="col-sm-5"> 
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" value="">Matéria 1</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">                               
                                                    <div class="col-sm-5"> 
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" value="">Matéria 2</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">                                                   
                                                    <div class="col-sm-2"> 
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" value="">Matéria 3</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">                                                   
                                                    <div class="col-sm-2"> 
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" value="">Matéria 4</label>
                                                        </div>
                                                    </div>
                                                </div>                                                                                                                                          
                                                <br>
                                                <div class="form-group">
                                                    <div class="col-lg-10 col-lg-offset-2">
                                                        <button class="btn btn-primary" type="submit">Confirmar</button>
                                                        <button class="btn btn-default" type="reset">Cancelar</button>                             
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </div>	
                        </div>	
                    </div>	
                </div>
            </div>
        </div>


        <!-- Javascripts-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="js/jquery-2.1.4.min.js"></script>
        <script src="js/essential-plugins.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/plugins/pace.min.js"></script>
        <script src="js/main.js"></script>
        <script src="js/plugins/table.js"></script>
    </body> 	
</html>