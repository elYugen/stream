<?php
session_start();

if (isset($_GET['guest']) && $_GET['guest'] == 'true') {
    $user = $_SESSION["username"] = 'Invité';
    $email = $_SESSION["email"] = 'invite@wishflix.fr';
    $profilepicture = $_SESSION["profilepicture"] = './pictures/user-profile.png';
} else {
    $user = $_SESSION["username"];
    $email = $_SESSION["email"];
    $profilepicture = $_SESSION["profilepicture"];
}
?>