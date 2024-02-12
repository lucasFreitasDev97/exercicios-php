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
            $valor = $_GET['valor'];
            $reajuste = $valor + ($valor * 0.05);
            $reajuste = number_format($reajuste, 2, ',', '');
            echo "<p><strong>Valor inicial: </strong>R$ $valor</p>";
            echo "<strong><p>Valor + Reajuste 5%:</strong> R$ $reajuste</p>"
        ?>
        <a href="javascript:history.go(-1)">Voltar para a página anterior</a>
    </main>
</body>
</html>
