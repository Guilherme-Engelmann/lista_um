<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <form method="POST" action="">
    
        <label for="fatorial">Verifica fatorial</label>
        <input type="number" id="fatorial" name="fatorial" required>
        <button type="submit" name="v_fatorial">Verificar</button>

    </form>
</body>
</html>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){

        if(isset($_POST['v_fatorial'])){
            
              $x = $_POST['fatorial'];
            $resultado = 1;
            while($x > 1){
                $resultado *= $x;
                $x--;
            }
            echo "Resultado: ".$resultado;
        }
    }

?>
