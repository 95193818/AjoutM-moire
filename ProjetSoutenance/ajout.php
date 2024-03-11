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
                <a href="about.php" style="text-decoration: none; color: gray; margin-right: 20px;">ARTICLES</a>
                <a href="shop.php" style="text-decoration: none; color: gray; margin-right: 20px;">MÉMORES</a>
                <a href="contact.php" style="text-decoration: none; color: gray; margin-right: 20px;">NOUS-CONTACTEZ</a>
            </div>
        </div><br><br><br>
        <div class="men">
            <h3>AJOUTS MÉMOIRES</h3>
            <div class="inscri text-center">
                <form action="traitements/traitementajout.php" method="post" style="width: 500px; margin:auto;" class="text-center">
                    <div>
                        <label for="titredumemoire" style="margin-right: 373px;">Titre du mémoire </label><br>
                        <input class="form-control" type="text" id="titredumemoire" name="titredumemoire">
                    </div><br>
                    <div>
                        <label for="resumer" style="margin-right: 500px;">Résumé</label><br>
                        <input class="form-control" type="text" id="resumer" name="resumer">
                    </div><br>
                    <div>
                        <label for="motcles" style="margin-right: 430px;">Mots-clés</label><br>
                        <input class="form-control" type="text" id="motcles" name="motcles">
                    </div><br>
                    <div>
                        <label for="datedesoutenance" style="margin-right: 350px;">Date de soutenance </label><br>
                        <input class="form-control" type="date" id="datedesoutenance" name="datedesoutenance">
                    </div><br>
                    <div>
                        <label for="nomauteur" style="margin-right: 380px;">Nom de l'auteur</label><br>
                        <input class="form-control" type="text" id="nomauteur" name="nomauteur">
                    </div><br>
                    <div>
                        <label for="numeroetudiant" style="margin-right: 360px;">Numéro d'étudiant</label><br>
                        <input class="form-control" type="text" id="numeroetudiant" name="numeroetudiant">
                    </div><br>
                    <div>
                        <label for="faculter" style="margin-right: 500px;">Faculté</label><br>
                        <input class="form-control" type="text" id="faculter" name="faculter">
                    </div><br>
                    <div>
                        <label for="filere" style="margin-right: 360px;">Filière/Programme</label><br>
                        <input class="form-control"  type="text" id="filere" name="filere">
                    </div><br>
                    <div>
                        <label for="anneesoutenance" style="margin-right: 340px;">Année de soutenance</label><br>
                        <input class="form-control" type="text" id="anneesoutenance" name="anneesoutenance">
                    </div><br>
                    <div>
                        <label for="languememoire" style="margin-right: 355px;">Langue du mémoire</label><br>
                        <input  class="form-control" type="text" id="languememoire" name="languememoire">
                    </div><br>
                    <div class="mb-3">
                        <label for="fichiermemoire" class="form-label" style="margin-right: 355px;">Fichier du mémoire </label>
                        <input class="form-control" type="file" id="fichiermemoire" name="fichiermemoire">
                    </div>

                    <div>
                        <input class="btn btn-secondary" style="background-color: gray; border-radius:9px" type="submit"  name="titredumemoire">
                    </div><br>
                </form>
            </div>
        </div>
    </section>
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>