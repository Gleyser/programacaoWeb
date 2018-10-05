<!DOCTYPE html>
<html>
<body>
<center>
<h2>Entrevista IBGE</h2>
<form action="resultado.php" method="post">
    Nome: <input type="text" name="name"><br>
    Endereço: <input type="text" name="endereco"><br>
    Data de nascimento: <input type="date" name="nascimento"><br>
    Telefone:   <input type="tel" name="telefone"><br>
    Qual seu sexo? <br>
    <input type="radio" name="genero" value="masculino" checked> Masculino<br>
    <input type="radio" name="genero" value="feminino"> Feminino<br>
    E-mail: <input type="email" name="email"><br>
    Qual a sua cor favorita?: <input type="color" name="cor" value="#ff0000"><br>
    Você tem em casa:<br>
    <input type="checkbox" name="carro" value="carro">Carro <br>
    <input type="checkbox" name="moto" value="moto">Moto <br>
    <input type="checkbox" name="geladeira" value="geladeira">Geladeira <br>
    <input type="checkbox" name="microondas" value="microondas">Micro-ondas <br>
    <input type="checkbox" name="computador" value="computador">Computador <br>
    O quanto você é bonito?
    <input type="range" name="points" min="0" max="10"><br>
    Qual o seu tamanho de roupa?
    <select name="tamanhp">
    <option value="p">P</option>
    <option value="m">M</option>
    <option value="g">G</option>
    <option value="gg">GG</option>
  </select><br>
  <input type="submit" value="Cadastrar">
</form>
</center>
</body>
</html>