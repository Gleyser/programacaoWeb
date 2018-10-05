<html>
    <head>        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
<body>
    <h2>Cadastrado com sucesso! Dados cadastrados:</h2>
    
   <table border=1>
           <table border=1>
                <tr>
                   <th>Nome</th>
                   <th>Endereço</th>
                   <th>Data de nascimento</th>
                   <th>Telefone</th>  
                   <th>E-mail</th>
                </tr>     
            
                <tr>
                      <td><?php echo $_POST["name"]; ?></td>
                      <td><?php echo $_POST["endereco"]; ?> </td>  
                      <td><?php echo $_POST["nascimento"]; ?> </td> 
                      <td><?php echo $_POST["telefone"]; ?> </td> 
                       <td><?php echo $_POST["email"]; ?> </td> 
                </tr>                 
              
         </table> 
       
       <h1 style="background-color:<?php echo $_POST["cor"]; ?>;">Aqui o background é a cor favorita dessa pessoa</h1>
       
       <?php
       if ($_POST["genero"] == "masculino"){
           echo "<h1 style='border:2px solid DodgerBlue;'>Essa pessoa é do sexo masculino</h1>";
       } else {
           echo "<h1 style='border:2px solid Violet;'>Essa pessoa é do sexo feminino</h1>";
       }
       
       ?>
       <h4>Essa pessoa tem:</h4> 
       <table border=1>
           <table border=1>
                <tr>
                   <th>Carro?</th>
                   <th>Moto?</th>
                   <th>Geladeira?</th>
                   <th>Micro-ondas?</th>  
                   <th>Computador?</th>
                </tr>     
            
                <tr>
                      <td>Sim</td>
                      <td>Sim </td>  
                      <td>Sim </td> 
                      <td>Sim </td> 
                      <td>Sim</td> 
                </tr>                 
              
         </table> 
    
        <br>
        <h4>Essa pessoa acha tem é o seguinte nivel de beleza: <?php echo $_POST["points"]; ?></h4> 
        <h4>Essa pessoa usa roupas de tamanho: P</h4> 
       

</body>
</html>
