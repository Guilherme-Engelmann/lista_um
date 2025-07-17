<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <form method="POST" action="">

        <label for="fatorial">Digite um Número</label>
        <input type="number" id="fatorial" name="fatorial" required>
        <button type="submit" name="V_fatorial">Verificar</button>

    </form>
</body>
</html>
<?php

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        if(isset($_POST['v_fatorial'])){

            $numero = $_POST['fatorial'];
            
            for($i = 1; $i < $umero; $i++) {
        if ($numero % 2 == 0) {
            echo 'O número é par';
        }else{
            echo 'Esse número não é par';
        }
    }
        }
    }

?>