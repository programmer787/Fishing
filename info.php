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
        "szczupak" => array(
            "nazwa" => "Szczupak",
            "opis" => "Szczupak (Esox lucius) to duża słodkowodna ryba drapieżna, której ciało jest wydłużone, pokryte łuskami, z charakterystycznym wciągającym pyskiem. Może osiągnąć długość do około 1 metra i wagę nawet ponad 20 kilogramów. Szczupaki są bardzo agresywne i terytorialne. Żywią się głównie innymi rybami, płazami, drobnymi ssakami i ptakami wodnymi. Ciekawostką jest fakt, że szczupaki są zdolne do skoków na zdobycz nad powierzchnię wody.",
            "zdjecie" => "tlo/szczupak.jpg"
        ),

        "sandacz" => array(
            "nazwa" => "Sandacz",
            "opis" => "Sandacz (Sander lucioperca), inaczej zwany zębolą, to duża ryba słodkowodna, często spotykana w europejskich wodach. Może osiągnąć długość ponad 1 metra i ważyć nawet kilkanaście kilogramów. Sandacze mają wydłużone, walcowate ciało i zazwyczaj są ubarwione w odcieniach szaro-zielonych. Są agresywnymi drapieżnikami, żywiącymi się innymi rybami, skorupiakami i płazami. Ciekawostką jest fakt, że sandacze wydają dźwięki podczas tarła, które są słyszalne dla człowieka.",
            "zdjecie" => "tlo/sandacz.jpg"
        ),


        "okon" => array(
            "nazwa" => "Okon",
            "opis" => "Okoń (Perca fluviatilis) to popularna ryba słodkowodna, zamieszkująca jeziora, stawy i rzeki w Europie. Dorosłe osobniki osiągają długość około 25-30 centymetrów, choć czasami mogą być większe. Mają charakterystyczne, żółto-zielone pasy na bokach ciała. Okonie są rybami drapieżnymi i bardzo agresywnymi, polującymi na mniejsze ryby, skorupiaki i owady wodne. Ciekawostką jest fakt, że okonie zmieniają ubarwienie w zależności od środowiska, w którym przebywają, aby lepiej maskować się przed drapieżnikami.",
            "zdjecie" => "tlo/okon.jpg"
        ),


        "Sum" => array(
            "nazwa" => "Sum",
            "opis" => "Sum (Silurus glanis), zwany również sumem europejskim, to duża ryba słodkowodna o wydłużonym ciele i pokrytym licznymi drobnymi łuskami. Dorosłe osobniki mogą osiągnąć imponujące rozmiary, przekraczając 2 metry długości i ważąc ponad 100 kilogramów. Są rybami wszystkożernymi, żywiącymi się rybami, skorupiakami, mięczakami i nawet ptakami. Sumy są znane ze swojej siły i zdolności do walki, a także z charakterystycznych brodawek i wąsów na głowie.",
            "zdjecie" => "tlo/sum.jpg"
        ),


        "Jesiotr" => array(
            "nazwa" => "Jesiotr",
            "opis" => "Jesiotr to ryba słodkowodna z charakterystycznym, wydłużonym ciałem, bocznym grzebieniem i twardym pancerzem zamiast łusek. Jest jednym z najstarszych gatunków ryb na świecie. Jesiotry osiągają ogromne rozmiary, niektóre gatunki mogą przekraczać 5 metrów długości. Są rybami wszystkożernymi, żywiącymi się roślinami wodnymi, skorupiakami i małymi rybami. Ciekawostką jest fakt, że jaja jesiotra, zwane kawiarą, są cenione jako delikatesa kulinarna.",
            "zdjecie" => "tlo/jesiotr.jpg"
        ),


        "Bolen" => array(
            "nazwa" => "Boleń",
            "opis" => "Boleń (Aspius aspius) to słodkowodna ryba o wydłużonym kształcie ciała i lekko spłaszczonym grzbiecie. Dorosłe osobniki zazwyczaj mierzą od 30 do 60 centymetrów, ale niektóre mogą osiągać większe rozmiary. Bolenie mają szaro-brązowe ubarwienie z ciemnymi, poziomymi smugami na bokach. Są rybami drapieżnymi, żywiącymi się głównie owadami, skorupiakami i małymi rybami. Bolenie są uważane za ryby o dużej sile i zwinności, a także za wytrzymałych przeciwników podczas wędkowania.",
            "zdjecie" => "tlo/bolen.jpg"
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