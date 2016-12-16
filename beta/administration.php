<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta content="text/html; charset=utf-8" http-equiv="content-type">
    <?php include("model/function.php") ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Site d'information sur Pokemon Go pour la communauté des joueurs de Troyes">
    <meta name="author" content="ToeiAzarothis">
    <link rel="shortcut icon" href="img/volant.png">
    <!-- Balise OpenGraph -->
    <meta property="og:title" content="TSR votre auto-ecole Troyenne">
    <meta property="og:type" content="website">
    <meta property="og:description" content="L’auto-école troyes securite routiere vous invite à patienter sur ce decompte .">
    <meta property="op:markup_version" content="v0.1">
    <meta property="og:locale" content="fr_FR">
    <meta property="og:url" content="patrick.hol.es/TSR">
    <meta property="og:image" content="http://mikomi.hol.es/img/opengraph.jpg">
    <!-- Fin Balise OG -->
    <title>Auto-ecole TSR</title>
    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet"type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet"type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic"rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700"rel="stylesheet" type="text/css">
    <!-- Theme CSS -->
    <link href="css/agency.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
  </head>
  <body id="page-top" class="index">
    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll"> <button type="button" class="navbar-toggle"
            data-toggle="collapse" data-target="#navbar-collapse-1"> <span class="sr-only">Toggle
              navigation</span> Menu <i class="fa fa-bars"></i> </button> <a
            class="navbar-brand page-scroll" href="#page-top">TSR</a> </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li class="hidden"> </li>
            <li><a href="index.php" class="text-center">Accueil</a></li>
            <li><a href="#formulaire" class="page-scroll text-center"><i class="fa fa-arrow-down"></i></span></a></li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
    </nav>

    <section id="Information">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 col-md-offset-1 text-center">
          <h2>Liste des pre-inscrit</h2><br>
          <div class="col-md-12 text-center">
            <table class="table table-striped table-hover table-responsive">
              <thead>
                <tr>
                  <th>Nom</th>
                  <th>Prenom</th>
                  <th>Année de naissance</th>
                  <th>Adresse</th>
                  <th>Telephone Principal</th>
                  <th>Telephone Secondaire</th>
                </tr>
              </thead>
              <?php echo listeNouveauxEleves()?>
            </table>
              <!-- <tr>
                <td>ICI CE TROUVERA LE NOM DE L'ELEVE DANS LA BDD</td>
                <td>ICI CE TROUVERA LE PRENOM DE L'ELEVE DANS LA BDD</td>
                <td>ICI CE TROUVERA L'ANNEE DE NAISSANCE DE L'ELEVE DANS LA BDD</td>
              </tr>
            </table> -->
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Footer -->
  <?php include("footer.php");?>
  <!-- Fin footer -->
  <!-- jQuery -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <!-- Bootstrap Core JavaScript -->
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <!-- Plugin JavaScript -->
  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
  <!-- Contact Form JavaScript -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>
  <!-- Theme JavaScript -->
  <script src="js/agency.min.js"></script>
</body>
</html>
