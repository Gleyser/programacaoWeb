<?php

$host = "localhost"; //computador onde o servidor de banco de dados esta instalado
$user = "gleyser"; //seu usuario para acessar o banco
$pass = "gleyser"; //senha do usuario para acessar o banco
$banco = "test"; //banco que deseja acessar

$con = mysqli_connect($host, $user, $pass, $banco);
mysqli_select_db($con, "posts");

$result = mysqli_query($con, 'SELECT * FROM `posts` WHERE 1');
if (mysqli_affected_rows($con)) {
    echo 'Exibindo ' . mysqli_affected_rows($con) . ' registros localizados <br /><br />';
    while ($item = mysqli_fetch_assoc($result)) {
        echo 'Post: ' . $item['titulo'] . ' Conteúdo: ' . $item['conteudo'] . '<br />';
    }
}
?>