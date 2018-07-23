<!DOCTYPE html>
<html>

<head>
    <?php
        include "../../../config.php";
    ?>
</head>

<body>
    <?php
        include "../../navRecettes.php";
    ?>

    <main>
        <h1>Japon</h1>
        <div class="uk-section">
            <div class="uk-container">
                <div class="uk-child-width-1-3@m" uk-grid>
                    <div>
                        <div class="uk-card uk-card-default uk-card-hover">
                            <div class="uk-card-media-top">
                                <a href="./fichesJapon/ficheOnigiri.php">
                                    <img src="<?php echo $cheminImg; ?>onigiri.jpg" alt="Des onigiri">
                                </a>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title">Onigiri</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-default uk-card-hover">
                            <div class="uk-card-media-top">
                                <a href="./fichesJapon/ficheTempura.php">
                                    <img src="<?php echo $cheminImg; ?>tempuras.jpg" alt="Des tempuras">
                                </a>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title">Tempuras</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-default uk-card-hover">
                            <div class="uk-card-media-top">
                                <a href="./fichesJapon/ficheOyakodon.php">
                                    <img src="<?php echo $cheminImg; ?>i75518-oyakodon-bol-de-riz-et-poulet-aux-oeufs-japonais.jpg" alt="Un bol d'oyakodon">
                                </a>
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title">Oyakodon</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include "../../../footer.php"; ?>

</body>

</html>