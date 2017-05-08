<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">

  <title>Logar no sistema</title>
  <link rel="stylesheet" type="text/css" href="css/style.css" />  
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  
   <!-- Fontes -->
  <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
  
  <script>
   	
   	function valida_dados(){
   	   
   	  
   	   var ra = document.getElementById("login_ra").value.trim();
   	   var senha = document.getElementById("login_senha").value.trim(); 

         if(ra == "" || senha == ""){
         
            document.getElementById("label_aviso").innerHTML = "RA ou senha, não inserido(s)";
           
         }// IF
   	   
			else {
			
				 document.getElementById("label_aviso").innerHTML = "Tudo correto";
			
			}// ELSE   	   
   	   	
   	}// valida_dados
    
    
    
  </script>  
  
  
</head>

	<body>
  <div class="wrapper">
   
   <div class="login">
   
     <p class="title" style="font-family: 'Dancing Script', cursive; ">Escola Shalon</p>
    
     <input type="text" id="login_ra" onc placeholder="RA" autofocus/>
    
     <input type="password" id="login_senha" placeholder="Senha" />
    
     <a href="forgot_password.html">Esqueceu sua senha?</a> 
    
     <p id="label_aviso">  </p>    
     
     <button id="button"  onclick="valida_dados()"  > 
     
       <span> Logar </span>

     </button>
    	
  </div>
 
  <footer> 
  
  		<p> &copy; created by Thiago Henrique Felix </p>  
  	
  </footer>
  
</div>
   

</body>
</html>
