<?php
$nome = $_POST['txtNome'];

echo "Hello" .$nome;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="exercicio2.php" method='post'>
    Nome:
    <input type="text" name="txtNome" id=""> <br/>
    <input type="submit" value="Enviar">
  </form>
</body>
</html>