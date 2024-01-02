<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="icon" href="images/logo.png" type="text/css">
    <link rel="stylesheet" href="formulaire.css">
</head>
<body>
    <section>
        <h1>Inscription</h1>
        <form action="Formulaire.php" method="POST">
        
                <label for="Name">Nom : </label>
               <input type="text" name="nom" id="nom" > <br>
        
                <label for="prenom"> prenom : </label>
                <input type="text" name="prenom" id="prenom"> <br>
      
                <label for="mail"> Adresse e-mail : </label>
                <input type="email" name="email" id="email"><br>
                <label for="pass"> mot de passe : </label>
               <input type="password" name="pass" id="pass">
                <input type="submit" name="submit" id="submit" value="S'inscrire" >
                <input type="button" name="reset" id="reset" value="Annuler" >
                <p> Vous avez deja un compte ? <a href="Connexion.php">Se connecter</a></p>
            </form>
            <?php
    if(isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['email']) and isset($_POST['pass']) ) 
     {    if(!empty($_POST['nom']) and !empty($_POST['prenom']) and !empty($_POST['email']) and !empty($_POST['pass']) ) 
        {
     include("Fonction.php");
    connexion();

    // Récupération des valeurs du formulaire (sous réserve qu'elles proviennent d'un formulaire)
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    // Création de la requête SQL avec des variables
    $sql = "INSERT INTO connexion (nom, prenom, email, mdps) VALUES ('$nom', '$prenom', '$email', '$pass')";

    // Exécution de la requête
    $bdd->exec($sql);
    header("Location:projet.php");
}
    else {echo "veuilley remplir la formulaire ";}
    }
?>

            
</section>
</body>
</html>