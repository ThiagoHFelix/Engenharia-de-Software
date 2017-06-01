<?php


//Created by Thiago Henrique Felix
date_default_timezone_set('America/Sao_Paulo');
 
function Logger($msg){
 
 $dirAtual = getcwd();
 
 chdir("/var/www/html/projetos/escola/log");
    
$data = date("d-m-y");
$hora = date("H:i:s");
$ip = $_SERVER['REMOTE_ADDR'];

$arquivo = "Logger_$data.txt";

$texto = "[$hora][$ip]: $msg \n";
 
$manipular = fopen("$arquivo", "a");

fwrite($manipular, $texto);

fclose($manipular);

chdir($dirAtual);
 
}//function

