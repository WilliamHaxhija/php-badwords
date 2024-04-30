<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="form_print.php" method="GET" id="form1">
        <div>
            <label for="text">Paragrafo</label>
            <input type="text-area" id="text" name="text" required>
        </div>
        <div>
            <label for="word">Censura</label>
            <input type="text" id="word" name="word" required>
        </div>
        <button type="submit" form="form1" value="invia">Invia</button>
    </form>

</body>

</html>