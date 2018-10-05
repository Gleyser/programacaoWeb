<!DOCTYPE HTML>  
<html>
    <head>
    </head>
    <body>  

        <?php
        // define as variáveis de entrada
        $nome = $email = $genero = $comentario = $website = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nome = test_input($_POST["nome"]);
            $email = test_input($_POST["email"]);
            $website = test_input($_POST["website"]);
            $comentario = test_input($_POST["comentario"]);
            $genero = test_input($_POST["genero"]);
        }

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        ?>

        <h2>PHP Formulário de Validação - Exemplo</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">  

            Nome: <input type="text" name="nome" required>
            <br><br>
            E-mail: <input type="text" name="email">
            <br><br>
            Website: <input type="text" name="website">
            <br><br>
            Comentário: <textarea name="comentario" rows="5" cols="40"></textarea>
            <br><br>
            Gênero:
            <input type="radio" name="genero" value="f">Feminino
            <input type="radio" name="genero" value="m">Masculino
            <input type="radio" name="genero" value="o">Outro
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