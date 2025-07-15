<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>006</title>
</head>
<body>
     <form method="POST" action="">
    
        <label for="fatorial">divisores números</label>
        <input type="number" id="fatorial" name="fatorial" required>
        <button type="submit" name="v_fatorial">Verificar</button>

    </form>
</body>
</html>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){

        if(isset($_POST['v_fatorial'])){

            $numero = $_POST['fatorial'];
            
          function exibirDivisores($numero) {
  echo "Divisores de $numero: ";
  for ($i = 1; $i <= $numero; $i++) {
    if ($numero % $i == 0) {
      echo $i . " ";
    }
  }

}
exibirDivisores($numero); 
        }
    }

?>
