<?php
//Per prima cosa, recupero i dati passati nella query string
//lettura veloce: https://it.wikipedia.org/wiki/Query_string
//esempio: http://localhost/pagina?chiave=valore&nome=luca&cognome=lambiase
$title = $_GET["title"];
$testo = $_GET["text"];
$censura = $get["censura"]
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
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>

    <h1><?php echo $title; ?></h1>

    <h3> <?php echo strlen($testo); ?></h3>
    <p><?php echo str_replace("Anelli","***",$testo); ?></p>
    
</body>
</html>