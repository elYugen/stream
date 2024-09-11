<?php 
require_once ('partials/session.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Streaming</title>

    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="favoris.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
<?php include('./template/header.php') ?>

    <div class="container">
        <div class="searchBar">
            <div class="inputWrapper">
                <i class="bi bi-search searchIcon"></i>
                <input type="text" placeholder="Rechercher...">
                <img src="filter.svg" alt="Filtre" id="filter">
            </div>
        </div>

        <div class="favorisTitle">
            <h3>Favoris</h3>
        </div>

        <div class="favorisContent">
            <div class="favorisContentCard">
                <div class="favorisContentCardImage">
                    <a href="view.php"><img src="https://placehold.co/200x200" alt="Favoris"></a>
                </div>
                <div class="favorisContentCardTitle">
                    <p>Homme Ciseaux</p>
                </div>    
            </div>
            <!-- INSERER AUTRE CARD -->
            <div class="favorisContentCard">
                <div class="favorisContentCardImage">
                    <a href="view.php"><img src="https://placehold.co/200x200" alt="Favoris"></a>
                </div>
                <div class="favorisContentCardTitle">
                    <p>Boule de Dragon Super</p>
                </div>    
            </div>
            <div class="favorisContentCard">
                <div class="favorisContentCardImage">
                    <a href="view.php"><img src="https://placehold.co/200x200" alt="Favoris"></a>
                </div>
                <div class="favorisContentCardTitle">
                    <p>Soupe R Man</p>
                </div>    
            </div>
            <div class="favorisContentCard">
                <div class="favorisContentCardImage">
                    <a href="view.php"><img src="https://placehold.co/200x200" alt="Favoris"></a>
                </div>
                <div class="favorisContentCardTitle">
                    <p>Papa de Luc</p>
                </div>    
            </div>
        </div>

        <!-- PLAYLIST -->
        <div class="favorisTitle">
            <h3>Playlist Personnel</h3>
        </div>

        <div class="favorisContent">
            <div class="favorisContentCard">
                <div class="favorisContentCardImage">
                    <a href="view.php"><img src="https://placehold.co/200x200" alt="Favoris"></a>
                </div>
                <div class="favorisContentCardTitle">
                    <p>Best Serie 2024</p>
                </div>    
            </div>
            <!-- INSERER AUTRE CARD -->
            <div class="favorisContentCard">
                <div class="favorisContentCardImage">
                    <a href="view.php"><img src="https://placehold.co/200x200" alt="Favoris"></a>
                </div>
                <div class="favorisContentCardTitle">
                    <p>Meilleur OST</p>
                </div>    
            </div>
        </div>
    </div>
</body>
</html>