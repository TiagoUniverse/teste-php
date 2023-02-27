<?php

/**
 * Autor: Tiago César da Silva Lopes
 * Descrição: Testes gerais de PHP
 * Data: 25/02/23
 */

 require_once "model/pessoa.php";
use model\pessoa;

echo "Hello world";


$pessoa = new pessoa();

$pessoa->setNome("Tiagão");

echo "<br>" . $pessoa->getNome();


// Soma
if (!isset($_POST['numero1'])){
    $_POST['numero1'] = 0;
}


if (!isset($_POST['numero2'])){
    $_POST['numero2'] = 0;
}

if (isset($_POST['numero1']) && isset($_POST['numero2']) ){
//    echo $_POST['numero1']; 
//    echo "<br>" . $_POST['numero2'];

   echo "<br>" . ($_POST['numero1'] + $_POST['numero2']);
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu PHP</title>
</head>
<body>
    

<br><br>
<form action="index.php" method="post">
    <input type="number" name="numero1" value="<?php echo $_POST['numero1'] ; ?>" >
    <input type="number" name="numero2" value="<?php echo $_POST['numero2'] ; ?>" >
    <button type="submit">Somar</button>
</form>

</body>
</html>