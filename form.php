<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <form action="richiama.php" method="get">
        <h1>GENERATORE</h1>
        <input type="text" name="title" placeholder="Scrivi qui il tuo titolo...">
        <input type="text" name="text" placeholder="Scrivi qui il tuo testo...">
        <input type="text" name="censura" placeholder="Scegli se censurare una parola...">

        <button type="submit">Invia</button>
    </form>
</body>

</html>