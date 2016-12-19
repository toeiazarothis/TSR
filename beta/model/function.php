<?php
include('db.php');

function listeNouveauxEleves(){
  $connexion = connectionDB();
  $texte = '';
  $listeNew = $connexion->query('SELECT * FROM `eleve`');
  while ($result = $listeNew->fetch()) {
    $texte .=
    '<tr>
      <td>'.$result['nom_eleve'].'</td>
      <td>'.$result['prenom_eleve'].'</td>
      <td>'.$result['annee_naissance'].'</td>
      <td>'.$result['adresse'].'</td>
      <td>0'.$result['telephone1'].'</td>
      <td>0'.$result['telephone2'].'</td>
    </tr><br>';}
  return $texte;
}

function ajoutEleve (){
  $connexion = connectionDB();

  $ajout = $connexion->exec('INSERT INTO `eleve`
    (`sexe_eleve`, `nom_eleve`, `prenom_eleve`, `jour_naissance`, `mois_naissance`, `annee_naissance`, `lieu_naissance`, `adresse`, `codepostal`, `ville`, `telephone1`, `telephone2`, `mail`)
    VALUES ("'.$_POST["sexe_eleve"].'",
            "'.$_POST["nom_eleve"].'",
            "'.$_POST["prenom_eleve"].'",
            "'.$_POST["jour_naissance"].'",
            "'.$_POST["mois_naissance"].'",
            "'.$_POST["annee_naissance"].'",
            "'.$_POST["lieu_naissance"].'",
            "'.$_POST["adresse"].'",
            "'.$_POST["codepostal"].'",
            "'.$_POST["ville"].'",
            "'.$_POST["telephone1"].'",
            "'.$_POST["telephone2"].'",
            "'.$_POST["mail"].'")');

  if ($ajout == FALSE){
        exit('erreur');//echec envoie
	}

    return  '<!-- Inscription est document -->
    <section id="documents">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3 text-center">
          <h3>Votre profil a bien etait rajouter a notre systeme!</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-md-8 col-md-offset2">
            <h3>Il vous sera demander de nous fournir les documents ci dessous pour finaliser votre inscrition.</h3>
          </div>
        </div>
        <br>

        <div class="row">
          <div class="col-md-4 col-xs-6 text-center"> <span></span>
            <h3>Photo</h3>
            <p>5 photographies aux normes passeport.</p>
          </div>
          <div class="col-md-4 col-xs-6 text-center"> <span></span>
            <h3>Enveloppes</h3>
            <p>10 timbres affranchie 20g <br>
              4 enveloppes format a4</p>
          </div>
          <div class="col-md-4 col-xs-12 text-center"> <span></span>
            <h3>Photocopie</h3>
            <p> Feuille de recensement. <br>
              Journée d\'appel à la défense. <br>
              ASSR 2. <br>
              Carte d\'identité ou carte de séjour. <br>
            </p>
          </div>
        </div>
      </div>
    </section>';
}

function deplacerEleve(){
  $connexion = connectionDB();

  $modification = $connexion->query('UPDATE `eleve` SET `nom_eleve` = '.$_POST["moveEleve"].'');

  echo "La pre-inscritpion a bien etait deplacer dans les eleves de l'etablisement";
}
function supprimerEleve(){
  $connexion = connectionDB();

  $supprimer =$connexion->query('DELETE FROM `eleve` WHERE `nom_eleve` = '.$_POST["delEleve"].'');

  echo "L'eleve est bien supprimer du systeme";
}
?>
