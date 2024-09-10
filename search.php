<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Streaming</title>
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="search.css">
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <?php include('./template/header.php') ?>

    <div class="container">
        <div class="searchBar">
            <div class="inputWrapper">
                <i class="bi bi-search searchIcon"></i>
                <input type="text" placeholder="Rechercher...">
                <img src="filter.svg" alt="Filtre" id="filter">
            </div>
        </div>

        <!-- A CACHER QUAND LA RECHERCHE EST ACTIVE -->
         <!-- SINON AFFICHER TOUT LES RESULTATS -->
          <section id="recommanded">
            <div class="title">
                <h3>Recommandation</h3>
            </div>
            <div class="serieList">
                <div class="card">
                    <div class="cardBanner">
                        <img src="https://placehold.co/380x200" alt="ProfilPicture">
                    </div>
                    <div class="cardTitle">
                        <p>Titre</p>
                        <i class="bi bi-three-dots"></i>
                    </div>
                    <div class="cardGenre">
                        <p>Action</p>
                        <p>Shonen</p>
                        <p>Shoujo</p>
                    </div>
                </div>
                <!-- AJOUTER AUTRE CARTE -->
                <div class="card">
                    <div class="cardBanner">
                        <img src="https://placehold.co/380x200" alt="ProfilPicture">
                    </div>
                    <div class="cardTitle">
                        <p>Titre</p>
                        <i class="bi bi-three-dots"></i>
                    </div>
                    <div class="cardGenre">
                        <p>Action</p>
                        <p>Shonen</p>
                        <p>Shoujo</p>
                    </div>
                </div>
                <div class="card">
                    <div class="cardBanner">
                        <img src="https://placehold.co/380x200" alt="ProfilPicture">
                    </div>
                    <div class="cardTitle">
                        <p>Titre</p>
                        <i class="bi bi-three-dots"></i>
                    </div>
                    <div class="cardGenre">
                        <p>Action</p>
                        <p>Shonen</p>
                        <p>Shoujo</p>
                    </div>
                </div>
            </div>

          </section>

    </div>


    <script src="script.js"></script>
</body>
</html>