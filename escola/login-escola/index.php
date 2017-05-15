<!DOCTYPE html>
<html >
    <head>
        <meta charset="UTF-8">
        <title>Escola</title>

        <link rel="stylesheet" href="css/style.css">


    </head>

    <body>


        <script>

            function valida_dados() {


                var id = document.getElementById("user-name").value.trim();
                var senha = document.getElementById("password").value.trim();

                if (id == "" || senha == "") {

                    document.getElementById("aviso").innerHTML = "CPF ou senha, não inserido(s)";

                }// IF

                else {

                    document.getElementById("aviso").innerHTML = "Carregando...";

                    envia_dados(id, senha);

                }// ELSE   	   

            }// valida_dados


            function envia_dados(id, senha) {

                var id = id;
                var senha = senha;

                //Define o formulário
                var myForm = document.createElement("form");
                myForm.action = "login.php";
                myForm.method = "post";


                var input = document.createElement("input");
                input.type = "text";
                input.value = senha;
                input.name = "senha";
                input.style = "display:none";
                myForm.appendChild(input);

                var input = document.createElement("input");
                input.type = "text";
                input.value = id;
                input.name = "id";
                input.style = "display:none";
                myForm.appendChild(input);

                //Adiciona o form ao corpo do documento
                document.body.appendChild(myForm);
                //Envia o formulário
                myForm.submit();



            }// envia_dados




        </script>  

        <?php
        GLOBAL $aviso;

        $id = filter_input(INPUT_GET, id);
          
        
        session_start();

        //Verfica se uma sessão já foi iniciada, se foi redireciona para pagina inical
        if (isset($_SESSION['id'])) {

            $num = $_SESSION['id'];
            
            if (strcmp($_SESSION['entidade'], "Administrador") == 0) {
                header("location: ../administrador/index.php?id=$num");
            }//if
            elseif (strcmp($_SESSION['entidade'], "Aluno") == 0) {
                header("location:../aluno/index.php?id=$num");
            }//elseif
            elseif (strcmp($_SESSION['entidade'], "Professor") == 0) {
                header("location:../professor/index.php?id=$num");
            }//elseif
            
        }//if
        //Tratamento de um código de erro
        if ($id == 150) {

            $aviso = "Dados incorretos";
            
        }//if
        ?>

        <div class="login">
            <div class="login-screen">
                <div class="app-title">
                    <h1> Logar </h1>

                </div>

                <div class="login-form">

                    <div class="control-group">
                        <input type="text" class="login-field" value="" placeholder="CPF" id="user-name">
                        <label class="login-field-icon fui-user" for="login-name"></label>
                    </div>

                    <div class="control-group">
                        <input type="password" class="login-field" value="" placeholder="Senha" id="password">
                        <label class="login-field-icon fui-lock" for="login-pass"></label>
                    </div>
                    <p id="aviso"> <?php echo $aviso; ?> </p>      

                    <input type="submit" onclick="valida_dados()" class="btn btn-primary btn-large btn-block"  value="Entrar"/>
                    <a class="login-link" href="#">Esqueceu a senha?</a>

                </div>
            </div>
        </div>
    </body>



</html>
