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

    echo $a1 . ", ";
    echo $a2 . ", ";
    echo $a3 . ", ";
    echo $a4 . ". <br>";

    $count0 = 0;
    $count1 = 0;
    $count2 = 0;

    if ($a1 == 0) {
        $count0++;
    }
    if ($a2 == 0) {
        $count0++;
    }
    if ($a3 == 0) {
        $count0++;
    }
    if ($a4 == 0) {
        $count0++;
    }
    if ($a1 == 1) {
        $count1++;
    }
    if ($a2 == 1) {
        $count1++;
    }
    if ($a3 == 1) {
        $count1++;
    }
    if ($a4 == 1) {
        $count1++;
    }
    if ($a1 == 2) {
        $count2++;
    }
    if ($a2 == 2) {
        $count2++;
    }
    if ($a3 == 2) {
        $count2++;
    }
    if ($a4 == 2) {
        $count2++;
    }

    echo "0 kiekis = " . $count0++ . "<br>";
    echo "1 kiekis = " . $count1++ . "<br>";
    echo "2 kiekis = " . $count2++ . "<br>";

    echo "<hr>";

    $num6 = rand(1,6);

    echo "<h" . $num6 . ">" . $num6 . "</h" . $num6 . ">";

    echo "<hr>";

    $n71 = rand(-10, 10);
    $n72 = rand(-10, 10);
    $n73 = rand(-10, 10);

    if ($n71 < 0){
        echo "<font color = 'green'>" . $n71 . "<br>"; 
    } elseif ($n71 == 0) {
        echo "<font color = 'red'>" . $n71 . "<br>";
    } elseif ($n71 > 0) {
        echo "<font color = 'blue'>" . $n71 . "<br>";
    }
    if ($n72 < 0){
        echo "<font color = 'green'>" . $n72 . "<br>"; 
    } elseif ($n72 == 0) {
        echo "<font color = 'red'>" . $n72 . "<br>";
    } elseif ($n72 > 0) {
        echo "<font color = 'blue'>" . $n72 . "<br>";
    }
    if ($n73 < 0){
        echo "<font color = 'green'>" . $n73 . "<br>"; 
    } elseif ($n73 == 0) {
        echo "<font color = 'red'>" . $n73 . "<br>";
    } elseif ($n73 > 0) {
        echo "<font color = 'blue'>" . $n73 . "<br>";
    }

    echo "<hr>";
    echo "<font color = 'black'>";

    $n8 = rand(5, 3000);
    echo $n8 . "<br>";

    if ($n8 < 1001) {
        echo "Moketina suma = " . $n8 . " eur";
    } elseif (1000 < $n8 && $n8 < 2001) {
        echo "Moketina suma = " . round(($n8 * 0.97), 2) . " eur";
    } elseif (2000 < $n8 && $n8 < 3001) {
        echo "Moketina suma = " . round(($n8 * 0.96), 2) . " eur";
    }

    echo "<hr>";

    $n91 = rand(0, 100);
    $n92 = rand(0, 100);
    $n93 = rand(0, 100);

    echo $n91 . "<br>";
    echo $n92 . "<br>";
    echo $n93 . "<br>";

    $vidurkis = "Triju skaiciu vidurkis (suapvalintas) = " . round(($n91 + $n92 + $n93)/3) . "<br>";
    echo $vidurkis;

    if (($n91 = 0) && ($n92 = 0) && ($n93 = 0)) {
        echo "Lygtis negalima";
    } elseif (($n91 < 10 || $n91 > 90) && ($n92 < 10 || $n92 > 90)) {
        echo "Triju skaiciu vidurkis (suapvalintas), atemus netinkamas reiksmes = " . $n93 . "<br>";
    } elseif (($n93 < 10 || $n93 > 90) && ($n92 < 10 || $n92 > 90)) {
        echo "Triju skaiciu vidurkis (suapvalintas), atemus netinkamas reiksmes = " . $n91 . "<br>";
    } elseif (($n93 < 10 || $n93 > 90) && ($n91 < 10 || $n91 > 90)) {
        echo "Triju skaiciu vidurkis (suapvalintas), atemus netinkamas reiksmes = " . $n92 . "<br>";
    } elseif (($n91 < 10 || $n91 > 90)) {
        echo "Triju skaiciu vidurkis (suapvalintas), atemus netinkamas reiksmes = " . round(($n92 + $n93)/2) . "<br>";
    } elseif (($n92 < 10 || $n92 > 90)) {
        echo "Triju skaiciu vidurkis (suapvalintas), atemus netinkamas reiksmes = " . round(($n91 + $n93)/2) . "<br>";
    } elseif (($n93 < 10 || $n93 > 90)) {
        echo "Triju skaiciu vidurkis (suapvalintas), atemus netinkamas reiksmes = " . round(($n92 + $n91)/2) . "<br>";
    } elseif ($vidurkis = round(($n91 + $n92 + $n93)/3)) {
        echo "Netinkamu reiksmiu nera; suapvalintas vidurkis lygus " . round(($n91 + $n92 + $n93)/3) . "<br>";
    }

    echo "<hr>";

    $valandos = rand(0,23);
    $minutes = rand(0,59);
    $sekundes = rand(0,59);

    // echo $valandos . ":" . $minutes . ":" . $sekundes;

    if (($valandos < 10) && ($minutes < 10) && ($sekundes < 10)) {
        echo "0". $valandos . ":0" . $minutes . ":0" . $sekundes;
    } elseif (($valandos < 10) && ($minutes < 10)) {
        echo "0". $valandos . ":0" . $minutes . ":" . $sekundes;
    } elseif (($valandos < 10) && ($sekundes < 10)) {
        echo "0". $valandos . ":" . $minutes . ":0" . $sekundes;
    } elseif (($minutes < 10) && ($sekundes < 10)) {
        echo $valandos . ":0" . $minutes . ":0" . $sekundes;
    } elseif ($valandos < 10) {
        echo "0". $valandos . ":" . $minutes . ":" . $sekundes;
    } elseif ($minutes < 10) {
        echo $valandos . ":0" . $minutes . ":" . $sekundes;
    } elseif ($sekundes < 10) {
        echo $valandos . ":" . $minutes . ":0" . $sekundes;
    } else {
        echo $valandos . ":" . $minutes . ":" . $sekundes;
    }

    echo "<br>";

    $paplaikas = rand(0,300);
    echo $paplaikas . "<br>";

    $valandos1 = $valandos;
    $minutes1 = $minutes;
    $sekundes1 = $sekundes + $paplaikas;

    if ($sekundes1 >= 300) {
        ($minutes1 = $minutes + 5) && ($sekundes1 = $sekundes1 - 300);
    } elseif (($sekundes1 < 300) && ($sekundes1 >= 240)) {
        ($minutes1 = $minutes + 4) && ($sekundes1 = $sekundes1 - 240);
    } elseif (($sekundes1 < 240) && ($sekundes1 >= 180)) {
        ($minutes1 = $minutes + 3) && ($sekundes1 = $sekundes1 - 180);
    } elseif (($sekundes1 < 180) && ($sekundes1 >= 120)) {
        ($minutes1 = $minutes + 2) && ($sekundes1 = $sekundes1 - 120);
    } elseif (($sekundes1 < 120) && ($sekundes1 >= 60)) {
        ($minutes1 = $minutes + 1) && ($sekundes1 = $sekundes1 - 60);
    }

    if ($minutes1 >= 60) {
        ($valandos1 = $valandos + 1) && ($minutes1 = $minutes1 - 60);
    }

    if ($valandos1 >= 24) {
        ($valandos1 = $valandos1 - 24);
    }

    if (($valandos1 < 10) && ($minutes1 < 10) && ($sekundes1 < 10)) {
        echo "0". $valandos1 . ":0" . $minutes1 . ":0" . $sekundes1;
    } elseif (($valandos1 < 10) && ($minutes1 < 10)) {
        echo "0". $valandos1 . ":0" . $minutes1 . ":" . $sekundes1;
    } elseif (($valandos1 < 10) && ($sekundes1 < 10)) {
        echo "0". $valandos1 . ":" . $minutes1 . ":0" . $sekundes1;
    } elseif (($minutes1 < 10) && ($sekundes1 < 10)) {
        echo $valandos1 . ":0" . $minutes1 . ":0" . $sekundes1;
    } elseif ($valandos1 < 10) {
        echo "0". $valandos1 . ":" . $minutes1 . ":" . $sekundes1;
    } elseif ($minutes1 < 10) {
        echo $valandos1 . ":0" . $minutes1 . ":" . $sekundes1;
    } elseif ($sekundes1 < 10) {
        echo $valandos1 . ":" . $minutes1 . ":0" . $sekundes1;
    } else {
        echo $valandos1 . ":" . $minutes1 . ":" . $sekundes1;
    }

    ?>
</body>
</html>