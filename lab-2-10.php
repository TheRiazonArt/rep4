<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Задание №3</title>
        <link rel="stylesheet" type="text/css" href="style.css" media="screen">
    </head>
    <main>
        <body>
            <div>
                <h1>Таблица</h1>
            </div>
            <table border="2px">
                <?php
                    for($i=0; $i<10; ++$i) {
                        echo "<tr>";
                        for($j=1; $j<=10; ++$j) {
                            echo ($j%2==0) ? "<td style=\"color: red;\">".($j+$i*10)."</td>":"<td>".($j+$i*10)."</td>";
                        }
                        echo "</tr>";
                    }
                ?>
            </table>
        </body>
    </main>
</html>