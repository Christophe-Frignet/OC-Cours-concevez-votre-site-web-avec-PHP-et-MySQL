<section class="bloc center padding">

<?php //var_dump($billet['titre']); ?>

<h3>
<?php echo htmlspecialchars($billet['titre']); ?>
     - Le 
     <?php echo $billet['date_creation_fr'] ?>
</h3>
<p>
    <?php echo($billet['contenu']);?>
    <br />
    <br />
    <a href="commentaires.php?id_billet=<?php echo($billet['id']);?>">Afficher l'article et ses commentaires >></a>

    <?php
    //Si l'accès admin est autorisé on affiche les options de l'administrateur
    if (isset($admin_access) AND $admin_access == true)
    {
    ?>

    <ul>
        <li><a href="modifier-article.php?id_billet=<?php echo($billet['id']);?>">Modifier l'article</a></li>
        <li><a href="">Supprimer l'article</a></li>
    </ul>    

    <?php
    }
    ?>
</p>
</section>
