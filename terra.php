<?php


define('DB_HOST', 'localhost'); 
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'entretenimentos');

$conexao = mysqli_connect (DB_HOST,DB_USER,DB_PASS,DB_NAME);

 $SQL = 

 
 $query = mysqli_query ($conexao,$SQL);

 if($query){
    echo "sucesso!";
 }else{

 }


?>