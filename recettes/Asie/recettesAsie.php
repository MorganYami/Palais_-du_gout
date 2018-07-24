<!DOCTYPE html>
<html>

<head>
    <?php
        include "../../config.php";
    ?>
</head>

<body>
    <?php
        include "../navRecettes.php";
    ?>

    <main>
        <h1>Asie</h1>
        <div class="uk-section">
            <div class="uk-container centre">
                <ul uk-accordion="multiple: true">
                    <li>
                        <a class="uk-accordion-title" href="#">Chine</a>
                        <div class="uk-accordion-content">
                            <p>Recette 1</p>
                            <p>Recette 2</p>
                        </div>
                    </li>
                    <li>
                        <a class="uk-accordion-title" href="#">Corée</a>
                        <div class="uk-accordion-content">
                            <p>
                                <a href="./Corée/fichesCorée/ficheBibimbap.php">Bibimbap</a>
                            </p>
                            <p>Recette 2</p>
                        </div>
                    </li>
                    <li>
                        <a class="uk-accordion-title" href="#">Japon</a>
                        <div class="uk-accordion-content">
                            <p>
                                <a href="./Japon/fichesJapon/ficheOyakodon.php">Oyakodon</a>
                            </p>
                            <p>
                                <a href="./Japon/fichesJapon/ficheTempura.php">Tempuras</a>
                            </p>
                            <p>
                                <a href="./Japon/fichesJapon/ficheOnigiri.php">Onigiri</a>
                            </p>
                        </div>
                    </li>
                    <li>
                        <a class="uk-accordion-title" href="#">Vietnam</a>
                        <div class="uk-accordion-content">
                            <p>
                                <a href="./Vietnam/fichesVietnam/ficheNemsPorc.php">Nems de porc</a>
                            </p>
                            <p>Recette 2</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </main>    
    <?php include "../../footer.php"; ?>


</body>

</html>