<?php 
    require_once('function.php');
    require_once ('partials/session.php');
    
    $series = getAllSeries();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Streaming</title>
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <?php include('./template/header.php') ?>

    <div class="hello">
        <div class="helloYou">
            <div class="helloPicture">
                <img src="<?php echo $profilepicture ?>" alt="ProfilPicture">
            </div>
            <h3>Bonjour, <?php echo $user ?></h3>
        </div>
        <div class="helloNotif" id="helloNotif">
            <i class="bi bi-bell"></i>
        </div>
    </div>

    <div class="container">
        <div class="homeTitle">
            <h3>Reprendre la Lecture</h3>
        </div>

        <section class="homeWatching">
            <div class="homeWatchingCard">
                <div class="homeWatchingCardImage">
                    <img src="https://placehold.co/250x150" alt="ProfilPicture">
                </div>
                <div class="homeWatchingTitle">
                    <p>Titre</p>
                </div>
                <div class="homeWatchingRecap">
                    <p>Saison 1, Episode 4</p>
                </div>
            </div>
            <!-- INSERER AUTRE CARTE -->
            <div class="homeWatchingCard">
                <div class="homeWatchingCardImage">
                    <img src="https://placehold.co/250x150" alt="ProfilPicture">
                </div>
                <div class="homeWatchingTitle">
                    <p>Un morceaux</p>
                </div>
                <div class="homeWatchingRecap">
                    <p>Saison 4, Episode 4</p>
                </div>
            </div>
            <div class="homeWatchingCard">
                <div class="homeWatchingCardImage">
                    <img src="https://placehold.co/250x150" alt="ProfilPicture">
                </div>
                <div class="homeWatchingTitle">
                    <p>The Amazing Spooder-Man</p>
                </div>
                <div class="homeWatchingRecap">
                    <p>Saison 1, Episode 0</p>
                </div>
            </div>
        </section>

        <!-- TOP 10 -->
        <div class="homeTitle">
            <h3>Top 10 du mois</h3>
        </div>
        <section class="homeTopTen">
            <?php foreach($series as $serie) { ?>
            <div class="homeTopTenCard">
                <div class="homeTopTenCardImage">
                    <a href="view.php?id=<?php echo $serie['id'] ?>"><img src="<?php echo $serie['miniature'] ?>" alt="Top10"></a>
                </div>
                <div class="homeTopTenCardTitle">
                    <p><?php echo $serie['title'] ?></p>
                </div>
                <div class="homeTopTenCardGenre">
                    <p>Action</p>
                    <p>Shonen</p>
                </div>       
            </div>
            <?php } ?>
            <!-- AJOUTER AUTRE CARD -->
        </section>

        <!-- RECOMMANDER -->
        <div class="homeTitle">
            <h3>Recommandé</h3>
        </div>
        <section class="homeRecommanded">
            <div class="homeRecommandedCard">
                <div class="homeRecommandedCardImage">
                    <img src="https://placehold.co/150x200" alt="Recommanded">
                </div>
                <div class="homeRecommandedCardTitle">
                    <p>Homme Ciseaux</p>
                </div>
                <div class="homeRecommandedCardGenre">
                    <p>Action</p>
                    <p>Shoujo</p>
                </div>
                
            </div>
            <!-- AJOUTER AUTRE CARD -->
            <div class="homeRecommandedCard">
                <div class="homeRecommandedCardImage">
                    <img src="https://placehold.co/150x200" alt="Recommanded">
                </div>
                <div class="homeRecommandedCardTitle">
                    <p>Pocket Monster</p>
                </div>
                <div class="homeRecommandedCardGenre">
                    <p>Action</p>
                    <p>Shota</p>
                </div>
            </div>
            <div class="homeRecommandedCard">
                <div class="homeRecommandedCardImage">
                    <img src="https://placehold.co/150x200" alt="Recommanded">
                </div>
                <div class="homeRecommandedCardTitle">
                    <p>Cavillrine</p>
                </div>
                <div class="homeRecommandedCardGenre">
                    <p>Action</p>
                    <p>Shonen</p>
                </div>
            </div>
            <div class="homeRecommandedCard">
                <div class="homeRecommandedCardImage">
                    <img src="https://placehold.co/150x200" alt="Recommanded">
                </div>
                <div class="homeRecommandedCardTitle">
                    <p>Boule de Dragon Z</p>
                </div>
                <div class="homeRecommandedCardGenre">
                    <p>Action</p>
                    <p>Drama</p>
                </div>
            </div>
        </section>
    </div>

    <script src="script.js"></script>
</body>
</html>