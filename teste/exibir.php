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
                   <th>Idade</th>
                </tr>     
            
                <tr>
                      <td><?php echo $_POST["name"]; ?></td>
                      <td><?php echo $_POST["endereco"]; ?> </td>  
                      <td><?php echo $_POST["nascimento"]; ?> </td> 
                      <td><?php echo $_POST["telefone"]; ?> </td> 
                       <td><?php echo $_POST["email"]; ?> </td> 
                       <td><?php echo $_POST["idade"]; ?> </td> 
                </tr>                 
              
         </table> 
       
       
       <?php
       if ($_POST["genero"] == "masculino"){
           echo "<h1 style='border:2px solid DodgerBlue;'>Essa pessoa é do sexo masculino</h1>";
       } else {
           echo "<h1 style='border:2px solid Violet;'>Essa pessoa é do sexo feminino</h1>";
       }
       ?>
       
       
       <?php
       if ($_POST["genero"] == "masculino"){
           $anos = 60 - $_POST["idade"];
           echo "<h1 style='border:2px solid DodgerBlue;'>Essa pessoa é do sexo masculino e faltam $anos anos para elE se aposentar. </h1>";
       } else {
           $anos = 55 - $_POST["idade"];
           echo "<h1 style='border:2px solid Violet;'>Essa pessoa é do sexo feminino e faltam $anos anos para elA se aposentar.</h1>";
       }
       ?>
       
       

</body>
</html>
