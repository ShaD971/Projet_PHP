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
        <p>Bonjour <?php
if (isset($_GET['prenom']) AND isset($_GET['nom'])) // On a le nom et le prénom
{
  echo 'Bonjour ' . $_GET['prenom'] . ' ' . $_GET['nom'] . ' !';
}
else // Il manque des paramètres, on avertit le visiteur
{
  echo 'Il faut renseigner un nom et un prénom !';
}
?></p>
       
    </div>

    <?php include("pied_de_page.php"); ?>

    </body>
</html>