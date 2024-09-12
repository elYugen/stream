<?php 
require_once('function.php');
session_start();


if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    if (!empty($username) && !empty($password)) {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $dbh = dbconnect();

        $query = "INSERT INTO user (username, password, email) VALUES (:username, :password, :email)";
        $stmt = $dbh->prepare($query);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $hashed_password);
        $stmt->bindParam(':email', $email);

        if ($stmt->execute()) {
            $_SESSION['username'] = $username;
            header("Location: home.php");
            exit;
        } else {
            echo "erreur";
        }
    } else {
        echo "champ manquant";
    }
}
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
            <h1>Inscription</h1>
            <form action="" method="post" class="loginForm">
                <label>Pseudo</label>
                <input type="text" name="username" class="loginFormInput">
                <br />
                <label>Adresse Mail</label>
                <input type="email" name="email" class="loginFormInput">
                <br />
                <label>Mot de passe</label>
                <div class="passwordContainer">
                    <input type="password" name="password" class="loginFormInput" id="password">
                    <img src="./assets/eye.svg" alt="Filtre" id="view" class="filterIcon">
                </div>
                <br />
                <input type="submit" name="login" value="Me Connecter" class="loginFormButton">
                <div class="invite"><a href="./home.php?guest=true"><p>Continuer en tant qu'invité</p></a></div>
            </form>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>