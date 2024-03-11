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
        <div>
            <div class="menu">
                <strong style="text-decoration: none; color: gray; margin-right:400px">ETU FAABA</strong>
                <a href="index.php" style="text-decoration: none; color: gray; margin-right: 20px;">ACCUEIL</a>
                <a href="" style="text-decoration: none; color: gray; margin-right: 20px;">ARTICLES</a>
                <a href="" style="text-decoration: none; color: gray; margin-right: 20px;">MÉMORES</a>
                <a href="" style="text-decoration: none; color: gray; margin-right: 20px;">NOUS-CONTACTEZ</a>
            </div>
        </div><br><br><br>
        <div class="men">
            <h3>INSCRIPTION</h3><br><br>
            <div class="inscri">
                <form action="traitements/traitementinscription.php" method="post" style="width: 500px; margin:auto;" class="text-center">
                    <div>
                        <label for="nom" style="margin-right: 500px;">Nom</label><br>
                        <input class="form-control" type="text" id="nom" name="nom">
                    </div><br>
                    <div>
                        <label for="prenom" style="margin-right: 500px;">Prenom</label><br>
                        <input class="form-control" type="text" id="prenom" name="prenom">
                    </div><br>
                    <div>
                        <label for="pseudo" style="margin-right: 500px;">Pseudo</label><br>
                        <input class="form-control" type="text" id="pseudo" name="pseudo">
                    </div><br>
                    <div>
                        <label for="email" style="margin-right: 500px;">Email</label><br>
                        <input class="form-control" type="email" id="email" name="email">
                    </div><br>
                    <div>
                        <label for="contact" style="margin-right: 500px;">Contact</label><br>
                        <input class="form-control" type="text" id="contact" name="contact">
                    </div><br>
                    <div>
                        <label for="pass" style="margin-right: 400px;">Mot de passe</label><br>
                        <input class="form-control" type="password" id="passworde" name="passworde">
                    </div><br>
                    <div>
                        <input style="background-color: gray; border-radius:9px" type="submit" value="S'inscrir" name="ok">
                    </div><br>
                    <div>
                        <p>Vous aviez déjà un compte?</p>
                    </div><br>
                    <div>
                        <a class="btn btn-secondary" href="connexion.php" style="background-color: gray; border-radius:30px; color: black; text-decoration: none">Connexion</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>