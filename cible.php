<!DOCTYPE html>
<html>
    <head>
        <title>Tests PHP URL </title>
        <meta charset="utf-8" />
    </head>
    <body>
        <?php include("entete.php");?>
         <?php include("menus.php");?>

            <div id="corps">
        <h1>Mon  site en PHP</h1>
        
        <p>
            Bienvenue sur mon super site !<br />
        </p>
       <p>Bonjour !</p>

    <p>Je sais comment tu t'appelles, hé hé. Tu t'appelles <?php echo $_POST['prenom']; ?> !</p>
    <p>ton choix est <?php echo $_POST['choix'];?></p>
    <p>Si tu veux changer de prénom, <a href="acceuil.php">clique ici</a> pour revenir à la page formulaire.php.</p>
       
    </div>

    <?php include("pied_de_page.php"); ?>

    </body>
</html>