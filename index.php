<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 4</title>
</head>
<body>

    <?php

    for ($i = 1; $i <= 100; $i++)
    {
        echo $i . " - ";
        if ($i%2==0) {
            if($i%3==0) {
            echo "parzysta, podzielna przez 3" . "<br>";
            continue;
            }
            echo "parzysta" . "<br>";
        }
        elseif ($i%2==1) {
            if($i%3==0) {
                echo "nieparzysta, podzielna przez 3" . "<br>";
                continue;
                }
            echo "nieparzysta" . "<br>";
        }
    }

    $suma = 0;

    echo "Suma wszystkich liczb: ";

    for ($i = 1; $i <= 100; $i++)
    {
        $suma += $i;
    }

    echo $suma . "<br>";

    $suma_parzystych = 0;

    echo "Suma liczb parzystych: ";

    for ($i = 1; $i <= 100; $i++)
    {
        if ($i%2==1) {
            continue;
        }
        $suma_parzystych += $i;
    }

    echo $suma_parzystych . "<br>";;

    $suma_nieparzystych = 0;

    echo "Suma liczb nieparzystych: ";

    for ($i = 1; $i <= 100; $i++)
    {
        if ($i%2==0) {
            continue;
        }
        $suma_nieparzystych += $i;
    }

    echo $suma_nieparzystych . "<br>";;

    $suma_podzielnych = 0;

    echo "Suma liczb podzielnych przez 3: ";

    for ($i = 1; $i <= 100; $i++)
    {
        if ($i%3!==0) {
            continue;
        }
        $suma_podzielnych += $i;
    }

    echo $suma_podzielnych;


    ?>

</body>
</html>