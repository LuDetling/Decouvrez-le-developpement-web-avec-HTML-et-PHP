 <?php include "header.php";
    include "oeuvres.php";
    $id = $_GET['id'];
    foreach ($oeuvres as $oeuvre) {
        if ($oeuvre['id'] == $id) {
            echo '
            <main>
                <article id="detail-oeuvre">
                    <div id="img-oeuvre">
                        <img src="' . $oeuvre['srcImg'] . '" alt="' . $oeuvre['title'] . '">
                    </div>
                    <div id="contenu-oeuvre">
                        <h1>' . $oeuvre['title'] . '</h1>
                        <p class="description">' . $oeuvre['descrpition'] . '</p>
                        <p class="description-complete">
                        ' . $oeuvre['completeDescription'] . '
                        </p>
                    </div>
                </article>
            </main>';
        }
    }

    include "footer.php"; ?>