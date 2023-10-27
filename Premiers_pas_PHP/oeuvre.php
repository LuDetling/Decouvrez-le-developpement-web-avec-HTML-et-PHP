<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>The ArtBox</title>
</head>

<body>
    <?php include "header.php";
    include "oeuvres.php";
    $id = $_GET['id'] - 1;
    echo '
    <main>
        <article id="detail-oeuvre">
            <div id="img-oeuvre">
                <img src="' . $oeuvres[$id]['srcImg'] . '" alt="' . $oeuvres[$id]['title'] . '">
            </div>
            <div id="contenu-oeuvre">
                <h1>' . $oeuvres[$id]['title'] . '</h1>
                <p class="description">' . $oeuvres[$id]['descrpition'] . '</p>
                <p class="description-complete">
                ' . $oeuvres[$id]['completeDescription'] . '
                </p>
            </div>
        </article>
    </main>';
    include "footer.php"; ?>
</body>

</html>