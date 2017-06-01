<?php

// Aquivo responsavel pelo logout  

session_start();

session_destroy();  

header("location:index.php");