<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.tailwindcss.com" rel="stylesheet">
    <title>php-badwords</title>
</head>
<body>
<h2>Inserisci un paragrafo e la parola da censurare</h2>
    <form action="censor.php" method="post">
        <div>
            <label for="paragraph">Paragrafo:</label>
            <textarea id="paragraph" name="paragraph"></textarea>
        </div>
        <div>
            <label for="badword">Parola da censurare:</label>
            <input id="badword" type="text" name="badword">
        </div>
        <button type="submit">Invia</button>
    </form>
</body>
</html>