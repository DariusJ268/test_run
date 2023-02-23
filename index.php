<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $name = "Darius";
    $surname = "Juralevic";
    $YoB = "1997";
    $YoT = "2023";

    echo "<h1> As esu " . $name . " " . $surname . ". Man yra " . $YoT - $YoB . " metai(u).</h1>";

    echo "<hr>";

    $num21 = rand(0, 4);
    $num22 = rand(0, 4);

    echo $num21;
    echo "<br>";
    echo $num22;
    echo "<br>";

    if ($num21 != 0 && $num22 != 0 && $num21 > $num22) {
        echo (round(($num21/$num22),2) . "<br>");
    } elseif ($num21 != 0 && $num22 != 0 && $num21 < $num22) {
        echo (round(($num22/$num21),2) . "<br>");
    } else {
        echo "Dalyba negalima";
    }

    echo "<hr>";
    
    $random = array();
    for ($i = 0; $i < 3; $i++) {
    $random[$i] = rand(0,25);
    }

    if ($random[0] > $random[1] && $random[1] > $random[2]) {
        echo $random[1];
    } elseif ($random[1] > $random[2] && $random[2] > $random[0]) {
        echo $random[2];
    } elseif ($random[2] > $random[0] && $random[0] > $random[1]) {
        echo $random[0];
    } elseif ($random[0] < $random[1] && $random[1] < $random[2]) {
        echo $random[1];
    } elseif ($random[1] < $random[2] && $random[2] < $random[0]) {
        echo $random[2];
    } elseif ($random[2] < $random[0] && $random[0] < $random[1]) {
        echo $random[0];
    } elseif ($random[0] = $random[1]){
        echo $random[0];
    } elseif ($random[1] = $random[2]){
        echo $random[1];
    }elseif ($random[2] = $random[0]){
        echo $random[2];
    }
    echo "<br>";
    echo "<br>";
    echo $random[1];
    echo "<br>";
    echo $random[2];
    echo "<br>";
    echo $random[0];
    echo "<hr>";

    $a = rand(1,10);
    $b = rand(1,10);
    $c = rand(1,10);

    echo "a = " . $a;
    echo "<br>";
    echo "b = " . $b;
    echo "<br>";
    echo "c = " . $c;
    echo "<br>";

if ($a + $b > $c && $a + $c > $b && $b + $c > $a) {
        echo "Trikampis galimas";
    } else {
        echo "Trikampis negalimas";
    }

    echo "<hr>";

    $a1 = rand(0,2);
    $a2 = rand(0,2);
    $a3 = rand(0,2);
    $a4 = rand(0,2);

    

    ?>
</body>
</html>