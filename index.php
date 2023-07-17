<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="UTF-8">
    <title>Strona o rybach</title>
    <link rel="stylesheet" type="text/css" href="style.css">

    <style>
    .effect {
      position: absolute;
      width: 20px;
      height: 20px;
      border-radius: 50%;
      background-color: green;
      transition: transform 0.3s ease, opacity 0.5s ease;
    }
  </style>

</head>
<body>
    <h1><strong>WędkowanieAmatorskie.pl</h1>
    <p> Wybierz interesujący cię temat:</p>

    <script>
  document.addEventListener('click', function(event) {
    var x = event.clientX;
    var y = event.clientY;
    
    var effect = document.createElement('div');
    effect.classList.add('effect');
    effect.style.left = x + 'px';
    effect.style.top = y + 'px';
    
    document.body.appendChild(effect);
    
    setTimeout(function() {
      effect.style.transform = 'scale(2)';
      effect.style.opacity = '0';
    }, 10);
    
    setTimeout(function() {
      document.body.removeChild(effect);
    }, 500);
  });
</script>

    <nav>
  <ul class="menu">
    <li><a href="ryba.php">Gatunki Ryb</a></li>
    <li><a href="ciekawostki.php">Ciekawostki</a></li>
    <li><a href="sklep.php">Sklep</a></li>
    <li><a href="kontakt.php">Kontakt</a></li>
  </ul>
</nav>


</body>
</html>