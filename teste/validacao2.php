<!DOCTYPE HTML>  
<html>
    <head>
        <style>
            .error {color: #FF0000;}
        </style>
    </head>
    <body>  

        <?php
        // define as variáveis de mensagens de erro e as variáveis de entrada
        $nomeErr = $emailErr = $generoErr = $websiteErr = "";
        $nome = $email = $genero = $comentario = $website = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["nome"])) {
                $nomeErr = "Nome é obrigatório";
            } else {
                $nome = test_input($_POST["nome"]);
            }

            if (empty($_POST["email"])) {
                $emailErr = "Email é obrigatório";
            } else {
                $email = test_input($_POST["email"]);
            }

            if (empty($_POST["website"])) {
                $website = "";
            } else {
                $website = test_input($_POST["website"]);
            }

            if (empty($_POST["comentario"])) {
                $comentario = "";
            } else {
                $comentario = test_input($_POST["comentario"]);
            }

            if (empty($_POST["genero"])) {
                $generoErr = "Gênero é obrigatório";
            } else {
                $genero = test_input($_POST["genero"]);
            }
        }

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        ?>

        <h2>PHP Formulário de Validação - Exemplo 2</h2>
        <p><span class="error">* obrigatório</span></p>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

            Nome: <input type="text" name="nome">
            <span class="error">* <?php echo $nomeErr; ?></span>
            <br><br>
            E-mail:
            <input type="text" name="email">
            <span class="error">* <?php echo $emailErr; ?></span>
            <br><br>
            Website:
            <input type="text" name="website">
            <span class="error"><?php echo $websiteErr; ?></span>
            <br><br>
            Comentário: <textarea name="comentario" rows="5" cols="40"></textarea>
            <br><br>
            Gênero:
            <input type="radio" name="genero" value="f">Feminino
            <input type="radio" name="genero" value="mle">masculino
            <input type="radio" name="genero" value="o">Outro
            <span class="error">* <?php echo $generoErr; ?></span>
            <br><br>
            <input type="submit" name="submit" value="Submit"> 

        </form>

       <?php
        echo "<h2>Dados digitados:</h2>";
        echo $nome;
        echo "<br>";
        echo $email;
        echo "<br>";
        echo $website;
        echo "<br>";
        echo $comentario;
        echo "<br>";
        echo $genero;
        ?>


    </body>
</html>
