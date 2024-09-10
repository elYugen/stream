<div class="navbar">
    <ul class="navbarItem">
        <?php
        function isActive($page) {
            return (basename($_SERVER['PHP_SELF']) == $page) ? 'navbarLinkActive' : '';
        }
        ?>
        <li class="navbarLink <?php echo isActive('home.php'); ?>">
            <a href="home.php"><i class="bi bi-house"></i> Accueil</a>
        </li>
        <li class="navbarLink <?php echo isActive('search.php'); ?>">
            <a href="search.php"><i class="bi bi-search"></i> Recherche</a>
        </li>
        <li class="navbarLink <?php echo isActive('favoris.php'); ?>">
            <a href="favoris.php"><i class="bi bi-bookmark"></i> Favoris</a>
        </li>
        <!-- <li class="navbarLink"><a href=""><i class="bi bi-book"></i> Manga</a></li> -->
        <li class="navbarLink <?php echo isActive('profil.php'); ?>">
            <a href="profil.php"><i class="bi bi-person"></i> Profil</a>
        </li>
    </ul>
</div>