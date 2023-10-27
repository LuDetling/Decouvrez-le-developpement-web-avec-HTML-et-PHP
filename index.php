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
    <?php include "header.php" ?>
    <main>
        <div id="liste-oeuvres">
            <?php
            include "oeuvres.php";
            for ($i = 0; $i < count($oeuvres); $i++) {
                echo '
                <article class="oeuvre">
                <a href="oeuvre-' . $oeuvres[$i]['id'] . '.php">
                    <img src="' . $oeuvres[$i]['srcImg'] . '" alt="' . $oeuvres[$i]['title'] . '">
                    <h2>' . $oeuvres[$i]['title'] . '</h2>
                    <p class="description">' . $oeuvres[$i]['description'] . '</p>
                </a>
            </article>
            ';
            }
            ?>
        </div>
    </main>
    <?php
    include "footer.php";
    ?>
</body>

</html>