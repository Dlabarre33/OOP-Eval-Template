<h1>Page d'accueil</h1>


<h3>Listes des joueurs</h3>



<ul>
    <?php
    while ($players = $resultat->fetch()) {
        echo "<li>" . $players['nickname'] . "</li>";
    }
    ?>
</ul>


<h3>Liste des jeu disponibles</h3>


<h3>Liste des matchs</h3>