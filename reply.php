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
    <title>reply</title>
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="container text-white text-center py-5">
        <div>
            <div class="fs-5">
                <?php echo $paragraph ?>
            </div>
            <h3 class="py-2">La lunghezza del paragrafo è: <?php echo strlen($paragraph) ?></h3>
        </div>
        <div class="py-5">
            <div class="fs-5">
                <?php echo $newParagraph ?>
            </div>
            <h3 class="py-2">La lunghezza del nuovo paragrafo è: <?php echo strlen($newParagraph) ?></h3>
        </div>
    </div>
</body>

</html>