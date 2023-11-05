 <?php include "header.php";
    include "oeuvres.php";
    $id = $_GET['id'];

    $oeuvre = null;

    foreach ($oeuvres as $o) {
        if ($o['id'] === intval($id)) {
            $oeuvre = $o;
            break;
        }
    }

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
    include "footer.php"; ?>