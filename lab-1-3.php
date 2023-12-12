<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="style.css" media="screen">
        <title>Задание №1</title>
    </head>
    <main>
        <body>
            <div>
                <h1>Число Е</h1>
            </div>
            <hr></hr>
            <div class="divs1">
                <?php
                    const NUM_E = 2.71828;
                    echo "Чиcло E равно " . NUM_E;
                    $NUM_E1 = NUM_E;
                    echo "<br>\$num_e1 = " . $NUM_E1 . " - " . gettype($NUM_E1);
                    $NUM_E1 = (string) $NUM_E1;
                    echo "<br>\$num_e1 = " . $NUM_E1 . " - " . gettype($NUM_E1);
                    $NUM_E1 = (int) $NUM_E1;
                    echo "<br>\$num_e1 = " . $NUM_E1 . " - " . gettype($NUM_E1);
                    $NUM_E1 = (bool) $NUM_E1;
                    echo "<br>\$num_e1 = " . $NUM_E1 . " - " . gettype($NUM_E1);
                ?>
            </div>
            <hr></hr>
        </body>
    </main>
</html>