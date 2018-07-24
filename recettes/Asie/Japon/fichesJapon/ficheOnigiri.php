<!DOCTYPE html>
<html>

<head>
    <?php
        include "../../../../config.php";
    ?>
</head>

<body>
    <?php
        include "../../../navRecettes.php";
    ?>

    <main>
        <h1>Onigiri</h1>
        <div class="uk-section">
            <div class="uk-container centre">
                <p>
                    Pour 6 personnes, 30 minutes de préparation, 40 minutes de cuisson (poisson).
                </p>
                <div class="uk-panel">
                    <img class="uk-align-center uk-margin-remove-adjacent" data-src="<?php echo $cheminImg; ?>onigiri.jpg" width="305" alt="Des Onigiri"
                        uk-img>
                    <h4>Ingrédients: </h4>
                    <p>
                        2 riz , préparé à la façon japonaise (recherchez la préparation façon Gohan)</br>
                        1 prune séchée, débarrassée de son noyau et écrasée)</br>
                        Du filet de saumon (bien salé et grillé au four, émiettez-le ensuite)</br>
                        1.5 feuille de nori (coupée en 4 dans la longueur)</br>
                        Du sel</br>
                        Du Takuan (radis blanc séché et mariné, on en trouve dans les épiceries japonaises)
                    </p>
                </div>
                <h4>Préparation</h4>
                <ul class="uk-list uk-list-divider">
                    <li>1: Il faut faire griller le poisson au four ou sur du feu : utilisez une grille pour cette opération.</li>
                    <li>2: Préparez tous les ingrédients sur la table : Nori sur une grande assiette qui va accueillir les Onigiri;
                        saumon grillé et émietté; prune ecrasée; un bol d'eau ; riz dans un grand saladier; sel.</li>
                    <li>3: Mouillez bien vos deux mains et mettez généreusement du sel sur les deux mains.</li>
                    <li>4: Prenez du riz sur une main (mains bien remplie) et mettez un morceau de saumon au milieu du riz</li>
                    <li>5: Recouvrez avec du riz d'une quantité égale et pressez-le avec l'autre main, de manière à former le
                        sommet d'un triangle</li>
                    <li>6: Retournez l'ensemble et continuez à faire les 2 autres sommets du triangle.</li>
                    <li>7: Aplatissez les 2 faces et mettez la feuille de Nori au centre d'un coté du triangle afin d'entourer
                        la boule.</li>
                    <li>8: Recommencez avec la prune séchée.</li>
                    <li>9: Dégustez!</li>
                </ul>
                <p>Recette proposé par:
                    <a href="https://www.marmiton.org/recettes/recette_onigiri-japon_29656.aspx" target=_blanc>HeadQuaker</a>
                </p>
            </div>
        </div>
    </main>
    <?php include "../../../../footer.php"; ?>

</body>

</html>