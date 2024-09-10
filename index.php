<?php 
    require_once('function.php');
    session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Streaming</title>
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="./assets/login.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <div class="container">
        <div class="login">
            <h1>Connexion</h1>
            <form action="index.php" method="post" class="loginForm">
                <label>Pseudo</label>
                <input type="text" name="username">
                <br />
                <label>Mot de passe</label>
                <input type="password" name="password">
                <br />
                <input type="submit" name="login" value="Me Connecter" class="loginFormButton">
                <input type="button" value="Inscription" class="loginFormButton">
                <div class="invite"><a href="./home.php"><p>Continuer en tant qu'invité</p></a></div>
            </form>
        </div>
    </div>
    <?php
    if(isset($_POST['login'])) {
        if(!empty($_POST["username"]) && !empty($_POST["password"])) {
            $_SESSION["username"] = $_POST["username"];
            $_SESSION["password"] = $_POST["password"];
            header("Location: home.php");
        } else {
            echo "champ manquant";
        }
    }
    ?>
</body>
</html>