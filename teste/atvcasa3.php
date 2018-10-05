<!DOCTYPE html>
<html>
    <meta charset="UTF-8">
    <body>
    <center>
        <h2>Entrevista IBGE</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            Nome: <input type="text" name="name"><br>
            Endereço: <input type="text" name="endereco"><br>
            Data de nascimento: <input type="date" name="nascimento"><br>
            Telefone:   <input type="tel" name="telefone"><br>
            Qual seu sexo? <br>
            <input type="radio" name="genero" value="male" checked> Masculino<br>
            <input type="radio" name="genero" value="female"> Feminino<br>
            E-mail: <input type="email" name="email"><br>
            Qual a sua cor favorita?: <input type="color" name="cor" value="#ff0000"><br>
            O quanto você é bonito(a)?
            <input type="range" name="beleza" min="0" max="10"><br>
            Qual o seu tamanho de roupa?
            <select name="tamanho">
                <option value="p">P</option>
                <option value="m">M</option>
                <option value="g">G</option>
                <option value="gg">GG</option>
            </select><br>
            <input type="submit" value="Cadastrar">
            <br><br>  

            <?php
            // define as variáveis de mensagens de erro e as variáveis de entrada            
            $nome = $endereco = $data = $telefone = $email = $genero = $cor = $beleza = $tamanho = "";

            // Validação
         
            
            ?>          

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
                        <td><?php echo $nome ?></td>
                        <td><?php echo $endereco ?> </td>  
                        <td><?php echo $data; ?> </td> 
                        <td><?php echo $telefone; ?> </td> 
                        <td><?php echo $email; ?> </td> 
                    </tr>                 

                </table> 

                <h1 style="background-color:<?php echo $cor; ?>;">Aqui o background é a cor favorita dessa pessoa</h1>

                <?php
                if ($genero == "masculino") {
                    echo "<h1 style='border:2px solid DodgerBlue;'>Essa pessoa é do sexo masculino</h1>";
                } else {
                    echo "<h1 style='border:2px solid Violet;'>Essa pessoa é do sexo feminino</h1>";
                }
                ?>     

                <br>
                <h4>Essa pessoa acha tem o seguinte nivel de beleza: <?php echo $beleza; ?></h4> 
                <h4>Essa pessoa usa roupas de tamanho: <?php echo $tamanho; ?></h4> 

        </form>
    </center>
</body>
</html>