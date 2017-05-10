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
                        <h1><i class="fa fa-edit"></i>Alterar Cadastro de Administrador</h1>
                        <p>Informações do Administrador</p>
                    </div>
                    <div>
                        <ul class="breadcrumb">
                            <li><i class="fa fa-home fa-lg"></i></li>
                            <li>Alterar</li>
                            <li>Alterar Cadastro De Administrador</li>
                        </ul>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="row">
                                <div class="col-lg-10">
                                    <div class="well bs-component">
                                        <legend>Alterar Cadastro de Administrador</legend>
                                        <div class="container">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h3 class="panel-title">Administrador Cadastrados</h3>
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
                                                            <th>RP</th>
                                                            <th>Nome</th>
                                                            <th>Email</th>
                                                            <th>Status</th>
                                                            <th><em class="fa fa-cog"></em></th>
                                                        </tr> 
                                                    </thead>
                                                    <tbody>
                                                        <tr>                                                      
                                                            <td class="hidden-xs">1</td>
                                                            <td>Maria Alves</td>
                                                            <td>Maria@hotmail.com</td>
                                                            <td><em class="fa fa-check"</td>
                                                            <td>
                                                                <a class="btn btn-default" title="Editar" href="#editar"><em class="fa fa-pencil"></em></a>
                                                                <a class="btn btn-danger" title="Remover"><em class="fa fa-trash"></em></a>
                                                            </td>
                                                        </tr>

                                                        <tr>                                                      
                                                            <td class="hidden-xs">2</td>
                                                            <td>Leandro Alves da Silva</td>
                                                            <td>Leandro@hotmail.com</td>
                                                            <td><em class="fa fa-remove"</td>
                                                            <td>
                                                                <a class="btn btn-default" title="Editar" href="#editar"><em class="fa fa-pencil"></em></a>
                                                                <a class="btn btn-danger" title="Remover" ><em class="fa fa-trash"></em></a>
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
                                                <legend>Alterar Cadastro de Professor</legend>                                   
                                                <div class="form-group">
                                                    <label class="control-label col-sm-2" for="pwd">Nome:</label>
                                                    <div class="col-sm-4"> 
                                                        <input type="text" class="form-control" id="pwd" value="Maria">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-2" for="email">Email:</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control" id="email" value="Maria@hotmail.com" maxlength="11">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="control-label col-sm-2" for="pwd">CPF:</label>
                                                    <div class="col-sm-4"> 
                                                        <input type="email" class="form-control" id="pwd" value="44852226830">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-2" for="pwd">RG:</label>
                                                    <div class="col-sm-2"> 
                                                        <input type="text" class="form-control" id="pwd" value="452626006" maxlength="9">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-2" for="pwd">Data de Nascimento:</label>
                                                    <div class="col-sm-3"> 
                                                        <input type="date" class="form-control" >
                                                    </div>
                                                </div>
                                                <div class="form-group">			  
                                                    <label class="control-label col-sm-2" for="pwd">CEP:</label>
                                                    <div class="col-sm-2"> 
                                                        <input type="text" class="form-control" value="11111111111" maxlength="11">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-2" for="pwd">Rua:</label>
                                                    <div class="col-sm-5"> 
                                                        <input type="text" class="form-control" value="Lindóia">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-2" for="pwd">Bairro:</label>
                                                    <div class="col-sm-5"> 
                                                        <input type="text" class="form-control" value="Santa Rosa">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-2" for="pwd">Cidade:</label>
                                                    <div class="col-sm-5"> 
                                                        <input type="text" class="form-control" value="SBO">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-2" for="pwd">Número:</label>
                                                    <div class="col-sm-2"> 
                                                        <input type="number" class="form-control" value="415">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-2" for="pwd">Estado:</label>
                                                    <div class="col-sm-1"> 
                                                        <input type="text" class="form-control" value="SP">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-2" for="pwd">Telefone:</label>
                                                    <div class="col-sm-2"> 
                                                        <input type="text" class="form-control" value="(19)3626-1328">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-2" for="pwd">Celular:</label>
                                                    <div class="col-sm-2"> 
                                                        <input type="text" class="form-control"  value="(19)98626-1328">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-2" for="pwd">Informar a senha:</label>
                                                    <div class="col-sm-2"> 
                                                        <input type="password" class="form-control" value="(19)3626-1328" maxlength="10">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-2" for="pwd">Confirmar senha:</label>
                                                    <div class="col-sm-2"> 
                                                        <input type="password" class="form-control" value="(19)3626-1328" maxlength="10">
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

