<body>
    <?php include "header.php" ?>
    <main>
        <div id="liste-oeuvres">
            <?php
            include "oeuvres.php";
            for ($i = 0; $i < count($oeuvres); $i++) {
                echo '
                <article class="oeuvre">
                <a href="oeuvre.php?id=' . $oeuvres[$i]['id'] . '">
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