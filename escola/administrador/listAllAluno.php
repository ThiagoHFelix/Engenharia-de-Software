
<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        <meta charset="utf-8">    
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- CSS-->
        <link rel="stylesheet" type="text/css" href="../css/main.css">

        
        
        <style>
            
            
            element {
}
.fade.show {
    opacity: 1;
}
.alert-warning {
    background-color: #fcf8e3;
    border-color: #faf2cc;
    color: #8a6d3b;
}
.alert {
    padding: .75rem 1.25rem;
    margin-bottom: 1rem;
    border: 1px solid transparent;
    border-radius: .25rem;
}
.fade {
    opacity: 0;
    -webkit-transition: opacity .15s linear;
    -o-transition: opacity .15s linear;
    transition: opacity .15s linear;
}




            
        </style>
        
        
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
                                <div class="col-lg-10">
                                    <div class="well bs-component" style="height: 420px; width: 350px;">

                                        <?php
                                        if (filter_input(INPUT_GET, aviso) != null ) {

                                            echo "<div  class=\"alert alert-warning alert-dismissible fade show\" style=\"width:900px \" role = \"alert\">
                                            <button type = \"button\" class = \"close\" data-dismiss = \"alert\" aria-label = \"Close\">
                                                <span aria-hidden = \"true\">×</span>
                                            </button>
                                            ".filter_input(INPUT_GET, aviso)."
                                        </div>";
                                            
                                        }//IF
                                        ?>
                                        
                                        
                                        <?php
                                        $con = new control();

                                        echo $con->getAllAluno();
                                        ?>


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


