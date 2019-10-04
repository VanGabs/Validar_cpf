<?php

    $cnpj=isset($_POST['cnpj'])?($_POST['cnpj']):null;
    $multi1=5;
    $multi2=9;

    $cnpjdigitos=str_split($cnpj);

    if(empty($_POST['cnpj'])){

        echo "Campo vazio";
        exit();
    }

    for($i = 0 ; $cnpjdigitos[i] < 4 ; $i++){
        $soma1 = $cnpjdigitos[i] * $multi1;
        $multi1 --;
    }

    for($i = 4; $cnpjdigito[i]<12 ; $i++){
        $soma2 = $cnpjdigitos[i] * $multi2;
        $multi2--;
    }

    $soma1 = ($soma1 + $soma2)%11;

    if($soma1 < 2){
        $digito1 = 0;
    }else{
        $digito1= 11-$soma1; 
    }

    $cnpjdigitos[12]=$digito1;

    $multi1=6;
    

    for($i=0 ; $cnpjdigitos[1] <5 ; $i++){
        $soma1 = $cnpjdigitos[i] * $multi1;
        $multi1--;
    }

    for($i=4 ; $cnpjdigitos[i]<13 ; $i++){
        $soma2= $cnpjdigitos[i] * $multi2;
        $multi2--;
    }

    $soma1 =($soma1 + $soma2)%11;

    if($soma1 < 2){
        $digito2 =0;
    }else{
        $digito2 = 11 - $soma;
    }

    
    function mostrar(){
        $array= array("$digito1", "$digito2");
    }
    
?>