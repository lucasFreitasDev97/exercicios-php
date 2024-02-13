<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Resultado</h1>
</header>
<main>
    <?php
        $peso = (float) $_GET['peso'];
        $altura = (float) $_GET['altura'];
        $imc =  $peso / (pow($altura, 2)); # Função pow para elevar a potência

        echo "<strong>Imc</strong> (Índice de massa corporal): ". number_format($imc, 2, '.', '');

        if ($imc < 18.5){
            echo "<p>Você está <strong>abaixo do peso!</strong></p>";
        }elseif ($imc >= 18.6 && $imc <= 24.9){
            echo "<p>Você está no <strong>peso ideal</strong>, parabéns!</p>";
        }elseif ($imc >= 25 && $imc <= 29.9){
            echo "<p>Você está Levemente <strong>acima do peso</strong>!</p>";
        }elseif ($imc >= 30 && $imc <= 34.9){
            echo "<p>Você está com grau de <strong>obesidade I</strong>!</p>";
        }elseif ($imc >= 35 && $imc <= 39.9){
            echo "<p>Você está com grau de <strong>obesidade II</strong>(severa)!</p>";
        }else{
            echo "<p>Você está com grau de <strong>obesidade III</strong>(mórbida)!</p>";
        }
    ?>
    <a href="javascript:history.go(-1)">Voltar para a página anterior</a>
</main>
</body>
</html>
