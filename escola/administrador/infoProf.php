
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


        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    </head>
    <body>


        <?php
        // Verifica se a pagina foi chamada durante uma sessão, se não foi, não é possivel acessa-lá 

        session_start();
        
        include_once '../class/control.class.php';
       
        
        $controlClass = new control();
        $cpf = filter_input(INPUT_GET, cpf);
        
        $prof = new professor;
        $prof = $controlClass->getProf($cpf);
  
        $id = filter_input(INPUT_GET, id);
        $foto = $prof->foto;
        $primeiro_nome = $prof->primeironome;
        $sobrenome = $prof->sobrenome;
        $nascimento = $prof->nascimento;
        $rg = $prof->rg;
        $senha = $prof->senha;
        $status = $prof->status;
        $estado = $prof->estado;
        $rua = $prof->rua;
        $cep = $prof->cep;
        $bairro = $prof->bairro;
        $cidade = $prof->cidade;
        $email = $prof->email;
        $telefone = $prof->telefone;

     /*   if (isset($_SESSION['id'])) {

            if ($id != $_SESSION['id']) {
                header("location:../login-escola/");
            }//if
        }//if
        else {

            header("location:../login-escola/");
        }//else*/



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
                                    <div  style="height: 820px; width: 350px;">

                                         <div class="panel panel-default" style="width:900px; margin-top:5px; margin-bottom:5px;" >
                                             <div class="panel-body">
                                                    
                                            <!--    <div id="foto" style="width:700px; margin-top:40px; border-bottom:1px solid lightgray" > Foto here </div> -->
                                                <div id="primeiro_nome" style="width:700px; margin-top:40px; border-bottom:1px solid lightgray" > Primeiro Nome: <?php  echo $primeiro_nome; ?></div>
                                                <div id="sobrenome" style="width:700px;margin-top:40px; border-bottom:1px solid lightgray" > Sobrenome: <?php  echo $sobrenome; ?> </div>
                                                <div id="nascimento" style="width:700px; margin-top:40px; border-bottom:1px solid lightgray" > Nascimento:  <?php  echo $nascimento; ?></div>
                                                <div id="cpf" style="width:700px; margin-top:40px; border-bottom:1px solid lightgray" > CPF:  <?php  echo $cpf; ?> </div>
                                                <div id="rg" style="width:700px; margin-top:40px; border-bottom:1px solid lightgray" > RG:  <?php  echo $rg; ?> </div>
                                                <div id="senha" style="width:700px; margin-top:40px; border-bottom:1px solid lightgray" > Senha:  <?php  echo $senha; ?> </div>
                                                <div id="status" style="width:700px; margin-top:40px; border-bottom:1px solid lightgray" > Status:  <?php  echo $status; ?> </div>
                                                <div id="estado" style="width:700px; margin-top:40px; border-bottom:1px solid lightgray" > Estado:  <?php  echo $estado; ?></div>
                                                <div id="rua" style="width:700px; margin-top:40px; border-bottom:1px solid lightgray" > Rua:  <?php  echo $rua; ?> </div>
                                                <div id="cep" style="width:700px; margin-top:40px; border-bottom:1px solid lightgray" > CEP:  <?php  echo $cep; ?>  </div>
                                                <div id="bairro" style="width:700px; margin-top:40px; border-bottom:1px solid lightgray" > Bairro:  <?php  echo $bairro; ?> </div>
                                                <div id="cidade" style="width:700px; margin-top:40px; border-bottom:1px solid lightgray" > Cidade:  <?php  echo $cidade; ?> </div>

                                            </div> 
                                        </div> 
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


