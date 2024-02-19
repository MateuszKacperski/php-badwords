<?php
// recupero i dati 
$paragraph = $_GET["paragraph"];
$censured = $_GET["censured"];
//censuro il paragrafo 
$changed_p = str_replace($censured,"***", $paragraph);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>pragrafo orgiginale</h3>
    <p>il paragrafo originale e <strong><?echo $paragraph;?><br>
<strong>e lungo </strong><?echo strlen($paragraph) ?></strong></p>
<hr>
<h3>pragrafo censurato</h3>
    <p>il paragrafo censurato e <strong><?echo $changed_p;?><br>
<strong>e lungo </strong><?echo strlen($changed_p); ?></strong></p>

</body>
</html>