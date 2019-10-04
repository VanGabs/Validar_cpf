
<html lang="pt-br">
    <title> Validador de CPF </title>
        <head>
                <meta charset="utf-8">
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                <link rel="stylesheet" href="/CSS/styles.css">
                
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        
        </head>
       
        <header>
                <label id="textoheader" > Validador de CPF </label>
                  
        </header>
                
        <div class="container"> 
                       
        <body>      
                     
                <div class="texto">
                                
                        <form action="validarcpf.php" method="POST">
                                
                                <div class="form-group">
                                        <label for="cpf" id="cortexto">CPF:</label>
                                        <input type="text" maxlength="9" name="cpf" placeholder="Seu cpf">
                                        <input type="text" maxlength="2" name="dig" size="5" placeholder="Digito">
                                </div>              
                                
                                        <input type="submit" class="btn btn-dark" name="enviar" >                        
                        </form>
        
                        <form action="validarcnpj.php" method="POST">
                                        
                                <div class="form-group">
                                        <label for="cnpj" id="cortexto">CNPJ</label>
                                        <input type="text" maxlength="12" name="cnpj" placeholder="Seu Cnpj">
                                        <input type="text" maxlength="2" name="cnpjdig" size="5" placeholder="Digito">
                                </div>
                                
                                <input type="submit" class="btn btn-dark" name="enviar">
                        

                                                            
                        </form>

                                               
                        
                </div>
        </body>
</html>
        
                                                     
                                                    
                                        
                               
                