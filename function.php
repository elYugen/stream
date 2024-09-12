<?php
    require_once('./config/config.php');

    function getAllSeries() {
        $dbh = dbconnect();
        $query = "SELECT * FROM allseries";
        $stmt = $dbh->prepare($query);
        $stmt->execute();
        $series = $stmt->fetchAll();
        return $series;

    }

    function getOneSerie($id) {
        $dbh = dbconnect();
        $query = "SELECT * FROM allseries WHERE id= :id";
        $stmt = $dbh->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $series = $stmt->fetch();
        return $series;

    }

    function getSerieGenreBySerieIdBecauseThisShitIsGoingToMakeMeCrazy($id) {
        $dbh = dbconnect();
        $query = "SELECT genre.genre_name FROM allseries_genre JOIN genre ON allseries_genre.genre_id = genre.id WHERE allseries_genre.serie_id = :id";
        $stmt = $dbh->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }

    function getAllSeasonOfThisFuckingSerieBySerieId($id) {
        $dbh = dbconnect();
        $query = "SELECT number FROM season WHERE serie_id = :id";
        $stmt = $dbh->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $seasons = $stmt->fetchAll();
        return $seasons;
    }

    function getAllEpisodesOfSerieBySerieId($id) {
        $dbh = dbconnect();
        $query = "SELECT episode.id, nom, vignette, season_id, season.number FROM episode JOIN season ON episode.season_id = season.id WHERE episode.serie_id = :id ORDER BY season_id;";
        $stmt = $dbh->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }

?>