<?php 

require_once ('function.php'); 

session_start();

$user = $_SESSION["username"];

if(isset($_GET['id']) && !empty($_GET['id'])){
    $id = $_GET['id'];
    $serie = getOneSerie($id);
    $serieGenre = getSerieGenreByGenreId($id);
    // var_dump($serie);
}else {
    header('location:404.php');
}


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Streaming</title>

    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="view.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <?php include('./template/header.php'); ?>

    <div class="player">
    <div class="playerImage">
    <?php if (empty($serie['trailer'])): ?>
        <img src="https://placehold.co/425x250" alt="Player">
        <div class="play" id="playButton">
            <i class="bi bi-play-fill"></i>
        </div>
    <?php else: ?>
        <iframe width="100%" height="250" src="https://www.youtube.com/embed/<?php echo $serie['trailer'] ?>?si=6h0cXVWSEuAMYQvZ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    <?php endif; ?>
</div>
</div>

    <div class="container">
        <div class="about">
            <h2><?php echo $serie['title'] ?></h2>
            <div class="genre">
            <?php echo "<p>" . $serieGenre['genre_name'] . "</p>"; ?>
            </div>

            <div class="description">
                <h3>A Propos</h3>
                <p><?php echo $serie['about'] ?></p>
            </div>

            <div class="episode">
            <div class="episodeList">
                <h3>S1 - Série</h3>
                <div class="episodeListInfo">
                    <img src="https://placehold.co/200x110" alt="ProfilPicture">
                    <div class="episodeListInfoEpisode">
                        <h4 id="serieTitle">Titre</h4>
                        <p>E1 - Série Super Génial</p>
                    </div>
                </div>
            </div>
            <!-- INSERER AUTRE EPISODE -->
            <div class="episodeList">
                <div class="episodeListInfo">
                    <img src="https://placehold.co/200x110" alt="ProfilPicture">
                    <div class="episodeListInfoEpisode">
                        <h4 id="serieTitle">Titre</h4>
                        <p>E2 - Il a pas fait ça ?</p>
                    </div>
                </div>
            </div>
            <div class="episodeList">
                <div class="episodeListInfo">
                    <img src="https://placehold.co/200x110" alt="ProfilPicture">
                    <div class="episodeListInfoEpisode">
                        <h4 id="serieTitle">Titre</h4>
                        <p>E3 - J'y crois pas !!</p>
                    </div>
                </div>
            </div>
            <div class="episodeList">
                <div class="episodeListInfo">
                    <img src="https://placehold.co/200x110" alt="ProfilPicture">
                    <div class="episodeListInfoEpisode">
                        <h4 id="serieTitle">Titre</h4>
                        <p>E4 - Bon bah salut</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>