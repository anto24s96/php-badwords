<?php
$paragraph = $_GET["paragraph"];
$badWord = $_GET["badword"];

$newParagraph = str_replace($badWord, "***", $paragraph);

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
        <?php echo $paragraph ?>
        <h3>La lunghezza del paragrafo è: <?php echo strlen($paragraph) ?></h3>
    </div>
    <div>
        <?php echo $newParagraph ?>
        <h3>La lunghezza del nuovo paragrafo è: <?php echo strlen($newParagraph) ?></h3>
    </div>
</body>

</html>