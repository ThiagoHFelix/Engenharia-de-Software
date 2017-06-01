<?php
  /*
    Autor: Paulo Gabriel Ronchini
    Data: 08/05/2017

    Código de login do administrador.
  */
    session_start(); 


  if(count($_COOKIE) > 0){      
    if($_COOKIE['manter'] == 'on'){
        $login = $_COOKIE['login'];
        $senha = $_COOKIE['senha'];
        conectar($login, $senha, 'on');
    }else{
       verifica_vars();  
    }
  }else{
      verifica_vars();   
  }


  function verifica_vars(){
    if (isset($_POST['login']) and isset($_POST['senha'])) {
        $login = $_POST['login'];
        $senha = $_POST['senha'];
        if(isset($_POST['manter'])){
          $manter = $_POST['manter'];          
        }else{
          $manter = 'off';          
        }  
        conectar($login, $senha, $manter);        
    }else{
        header("Location:../dist/page_login.php");
    }
  }

 

  
  function conectar($login, $senha, $manter){

    $connect = mysqli_connect('localhost','root','', 'projeto shalon');
    
    #Busca no banco o login e senha informado pelo usuário.           
    $verifica = mysqli_query($connect,"SELECT cpf from administrador where cpf = '".$login."' and senha = '".$senha."'") or die("Erro ao selecionar");
    /*  Caso seje encontrado o longin e senha, o usuário é redirecionado para a tela inicial do perfil de administrador, caso contrário o usuário é redirecionado para a tela de login*/
          if (mysqli_num_rows($verifica)<=0){  
            setcookie('manter', 'off');
            setcookie('login', '');
            setcookie('senha', '');        
            header("Location:../dist/page_login.php");
            
           
          }else{
            $ver = mysqli_query($connect,"SELECT Nome FROM pessoa WHERE cpf = '".$login."'") or die("Erro ao selecionar");
            $ver = mysqli_fetch_assoc($ver);
            $_SESSION['chave'] = 'ok'; 
            $_SESSION['user'] = $ver['Nome'];
            setcookie('manter', $manter);
            setcookie('login', $login);
            setcookie('senha', $senha);                 
            header("Location:../dist/adm.php");          
          }    
    mysqli_close($connect);
  }   
  