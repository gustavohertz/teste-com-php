<html>
<head>
  <title>PHP Test</title>
</head>
<body>
  <form method="post" action="">
    <input type="number" name="num1">
    <input type="number" name="num2">
    <button type="submit" name="soma">soma</button>
    <button type="submit" name="subtracao">subtração</button>
    <button type="submit" name="multiplicacao">multiplicação</button>
    <button type="submit" name="divisao">divisão</button>
  </form>

  <?php 
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];

    if(isset($_POST["soma"])){
      $resultado = $num1 + $num2;
      writeToFile($resultado);
    } else if(isset($_POST["subtracao"])){
      $resultado = $num1 - $num2;
      writeToFile($resultado);
    } else if(isset($_POST["multiplicacao"])){
      $resultado = $num1 * $num2;
      writeToFile($resultado);
    } else if(isset($_POST["divisao"])){
      $resultado = $num1 / $num2;
      writeToFile($resultado);
    }
  }

  function writeToFile($data) {
    $file = fopen("resultado.txt", "w");
    fwrite($file, $data);
    fclose($file);
  }
  ?> 
</body>
</html>
