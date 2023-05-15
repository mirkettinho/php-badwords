<?php
$testo = $_GET["testo"];
$parola = $_GET["parola"];
$censura = str_replace($parola, "***", $testo);

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
  <title>Dati ricevuti</title>
</head>

<body>

  <div>
    <h1>Testo da verificare</h1>
    <p><?php echo $testo ?></p>
    <p>Lunghezza testo: <?php echo strlen($testo) ?> </p>
  </div>

  <div>
    <h1>Testo censurato</h1>
    <p><?php echo $censura ?></p>
    <p>Lunghezza testo: <?php echo strlen($censura) ?> </p>
  </div>

  <form action="index.html">
    <button action="index.html">Censura altre parole</button>
  </form>

</body>

</html>