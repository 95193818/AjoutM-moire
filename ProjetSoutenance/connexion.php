<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="ins">
        <div class="menu">
            <strong style="text-decoration: none; color: gray; margin-right:400px">ETU FAABA</strong>
            <a href="index.php" style="text-decoration: none; color: gray; margin-right: 20px;">ACCUEIL</a>
            <a href="about.php" style="text-decoration: none; color: gray; margin-right: 20px;">ARTICLE</a>
            <a href="shop.php" style="text-decoration: none; color: gray; margin-right: 20px;">MÉMOIRES</a>
            <a href="contact.php" style="text-decoration: none; color: gray; margin-right: 20px;">NOUS-CONTACTEZ</a>
        </div><br><br><br>
        <h3>CONNEXION</h3>
        <div>
            <form action="traitements/traitementconnexion.php" method="post" style="width: 500px; margin:auto;" class="text-center">
                <div>
                    <label for="email" style="margin-right: 500px;">Email</label><br>
                    <input class="form-control" type="text" id="email" name="email">
                </div><br>
                <div>
                    <label for="passworde" style="margin-right: 400px;">Mot de passe</label><br>
                    <input class="form-control" type="text" id="passworde" name="passworde">
                </div><br>
                <div class="enregistrer">
                  <button class="btn btn-secondary" style="background-color: gray; color:black; border-radius:9px"> Se connecter</button>
                </div>
                </form>
        </div><br>
        
    </section>
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>