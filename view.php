<?php 

require_once ('function.php'); 

require_once ('partials/session.php');

if(isset($_GET['id']) && !empty($_GET['id'])){
    $id = $_GET['id'];
    $serie = getOneSerie($id);
    $serieGenre = getSerieGenreBySerieIdBecauseThisShitIsGoingToMakeMeCrazy($id);
    $serieSeason = getAllSeasonOfThisFuckingSerieBySerieId($id);
    $serieEpisode = getAllEpisodesOfSerieBySerieId($id);
    // var_dump($serie);
    // var_dump($serieGenre);
    // var_dump($serieEpisode);
}else {
    header('location:404.php');
}

$seasons = array();
foreach ($serieEpisode as $episode) {
    $seasonId = $episode['season_id'];
    $seasonNumber = $episode['number'];


    if (!isset($seasons[$seasonId])) {
        $seasons[$seasonId] = array(
            'season_number' => $seasonNumber,
            'episodes' => array()
        );
    }
    $seasons[$seasonId]['episodes'][] = $episode;
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
                <?php foreach ($serieGenre as $allGenre) { ?>
                    <?php echo "<p>" . $allGenre['genre_name'] . "</p>"; ?>
                <?php } ?>
            </div>
        </div>
        <div class="description">
            <h3>A Propos</h3>
            <p><?php echo $serie['about'] ?></p>
        </div>

        <div class="episode">
        <?php foreach ($seasons as $seasonId => $seasonData) { ?>
        <h3><?php echo $seasonData['season_number'] ?></h3>
        <?php foreach ($seasonData['episodes'] as $episode) { ?>
        <div class="episodeListInfo">
            <img src="<?php echo $episode['vignette'] ?>" style="width:200px; height:110px;" alt="Episode Thumbnail">
            <div class="episodeListInfoEpisode">
                <?php echo "<h4 id='serieTitle'>" . strtoupper($serie['title']) . "</h4>" ?>
                <?php echo "<p>" . $episode['nom'] . "</p>" ?>
            </div>
        </div>
        <?php } ?>
        <?php } ?>

        </div>
        
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>