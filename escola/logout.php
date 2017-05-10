<?php

// Aquivo responsavel pelo logout do administrador 
//inicio a sessão na pagina 
session_start();
//destruo todos os dados da sessão
session_destroy();  

header("location:index.php");