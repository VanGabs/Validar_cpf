
<?php
    
        
    $cpf = isset($_POST['cpf'])?($_POST['cpf']):null;
    $digito = isset($_POST['dig'])?($_POST['dig']):null;
    $multi = 10;
    $multi2 = 11;
    
    $cpfdigitos = str_split ($cpf);
    $digitoverificar = str_split ($digito);
    
    
    if(empty($_POST['cpf']) || empty($_POST['dig'])){
    
        echo "Campo vazio";
        exit();
             
    }

   foreach($cpfdigitos as $valor){
        $validarprimeirodigito += $valor * $multi;
        $multi--;

    }
    
    $validarprimeirodigito = $validarprimeirodigito%11;

    $calculodigito1 = 11 - $validarprimeirodigito;

    if($calculodigito1 > 9){
        $calculodigito1 = 0;
    }
    
   

    $cpfdigitos[9] = $digitoverificar[0];



    foreach($cpfdigitos as $valor){
        $validarsegundodigito += $valor * $multi2;
        $multi2--;
    }
    $validarsegundodigito = $validarsegundodigito%11;
   

    $calculodigito2 = 11 - $validarsegundodigito;

    

    if($calculodigito2 > 9) {
        $calculodigito2 = 0;
    }
   
   
    if($calculodigito1 == $digitoverificar[0] && $calculodigito2 == $digitoverificar[1]){
        echo "Cpf valido";
        
    }else{
        echo "Cpf invalido";
        
    }

?>