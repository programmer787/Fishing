<!DOCTYPE html>
<html>
<head>
    <title>Informacje o rybach</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
<?php
    // Tablica z informacjami o rybach
    $ryby = array(
        "karas" => array(
            "nazwa" => "Karaś",
            "opis" => "Karaś (Carassius carassius) to popularna ryba słodkowodna, powszechnie występująca w jeziorach, stawach i wolno płynących rzekach. Jest rybą stadną o ubarwieniu zwykle złocisto-brązowym. Karasie są rybami roślinożernymi, żywiącymi się głównie roślinami wodnymi, glonami i planktonem. Ciekawostką jest to, że karasie potrafią przeżyć w warunkach o niskim stężeniu tlenu w wodzie, dzięki zdolności do pobierania powietrza z atmosfery.",
            "zdjecie" => "tlo/karas.jpg"
        ),

        "karp" => array(
            "nazwa" => "Karp",
            "opis" => "Karp (Cyprinus carpio) to popularna i hodowana ryba słodkowodna, której naturalne siedliska to jeziora, rzeki i stawy. Karpie są duże, osiągając długość nawet ponad 1 metra i wagę przekraczającą 20 kilogramów. Są rybami wszystkożernymi, żywiącymi się roślinami, glonami, owadami, małymi skorupiakami i detrytusem. Ciekawostką jest to, że karpie potrafią rosnąć bardzo szybko, a w niektórych krajach hodowane są specjalnie jako ryby konsumpcyjne.",
            "zdjecie" => "tlo/karp.jpg"
        ),


        "leszcz" => array(
            "nazwa" => "Leszcz",
            "opis" => "Leszcz (Abramis brama) to ryba słodkowodna, często spotykana w jeziorach i wolno płynących rzekach. Ma wydłużone ciało pokryte srebrzystymi łuskami i charakterystycznym głębokim przodem. Leszcze są rybami stadnymi, które preferują dno wody i żywią się głównie owadami, skorupiakami, mięczakami i roślinami wodnymi. Ciekawostką jest to, że leszcze są bardzo popularne w wędkarstwie i cenione ze względu na swoją walkę i zręczność podczas połowu.",
            "zdjecie" => "tlo/leszcz.jpg"
        ),


        "lin" => array(
            "nazwa" => "Lin",
            "opis" => "Lin (Tinca tinca) to słodkowodna ryba, której naturalne siedliska to stawy, jeziora i wolno płynące rzeki. Ma wydłużone ciało pokryte dużymi łuskami i charakterystycznym dużym pyskiem. Liny są rybami dennymi, żywiącymi się glonami, owadami, skorupiakami i detrytusem. Ciekawostką jest to, że liny są rybami niezwykle wytrzymałymi i mogą przetrwać w warunkach o niskim stężeniu tlenu w wodzie, dzięki zdolności do pobierania powietrza z atmosfery przez specjalny narząd - labirynt.",
            "zdjecie" => "tlo/lin.jpg"
        ),


        "ploc" => array(
            "nazwa" => "Płóć",
            "opis" => "Płoć (Rutilus rutilus) to popularna ryba słodkowodna występująca w jeziorach, rzekach i stawach w Europie. Ma spłaszczone bocznie ciało i srebrzyste łuski. Płoć jest rybą stadną, która preferuje płytkie wody. Jest rybą wszystkożerną, żywiącą się owadami, planktonem, roślinami wodnymi i detrytusem. Ciekawostką jest to, że płoć jest szybka i zwinna, co czyni ją atrakcyjnym obiektem dla wędkarzy.",
            "zdjecie" => "tlo/ploc.jpg"
        ),


        "ukleja" => array(
            "nazwa" => "Ukleja",
            "opis" => "Uklejka (Alburnus alburnus) to niewielka słodkowodna ryba z rodziny karpiowatych, występująca w jeziorach, rzekach i strumieniach Europy. Ma wydłużone ciało, srebrzyste ubarwienie i przezroczyste płetwy. Uklejki są stadnymi rybami, które żywią się głównie planktonem, owadami i skorupiakami. Ciekawostką jest to, że uklejki są znane z ich zwyczaju gromadzenia się w duże grupy i wykonywania synchronicznych ruchów, co tworzy spektakularne widowisko.",
            "zdjecie" => "tlo/ukleja.jpg"
        ),




        
        // Dodaj inne ryby tutaj
    );

    // Sprawdzenie, czy zostało kliknięte hiperłącze
    if(isset($_GET['ryba'])){
        $wybranaRyba = $_GET['ryba'];
        
        // Sprawdzenie, czy wybrana ryba istnieje w tablicy
        if(isset($ryby[$wybranaRyba])){
            $nazwa = $ryby[$wybranaRyba]['nazwa'];
            $opis = $ryby[$wybranaRyba]['opis'];
            $zdjecie = $ryby[$wybranaRyba]['zdjecie'];
            
            // Wyświetlanie informacji o wybranej rybie w bloku HTML z klasą "ryba"
            echo "<div class='ryba'>";
            echo "<h2 class='nazwa'>$nazwa</h2>";
            echo "<p class='opis'>$opis</p>";
            echo "<img src='$zdjecie' alt='$nazwa' />";
            echo "</div>";
            
            // Zakończ wykonywanie kodu
            exit();
        }
    }

    // Wyświetlanie kodu CSS dla każdej ryby w bloku HTML z klasą "ryba"
    foreach($ryby as $klucz => $wartosc){
        $nazwa = $wartosc['nazwa'];
        $opis = $wartosc['opis'];
        $zdjecie = $wartosc['zdjecie'];
        
        echo "<div class='ryba'>";
        echo "<h2 class='nazwa'>$nazwa</h2>";
        echo "<p class='opis'>$opis</p>";
        echo "<img src='$zdjecie' alt='$nazwa' />";
        echo "</div>";
    }
    ?>
</body>
</html>