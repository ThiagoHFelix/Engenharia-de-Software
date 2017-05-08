<!DOCTYPE html>
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
                        <h1><i class="fa fa-edit"></i>Alterar Cadastro de Matéria</h1>
                        <p>Informações da matéria</p>
                    </div>
                    <div>
                        <ul class="breadcrumb">
                            <li><i class="fa fa-home fa-lg"></i></li>
                            <li>Alterar</li>
                            <li>Alterar Cadastro De Matéria</li>
                        </ul>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="row">
                                <div class="col-lg-10">
                                    <div class="well bs-component">

                                        <legend>Alterar Cadastro de Matéria</legend>

                                        <div class="container">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h3 class="panel-title">Matérias Cadastradas</h3>
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
                                                            <th>RM</th>
                                                            <th>Nome</th>
                                                            <th>Objetivo</th>
                                                            <th>Status</th>
                                                            <th><em class="fa fa-cog"></em></th>
                                                        </tr> 
                                                    </thead>
                                                    <tbody>
                                                        <tr>                                                      
                                                            <td class="hidden-xs">1</td>
                                                            <td>Alisamento</td>
                                                            <td>O Objetivo dessa matéria é preparar o aluno para fazer alisamento</td>
                                                            <td><em class="fa fa-check"</td>
                                                            <td>
                                                                <a class="btn btn-default" title="Editar" href="#editar"><em class="fa fa-pencil"></em></a>
                                                                <a class="btn btn-danger" title="Remover"><em class="fa fa-trash"></em></a>
                                                            </td>
                                                        </tr>
                                                        <tr>                                                      
                                                            <td class="hidden-xs">1</td>
                                                            <td>Corte de Cabelo</td>
                                                            <td>O Objetivo dessa matéria é preparar o aluno para fazer corte de cabelo</td>
                                                            <td><em class="fa fa-check"</td>
                                                            <td>
                                                                <a class="btn btn-default" title="Editar" href="#editar"><em class="fa fa-pencil"></em></a>
                                                                <a class="btn btn-danger"  title="Remover"><em class="fa fa-trash"></em></a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col col-xs-4">Page 1 of 5
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

                                                <legend>Alterar Cadastro de Matéria</legend>  

                                                <div class="form-group">			  
                                                    <label class="control-label col-sm-2" for="pwd">Titulo:</label>
                                                    <div class="col-sm-5"> 
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">			  
                                                    <label class="control-label col-sm-2" for="pwd">Apresentação:</label>
                                                    <div class="col-sm-5"> 
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-2" for="pwd">Ementa:</label>
                                                    <div class="col-sm-4"> 
                                                        <textarea class="form-control" rows="5" rows="4" cols="50"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-2" for="pwd">Objetivo:</label>
                                                    <div class="col-sm-4"> 
                                                        <textarea class="form-control" rows="5" rows="4" cols="50"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-2" for="pwd">Bibliografia:</label>
                                                    <div class="col-sm-4"> 
                                                        <textarea class="form-control" rows="5" rows="4" cols="50"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group">			  
                                                    <label class="control-label col-sm-2" for="pwd">Material:</label>
                                                    <div class="col-sm-2"> 
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-2" for="pwd">Extra Classe:</label>
                                                    <div class="col-sm-5"> 
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-2" for="pwd">Avaliações:</label>
                                                    <div class="col-sm-5"> 
                                                        <input type="text" class="form-control" >
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-2" for="pwd">Aulas:</label>
                                                    <div class="col-sm-5"> 
                                                        <input type="text" class="form-control" >
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-2" for="pwd">Tempo de Aula:</label>
                                                    <div class="col-sm-2"> 
                                                        <input type="text" class="form-control" >
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-2" for="pwd">Total Aulas:</label>
                                                    <div class="col-sm-1"> 
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>                                                  
                                                <div class="form-group">
                                                    <label class="control-label col-sm-2" for="pwd">Total de Aulas:</label>
                                                    <div class="col-sm-2"> 
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-2" for="pwd">Tempo de Aulas:</label>
                                                    <div class="col-sm-2"> 
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>                                                  

                                                <div class="form-group">
                                                    <label class="control-label col-sm-2" for="pwd">Dia da Semana:</label>               
                                                    <div class="col-sm-3">     
                                                        <select>
                                                            <option >Segunda</option>
                                                            <option >Terça</option>
                                                            <option >Quarta</option>
                                                            <option >Quinta</option>
                                                            <option >Sexta</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="control-label col-sm-2" for="pwd">Horario inicial:</label>
                                                    <div class="col-sm-2"> 
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-2" for="pwd">Horario Final:</label>
                                                    <div class="col-sm-2"> 
                                                        <input type="text" class="form-control">
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
