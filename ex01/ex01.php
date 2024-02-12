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
            $valorC = $_GET['valorC'];

            $soma = $valorA + $valorB;

            echo "<strong>Valor A</strong> = $valorA".PHP_EOL;
            echo "<strong>Valor B</strong> = $valorB".PHP_EOL;
            echo "<strong>Valor C</strong> = $valorC".PHP_EOL;
            echo "<p>$valorA + $valorB = $soma</p>". PHP_EOL;
            if ($soma > $valorC){
                echo "<p>$soma é maior do que $valorC</p>";
            }elseif ($soma < $valorC){
                echo "<p>$soma é menor do que $valorC</p>";
            }else{
                echo "<p>$soma é igual a $valorC</p>";
            }
        ?>
    </main>
</body>
</html>
