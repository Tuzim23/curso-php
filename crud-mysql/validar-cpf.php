<?php


function validarCpf($cpf){
    $cpf = str_split($cpf);
    $d1 = validarDigito($cpf, 0);
    $d2 = validarDigito($cpf, 1);
    return $cpf[9] == $d1 && $cpf[10] == $d2;
}

function validarDigito($cpf, $d){

    $soma = 0;
    for ($i=0; $i <= (8 + $d); $i++) { 
        
        $soma += $cpf[$i] * ((10 + $d)-$i);
       
    }
    $digito = $soma % 11;
    if($digito >= 2){
        $digito = 11 - $digito;
    }else{
        $digito = 0;
    }
    return $digito;
}
?>