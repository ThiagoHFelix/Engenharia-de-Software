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
                        <h1><i class="fa fa-edit"></i>Cadastro de Curso</h1>
                        <p>Informações do curso</p>
                    </div>
                    <div>
                        <ul class="breadcrumb">
                            <li><i class="fa fa-home fa-lg"></i></li>
                            <li>Cadastro</li>
                            <li>Cadastro de curso</li>
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
                                                <legend>Cadastro de Curso</legend>                                   
                                                <div class="form-group">
                                                    <label class="control-label col-sm-2" for="email">Titulo:</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control" placeholder="Nome">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-2" for="pwd">Descrição:</label>
                                                    <div class="col-sm-4"> 
                                                        <textarea class="form-control" rows="5" rows="4" cols="50" placeholder="Descrição"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-2" for="pwd">Preço:</label>
                                                    <div class="col-sm-4"> 
                                                        <input type="text" class="form-control" placeholder="Preço">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-2" for="pwd">Carga Horária:</label>
                                                    <div class="col-sm-2"> 
                                                        <input type="text" class="form-control" placeholder="Carga Horária">
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
                                                    <label class="control-label col-sm-2" for="pwd">Horário de inicio:</label>
                                                    <div class="col-sm-2"> 
                                                        <input type="text" class="form-control" placeholder="Horário de inicio">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-2" for="pwd">Horário de Fim:</label>
                                                    <div class="col-sm-5"> 
                                                        <input type="text" class="form-control" placeholder="Horário de fim">
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
                                                        <button class="btn btn-primary" type="submit">Cadrastrar</button>
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