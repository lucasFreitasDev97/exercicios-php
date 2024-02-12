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
            $valorA = $_GET['valorA'];
            $valorB = $_GET['valorB'];
            $valorC = null;
            if ($valorA == $valorB){
                $valorC = $valorA + $valorB;
                echo "<p>$valorA + $valorB = $valorC</p>";
            }else{
                $valorC = $valorA * $valorB;
                echo "<p>$valorA x $valorB = $valorC</p>";
            }
        ?>
        <a href="javascript:history.go(-1)">Voltar para a página anterior</a>
    </main>
</body>
</html>
