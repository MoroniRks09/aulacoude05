<?php

function calcular($v1,$v2,$operacao){
   
    
    
    if($operacao == '+'){
        $resultado = $v1 + $v2;
        
    }elseif($operacao == '-'){
        $resultado =  $v1 - $v2;
        
    }elseif($operacao == '/'){
        $resultado = $v1 / $v2;
        
    }elseif($operacao == '*'){
        $resultado = $v1 * $v2;
        
    }
    return $resultado;
}
$r = calcular(400,100,"-");
echo $r;


?>