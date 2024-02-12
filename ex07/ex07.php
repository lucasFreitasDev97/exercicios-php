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
            if ($numero % 5 == 0){
                echo "<p><strong>$numero</strong> é múltiplo de 5, portanto é <strong>verdadeiro!</strong></p>";
            }else{
                echo "<p><strong>$numero</strong> não é múltiplo de 5, portanto é <strong>falso!</strong></p>";
            }
        ?>
        <a href="javascript:history.go(-1)">Voltar para a página anterior</a>
    </main>
</body>
</html>
