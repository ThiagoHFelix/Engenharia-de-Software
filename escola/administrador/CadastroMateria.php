<!DOCTYPE html>
<html>
    <head>
        <title>Cadastro de matéria</title>
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
                                        <form class="form-horizontal" method="POST" >
                                            
                                            <fieldset>
                                                <legend>Cadastro de Matéria</legend>                                   
                                                <div class="form-group">			  
                                                   
                                                    <div class="col-sm-10"> 
                                                        <input type="text" placeholder="Nome da matéria" class="form-control">
                                                    </div>
                                                </div>
                                                
                                                
                                                <div class="form-group">
                                                    <div class="col-sm-10"> 
                                                        <textarea class="form-control" placeholder="Apresentação" rows="8"  cols="50"></textarea>
                                                    </div>
                                                </div>
                                                
                                                
                                                
                                                <div class="form-group">
                                                    <div class="col-sm-10"> 
                                                        <textarea class="form-control" placeholder="Ementa" rows="8"  cols="50"></textarea>
                                                    </div>
                                                </div>
                                                
                                                
                                                
                                                
                                                <div class="form-group">
                                              
                                                    <div class="col-sm-10"> 
                                                        <textarea class="form-control" placeholder="Objetivo" rows="8"  cols="50"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                  
                                                    <div class="col-sm-10"> 
                                                        <textarea class="form-control" placeholder="Bibiografia" rows="8"  cols="50"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group">			  
                                                   
                                                    <div class="col-sm-10"> 
                                                        <textarea  placeholder="Material" class="form-control" rows="8" cols="50"></textarea>
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <div class="col-sm-10"> 
                                                        <textarea class="form-control" placeholder="Extra Classe" rows="8"  cols="50"></textarea>
                                                    </div>
                                                </div>
                                                
                                                
                                                <div class="form-group">
                                                    <div class="col-sm-10"> 
                                                        <textarea class="form-control" placeholder="Avaliação" rows="8"  cols="50"></textarea>
                                                    </div>
                                                </div>
                                                
                                                
                                                <div class="form-group">
                                                    <div class="col-lg-10 col-lg-offset-0">
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
        <script src="../js/jquery-2.1.4.min.js"></script>
        <script src="../js/essential-plugins.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/plugins/pace.min.js"></script>
        <script src="../js/main.js"></script>

    </body> 	
</html>
