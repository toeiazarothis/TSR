<?php
include('id.php');
$connexion = new PDO('mysql:host=localhost;dbname=autoecoletsr', UTILISATEUR, PASS);

function listeNouveauxEleves(){
  $listeNew = $connexion->query('SELECT nom_eleve FROM eleve GROUP BY nom_eleve ASC');
  $result = $listeNew->fetchALL();
  return $result;
}

function ajoutEleve(){
    $ajout = $connexion->query("INSERT INTO eleve('nom_eleve, prenom_eleve, sexe_eleve, age_eleve, adresse') VALUES ('".$_POST['nom']."','"$_POST['prenom']"','".$_POST['sexe']."','".$_POST['age']."''"$_POST['adresse']"');");
    echo  "Votre profil a bien etait rajouter a notre systeme! <br>";
  }

function deplacerEleve(){
  $modification = $connexion->query("UPDATE eleve SET nom_eleve =\"".$_POST[]"")
  echo "La pre-inscritpion a bien etait deplacer dans les eleves de l'etablisement";
}
function supprimerEleve(){
  $supprimer =$connexion->query("DELETE FROM eleve WHERE nom_eleve =\"".$_POST['suprnom']."\"");
  echo "L'eleve est bien supprimer du systeme";
}
?>
