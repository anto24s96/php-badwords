<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bad_word</title>
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Hide Bad Word</h1>
            </div>
            <div class="col-12">
                <form action="reply.php" method="GET">
                    <div class="row">
                        <div class="col-6">
                            <label for="control-label">Inserisci il testo</label>
                            <textarea class="form-control" aria-label="With textarea" rows="15" cols="50" name="paragraph"></textarea>
                        </div>
                    </div>
                    <div class="row py-5">
                        <div class="col-3">
                            <label for="control-label">Bad Word:</label>
                            <input type="text" class="form-control" placeholder="Inserisci la parola" name="badword">
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-success">HIDE WORD</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>