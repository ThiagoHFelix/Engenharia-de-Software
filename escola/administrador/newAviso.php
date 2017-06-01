
<!--  Created by Thiago Henrique Felix -->


<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        <meta charset="utf-8">  


        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        -->   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- CSS-->
        <link rel="stylesheet" type="text/css" href="../css/main.css">





    </head>
    <body>


        <?php
        // Verifica se a pagina foi chamada durante uma sessão, se não foi, não é possivel acessa-lá 

        session_start();

        $id = filter_input(INPUT_GET, id);

        if (isset($_SESSION['id'])) {

            if ($id != $_SESSION['id']) {
                header("location:../login-escola/");
            }//if
        }//if
        else {

            header("location:../login-escola/");
        }//else


        include_once '../class/control.class.php';
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

            <?php include_once './../class/model.class.php';   ?>

            <div class="content-wrapper">
                <div class="page-title">
                    <div>
                        <h1><i class="fa fa-edit"></i> All Adm </h1>
                        <p><?php echo 'Mostar data e dia da semana '; ?></p>
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
                                <div class="col-lg-10" style="height: 500px">


                                    <form method="POST" action="./cadAviso.php"> 

                                        <div class="form-group" style="margin-left:85px; margin-top: 50px;">
                                            <label for="comment">Aviso:</label>
                                            <textarea name="aviso" class="form-control" rows="5" id="comment" style="width:800px; "></textarea>

                                        </div>

                                        <div class="form-group">
                                            <div class="col-lg-10 col-lg-offset-2" style="margin-left: 70px">
                                                <button class="btn btn-primary" type="submit">Cadastrar</button>
                                                <button class="btn btn-default" type="reset">Cancelar</button>                             
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
        <script src="../js/jquery-2.1.4.min.js"></script>
        <script src="../js/essential-plugins.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/plugins/pace.min.js"></script>
        <script src="../js/main.js"></script>

    </body> 	
</html>





