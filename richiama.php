<?php
//Per prima cosa, recupero i dati passati nella query string
//lettura veloce: https://it.wikipedia.org/wiki/Query_string
//esempio: http://localhost/pagina?chiave=valore&nome=luca&cognome=lambiase
$title = $_GET["title"];
$testo = $_GET["text"];
$censura = $_GET["censura"];
// $nienteanello = str_replace($testo, "anelli", "***");
//preparo la stringa in anticipo, così l'html resta più leggibile
// $nomecognome = $nome . " " . $cognome; 

//cosa fa ucfirst??
// $nomecognomecorretti = ucfirst($nome) . " " . ucfirst($cognome);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div>
        <h1><?php echo $title; ?></h1>
    
        <h3>Numero di caratteri del testo: <?php echo strlen($testo); ?></h3>
        <p><?php echo str_replace($censura, "***", $testo); ?></p>
        <h5>Numero di caratteri della censura: <?php echo strlen($censura); ?></h5>
    </div>
    
</body>
</html>