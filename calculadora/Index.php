<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Estilos.css">
    <title>Formulario</title>
</head>
<body>
<form method="POST" action="index.php">
   <h3>Escriba un numero </h3>
   <input type="text" name="numero1">
   <h3>Escriba un numero</h3>
   <input type="text" name="numero2">
   <h3>Escriba un operador</h3>
   <input type="text" name="operador">
   <br>
   <input type="submit" value="cargar" name="btn_enviar">

    <?php 
      if(isset($_POST["btn_enviar"])){
          $numero1 =$_POST["numero1"];
          $numero2 =$_POST["numero2"];
          $operador =$_POST["operador"];
           
    switch($operador){
      case'+':
      $total= $numero1 + $numero2;
      echo "la suma de $numero1 + $numero2 =$total";
      break;
      case'-': 
      $total=$numero1 - $numero2;
      echo "la resta de $numero1 - $numero2 =$total";
      break;
      case'*': 
     mult($numero1, $numero2);
      break;
      case'/':
      $total=$numero1 / $numero2;
      echo "la suma de $numero1 / $numero2 =$total";
      break;
      }
    }
        function mult ($Vari, $Final ) {
          for ($i=1; $i <= $Final; $i++) {
            $Total= $i * $Vari;
            echo "<br> $Vari * $i = $Total <br>";
          }
        }
    ?>
    
</body>
</html>