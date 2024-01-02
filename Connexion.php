<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de connexion</title>
    <link rel="icon" href="images/logo.png" type="text/css">
    <link rel="stylesheet" href="Connexion.css">
</head>
<body>
    <section>
        <h1>Connexion</h1>
        <form action="Connexion.php" method="POST">  
            <label for="email">Adresse email</label>
            <input type="text" name="email">
            <label for="mdp">Mot de Passe</label>
            <input type="password" name="mdp">
            <input type="submit" value="Valider" name="boutton-valider">
        </form>
    </section> 
    <?php
    if(isset($_POST['email']) && isset($_POST['mdp'])) {
        if(!empty($_POST['email']) && !empty($_POST['mdp'])) {
            include("Fonction.php");
            connexion();
            $email = $_POST['email'];
            $mdp = $_POST['mdp'];

            $sql = "SELECT * FROM connexion WHERE email = '$email'";
            $reponse = $bdd->query($sql);
            
            if($reponse) {
                $donnee = $reponse->fetch();

                if ($donnee && $donnee['mdps'] == $mdp) {
                    header("Location: projet.php");
                    exit();
                } else {
                    echo "Email ou mot de passe invalide";
                }
            } else {
                echo "Erreur dans la requête SQL";
            }
        } else {
            echo "Veuillez remplir tous les champs";
        }
    }
    ?>
</body>
</html>
