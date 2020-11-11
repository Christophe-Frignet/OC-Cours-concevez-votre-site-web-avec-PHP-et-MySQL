<?php

//on récupère les données
$id_billet = $_POST['id_billet'];
$auteur = $_POST['auteur'];
$commentaire = $_POST['commentaire'];
$date_commentaire = $_POST['date_commentaire'];

//On se connecte à la bdd
include('connecter-bdd.php');

//On ajoute le nouveau commentaire dans la BDD
$req = $bdd->prepare('INSERT INTO commentaires (id_billet, auteur, commentaire, date_commentaire) VALUES ( :id_billet, :auteur, :commentaire, :date_commentaire)');

$req->execute(array(
	'id_billet' => $id_billet,
	'auteur' => $auteur,
	'commentaire' => $commentaire,
	'date_commentaire' => $date_commentaire
    ));

//on retourne sur la page du billet
header('Location: article.php?id_billet=' . $id_billet);

?>