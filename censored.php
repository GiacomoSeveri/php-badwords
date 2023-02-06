<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad-Words</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
<?php
$text = $_GET['text'];
$badword = $_GET['badword'];

$censored_word = str_replace($badword, '***', $text);
?>

<div>
    <h1>Testo Originale</h1>
    <p><?php echo $text?></p>
    <span>Lunghezza frase = <?php echo strlen($text)?></span>
</div>

<hr>

<div>
    <h1>Testo Censurato</h1>
    <p><?php echo $censored_word?></p>
    <span>Lunghezza frase = <?php echo strlen($censored_word)?></span>
</div>
<hr>
</body>
</html>
