<header>
    <div id="banniere">
        <img src="<?php echo $cheminImg;?>palais_du_gout.png" alt="logo palait du goût">
    </div>
    <nav class="uk-navbar-container" uk-navbar>
        <div class="nav-overlay uk-navbar-left">
            <ul class="uk-navbar-nav">
                <li>
                    <a href="./index.php?accueil">Accueil</a>
                </li>
                <li>
                    <a href="./index.php?continents">Recettes</a>
                </li>
                <li>
                    <a href="./index.php?livre_dor">Livre d'or</a>
                </li>
                <li>
                    <a href="./index.php?contacts">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
</header>

<?php
    if (isset($_GET["accueil"])){
        $page = "accueil.php";
    } 
    elseif (isset($_GET["continents"])){
        $page = "continents.php";
    }
    elseif (isset($_GET["livre_dor"])){
        $page = "contacts/livre_dor.php";
    }
    elseif (isset($_GET["contacts"])){
        $page = "contacts/contacts.php";
    }

    elseif (isset($_GET["recettesAsie"])){
        $page = "Asie/recettesAsie.php";
    }
    elseif (isset($_GET["pageJapon"])){
        $page = "Asie/Japon/pageJapon.php";
    }
    elseif (isset($_GET["ficheOnigiri"])){
        $page = "Asie/Japon/fichesJapon/ficheOnigiri.php";
    }
    elseif (isset($_GET["ficheOyakodon"])){
        $page = "Asie/Japon/fichesJapon/ficheOyakodon.php";
    }
    elseif (isset($_GET["ficheTempura"])){
        $page = "Asie/Japon/fichesJapon/ficheTempura.php";
    }

    elseif (isset($_GET["ficheBibimbap"])){
        $page = "Asie/Corée/fichesCorée/ficheBibimbap.php";
    }

    elseif (isset($_GET["ficheOnigiri"])){
        $page = "Asie/Vietnam/fichesVietnam/ficheNemsPorcs.php";
    }
    
    else 
       /* $page = page 404 */;
?>