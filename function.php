<?php
    require_once('config.php');

    function getAllSeries() {
        $dbh = dbconnect();
        $query = "SELECT * FROM allseries";
        $stmt = $dbh->query($query);
        $series = $stmt->fetchAll();
        return $series;

    }

    function getOneSerie($id) {
        $dbh = dbconnect();
        $query = "SELECT * FROM allseries WHERE id=$id";
        $stmt = $dbh->query($query);
        $series = $stmt->fetch();
        return $series;

    }

    function getSerieGenreByGenreId($id) {
        $dbh = dbconnect();
        $query = "SELECT genre_id FROM allseries_genre JOIN genre ON allseries_genre.genre_id = genre.id WHERE allseries_genre.serie_id = :id";
        $stmt = $dbh->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetch();
        return $result;
    }
    
?>