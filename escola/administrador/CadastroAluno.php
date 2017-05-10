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
        <link rel="stylesheet" type="text/css" href="../css/main.css">

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
                        <h1><i class="fa fa-edit"></i>Cadastro de Aluno</h1>
                        <p>Informações do aluno</p>
                    </div>
                    <div>
                        <ul class="breadcrumb">
                            <li><i class="fa fa-home fa-lg"></i></li>
                            <li>Cadastro</li>
                            <li>Cadastro De Aluno</li>
                        </ul>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="row">
                                <div class="col-lg-10">
                                    <div class="well bs-component">
                                        <form class="form-horizontal">
                                            <fieldset>
                                                <legend>Cadastro de Aluno</legend>  
                                                <div class="form-group">
                                                    <label class="control-label col-sm-2" for="pwd">Nome:</label>
                                                    <div class="col-sm-4"> 
                                                        <input type="text" class="form-control" id="pwd" placeholder="Nome">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-2" for="email">Email:</label>
                                                    <div class="col-sm-3">
                                                        <input type="text" class="form-control" id="email" placeholder="Email" maxlength="11">
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label class="control-label col-sm-2" for="pwd">CPF:</label>
                                                    <div class="col-sm-4"> 
                                                        <input type="email" class="form-control" id="pwd" placeholder="CPF">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-2" for="pwd">RG:</label>
                                                    <div class="col-sm-2"> 
                                                        <input type="text" class="form-control" id="pwd" placeholder="RG" maxlength="9">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-2" for="pwd">Data de Nascimento:</label>
                                                    <div class="col-sm-2"> 
                                                        <input type="date" class="form-control" id="pwd">
                                                    </div>
                                                </div>
                                                <div class="form-group">			  
                                                    <label class="control-label col-sm-2" for="pwd">CEP:</label>
                                                    <div class="col-sm-2"> 
                                                        <input type="text" class="form-control" id="pwd" placeholder="CEP" maxlength="11">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-2" for="pwd">Rua:</label>
                                                    <div class="col-sm-5"> 
                                                        <input type="text" class="form-control" id="pwd" placeholder="Rua">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-2" for="pwd">Bairro:</label>
                                                    <div class="col-sm-5"> 
                                                        <input type="text" class="form-control" id="pwd" placeholder="Bairro">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-2" for="pwd">Cidade:</label>
                                                    <div class="col-sm-5"> 
                                                        <input type="text" class="form-control" id="pwd" placeholder="Cidade">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-2" for="pwd">Estado:</label>
                                                    <div class="col-sm-1"> 
                                                        <input type="text" class="form-control disabled" id="pwd" placeholder="UF">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-2" for="pwd">Telefone:</label>
                                                    <div class="col-sm-2"> 
                                                        <input type="phone" class="form-control" id="pwd" placeholder="Tel">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-2" for="pwd">Celular:</label>
                                                    <div class="col-sm-2"> 
                                                        <input type="phone" class="form-control" id="pwd" placeholder="Cel">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-2" for="pwd">Usuário:</label>
                                                    <div class="col-sm-4"> 
                                                        <input type="text" class="form-control" id="pwd" placeholder="Usuário">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-2" for="pwd">Senha:</label>
                                                    <div class="col-sm-2"> 
                                                        <input type="password" class="form-control" id="pwd" placeholder="Senha" maxlength="10">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-2" for="pwd">Confirmar Senha:</label>
                                                    <div class="col-sm-2"> 
                                                        <input type="password" class="form-control" id="pwd" placeholder="Confirmar senha" maxlength="10">
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="form-group">
                                                    <div class="col-lg-10 col-lg-offset-2">
                                                        <button class="btn btn-primary" type="submit">Cadastrar</button>
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
        <script src="js/jquery-2.1.4.min.js"></script>
        <script src="js/essential-plugins.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/plugins/pace.min.js"></script>
        <script src="js/main.js"></script>

    </body> 	
</html>