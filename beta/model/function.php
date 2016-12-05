<?php
include('db.php');
$connexion = new PDO('mysql:host=localhost;dbname=autoecoletsr', UTILISATEUR, PASS);

function listeNouveauxEleves(){
  $listeNew = $connexion->query('SELECT nom_eleve FROM eleve GROUP BY nom_eleve ASC');
  $result = $listeNew->fetchALL();
  return $result;
}

function ajoutEleve(){
    $ajout = $connexion->query("INSERT INTO eleve(`sexe_eleve`, `nom_eleve`, `prenom_eleve`, `jour_naissance`, `mois_naissance`, `annee_naissance`, `lieu_naissance`, `adresse`, `codepostal`, `ville`, `telephone1`, `telephone2`, `mail`) VALUES (
      '$_POST['sexe']',
      '$_POST['nom']',
      '$_POST['prenom']',
      '$_POST['jour_naissance']',
      '$_POST['mois_naissance']',
      '$_POST['annee_naissance']',
      '$_POST['lieu_naissance']',
      '$_POST['adresse']',
      '$_POST['ccodepostal']',
      '$_POST['ville']',
      '$_POST['telephone1']',
      '$_POST['telephone2']',
      '$_POST['mail']'");
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
