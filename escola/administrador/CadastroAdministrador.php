
<!DOCTYPE html>
<html>
    <head>
        <title>Cadastro de Administrador</title>
        <meta charset="utf-8">    
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- CSS-->
        <link rel="stylesheet" type="text/css" href="../css/main.css">

        <script src="/lib/jquery-1.12.2.min.js"></script>
        <script src="/lib/bootstrap.min.js"></script>

        <style>

            div.myclass {

                margin: 20px 0px 20px 0px;



            }

        </style>

        <!--SCRIPT DO AVISO SOBRE OS CAMPOS OBRIGATÓRIOS -->
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
                header("location:../index.php");
            }//if

            $aviso = filter_input(INPUT_GET, aviso);
            if ($aviso != null) {

                echo "<script> 
                    
                    window.onload = initPage;
                      function initPage(){
                      
                        window.location.href = \"#aviso\";

                    }
                 
                    
                    </script>";
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
                        <h1><i class="fa fa-edit"></i>Cadastro de Administrador</h1>
                        <p>Informações do administrador</p>
                    </div>
                    <div>
                        <ul class="breadcrumb">
                            <li><i class="fa fa-home fa-lg"></i></li>
                            <li>Cadastro</li>
                            <li>Cadastro De Administrador</li>
                        </ul>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="row">
                                <div class="col-lg-10">
                                    <div class="well bs-component">
                                        <form class="form-horizontal" method="GET" action="cadAdm.php">
                                            <fieldset>
                                                <legend>Cadastro de Administrador</legend>  

                                                <!--
                                                                                                <div class="form-group " style="margin:5px 5px 5px -1px" >
                                                                                                    <div class="col-sm-4 myclass" style=" margin: 5px 5px 5px 5px;"> 
                                                                                                        <input  type="file" name="img" multiple>
                                                                                                    </div>
                                                                                                </div>
                                                
                                                
                                                -->

                                                <div class="alert alert-info">
                                                    <strong> Atenção, </strong> atributos com o simbolo (*) são obrigatórios.
                                                </div>



                                                <div class="col-sm-4 myclass"> 
                                                    <label for="pwd">Primeiro Nome*</label>
                                                    <input style="border-color: blue" type="text" value="<?php echo filter_input(INPUT_GET, primeiro_nome); ?>" name="primeiroNome" class="form-control" id="pwd" placeholder="Primeiro Nome">
                                                </div>




                                                <div class="col-sm-4 myclass"> 
                                                    <label >Sobrenome</label>
                                                    <input type="text" name="sobrenome" value="<?php echo filter_input(INPUT_GET, sobrenome); ?>" class="form-control" id="pwd" placeholder="Sobrenome">
                                                </div>




                                                <div class="col-sm-4 myclass"> 
                                                    <label >Email</label>
                                                    <input type="text" name="email" value="<?php echo filter_input(INPUT_GET, email); ?>" class="form-control" id="pwd" placeholder="Email">
                                                </div>





                                                <div class="col-sm-4 myclass"> 
                                                 <!--   <input type="number" name="cpf" style="border-color: black" class="form-control" id="pwd" placeholder="CPF">
                                                    --><label >CPF*</label>
                                                    <input class="form-control cpf-mask"  style="border-color: blue" name="cpf" value="<?php echo filter_input(INPUT_GET, cpf); ?>" placeholder="CPF" type="text">
                                                </div>


                                                <div class="col-sm-4 myclass"> 
                                                    <label >RG</label>
                                                    <input  type="text" name="rg" class="form-control" value="<?php echo filter_input(INPUT_GET, rg); ?>" id="pwd" placeholder="RG" maxlength="9">
                                                </div>




                                                <div class="form-group" style=" margin: 0px 0px 0px 0px; " >
                                                    <!-----------------------------------------------------> 

                                                    <div class="col-sm-1 myclass"> 
                                                        <label >Nascimento*</label>
                                                        <select style="width: 70px; height:40px;  margin: 0px 0px 0px 0px" name="dia">
                                                            <option >1</option>
                                                            <option >2</option>
                                                            <option >3</option>
                                                            <option >4</option>
                                                            <option >5</option>
                                                            <option >6</option>
                                                            <option >7</option>
                                                            <option >8</option>
                                                            <option >9</option>
                                                            <option >10</option>
                                                            <option >11</option>
                                                            <option >12</option>
                                                            <option >13</option>
                                                            <option >14</option>
                                                            <option >15</option>
                                                            <option >16</option>
                                                            <option >17</option>
                                                            <option >18</option>
                                                            <option >19</option>
                                                            <option >20</option>
                                                            <option >21</option>
                                                            <option >22</option>
                                                            <option >23</option>
                                                            <option >24</option>
                                                            <option >25</option>
                                                            <option >26</option>
                                                            <option >27</option>
                                                            <option >28</option>
                                                            <option >29</option>
                                                            <option >30</option>
                                                            <option >31</option>

                                                        </select>
                                                    </div>
                                                    <!----------------------------------------------------->       

                                                    <!-----------------------------------------------------> 
                                                    <div class="col-sm-1 myclass"> 
                                                        <label ></label>
                                                        <select style="width: 106px;height:40px;   margin: 5px 0px 0px 2px"  name="mes">
                                                            <option >Janeiro</option>
                                                            <option >Fevereiro</option>
                                                            <option >Março</option>
                                                            <option >Abril</option>
                                                            <option >Maio</option>
                                                            <option >Junho</option>
                                                            <option >Julho</option>
                                                            <option >Agosto</option>
                                                            <option >Setembro</option>
                                                            <option >Outubro</option>
                                                            <option >Novembro</option>
                                                            <option >Dezembro</option>

                                                        </select>
                                                    </div>
                                                    <!----------------------------------------------------->       
                                                    <div class="col-sm-1 myclass"> 
                                                        <label ></label>
                                                        <select style="width: 70px;height:40px;  margin: 5px 0px 0px 40px" name="ano">
                                                            <option>1960 </option>
                                                            <option>1961 </option>
                                                            <option>1962 </option>
                                                            <option>1963 </option>
                                                            <option>1964 </option>
                                                            <option>1965 </option>
                                                            <option>1966 </option>
                                                            <option>1967 </option>
                                                            <option>1968 </option>
                                                            <option>1969 </option>
                                                            <option>1970 </option>
                                                            <option>1971 </option>
                                                            <option>1972 </option>
                                                            <option>1973 </option>
                                                            <option>1974 </option>
                                                            <option>1975 </option>
                                                            <option>1976 </option>
                                                            <option>1977 </option>
                                                            <option>1978 </option>
                                                            <option>1979 </option>
                                                            <option>1980 </option>
                                                            <option>1981 </option>
                                                            <option>1982 </option>
                                                            <option>1983 </option>
                                                            <option>1984 </option>
                                                            <option>1985 </option>
                                                            <option>1986 </option>
                                                            <option>1987 </option>
                                                            <option>1988 </option>
                                                            <option>1989 </option>
                                                            <option>1990 </option>
                                                            <option>1991 </option>
                                                            <option>1992 </option>
                                                            <option>1993 </option>
                                                            <option>1994 </option>
                                                            <option>1995 </option>
                                                            <option>1996 </option>
                                                            <option>1997 </option>
                                                            <option>1998 </option>
                                                            <option>1999 </option>
                                                            <option>2001 </option>
                                                            <option>2002 </option>
                                                            <option>2003 </option>
                                                            <option>2004 </option>
                                                            <option>2005 </option>
                                                            <option>2006 </option>
                                                            <option>2007 </option>
                                                            <option>2008 </option>
                                                            <option>2009 </option>
                                                            <option>2010 </option>
                                                            <option>2011 </option>
                                                            <option>2012 </option>
                                                            <option>2013 </option>
                                                            <option>2014 </option>
                                                            <option>2015 </option>
                                                            <option>2016 </option>
                                                            <option>2017 </option>
                                                        </select>
                                                    </div>
                                                </div>



                                                <div class="form-group " style=" margin: 0px 0px 0px 0px">
                                                    <div class="col-sm-4 myclass"> 
                                                        <label >CEP</label>
                                                        <input class="form-control cep-mask" value="<?php echo filter_input(INPUT_GET, cep); ?>" name="cep" placeholder="CEP" type="text">
                                                    </div>



                                                    <div class="col-sm-4 myclass"> 
                                                        <label >Rua</label>
                                                        <input type="text" name="rua" class="form-control" value="<?php echo filter_input(INPUT_GET, rua); ?>" id="pwd" placeholder="Rua">
                                                    </div>



                                                    <div class="col-sm-4 myclass"> 
                                                        <label >Bairro</label>
                                                        <input type="text" name="bairro" class="form-control" value="<?php echo filter_input(INPUT_GET, bairro); ?>" id="pwd" placeholder="Bairro">
                                                    </div>



                                                    <div class="col-sm-4 myclass"> 
                                                        <label >Cidade</label>
                                                        <input type="text" name="cidade" class="form-control" value="<?php echo filter_input(INPUT_GET, cidade); ?>" id="pwd" placeholder="Cidade">
                                                    </div>



                                                    <div class="col-sm-4 myclass"> 
                                                        <label >Estado</label>
                                                        <input type="text" name="estado" class="form-control" id="pwd" value="<?php echo filter_input(INPUT_GET, estado); ?>" placeholder="Estado">
                                                    </div>



                                                    <div class="col-sm-4 myclass"> 
                                                        <label >Telefone</label>
                                                        <input class="form-control phone-ddd-mask" name="telefone" value="<?php echo filter_input(INPUT_GET, telefone); ?>" placeholder="Telefone" type="text">

                                                    </div>



                                                    <div class="col-sm-4 myclass"> 
                                                        <label >Senha</label>
                                                        <input type="password" style="border-color: blue" name="senha" value="<?php echo filter_input(INPUT_GET, senha); ?>" class="form-control" id="pwd" placeholder="Senha" maxlength="10">
                                                    </div>



                                                    <div class="col-sm-4 myclass"> 
                                                        <label >Confirmar Senha</label>
                                                        <input type="password" style="border-color: blue" name="confsenha" class="form-control" id="pwd" value="<?php echo filter_input(INPUT_GET, confsenha); ?>" placeholder="Confirmar senha" maxlength="10">
                                                    </div>



                                                    <div class="col-sm-4 myclass"> 
                                                        <label >Status</label>
                                                        <select style="width: 255px;height:40px" style="border-color: black" name="status">
                                                            <option >Ativo</option>
                                                            <option >Inativo</option>
                                                        </select>
                                                    </div>

                                                </div>
                                                <div class="form-group " style="margin:5px 5px 5px 15px">
                                                    <div  class="alert alert-warning alert-dismissible fade show" style="width:900px " role = "alert">
                                                        <button type = "button" class = "close" data-dismiss = "alert" aria-label = "Close">
                                                            <span aria-hidden = "true">×</span>
                                                        </button>
                                                        <?php echo $aviso; ?>
                                                    </div>

                                                    <a name="aviso"></a>    

                                                    <button class="btn btn-primary" type="submit">Cadastrar</button>
                                                    <button class="btn btn-default" type="reset">Cancelar</button>                             
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


        <!-- Atente-se para a ordem: primeiro jquery, depois locastyle, depois o JS do Bootstrap. -->
        <script async="" src="//www.google-analytics.com/analytics.js"></script><script type="text/javascript" src="//code.jquery.com/jquery-2.0.3.min.js"></script>
        <script type="text/javascript" src="//assets.locaweb.com.br/locastyle/2.0.6/javascripts/locastyle.js"></script>
        <script type="text/javascript" src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>

    </body> 	
</html>


