<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <form method="POST" action="">
    
        <label for="numero_par">Verifica se é número primo</label>
        <input type="number" id="numero_par" name="numero_par" required>
        <button type="submit" name="Verificar_primo">Verificar</button>

    </form>
</body>
</html>

<?php
$i = 1;
$numero = $_POST['numero_par'];
$resultado = $numero * $numero;

    for($i = 1; $numero <=10 ; $numero++){
        echo "<p>$numero x $numero = $resultado</p>";
    };


?>