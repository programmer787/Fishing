<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <title>Akcesoria wędkarskie</title>
  <link rel="stylesheet" type="text/css" href="style2.css">
  <style>
    table {
      width: 100%;
      border-collapse: collapse;
    }
    th, td {
      padding: 10px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }
    th {
      background-color: #f2f2f2;
    }
  </style>
</head>
<body>
  <h1>Sklep</h1>

  <table>
    <thead>
      <tr>
        <th>Nazwa akcesorium</th>
        <th>Cena</th>
      </tr>
    </thead>
    <tbody>
      <?php
      // Tablica z danymi akcesoriów wędkarskich
      $akcesoria = array(
        array("Wędka", 150.00),
        array("Kołowrotek", 120.00),
        array("Przynęta", 10.50),
        array("Łódka wędkarska", 2500.00),
        array("Kamizelka z kołowrotkiem", 180.00),
        array("Plecak wędkarski", 70.00),
        array("Podbierak", 40.00),
        array("Nożyk wędkarski", 15.00),
        array("Torba na przynęty", 25.00),
        array("Chemia wędkarska", 12.50)
      );

      // Wyświetlanie danych akcesoriów w tabeli
      foreach ($akcesoria as $akcesorium) {
        echo "<tr>";
        echo "<td>" . $akcesorium[0] . "</td>";
        echo "<td>" . $akcesorium[1] . " zł</td>";
        echo "</tr>";
      }
      ?>
    </tbody>
  </table>
  <p><strong>Powrót do strony głównej:</strong></p>
  <p><a href="index.php">Strona główna</a></p>



</body>
</html>