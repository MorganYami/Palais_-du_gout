<!DOCTYPE html>
<html>

<head>
    <?php
        include "./config.php";
    ?>
</head>

<body>

    <?php include "./navIndex.php"; ?>    

    <main>
        <h1>Bienvenue au Palais du goût!</h1>
        <div class="uk-section">
            <div class="uk-container">
                <p>
                    Alexander Wander aime découvrir de nouveaux plats exotiques, mais il aime encore plus les partager avec ses amis. Et pouquoi
                    se limiter à ses amis? D'autres personnes pourraient apprécier ces découvertes, voir vouloir les reproduire
                    eux-mêmes. Et quel meilleur outil que internet pour partager?
                    <br/> C'est ainsi que l'idée du Palais du goût est née: un site pour que tout le monde puisse découvrir et
                    partager des recettes de plats provenant du monde entier.
                </p>
            </div>
            <div class="uk-section">
                <div class="uk-container">
                    <h3>Les recettes fraiches!</h3>
                    <div class="uk-child-width-1-3@m" uk-grid>
                        <div>
                            <div class="uk-card uk-card-default uk-card-hover">
                                <div class="uk-card-media-top">
                                    <a href="./recettes/Asie/Vietnam/fichesVietnam/ficheNemsPorc.php">
                                        <img src="<?php echo $cheminImg; ?>i114653-nems-de-porc.jpeg" alt="">
                                    </a>
                                </div>
                                <div class="uk-card-body">
                                    <h3 class="uk-card-title">Nems de porc</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="uk-card uk-card-default uk-card-hover">
                                <div class="uk-card-media-top">
                                    <a href="./recettes/Asie/Corée/fichesCorée/ficheBibimbap.php">
                                        <img src="<?php echo $cheminImg; ?>i35694-bibimbap-assiette-coreenne-de-riz-legumes-et-viande-marinee.jpg"
                                            alt="">
                                    </a>
                                </div>
                                <div class="uk-card-body">
                                    <h3 class="uk-card-title">Bibimbap</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="uk-card uk-card-default uk-card-hover">
                                <div class="uk-card-media-top">
                                    <a href="./recettes/Asie/Japon/fichesJapon/ficheOyakodon.php">
                                        <img src="<?php echo $cheminImg; ?>i75518-oyakodon-bol-de-riz-et-poulet-aux-oeufs-japonais.jpg" alt="">
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

                <div class="uk-container">
                    <h3>Quelques commentaires de nos gourmets:</h3>
                    <article class="uk-comment">
                        <header class="uk-comment-header uk-grid-medium uk-flex-middle" uk-grid>
                            <div class="uk-width-expand">
                                <h4 id="autheur" class="uk-comment-title uk-margin-remove">
                                    Any Body
                                </h4>
                                <ul class="uk-comment-meta uk-subnav uk-subnav-divider uk-margin-remove-top">
                                    <li>
                                        date: <span id="date">31/12/2136</span>
                                    </li>
                                </ul>
                            </div>
                        </header>
                        <div class="uk-comment-body">
                            <p id="com">
                                Morbi feugiat rhoncus iaculis. Aliquam sed sem et lectus eleifend lobortis. Proin ac malesuada lorem, sit amet pellentesque
                                eros. Suspendisse potenti. Curabitur id ante sem. Pellentesque habitant morbi tristique senectus
                                et netus et malesuada fames ac turpis egestas. Pellentesque vehicula arcu quis quam molestie,
                                sit amet consequat velit accumsan. Donec nec dui nisi.
                            </p>
                        </div>
                        <a id="previous" href="#com" uk-slidenav-previous></a>
                        <a id="next" href="#com" uk-slidenav-next></a>
                    </article>
                </div>
            </div>
        </div>
    </main>

    <?php include "./footer.php"; ?>
<script src="<?php echo $cheminRoot;?>js/commentaireLoad.js"></script>
</body>

</html>