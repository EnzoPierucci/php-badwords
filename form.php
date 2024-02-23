<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.tailwindcss.com" rel="stylesheet">
    <title>php-badwords</title>
</head>
<body class="bg-gray-100 flex justify-center items-center min-h-screen">
    <div class="w-full max-w-md p-5 bg-white rounded-lg shadow-lg">
        <h2 class="text-center text-2xl font-bold mb-6">Inserisci un paragrafo e la parola da censurare</h2>
        <form action="censor.php" method="post">
            <div class="mb-4">
                <label for="paragraph" class="block text-gray-700 text-sm font-bold mb-2">Paragrafo:</label>
                <textarea id="paragraph" name="paragraph" rows="4" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
            </div>
            <div class="mb-4">
                <label for="badword" class="block text-gray-700 text-sm font-bold mb-2">Parola da censurare:</label>
                <input id="badword" type="text" name="badword" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <button type="submit" class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Invia</button>
        </form>
    </div>

    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>

</body>
</html>
