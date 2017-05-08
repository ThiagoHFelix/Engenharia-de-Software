<?php
  /*
    Autor: Paulo Gabriel Ronchini
    Data: 08/05/2017

    Código de login do administrador.
  */

  session_start(); 
  $login = $_POST['login'];
  $senha = $_POST['senha'];
  $connect = mysqli_connect('localhost','root','', 'projeto shalon');
  
  #Busca no banco o login e senha informado pelo usuário.           
  $verifica = mysqli_query($connect,"SELECT * from administrador where cpf = '".$login."' and senha = '".$senha."'") or die("Erro ao selecionar");
  /*  Caso seje encontrado o longin e senha, o usuário é redirecionado para a tela inicial do perfil de administrador, caso contrário o usuário é redirecionado para a tela de login*/
        if (mysqli_num_rows($verifica)<=0){          
          header("Location:../dist/page_login.php");
          die();
        }else{
          $ver = mysqli_query($connect,"SELECT Nome FROM pessoa WHERE cpf = '".$login."'") or die("Erro ao selecionar");
          $ver = mysqli_fetch_assoc($ver);
          $_SESSION['chave'] = 'ok'; 
          $_SESSION['user'] = $ver['Nome']; 
          header("Location:../dist/adm.php");          
        }         
  mysqli_close($connect);