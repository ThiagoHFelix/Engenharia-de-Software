<!DOCTYPE html>
<html>
    <head>
        <title>Protótipo tela de alteração de dados</title>
        <meta charset="utf-8">    
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Thiago Henrique Felix" >
        <!-- CSS-->
        <link rel="stylesheet" type="text/css" href="../css/main.css">

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
                        <h1><i class="fa fa-edit"></i>Cadastro de Matéria</h1>
                        <p>Informações da matéria</p>
                    </div>
                    <div>
                        <ul class="breadcrumb">
                            <li><i class="fa fa-home fa-lg"></i></li>
                            <li>Cadastro</li>
                            <li>Cadastro De Matéria</li>
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
                                                <legend>Cadastro de Matéria</legend>                                   
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
