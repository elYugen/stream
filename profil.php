<?php 
    require_once('function.php');
    require_once ('partials/session.php');

    $user = $_SESSION["username"];
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Streaming</title>
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="profil.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <?php include('./template/header.php') ?>
    
    
    <div class="profile">
        <div class="profileYou">
            <div class="profilePicture">
                <img src="picture.png" alt="ProfilPicture">
            </div>
            <h3><?php echo $user ?></h3>
            <h4>monmail@mail.com</h4>
        </div>
        <div class="profileNotif" id="profileNotif">
            <i class="bi bi-pencil"></i>
        </div>
    </div>

    <div class="containerProfil">
        <h3>Ma Collection</h3>
        <div class="watchingCollection">
            <div class="watchingCollectionCard">
                <div class="watchingCollectionCardImage">
                    <img src="https://placehold.co/200x200" alt="ProfilPicture">
                </div>
            </div>
            <!-- INSERER D'AUTRE CARTE -->
            <div class="watchingCollectionCard">
                <div class="watchingCollectionCardImage">
                    <img src="https://placehold.co/200x200" alt="ProfilPicture">
                </div>
            </div>
            <div class="watchingCollectionCard">
                <div class="watchingCollectionCardImage">
                    <img src="https://placehold.co/200x200" alt="ProfilPicture">
                </div>
            </div>
            <div class="watchingCollectionCard">
                <div class="watchingCollectionCardImage">
                    <img src="https://placehold.co/200x200" alt="ProfilPicture">
                </div>
            </div>
        </div>

        <div class="options">
            <div class="optionsSettings">
                <p>Paramètres</p>
                <p>></p>
            </div>
        </div>

        <form action="index.php" method="post" class="logout">
            <input type="submit" value="Deconnexion">
        </form>
        <?php
        if(isset($_POST["logout"])) {
            session_destroy();
            header("Location: index.php");
        } 
        ?>
    </div>
</body>
</html>