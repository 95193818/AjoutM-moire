<?php

error_reporting(E_ALL);
ini_set("display_errors",1);
// CONNEXION A LA BASE DE DONNEES
$servername = 'localhost';
$username = 'root';
$password = '';
  try {
    $bdd = new PDO ("mysql:host=$servername;dbname=projetsoutenance",$username,$password);
    $bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  } catch (Exception $e) {
    echo 'ERREUR :'.$e->getMessage();
  }

  if (isset($_POST['ok'])) {
    // ICI ON RECUPERE LES VALEURS DES CHAMPS DU FORMULAIRE
    $titredumemoire = ($_POST['titredumemoire']);
    $resumer = ($_POST['resumer']);
    $motcles = ($_POST['motcles']);
    $datedesoutenance = ($_POST['datedesoutenance']);
    $nomauteur = ($_POST['nomauteur']);
    $numeroetudiant = ($_POST['numeroetudiant']);
    $faculter = ($_POST['faculter']);
    $filere = ($_POST['filere']);
    $anneesoutenance = ($_POST['anneesoutenance']);
    $languememoire = ($_POST['languememoire']);
    $fichiermemoire = ($_FILES['fichiermemoire']);
  
    if(isset($titredumemoire, $resumer, $motcles, $datedesoutenance, $nomauteur, $numeroetudiant, $faculter, $filere, $anneesoutenance, $languememoire, $fichiermemoire) AND !empty($_POST['titredumemoire'])){
  
      $reqData = $bdd->prepare('SELECT count(*) as count FROM memoires WHERE email = ?');
      $reqData->execute(array($email));
      $resultat = $reqData->fetch();
  
      if ($resultat['count'] > 0) {
          echo  'E-mail existe déjà !'; 
        }else{
          // SI l'EMAIL n'exite pas dans la base de données on fait un contrôle 
          // pour savoir si le mot de passe fait 8 caractères
  
          if (strlen($password) >= 8) {
                  // Enregistrer les informations dans la base de données
                    $req = $bdd->prepare("INSERT INTO memoires(titredumemoire, resumer, motcles, datedesoutenance, nomauteur, numeroetudiant, faculter, filere, anneesoutenance, languememoire, fichiermemoire) VALUES (?,?,?,?,?,?,?,?,?,?,?)");
                    $req->execute(array($titredumemoire, $resumer, $motcles, $datedesoutenance, $nomauteur, $numeroetudiant, $faculter, $filere, $anneesoutenance, $languememoire, $fichiermemoire));
                  
                   // Afficher un message de succès
                    echo "<p>Votre mémoire a été soumis avec succès.</p>";

                  } else {

                // Afficher le formulaire
                echo "<p>Veuillez remplir le formulaire pour soumettre votre mémoire.</p>";

                    }
                  }
                }else {
                echo 'Veillez remplir tous les champs !';
                }
  }

  

     /* // Définir les variables
      $titredumemoire = htmlspecialchars($_POST['titredumemoire']);
      $resumer = htmlspecialchars($_POST['resumer']);
      $motcles = htmlspecialchars($_POST['motcles']);
      $datedesoutenance = htmlspecialchars($_POST['datedesoutenance']);
      $nomauteur = ($_POST['nomauteur']);
      $numeroetudiant = ($_POST['numeroetudiant']);
      $faculter = ($_POST['faculter']);
      $filere = ($_POST['filere']);
      $anneesoutenance = ($_POST['anneesoutenance']);
      $languememoire = ($_POST['languememoire']);
      $fichiermemoire = ($_FILES['fichiermemoire']);

    // Vérifier si le formulaire a été soumis  
      if (!empty($titredumemoire) && !empty($resumer) && !empty($motcles) && !empty($datedesoutenance) && !empty($nomauteur) && !empty($numeroetudiant) && !empty($faculter) && !empty($filere) && !empty($anneesoutenance) && !empty($languememoire) && !empty($fichiermemoire)) {
  

      // Vérifier si le fichier est un PDF
      if ($fichiermemoire['type'] != 'application/pdf') {
          echo "<p>Le fichier doit être un PDF.</p>";
          exit;
      }

      // Définir le nom du fichier
      $nom_fichier = uniqid() . '.pdf';

      // Déplacer le fichier vers le serveur
      move_uploaded_file($fichiermemoire['tmp_name'], 'memoires/' . $nom_fichier);

      // Enregistrer les informations dans la base de données
      $req = $bdd->prepare("INSERT INTO memoires(titredumemoire, resumer, motcles, datedesoutenance, nomauteur, numeroetudiant, faculter, filere, anneesoutenance, languememoire, fichiermemoire) VALUES (?,?,?,?,?,?,?,?,?,?,?)");
      $req->execute(array($titredumemoire, $resumer, $motcles, $datedesoutenance, $nomauteur, $numeroetudiant, $faculter, $filere, $anneesoutenance, $languememoire, $fichiermemoire));
      
      // Afficher un message de succès
      echo "<p>Votre mémoire a été soumis avec succès.</p>";

    } else {

      // Afficher le formulaire
      echo "<p>Veuillez remplir le formulaire pour soumettre votre mémoire.</p>";

    }*/



?>