<!DOCTYPE html>
<html>

<head>
    <?php
        include "./config/config.php";
    ?>
</head>

<body>

    <?php include "./parts/nav.php"; ?>    

    <main>
        <?php include $cheminPages.$page;?>
    </main>

    <?php include "./parts/footer.php"; ?>
<script src= "<?php echo $cheminAssets;?>js/commentaireLoad.js"></script>
</body>

</html>