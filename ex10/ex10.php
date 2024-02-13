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
        $nota01 = (float) $_GET['nota01'];
        $nota02 = (float) $_GET['nota02'];
        $nota03 = (float) $_GET['nota03'];

        $media = ($nota01 + $nota02 + $nota03) / 3;
        $mediaArredonda = number_format($media, 2, '.', '');

        echo "<p>nota 01: $nota01</p>";
        echo "<p>nota 02: $nota02</p>";
        echo "<p>nota 03: $nota03</p>";

        echo "<p>Média final: $mediaArredonda</p>";
    ?>
    <a href="javascript:history.go(-1)">Voltar para a página anterior</a>
</main>
</body>
</html>
