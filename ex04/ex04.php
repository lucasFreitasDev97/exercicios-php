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
            $numero = $_GET['numero'];
            $antecessor = $numero - 1;
            $sucessor = $numero + 1;
            echo "<p><strong>Número:</strong>$numero</p>";
            echo "<p><strong>Antecessor: </strong>$antecessor</p>";
            echo "<p><strong>Sucessor: </strong>$sucessor</p>";
        ?>
        <a href="javascript:history.go(-1)">Voltar para a página anterior</a>
    </main>
</body>
</html>
