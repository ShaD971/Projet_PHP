<!DOCTYPE html>
<html>
    <head>
        <title>Mini-tchat PHP </title>
        <meta charset="utf-8" />
    </head>
    <body>
        <?php include("entete.php");?>
         

       <?php
            // Connexion à la base de données
            try
            {
                 $bdd = new PDO('mysql:host=localhost;dbname=Projet_PHP;charset=utf8', 'root', '');
            }   
            catch(Exception $e)
            {
                die('Erreur : '.$e->getMessage());
            }   

            // Insertion du message à l'aide d'une requête préparée
            $req = $bdd->prepare('INSERT INTO mini-tchat (pseudo, message) VALUES(?, ?)');
            $req->execute(array($_POST['pseudo'], $_POST['message']));

            // Redirection du visiteur vers la page du minichat
            header('Location: acceuil.php');
        ?>

    <?php include("pied_de_page.php"); ?>

    </body>
</html>