<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST" action="">

        <label for="numero_par">Digite um Número</label>
        <input type="number" id="numero_par" name="numero_par" required>
        <button type="submit" name="Verificar_numero">Verificar</button>

    </form>
</body>

</html>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){

        if(isset($_POST['Verificar_numero'])){
            
            $numero = $_POST['numero_par'];

if ($numero > 0) {
    echo 'Seu número é positivo';
} else if ($numero <0) {
    echo 'Seu número é negativo';
}else{
    echo 'Seu número é zero';
};
        }
    }



 

?>