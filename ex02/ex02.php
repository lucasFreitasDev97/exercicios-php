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

            if ($numero % 2 == 0){
                echo "<p>$numero é <strong>par</strong></p>";
            }else{
                echo "<p>$numero é <strong>ímpar</strong></p>";
            }
        ?>
        <a href="javascript:history.go(-1)">Voltar para a página anterior</a>
    </main>
</body>
</html>
