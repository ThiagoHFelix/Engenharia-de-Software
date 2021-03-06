<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>Home</title>
        <meta charset="utf-8">    
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        
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
                    header("location:../login-escola/");
                }//if
                
            }//if
            else {
                
                header("location:../login-escola/");
                
            }//else
            
            
        ?>
        
        
        <div class="wrapper">
           
<!--========================================================================================================-->              
            <!-- XXX MENU DO LADO ESQUEDO DA TELA-->
            <?php
            include_once './menu/menuNavbar.php';   
            ?>

            <!-- Sidebar-->
            <?php
            include_once './menu/menuSidebar.php';
            ?>

<!--========================================================================================================-->            
            
            
            <div class="content-wrapper">
                <div class="page-title">
                    <div>
                        <h1><i class="fa fa-edit"></i> <?php echo 'Seja bem-vindo(a) '.strtoupper($_SESSION['nome']).' '.strtoupper($_SESSION['sobrenome']); ?> </h1>
                        <p><?php echo 'Mostar data e dia da semana';?></p>
                    </div>
                    <div>
                        <ul class="breadcrumb">
                            <li><i class="fa fa-home fa-lg"></i></li>
                        </ul>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="row">
                                <div class="col-lg-10">
                                    <div class="well bs-component" style="height: 400px">
                                        
                                        <h1>Informações para o administrador</h1>
                                        
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


