<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Задание №4</title>
        <link rel="stylesheet" type="text/css" href="style.css" media="screen">
    </head>
    <main>
        <body>
            <div>
                <h1>Вариант №4</h1>
                <?php
                    $n = rand(1, 100);
                    $m = rand(1, 100);
                    $vzprost = true;
                    echo "Числа: $n и $m<br>";

                    for ($i = 2; $i <= min($n, $m); $i++) {
                        if ($n % $i === 0 && $m % $i === 0) {
                            $vzprost = false;
                            break;
                        }
                    }
                    if ($vzprost) { echo "Взаимно простые";}
                    else { echo "Не взаимно простые";}
                ?>
            </div>
            <br>
        </body>
    </main>
</html>