<?php
    $text = $_GET['text'];
    $textToPrint = $text . ' | La lunghezza di questo pragrafo è: ' . strlen($text);
    $word = $_GET['word'];
    $textCensored = str_replace($word, '***', $text);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <p><?php echo $textToPrint; ?></p>
        <span><?php echo $textCensored . ' | La lunghezza del paragrafo censurato è: ' . strlen($textCensored); ?></span>
    </div>
</body>
</html>