<?php
session_start();

if (isset($_GET['guest']) && $_GET['guest'] == 'true') {
    $user = $_SESSION["username"] = 'Invité';
} else {
    $user = $_SESSION["username"];
}
?>