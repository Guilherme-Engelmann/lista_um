<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="GET" action="">
        <label for="numero">Digite um número:</label>
        <input type="number" name="numero" id="numero" required>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>

    <?php
    
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        if (isset($_GET['numero'])) {
            $numero = $_GET['numero'];

            if ($numero % 2 == 0) {
                echo "O número $numero é par.";
            } else {
                echo "O número $numero é ímpar.";
            }
        } 
    }
?>