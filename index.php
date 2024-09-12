<?php 
require_once('function.php');
session_start();

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (!empty($username) && !empty($password)) {
        $dbh = dbconnect();

        $query = "SELECT * FROM user WHERE username = :username";
        $stmt = $dbh->prepare($query);
        $stmt->bindParam(':username', $username, PDO::PARAM_STR);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        // $user = getUserData();
        if ($user) {
            if (password_verify($password, $user['password'])) {
                $_SESSION['username'] = $user['username'];
                $_SESSION['email'] = $user['email'];
                $_SESSION['profilepicture'] = $user['profilepicture'];

                header("Location: home.php");
                exit();
            } else {
                echo "mdp incorrect";
            }
        } else {
            echo "utilisateur non trouvé";
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
            <img src="./assets/wishflix.png" alt="Logo">
            <form action="index.php" method="post" class="loginForm">
                <label>Pseudo :</label>
                <input type="text" name="username" class="loginFormInput">
                <br />
                <label>Mot de passe :</label>
                <div class="passwordContainer">
                    <input type="password" name="password" class="loginFormInput" id="password">
                    <img src="./assets/eye.svg" alt="Filtre" id="view" class="filterIcon">
                </div>
                <br />
                <input type="submit" name="login" value="Me Connecter" class="loginFormButton">
                <a href="register.php"><input type="button" value="Inscription" class="loginFormButton"></a>
                <div class="invite"><a href="./home.php?guest=true"><p>Continuer en tant qu'invité</p></a></div>
            </form>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>