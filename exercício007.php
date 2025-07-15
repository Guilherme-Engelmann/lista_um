<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
    
        <label for="fatorial">Verificar número</label>
        <input type="number" id="fatorial" name="fatorial" required>
        <button type="submit" name="v_fatorial">Verificar</button>

    </form>
</body>
</html>
<?php

 function somaDivisores($N) {
    $soma = 0;

    for ($i = 1; $i < $N; $i++) {
        if ($N % $i == 0) {
            $soma += $i;
        }
    }
    return $soma;
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){

        if(isset($_POST['v_fatorial'])){

            $numero = $_POST['fatorial'];
            
            $soma = somaDivisores($numero);
            if ($soma == $numero) {
                echo "$numero é um número perfeito.";
            } else {
                echo "$numero não é um número perfeito.";
            }
            

        }
    }

    





?>
