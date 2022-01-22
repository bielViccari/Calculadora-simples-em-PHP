<?php

if(isset($_GET['nro1'], $_GET['nro2'],$_GET['operacao']) ) {

  $numero1 = $_GET['nro1'];
  $numero2 = $_GET['nro2'];
  $operacao = $_GET['operacao'];
  $resultado = 0;

  switch($operacao) {
    case "somar" :
      $resultado = $numero1 + $numero2;
      break;
      case "subtrair" :
        $resultado = $numero1 - $numero2;
        break;
        case "dividir" :
          $resultado = $numero1 / $numero2;
          break;
          case "multiplicacao" :
            $resultado = $numero1 * $numero2;
            break;
  }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>calculadora</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  
<div class="container">

<h1 id="titulo">calculadora - PHP</h1>
<form action="" method="get">
<div class="form-control">

<label for="nro1" id="numero1">PRIMEIRO NUMERO </label>
<input type="number" id="nro1" name="nro1" value="<?= $numero1 ?>">

<br>
<br>


<label for="nro2" id="numero2">SEGUNDO NUMERO </label>
<input type="number" id="nro2" name="nro2" value="<?= $numero2 ?>">
<br>
<div class="select">
<select name="operacao" id="operacao">
  <option value="somar">somar +</option>
  <option value="subtrair">subtrair -</option>
  <option value="dividir">Dividir /</option>
  <option value="multiplicacao">Multiplicar x</option>
</select>

<button type="submit">Calcular</button>
</div>
</div><!--form-control-->
</form>

<h2 id="h2Last">RESULTADO : 

 <?php echo" $resultado" ?>
</h2>
</div><!--container-->

</body>
</html>