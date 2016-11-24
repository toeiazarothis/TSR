  <section id="Information">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 col-md-offset-1 text-center">
          <h2>Liste des eleve</h2><br>
          <p>Cette liste regroupe les personne qui on fait une pre-inscritpion.</p><br>
          <div class="col-lg-4 col-md-offset-4 text-center">
            <select name="suprnom" class="form-control">
              <?php
              $listeNew = listeNouveauxEleves();
              foreach ($listeNew as $value) {
                echo
                "<option>".$value['nom_eleve']."</option>";
              }
              ?>
            </select><br>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="container">
      <div class="row">
        <div class="col-lg-10 col-md-offset-1 text-center">
          <h2>Liste des eleve</h2><br>
          <p>Cette liste regroupe les personne inscrite que vous pouvez supprimer.</p><br>
          <div class="col-md-4 col-md-offset-4 text-center">
            <form action="c_supr_chien.php" method="post">
              <select class="form-control" name="suprnom">
                <?php
                $supprimer = supprimerEleve();
                foreach ($variable as $value) {
                  echo "<option>".$value[]."</option>";
                }
                ?>
              </select>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
